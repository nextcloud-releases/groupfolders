## 14.0.6

### Fixed

- fix(ACL): don't put inherited ACL permissions in the propPatch request payload [#2689](https://github.com/nextcloud/groupfolders/pull/2689)
- Fix(client#propPatch): Escape *all* occurences of # [#2675](https://github.com/nextcloud/groupfolders/pull/2675)
- fix PHP 8.2 ${var} deprecated [#2515](https://github.com/nextcloud/groupfolders/pull/2515)

## 14.0.2

* #[2337](https://github.com/nextcloud/groupfolders/pull/2337) fix text for assigned acl managers not being readable in light mode by @backportbot-nextcloud
* #[2338](https://github.com/nextcloud/groupfolders/pull/2338) fix previews of files inside deleted folders by @backportbot-nextcloud
* #[2363](https://github.com/nextcloud/groupfolders/pull/2363) fix: Include `admin` group in list of all groups by @backportbot-nextcloud
* #[2360](https://github.com/nextcloud/groupfolders/pull/2360) Fix quota bar appearance by @backportbot-nextcloud

## 14.0.1

* [#2320](https://github.com/nextcloud/groupfolders/pull/2320) Fix indication of the quota consumed by @backportbot-nextcloud

## 14.0.0

* Add Nextcloud 26 support
* [#2098](https://github.com/nextcloud/groupfolders/pull/2098)Fix accessing groupfolders from remote instance by @CarlSchwan
* [#2097](https://github.com/nextcloud/groupfolders/pull/2097)Fix quota bar design by @CarlSchwan
* [#2114](https://github.com/nextcloud/groupfolders/pull/2114)return created groupfolder id from create command by @icewind1991
* [#2108](https://github.com/nextcloud/groupfolders/pull/2108)Migrate to nextcloud/OCP package in master by @nickvergessen
* [#2072](https://github.com/nextcloud/groupfolders/pull/2072)Allow admin delegation rebased by @CarlSchwan
* [#2154](https://github.com/nextcloud/groupfolders/pull/2154)Move check if node exists earlier by @CarlSchwan
* [#2168](https://github.com/nextcloud/groupfolders/pull/2168)Fix loading sidebar by @CarlSchwan
* [#2159](https://github.com/nextcloud/groupfolders/pull/2159)fix(docs): typo in readme.md regarding versioning by @SimJoSt
* [#2190](https://github.com/nextcloud/groupfolders/pull/2190)Fix typo in App.tsx by @CarlSchwan
* [#2214](https://github.com/nextcloud/groupfolders/pull/2214)Allow scanning all group folders by @PVince81
* [#2204](https://github.com/nextcloud/groupfolders/pull/2204)Fix usability of settings components using dark color theme by @susnux
* [#2245](https://github.com/nextcloud/groupfolders/pull/2245)cleanup trash from deleted groupfolders by @icewind1991
* [#2262](https://github.com/nextcloud/groupfolders/pull/2262)fix: Adapt return type for Nextcloud 26 by @juliushaertl
* [#2268](https://github.com/nextcloud/groupfolders/pull/2268)fix(sidebar): Use icon slot for read-only ACL states by @ChristophWurst
* [#2271](https://github.com/nextcloud/groupfolders/pull/2271)fix(a11y): Add title and label to read-only ACL buttons by @ChristophWurst

## 13.1.3

* #[2336](https://github.com/nextcloud/groupfolders/pull/2336) fix text for assigned acl managers not being readable in light mode by @backportbot-nextcloud
* #[2362](https://github.com/nextcloud/groupfolders/pull/2362) fix: Include `admin` group in list of all groups by @backportbot-nextcloud
* #[2361](https://github.com/nextcloud/groupfolders/pull/2361) Fix quota bar appearance by @backportbot-nextcloud

## 13.1.2

* [#2228](https://github.com/nextcloud/groupfolders/pull/2228) Fix usability of settings components using dark color theme by @backportbot-nextcloud
* [#2272](https://github.com/nextcloud/groupfolders/pull/2272) fix(sidebar): Use icon slot for read-only ACL states by @backportbot-nextcloud
* [#2273](https://github.com/nextcloud/groupfolders/pull/2273) fix(a11y): Add title and label to read-only ACL buttons by @backportbot-nextcloud
* [#2319](https://github.com/nextcloud/groupfolders/pull/2319) Fix indication of the quota consumed by @backportbot-nextcloud

## 13.1.1
* [#2222](https://github.com/nextcloud/groupfolders/pull/2222) update to vue 7.3.0 by @szaimen in

## 13.1.0

- Fix sidebar not working
- Add some api to handles admin delegation in a more flexible way (for the workspace app)

## 13.0.0-beta1

- Port to Nextcloud vue component 7
- Handle folder with # correctly

## 10.0.0-beta1

* [#1239](https://github.com/nextcloud/groupfolders/pull/1239) Check for naming conflicts before returning the user mounts @icewind1991
* [#1244](https://github.com/nextcloud/groupfolders/pull/1244) Add advanced permission toggle to OCS call examples. @ATran31
* [#1255](https://github.com/nextcloud/groupfolders/pull/1255) Add missing return code. This relates to issue #1154 @michaelernst
* [#1263](https://github.com/nextcloud/groupfolders/pull/1263) Check folder permissions when restoring a trashbin item @icewind1991
* [#1291](https://github.com/nextcloud/groupfolders/pull/1291) Drop redundant indexes @rullzer
* [#1318](https://github.com/nextcloud/groupfolders/pull/1318) Fix #801 Folder icon in shared group folder @juliushaertl
* [#1331](https://github.com/nextcloud/groupfolders/pull/1331) Add tooltip for user/group name in sidebar ACL list @danxuliu
* [#1334](https://github.com/nextcloud/groupfolders/pull/1334) Fix deletion failing even if there's an entry in the folder listing @noiob
* [#1335](https://github.com/nextcloud/groupfolders/pull/1335) Fix "contenthash" not included in chunk filename @danxuliu
* [#1340](https://github.com/nextcloud/groupfolders/pull/1340) Cast groupfolder id to string when trying to create a new folder @juliushaertl
* [#1346](https://github.com/nextcloud/groupfolders/pull/1346) Obtain cacheEntry for created folders and handle errors more gracefully @juliushaertl
* [#1360](https://github.com/nextcloud/groupfolders/pull/1360) Make clear arguments are ids and not names @nickvergessen
* [#1366](https://github.com/nextcloud/groupfolders/pull/1366) Load all acl rules for a folder/search result in one go @icewind1991
* [#1374](https://github.com/nextcloud/groupfolders/pull/1374) PreventDefault on folder create submit event @icewind1991
* [#1375](https://github.com/nextcloud/groupfolders/pull/1375) Fix wrong method call to check restore permissions @icewind1991
* [#1380](https://github.com/nextcloud/groupfolders/pull/1380) Add hint for subfolder groupfolders to readme @icewind1991
* [#1395](https://github.com/nextcloud/groupfolders/pull/1395) Fixed searching for groups in the sharing sideview @jngrb
* [#1406](https://github.com/nextcloud/groupfolders/pull/1406) Sidebar view: refresh ACL entries when fileInfo prop changes #1378 @jngrb
* [#1415](https://github.com/nextcloud/groupfolders/pull/1415) Moved Note to the pinned issue. @pierreozoux
* [#1472](https://github.com/nextcloud/groupfolders/pull/1472) Enforce string for folder id when obtaining the trash folder @juliushaertl
* [#1484](https://github.com/nextcloud/groupfolders/pull/1484) Only return user result once @juliushaertl
* [#1534](https://github.com/nextcloud/groupfolders/pull/1534) Cancel ACL user/group search requests @juliushaertl
* [#1224](https://github.com/nextcloud/groupfolders/pull/1224) Fix file drop shared folders @danxuliu


## 8.0.0

- Show inherited ACLs in the files sidebar
- Improve performance when querying managing users/groups
- Fix issue causing "$path is an integer" logging in versions backend
- Nextcloud 20 compatiblity

## 6.0.6

- ACL: Increase performance by selecting on indexed column @Deltachaos
- Use a lazy folder @rullzer

## 6.0.5

- Nextcloud 19 compatibility

## 6.0.4

- Check ACL before restoring files from the trashbin
- Do not allow restoring files at an existing target
- Return the mountpoint owner as a fallback
- Bump dependencies

## 6.0.3

- Do not ship unneeded files with the release

## 6.0.2

- Allow to detect the file path for shares inside of groupfolders, e.g. when they are matched in workflow rules
- Bump dependencies

## 6.0.1

- Fix sharing files from groupfolders trough ocs api
- Show the full path including groupfolder in trashbin

## 6.0.0

- Nextcloud 18 compatibility
- Search for users by display name
- Only check for admin permissions if needed
- Check for ACL list in trash backend
- Bump dependencies

## 5.0.4
- Fix etag propagation which caused the desktop client not syncing changes
- Check if the parent folder is updatable when moving

## 5.0.3
- Handle advanced permission rules for users/groups that no longer exist

## 5.0.2
- Allow longer path as groupfolder mount points

## 5.0.1
- Improved error handling when removing items from trash
- Fix groupfolders breaking updating calendar details    

## 5.0.0
- 17 compatiblity
- Use groupfolder storage for versioning

## 4.1.2
- Allow longer path as groupfolder mount points

## 4.1.1
- Improved error handling when removing items from trash
- Fix groupfolders breaking updating calendar details

## 4.1.0
- Allow groups to manage ACL permissions
- Bump dependencies
- Fix IE11 compatibility
- Check for naming conflicts before returning the user mouns

## 4.0.5
- Bump dependencies
- Update translations
- Proper values returned from Storage Wrapper fixing some etag bugs

## 4.0.4
- Fix issue with ACL cache returning empty result sets
- Bump dependencies

## 4.0.3
- Fix Collabora documents opening in read only in some cases
- Improve dark mode support

## 4.0.2
- Fix handling of public pages
- Fix advanced permissions not applying on the root of a groupfolder

## 4.0.1
- Fix not being able to delete advanced permission rules from the web interface
- Use display names in advanced permissions interface
- Fix not being able to open files in Collabora Online that don't have share permissions

## 4.0.0
- Access control list support for advanced permission management
- Improve performance of listing group folders with large filecache tables
- Block deleting of folders that have non-deletable items in them
- Improved admin page layout
- Fix groupfolder icons sometimes not being themed correctly.
- Fix moving shared groupfolder items to trashbin.

## 3.0.1

This release is aimed for Nextcloud 14/15 users who upgraded to 3.0.0 which was
falsely marked as compatible for those Nextcloud releases.

Additionally the following fixes are included

- Fix groupfolder icons sometimes not being themed correctly.
- Fix moving shared groupfolder items to trashbin. 

## 1.2.0

 - Allow changing the mount point of existing group folders
 - Add OCS api for managing folders
 - Fix folder icons in public shares
 - Merge permissions if a user has access to a folder trough multiple groups
