## Mission Note Update Notifications

Mission notes are an incredible useful feature that allow game masters to keep players updated on what's happening with the game, how players can best move things forward, and to give direction on how to post. The biggest challenge with mission notes though has always been accounting for the length of content (the big reason why notes are hidden by default). Users expressed concern that their updates to mission notes were going unnoticed by players because they didn't know changes had been made.

Now, if mission notes have been updated within 72 hours, the mission notes content box will automatically be expanded and have an <span class="label label-warning">UPDATED</span> label. If mission notes haven't been updated within 72 hours, the box will stay collapsed. Regardless of time though, the mission notes box will now always show the last time the notes were updated (unless, of course, they've never been updated).

## Bug Fixes

* The update page would always throw an error that it couldn't find Nova installed in the current database.
* When a mission was updated, it was assumed mission notes updated as well. Now, there's greater precision in determining if the notes were actually updated.
* Accepting or rejecting docking applications would throw a fatal error because the Messages model wasn't loaded before it was used.
* Join timespan always showed as a user joining "1 Second ago" no matter when they joined.
* Nova's `timespan_short` helper was missing the word "ago" when the time was less than an hour.
* The Site Messages page didn't strip HTML tags from the content potentially allowing unclosed HTML tags to wreak havoc on the page.