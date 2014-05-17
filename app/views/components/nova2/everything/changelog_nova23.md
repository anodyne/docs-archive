## 2.3.2 <small>17 May 2014</small>

### Nova Core

* Updated the email from the contact form and the email to the GM from the docking form to include recipient information. Despite the name and email address are in the headers, we're including those as well as the sender's IP address.
* Updated the included head files to allow for using Nova on a secure domain.
* Fixed wrong language key being used for the word "sim" in a couple of places.

## 2.3.1 <small>02 February 2014</small>

### Bug Fixes

* When toggling open positions, any open positions in sub-departments would throw off the display of the entire manifest.

## 2.3.0 <small>14 September 2013</small>

* When displaying the output of a dynamic form, if there's nothing in the field, we no longer show it.
* Admins can now add inline help for any dynamic form field to help users filling the forms out. The content will be shown below the label and above the field.
* Nova now shows a link back to All Characters when editing a character (if the user has permission).
* Nova now shows a link back to All Users when editing a user (if the user has permission).
* Admins can now specify additional metadata from the bio form to be dispalyed under the character name on the manifest (such as species, gender or any other field).
* Sim stats now shows some statistics for the total life of the sim.

### Bug Fixes

* If a character didn't have any posts, their bio would display the start of UNIX time instead of nothing.