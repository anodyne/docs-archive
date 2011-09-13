<h1><?php echo $header;?></h1>

<p>While Nova is highly focused on the game itself you're playing, players are also an integral part and have to be able to update their account with new information, be that a new email address or security question or any of the other various settings available to every player. The User Account page allows players to update their own account or admins to update other players' accounts (including resetting passwords).</p>

<p>The account page is broken in to multiple tabs to easily separate information out. People with level 1 account privileges (almost everyone) will see three tabs: basic info, my bio and my preferences. Basic info includes your name, email address, password, date of birth, security question and answer, language, timezone and daylight savings time settings. The my bio tab includes instant messager, location, interests and biography fields for updating. The my preferences tab includes a variety of preferences (mostly for email) that you can check and uncheck. If you have level 2 account privileges, a fourth tab labeled admin will be at the end of the tab bar. The admin tab contains information for player type, status, flags for different account types (system administrator, game master and webmaster), moderation controls and a link to manage an account's characters.</p>

<p class="important"><strong>Note:</strong> When you change a user to a type of inactive, Nova will automatically set a timestamp for their leave date for records and deactivate their active characters. Because of the dynamic nature of roles, they will retain whatever role they have, so make sure you change their role when deactivating users otherwise they will be able to login and take any actions they could before leaving.</p>

<p>You can change settings across all tabs and click <strong>Update</strong> and everything will be updated. If you do not put anything in the password or security answer fields, nothing will be updated for those fields. For everything else, all the fields will be updated as well as a timestamp put in the database for when you updated your account.</p>

<p class="important"><strong>Note:</strong> Because some of these preferences are tied so tightly into the email system, we do not currently allow admins to add their own preferences. In the future, we may allow admin-created user preferences.</p>

<h3>Permissions</h3>

<p>In order to update user accounts, you need to have <kbd>user/account</kbd> permissions with either access level 1 or 2. Level 1 allows an author to update their own account. Level 2 allows an admin to update all account.</p>