## 1.1.2 <small>14 October 2010</small>

### Nova Core

* Instead of duplicating code, Nova's form helper now extends the dropdown functions.
* When writing or editing a mission post, we now take the author list in to account in the author selection dropdown. (Thanks to Patric for helping with this.)

### Bug Fixes

* Addressed an issue when adding an author when creating or editing a mission post. (Thanks to Patric for this fix.)
* Nova would try to update a user's profile with a field that doesn't exist.
* Under very strange circumstances, Quick Install wouldn't work the way it's supposed to.

## 1.1.1 <small>27 September 2010</small>

### Nova Core

* Updated to jQuery UI 1.8.5.
* Updated to jQuery markItUp! 1.1.8.

### Bug Fixes

* The system wouldn't display if the template file couldn't be found (blank white screen).
* The general tour items category would be shown even if there weren't any general tour items.
* Skins with dashboard handles were showing bullets and having weird spacing issues.

## 1.1 <small>4 September 2010</small>

* Admins can now create multiple specification items.
* Admins can now associate tour items with a single specification item.
* Users (with proper permissions) can upload specification items through the upload interface.

### Nova Core

* Added the jQuery Fancybox plugin.
* Added the jQuery Reflection plugin and updated the system to use this plugin instead of reflection.js.
* Removed the jQuery Colorbox plugin.
* Removed the reflection.js plugin.
* Updated the jQuery UI to version 1.8.4.
* The specifications model now has new methods for handling specification items.
* Applied some minors updates to the mission groups listing user interface.

### Bug Fixes

* Ordered and unordered lists weren't properly styled in Thresher.
* Missions inside mission groups don't respect the mission order set for them.
* The author dropdown when replying to a private message wasn't populating with data in some cases.
* Mission post next and previous links were wrong under certain circumstances.
* Personal log next and previous links were wrong under certain circumstances.
* News item next and previous links were wrong under certain circumstances.
* The model methods that pulled command staff, game master and webmaster emails returned all users, not just active users.
* Error was thrown about an undefined class method when deleting uploaded items.