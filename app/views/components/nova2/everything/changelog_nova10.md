## 1.0.6 <small>14 July 2010</small>

### Nova Core

* The Character Bio management page shows a loader until everything has finished loading.
* Turned down the debug level (fatal errors and database errors are still shown).
* The recipients menu when writing a private message now separates active and inactive characters.
* Updated to jQuery UI 1.8.2.
* Updated to jQuery Colorbox 1.3.8.
* Removed some debug code from the Auth library since the Remember Me bug seems to have been solved.
* Added a method to the Characters model for inserting promotion records.
* Added a method to the Users model for removing user preference values.
* Addressed a security issue in CodeIgniter's Upload class.

### Bug Fixes

* Error thrown when posting a comment on a mission post.
* Error thrown when attempting to delete a character.
* Error thrown during step 2 of the update process for some admins.
* Error thrown when there's only one mission image set on the mission details page.
* Error thrown when there's only one tour iamge set on the tour details page.
* Error thrown when there's only one character image set on the character bio page.
* Acceptance and rejection messages were sent without any of the changes the admin made.
* Changing a character's status to and from active wouldn't set the open slots of the position(s).
* When creating a character, the position dropdowns showed all positions instead of only open positions.
* Rank history information wasn't being populated correctly.
* Turning off update notification still attempted to run the check.
* A user's email preferences remained active even after the user was deactivated.
* A user's email preferences weren't removed when the user was removed.

## 1.0.5 <small>06 June 2010</small>

### Bug Fixes

* Errors thrown after the SMS Upgrade process on Characters management.
* Error thrown after the SMS Upgrade process on NPC management.
* Errors thrown when editing a wiki page.
* Hidden departments were shown in the positions dropdown menu.
* A wrong variable was used in a model method.
* Addressed a security issue where docking request data wasn't filtered for XSS attacks.
* Docking request emails sent to the game master(s) had several bugs.
* Error thrown when updating a user to be inactive.
* There were no sanity checks on the type of variable needed when handling character deactivation.
* Errors thrown when rejecting a docking request.
* Unlinked NPCs wouldn't be able to use newly created bio fields.
* Site Options didn't allow admins with access to the Skin Catalogue to select skins in development.
* Join form instructions weren't displayed.

## 1.0.4 <small>12 May 2010</small>

### Nova Core

* The `MY_Input` library tries to filter for Microsoft Word special character a little better.
* The Archives feature now requires PHP 5.0 or higher.
* Thresher now requires PHP 5.0 or higher.
* Updated to jQuery UI 1.8.1.
* UPdated to jQuery markItUp! 1.1.7.

### Bug Fixes

* Error thrown when a user with Level 1 user account access updated their account.
* Saved personal logs could be shown along with activated personal logs for users with multiple characters associated with their account.
* Internet Explorer threw an exception on the Mission Post, Personal Log, News Item and Docked Item management pages.
* Error thrown on the contact page.
* Errors thrown on the Manage Bio page for users with Level 1 access.
* Character position was updated from the Manage Bio page even when they shouldn't be.
* The status change email wasn't populated properly.
* The Textile parser had some bugs. (Thanks to Dustin for catching these issues.)
* Addressed an issue with emails on some servers.
* Attempted to fix some errors thrown in some circumstances during updates.

## 1.0.3 <small>26 April 2010</small>

### Nova Core

* Removed the dependency on the versions array file. Instead, we try to pull a listing of the update directory dynamically (though we still use the array file in the the event the directory listing fails).
* Separated some code for character deletion between playing characters and NPCs.
* Added notices to the dynamic form management pages if there's no content available.
* Added some debug code to the Auth library to help track down the Remember Me bug.
* Cleaned up the Posts model.
* Added a parameter to a Post model method to help with issues in with unattented posts.
* When deactivating a user, we deactivate the user's characters at the same time.
* The Update Center to show the links to start the update regardless of whether there's information about the update or not.

### Bug Fixes

* The Create Wiki page link didn't show up in the sub navigation menu.
* Posts weren't accurately counting unattented posts when a character ID was passed in as an integer instead of an array.
* Errors were thrown when deleting characters and NPCs.
* Error was thrown when writing a Mission Post.
* The post notification stayed active even after the post had been updated and/or emailed out.
* Errors thrown when adding a rank.
* Error thrown when there are no fields in a specification form section.
* Error thrown in the Admin Control Panel.
* Wiki pages were being categorized as Uncategorized even if they had categories.
* Error thrown for missing option parameters.
* Error thrown when accepting or rejecting a docked ship application.
* Thresher wasn't using the right regions in the Template config file.

## 1.0.2 <small>20 April 2010</small>

### Nova Core

* The Ranks model uses the genre when looking for the default rank catalogue item.
* The Ranks model only pulls ranks sets from the current genre when getting all ranks.
* The Ranks model only pulls rank catalogue items for the current genre.
* The Ranks model `get_group_ranks()` method now has a parameter for a custom identifier.
* The Auth library checks for a user's status and will no longer allow pending users to log in.
* The Auth library will now allow 5 log in attempts before locking the user out.
* Admins can now add and edit the genre for Rank Catalogue items.
* The Upload Management page now shows a message if uploaded images weren't found in specific categories.
* Turned up the debug level so users could see any errors for debugging purposes.
* When a user updates their password and they're set to have Nova remember them, their cookie will be reset with the new password.

### Bug Fixes

* The Menu library wouldn't respect any access control put on main navigation menu items or sub navigation menu items.
* Undefined variable error was thrown in the Rank Catalogue.
* The Rank Catalogue wouldn't work well when multiple genres were installed.
* Uploaded images (besides bio images) couldn't be deleted.
* Authors were dropped off of mission posts because of some flawed logic.
* The codele post wasn't in the email sent to the game master(s).
* Ranks couldn't be added in Internet Explorer.
* Rank classes wouldn't be shown for rank sets without a blank name rank item.
* The user bio pointed to the wrong location for user posts and user awards.
* Listing all of a user's posts would display posts besides their own.
* When commenting on a mission post, an error would be thrown.
* Updating a news item threw a fatal error.
* Updating a personal log threw a fatall error.
* Log in error 6 presentation issues.
* The mission dropdown wasn't properly populated when viewing a saved post.
* Added a special call to the `MY_Input` library to do some text cleanup after filtering for XSS.
* News items could be posted without a category.
* There were some minor schema differences between SMS and Nova created by the SMS Upgrade process.
* Addressed some of the Remember Me lockout issues.

## 1.0.1 <small>16 April 2010</small>

* A database field wasn't properly added during the SMS Upgrade process.
* Models couldn't be autoloaded because `Base4.php` didn't extend `My_Loader`.
* An error was thrown because the `date_default_timezone_set` function doesn't exist in PHP before version 5.1.

## 1.0 <small>15 April 2010</small>

* Initial release