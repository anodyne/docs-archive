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