## 1.2.6 <small>15 July 2011</small>

### Bug Fixes

* Addressed some major security issues.
* The Writing Control Panel included several wrong links.
* Character mission posts weren't accurately pulled from the database.

## 1.2.5 <small>16 June 2011</small>

### Bug Fixes

* Specification data wouldn't get added to the database table for old items if a new field was added.
* Deactivated users would retain their account flags (system administrator, game master, webmaster) and wouldn't have their access role changed.
* Reactivated users wouldn't be given a reasonable access role.

## 1.2.4 <small>25 January 2011</small>

### Nova Core

* Updated to jQuery UI 1.8.9.

### Bug Fixes

* Mission posts weren't accurately counted.
* The user acceptance email CCed in more people that needed to be.
* The manifest wouldn't load in Internet Explorer 7.

## 1.2.3 <small>04 January 2011</small>

### Bug Fixes

* Addressed issues handling deck listings and multiple specification items.

## 1.2.2 <small>30 December 2010</small>

### Bug Fixes

* Sub departments couldn't be managed from the Department management page.
* Mission post emails didn't display the authors properly.
* Addressed access issues created by the update from 1.1.2.

## 1.2.1 <small>23 December 2010</small>

### Bug Fixes

* Positions would disappeaer when being updated.
* Errors thrown when trying to update character images when there aren't any images present.
* Error thrown from the RSS feed.

## 1.2 <small>20 December 2010</small>

* Admins can now ban users from applying to the game (level 1) or even getting in to the site (level 2)
* If the system detects a Level 2 ban, the user will be redirected to a new page with information about why they aren't allowed to get to the site.
* The application report now shows the email address and IP address of the applicant.
* The email sent to the game master(s) from the join form now shows the IP address of the applicant.
* Made the contact form simpler.
* The contact form now uses proper form validation to make sure all the fields are completed properly.
* Department Management now has a new user interface to make working with departments easier.
* Position Management now splits departments out by manifest.
* Users can no longer get to any of the writing features if they don't have a character associated with their account.

### Nova Core

* Added a new validation error image.
* Added a new assignment image.
* Added the jQuery prettyPhoto plugin to replace jQuery Fancybox.
* Removed the jQuery Fancybox plugin.
* Updated to CodeIgniter 1.7.3.
* Updated to jQuery 1.4.4.
* Updated to jQuery UI 1.8.7.
* Updated to jQuery markItUp! 1.1.9.
* The Departments model now has methods for handling multiple manifests.
* The User model now has a method to pull user information based on characters in the database.
* Some of the models needed to be updated to correct for situations where the user or character ID isn't present.

### Bug Fixes

* The autoload config item tried to autoload the Input library. This isn't necessary since CodeIgniter loads it by default.
* Fixed some typos in the install data.
* Users without an active character would be shown in the activity warning panel on the Admin Control Panel.
* A codele post submitted by an applicant would just be a massive block of text in the email sent to the game master(s).
* Some specifications weren't properly upgraded during the SMS Upgrade process.
* A mission closing tag on the Create Characters page was causing some issues.
* The timezone menu in Site Settings pulled the wrong value from the database to populate the field with.
* The join form pulled one of its images from the admin section instead of the main section.
* Whitespace issues in Access Role management, News Item management, Personal Log management, Mission Post management and Department management.
* Fixed the errors thrown throughout the system.
* Some errors were thrown throughout the system when a user didn't have a character associated with their account.
* Flash message view couldn't be overridden with seamless substitution.
* Mission post emails were sent with the user's primary character name attached to it even if the primary character isn't associated with the post.
* Private message emails didn't contain the content of the private message.
* Personal logs didn't have the right date when they were first saved.
* Pending users would appear in the recipients dropdown for private messages.
* Changing a dynamic form field from text/textarea to dropdown wouldn't trigger the dropdown values section to open. This essentially rendered the field useless and would cause admins to have to delete the field and start over.