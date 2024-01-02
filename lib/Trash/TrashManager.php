<?php
/**
 * @copyright Copyright (c) 2018 Robin Appelman <robin@icewind.nl>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\GroupFolders\Trash;

use OCP\DB\QueryBuilder\IQueryBuilder;
use OCP\IDBConnection;

class TrashManager {
	public function __construct(
		private IDBConnection $connection,
	) {
		$this->connection = $connection;
	}

	/**
	 * @param int[] $folderIds
	 * @return array
	 */
	public function listTrashForFolders(array $folderIds): array {
		$query = $this->connection->getQueryBuilder();
		$query->select(['trash_id', 'name', 'deleted_time', 'original_location', 'folder_id', 'file_id'])
			->from('group_folders_trash')
			->orderBy('deleted_time')
			->where($query->expr()->in('folder_id', $query->createNamedParameter($folderIds, IQueryBuilder::PARAM_INT_ARRAY)));
		return $query->executeQuery()->fetchAll();
	}

	public function addTrashItem(int $folderId, string $name, int $deletedTime, string $originalLocation, int $fileId): void {
		$query = $this->connection->getQueryBuilder();
		$query->insert('group_folders_trash')
			->values([
				'folder_id' => $query->createNamedParameter($folderId, IQueryBuilder::PARAM_INT),
				'name' => $query->createNamedParameter($name),
				'deleted_time' => $query->createNamedParameter($deletedTime, IQueryBuilder::PARAM_INT),
				'original_location' => $query->createNamedParameter($originalLocation),
				'file_id' => $query->createNamedParameter($fileId, IQueryBuilder::PARAM_INT)
			]);
		$query->executeStatement();
	}

	public function getTrashItemByFileId(int $fileId): ?array {
		$query = $this->connection->getQueryBuilder();
		$query->select(['trash_id', 'name', 'deleted_time', 'original_location', 'folder_id'])
			->from('group_folders_trash')
			->where($query->expr()->eq('file_id', $query->createNamedParameter($fileId, IQueryBuilder::PARAM_INT)));
		return $query->executeQuery()->fetch() ?: null;
	}

	public function removeItem(int $folderId, string $name, int $deletedTime): void {
		$query = $this->connection->getQueryBuilder();
		$query->delete('group_folders_trash')
			->where($query->expr()->eq('folder_id', $query->createNamedParameter($folderId, IQueryBuilder::PARAM_INT)))
			->andWhere($query->expr()->eq('name', $query->createNamedParameter($name)))
			->andWhere($query->expr()->eq('deleted_time', $query->createNamedParameter($deletedTime, IQueryBuilder::PARAM_INT)));
		$query->executeStatement();
	}

	public function emptyTrashbin(int $folderId): void {
		$query = $this->connection->getQueryBuilder();
		$query->delete('group_folders_trash')
			->where($query->expr()->eq('folder_id', $query->createNamedParameter($folderId, IQueryBuilder::PARAM_INT)));
		$query->executeStatement();
	}

	public function updateTrashedChildren(int $fromFolderId, int $toFolderId, string $fromLocation, string $toLocation): void {
		// Update deep children
		$query = $this->connection->getQueryBuilder();
		$fun = $query->func();
		$sourceLength = mb_strlen($fromLocation);
		$newPathFunction = $fun->concat(
			$query->createNamedParameter($toLocation),
			$fun->substring('original_location', $query->createNamedParameter($sourceLength + 1, IQueryBuilder::PARAM_INT))// +1 for the leading slash
		);
		$query->update('group_folders_trash')
			->set('folder_id', $query->createNamedParameter($toFolderId, IQueryBuilder::PARAM_INT))
			->set('original_location', $newPathFunction)
			->where($query->expr()->eq('folder_id', $query->createNamedParameter($fromFolderId, IQueryBuilder::PARAM_INT)))
			->andWhere($query->expr()->like('original_location', $query->createNamedParameter($this->connection->escapeLikeParameter($fromLocation) . '/%')));
		$query->executeStatement();

		// Update direct children
		$query = $this->connection->getQueryBuilder();
		$query->update('group_folders_trash')
			->set('folder_id', $query->createNamedParameter($toFolderId, IQueryBuilder::PARAM_INT))
			->set('original_location', $query->createNamedParameter($toLocation))
			->where($query->expr()->eq('folder_id', $query->createNamedParameter($fromFolderId, IQueryBuilder::PARAM_INT)))
			->andWhere($query->expr()->eq('original_location', $query->createNamedParameter($fromLocation, IQueryBuilder::PARAM_STR)));
		$query->executeStatement();
	}
}
