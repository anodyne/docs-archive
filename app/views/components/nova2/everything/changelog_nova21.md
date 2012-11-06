## 2.1.3 <small>05 November 2012</small>

### Bug Fixes

* Restoring lost functionality on some pages due to the security vulnerability update. ([#215](https://github.com/anodyne/nova/issues/215))

## 2.1.2 <small>04 November 2012</small>

### Nova Core

* Update to jQuery 1.8.2.
* Update to jQuery UI 1.8.24.
* Update to markItUp! 1.1.13.
* Update to CodeIgniter 2.1.3.
* Update Nova to address a security issue.

### Bug Fixes

* Once a bio field is turned off, the only way to turn it back on is by going in to the database and changing the display value. ([#214](https://github.com/anodyne/nova/issues/214))
* Once a docking field is turned off, the only way to turn it back on is by going in to the database and changing the display value. ([#214](https://github.com/anodyne/nova/issues/214))
* Any spec form field that is turned off has no indication that it's disabled.
* Any tour form field that is turned off has no indication that it's disabled.

## 2.1.1 <small>12 September 2012</small>

### Nova Core

* Update to CodeIgniter 2.1.2.
* Update to jQuery 1.8.1.
* Update to jQuery UI 1.8.23.
* Update the IP Address fields in the database to be compatible with IPv6 addresses.

### Bug Fixes

* During the update process, Nova never updated the system information table with the correct version number.
* Despite the system version and components database tables being pulled out, the What's New menu item was never removed, throwing a 404 error if someone tried to go to the page.
* The Admin Control Panel's update notification panel doesn't properly display all the language strings because the proper language file wasn't loaded.
* The user bio page had debug code from 2.1 development at the top of the page.
* Under some circumstances, unlinked NPCs had a link to a user bio that threw an error.
* The User Not Found error was missing a parameter (would show %s instead of the word 'user').

## 2.1.0 <small>26 June 2012</small>

* Users are now notified when mission notes have been updated in the last 72 hours by the notes box auto-expanding when they arrive at the posting page.
* Users are now shown when the last update to the mission notes was all the time.

### Nova Core

* Remove the `count_unread_pms` method from the private messages model. (This method was deprecated in Nova 2.0.)
* Remove the `system_components` and `system_versions` tables from the database. There's really no reason to be maintaining these lists in Nova. Instead, users who are interested in Nova's components and version history should visit AnodyneDocs.
* Remove the What's New page for the reasons specified above.
* Update the Version Information page to reflect the database changes.
* Update the post, log, and news creation pages to give a description of what tags are meant to be used for.
* Remove jQuery library from the file system. We now pull jQuery from a CDN instead of storing it locally.
* Update to jQuery UI 1.8.20 (we now include the entire jQuery UI library for anyone who wants to use components we don't use).
* Update to prettyPhoto 3.1.4.
* Update to jQuery Reflection 1.1.

### Bug Fixes

* The update page would always throw an error that it couldn't find Nova installed in the current database.
* When a mission was updated, it was assumed mission notes updated as well. Now, there's greater precision in determining if the notes were actually updated.
* Accepting or rejecting docking applications would throw a fatal error because the Messages model wasn't loaded before it was used.
* Join timespan always showed as a user joining "1 Second ago" no matter when they joined.
* Nova's `timespan_short` helper was missing the word "ago" when the time was less than an hour.
* The Site Messages page didn't strip HTML tags from the content potentially allowing unclosed HTML tags to wreak havoc on the page.