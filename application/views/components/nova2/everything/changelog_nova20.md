## 2.0.2 <small>09 February 2012</small>

### Bug Fixes

* Under some (strange) circumstances, Nova could throw errors from the Ajax controller.
* A typo in the language string on the reset password page when the security question you select doesn't match what's in the database.
* If a user has multiple playing characters assigned to them, the milestones listing would display their main character name for every playing character they had assigned to them instead of just displaying it once.
* The new manifest layout has some display issues when using sub departments. ([#168](https://github.com/anodyne/nova/issues/168))
* When updating the content of a deck, the submit process went back to the select screen instead of staying on the current item's page.
* When deleting specification items, if there are decks associated with that spec item, they're orphaned and not deleted.

## 2.0.1 <small>04 February 2012</small>

### Bug Fixes

* If the user's screen isn't wide enough, the tooltip on the Writing Control Panel that displays the post lock information can slide partially out of view.
* Nova tried to load a language file through an object that couldn't see it, resulting in an error thrown about the file not being found.

## 2.0 <small>04 February 2012</small>

* Site Messages can now contain previously disallowed HTML tags (like `embed`, `iframe`, etc) for adding media from YouTube and Vimeo to site messages (like the welcome message) without needing to use seamless substitution.
* Mission groups can now be added inside other mission groups (nesting only allowed one level deep).
* Users with Level 2 user admin access rights can now reset someone's password for them. The new password will be generated and emailed to the user and they'll be prompted to reset the password the next time they log in. At no time does the user with Level 2 user admin access rights see what the newly generated password is. ([#16](https://github.com/anodyne/nova/issues/16))
* Multi-author posts are now locked during editing to prevent users editing the same post at the same time. The lock is released after the user saves their changes or they've gone 5 minutes without making a change. (In the event a user has changed something and walked away, their changes will be saved to the post first.)
* Admins now have the option of showing the latest personal logs and mission posts on the main page. (Admins will be able to select any combination of news, logs and posts.)
* Admins now have the option of setting the top open positions (from Position Management) that will be shown at the top of each manifest (not manifest-specific).
* Added a rules page to the main section that can be updated from the Site Messages page.
* The instructions on the upload page now include the maximum file size and maximum image dimensions (pulled from the upload config file) for reference to anyone uploading images. ([#143](https://github.com/anodyne/nova/issues/143))
* The deck listing page now uses a table-less layout for a cleaner look.
* The deck listing page now has a menu of decks at the top of the page for quickly moving to a deck item without having to scroll. (We think RPGs with a lot of decks are going to love this!)
* Overhauled the user interface for mission groups to provide more information (and look a lot better too).
* When composing a mission post, the dropdown will now show who owns a linked NPC.
* When composing a mission post, personal log or private message, users only have to start typing a name and the options will be narrowed down for them. ([#23](https://github.com/anodyne/nova/issues/23))
* The skin catalogue now allows removing an entire skin (with sections) and letting admins choose which skin users will beupdated to for each section.
* The user account page now has options to make activating and deactivating users a lot easier.
    * When deactivating a user, all active characters associated with that account with also be deactivated.
    * When activating a user, admins will be prompted about which of the user's inactive characters should be reactivated.
* The character bio page now has options to make activating and deactivating characters a lot easier.
    * Activating an inactive character (and all related actions) can now be done with the push of a button.
    * Deactivating an active character (and all related actions) can now be done with the push of a button.
    * Making an NPC an active character (and all related actions) can now be done with the push of a button.
    * Making a character an NPC (and all related actions) can now be done with the push of a button.
* When viewing a character's posts, the entries will be paginated to help with load times and usability.
* When viewing a character's logs, the entries will be paginated to help with load times and usability.
* Site manifests can now store default view information so that different manifests can have different view settings. (This is now handled through Site Manifest management instead of Site Settings.) ([#157](https://github.com/anodyne/nova/issues/157))
* Gave the Pulsar skin a refreshed look and feel.
* Gave the Titan skin a refreshed look and feel. (If you're interested in changing the header image, please see Titan's README.md file for instructions.)
* The Writing Control Panel now shows a notification for any entires that have been commented on in the last 30 days (along with a link to the comments section of the entry).
* The manifest has been reorganized (for the first time ever) with a slightly different look.
* The email sent to the game master when a user applies now goes to anyone who can approve or reject character applications.
* Acceptance and rejection emails now CC in anyone who can approve or reject character applications.
* Users can now search within their sent and received private messages.
* Private messages have now been split in to separate inbox and sent message pages. This will help improve performance since the page doesn't have to load all the messages at once then split them off in to tabs.
* Private messages in the inbox and sent messages list are now paginated.
* The Reply to All link when reading a private message is only displayed if there's more than one recipient.
* The Reply, Reply to All and Forward options when reading a private message are now displayed above and below the private message.
* Users can now mark all unread private messages as read with a single click.
* An all-new redesigned character bio page provides a better, cleaner user experience.

### The Nova Core

* Moved to CodeIgniter 2.1 (was previously 1.7.3).
* Moved to a brand new file structure that further removes the Nova Core from any changes an admin might be making.
* Added __experimental__ module support.
* Updated to jQuery 1.7.1.
* Updated to jQuery UI 1.8.17.
* Updated to jQuery Uniform 1.7.5.
* Updated to jQuery prettyPhoto 3.1.3.
* Updated to markItUp! 1.1.12.
* Added the jQuery Chosen plugin.
* Added the Bootstrap by Twitter Twipsy plugin (version 1.4).
* Added the Bootstrap by Twitter Popover plugin (version 1.4).
* Removed the qTip plugin. (Please use the Bootstrap Twipsy plugin instead.)
* Changed the `banned.php` file to `message.php` that now contains notifications of Level 2 bans, a missing `nova` directory and incompatible PHP version information.
* Seamless substitution can now be used to override email view files from the `_base_override` directory.
* Added seaQuest DSV as a genre option. ([#144](https://github.com/anodyne/nova/issues/144))
* Changed the Location helper into a library with static methods (`Location::view` instead of `view_location`).
* Removed the RSS model. (It isn't necessary since most of the calls were duplicated in the appropriate post type models.)
* Added constants to the Access model for the default access roles.
* The Missions model now allows group missions to be pulled from `get_all_missions()`.
* The Missions model now has a method to count mission groups: `count_mission_groups()`.
* The Users model now has a method to pull all of a user's LOA records: `get_user_loa_records()`.
* The Auth library now uses static methods to be able to call quicker (`Auth::check_access()` instead of `$this->auth->check_access()`).
* Nova will always check for the existence of the database config file. If the file isn't found, Nova will enter a new config setup wizard that will walk admins through setting up the config file, test the connection and then write the file for them.
* The SMS Upgrade process will now migrate SMS Database entries to the Thresher wiki page format.
* Completely re-wrote the upgrade process to not use config files (admins select the components they want upgraded through a user interface), to show more useful validation messages and be a shorter, more pleasant process (reduced the number of steps from 14 to 4).
* View files now check for the existence of the BASEPATH constant before rendering. On some servers, random `error_log` files are generated all over the place. A big part of this is view files that are accessed apart from the framework and generate PHP fatal errors. This fix should help eliminate those error log files.
* In preparation for future deprecation, we've removed all references to jQuery's `.live()` method. Third party developers should ensure their own code is updated as soon as possible to avoid any issues once the method is removed from the jQuery core.

### Thresher

* Changed the way users manage categories when creating and editing a wiki page. ([#137](https://github.com/anodyne/nova/issues/137))
* Users with the proper permissions can now create categories when creating and editing a wiki page. ([#64](https://github.com/anodyne/nova/issues/64))
* If there are no categories set in Thresher and the user has the proper permissions, they will be prompted to create some new categories when creating and editing a wiki page.
* Changed the user experience for managing wiki pages that puts more controls at the user's disposal and simplifies the entire page. ([#141](https://github.com/anodyne/nova/issues/141))
* Changed the user interface for viewing wiki pages to make it simpler.
* Users must have Level 1 wiki page access to see the page history now.
* Only users who are logged in can see comments on a wiki page.
* Added system pages to Thresher that allow some of the system pages to have their content changed like a normal wiki page. ([#123](https://github.com/anodyne/nova/issues/123))
* Users can now search Thresher from the main Thresher page.
* Fixed several bugs with the listing of Thresher search results.
* Removed the recently changed and recently updated listings from the main Thresher page.
* Users can now subscribe to an RSS feed for created wiki pages as well as updated wiki pages.
* Admins can now restrict access to a wiki page based on access role. ([#11](https://github.com/anodyne/nova/issues/11), [#12](https://github.com/anodyne/nova/issues/12))

### Bug Fixes

* Seamless substitution of images wouldn't work when the images were in the `_base_override` directory.
* The `RE:` and `FWD:` tags would be added to private message subjects when replying and forwarding indefinitely until there was no space left for the actual subject line. Now, Nova will make sure it's only added once. ([#158](https://github.com/anodyne/nova/issues/158))
* When replying to a private message, the author of the message would be added to the recipient list, so any message they send would also show up in their inbox as well. (This behavior can be duplicated by manually adding themselves to the recipients list.)
* The join form could be submitted without an email address or password.
* Users who were deactivated kept their account flags (system administrator, game master, webmaster) and their access role. Now, all account flags and access roles are changed on deactivation.
* Users who were reactivated didn't have their access role set to Standard User.
* Inactive users were shown a link in the sub-navigation to upload an image even though they don't have permissions to upload images.
* A password could be reset for a user even if they don't have a security question chosen.
* Patched several potential security and access issues.
* Positions weren't properly updated when deleting an active character.
* Pulsar styling issues in Internet Explorer 9.
* Titan styling issues in Internet Explorer 9.
* When viewing character or user award, the "Nominated By" line was shown even if there was no nomineed. (This is only an issue for RPGs who upgraded from SMS.)
* The Enterprise-era (ENT) genre install file had several issues and typos. ([#155](https://github.com/anodyne/nova/issues/155))
* The database automatically set a default rank for pending users potentially resulting in some confusion as to why a pending user already has a rank. ([#148](https://github.com/anodyne/nova/issues/148))
* If there is only one specification item, the list of items would be dispalyed instead of automatically sending the user to the only specification item. ([#146](https://github.com/anodyne/nova/issues/146))
* If there is only one specification item, the list of decks would be dispalyed instead of automatically sending the user to the only deck listing. ([#147](https://github.com/anodyne/nova/issues/147))
* During fresh installs, the user ID constraint wasn't consistent with the rest of the user ID fields throughout the system.
* Under some circumstances, users could edit posts they weren't even a part of. (Thanks to evshell18 on the Anodyne forums for pointing this out and getting the ball rolling on a fix.)