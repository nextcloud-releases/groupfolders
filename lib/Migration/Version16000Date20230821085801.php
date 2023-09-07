<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2023 Louis Chmn <louis@chmn.me>
 *
 * @author Louis Chmn <louis@chmn.me>
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
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\GroupFolders\Migration;

use Closure;
use OCP\DB\ISchemaWrapper;
use OCP\DB\Types;
use OCP\Migration\IOutput;
use OCP\Migration\SimpleMigrationStep;

/**
 * Auto-generated migration step: Please modify to your needs!
 */
class Version16000Date20230821085801 extends SimpleMigrationStep {

	/**
	 * @param IOutput $output
	 * @param Closure $schemaClosure The `\Closure` returns a `ISchemaWrapper`
	 * @param array $options
	 * @return null|ISchemaWrapper
	 */
	public function changeSchema(IOutput $output, Closure $schemaClosure, array $options): ?ISchemaWrapper {
		/** @var ISchemaWrapper $schema */
		$schema = $schemaClosure();

		if ($schema->hasTable("group_folders_versions")) {
			return null;
		}

		$table = $schema->createTable("group_folders_versions");
		$table->addColumn('id', Types::BIGINT, [
			'autoincrement' => true,
			'notnull' => true,
			'length' => 20,
		]);
		$table->addColumn('file_id', Types::BIGINT, [
			'notnull' => true,
			'length' => 20,
		]);
		$table->addColumn('timestamp', Types::BIGINT, [
			'notnull' => true,
			'length' => 20,
		]);
		$table->addColumn('size', Types::BIGINT, [
			'notnull' => true,
			'length' => 20,
		]);
		$table->addColumn('mimetype', Types::BIGINT, [
			'notnull' => true,
			'length' => 20,
		]);
		$table->addColumn('metadata', Types::TEXT, [
			'notnull' => true,
			'default' => '{}',
		]);

		$table->setPrimaryKey(['id']);
		$table->addUniqueIndex(['file_id', 'timestamp'], 'gf_versions_uniq_index');

		return $schema;
	}
}
