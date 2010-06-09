<h1><?php echo $header;?></h1>

<h2>System Core</h2>

<ul>
	<li>All new system core provided by CodeIgniter</li>
	<li>Dynamic web location variable</li>
	<li>Normalized the database for greater speed and extensibility</li>
	<li>Better database collation and character set</li>
	<li>Updated to jQuery 1.4.2 (up from version 1.2.6)</li>
	<li>Updated to jQuery UI 1.8 (up from version 1.0)</li>
	<li>Removed MagpieRSS</li>
	<li>Removed phpSniff (browser detection)</li>
</ul>

<h2>Nova Core</h2>

<ul>
	<li>Nova is completely internationalized, meaning it can be translated by adding a few files</li>
	<li>Far greater extensibility ... create new pages or modifying existing ones without ever touching core files</li>
	<li>Added support for additional genres</li>
	<li>Added dynamic forms that can be updated from the control panel (join/bio, docking, specs and tour)</li>
	<li>Added RSS feeds for mission posts, personal logs and news items</li>
	<li>Added HTML emails to the system</li>
	<li>Added support for timezones and daylight savings time for more accurate dates throughout the system</li>
	<li>Added the ability to change the date format used throughout the system</li>
	<li>Added player preferences for which emails are sent to the player</li>
	<li>Added the ability to turn system email off</li>
	<li>Added the ability to upload character, award, mission and tour images through the system</li>
	<li>Added a maintenance mode for admins to use when updating or doing work on the system</li>
	<li>Moved over to buttons instead of image buttons for better accessibility</li>
	<li>Moved to a role-based system of user access control</li>
	<li>Removed personalized menu and added a user panel with a user's links, characters and important information</li>
	<li>Removed all references to "globals" and replaced with "settings" (fixes a growing SMS bug with server security settings)</li>
	<li>Removed all PHP short tags in favor of standard tags</li>
</ul>

<h2>General</h2>

<ul>
	<li>More flexible license</li>
	<li>A brand new user guide that includes:
		<ul>
			<li class="black">Page guides for every page in the system</li>
			<li class="black">Method-by-method documentation for models and libraries</li>
			<li class="black">Over 30 tutorials</li>
			<li class="black">Developer-specific pages</li>
		</ul>
	</li>
</ul>

<h2>Templates</h2>

<ul>
	<li>Brand new template system uses a single file instead of multiple files</li>
	<li>Templates include simple variables to tell Nova where to put different components</li>
	<li>Separated the styles for different sections of a skin (main, admin, login, wiki)</li>
	<li>Seamless Substitution which allows developers to override Nova's default images, Javascript and view files with their own</li>
	<li>Added the ability to theme the login page</li>
	<li>Added the ability to separately theme different sections of the system</li>
	<li>Added the ability to give a skin a name</li>
	<li>Removed tons of system code from the templates</li>
</ul>

<h2>Installation</h2>

<ul>
	<li>Better install process</li>
	<li>Better server verification tool</li>
	<li>Using built in database library to create easier to understand and maintain install files</li>
	<li>Added the ability to set some of the system defaults during install</li>
	<li>Added feedback so users know when the system is working</li>
	<li>Added some basic checks during installation if a step completed successfully or not, giving admins a quick idea if something is wrong instead of having problems come out over the course of several days</li>
	<li>Added a user interface for adding new tables and fields to the database</li>
</ul>

<h2>Login</h2>

<ul>
	<li>Added feature that, after resetting a password, when you login, Nova prompts you to change your password</li>
	<li>Remember me feature that will store login information for up to 2 weeks and perform autologins</li>
	<li>Updated password encryption from MD5 to a double hashed and salted SHA1 string (far more secure)</li>
	<li>Overhauled the reset password option to use a security question</li>
	<li>Smarter login process knows if your email is wrong or if your password is wrong</li>
	<li>The system will lock out users who have 3 failed login attempts for 30 minutes to protect from brute force password hacking attempts</li>
	<li>Removed the use of a username, everything is done with an email address and password</li>
</ul>

<h2>Pages &amp; Sections</h2>

<h3>Main</h3>

<ul>
	<li>Added an AJAX event to the join page that pulls position description in and displays it under the position dropdown menu once an item has been selected</li>
	<li>Credits page now pulls author information about the selected skin and ranks automatically</li>
</ul>

<h3>Personnel</h3>

<ul>
	<li>Separated character and player accounts</li>
	<li>View Awards lists OOC awards separately, meaning that no matter what character is used, OOC awards stay with the player</li>
	<li>Added the ability to post as NPCs</li>
	<li>Added the ability to have multiple playing characters</li>
	<li>Added player bio that contains all information about a given player (only available to logged in users)</li>
	<li>Added a View Awards page that lists all awards a character has been given</li>
	<li>Who nominated the character for an award is now stored and displayed</li>
	<li>Character bios now only display the last 5 awards given</li>
	<li>Chain of command can now include NPCs</li>
	<li>Removed player information from the bio pages</li>
</ul>

<h3>Sim</h3>

<ul>
	<li>Cleaned up the view post pages</li>
	<li>Made sure that if something is blank, it isn't displayed on the view pages</li>
	<li>Added the ability to have a gallery of mission images</li>
	<li>Added the ability to add comments to a post, log or news item</li>
	<li>Added a page to view the details of an award, including how many times it's been given and who's received that award</li>
	<li>Added pagination to pages that list personal logs and mission posts</li>
	<li>Added mission groups for grouping missions together into arcs, seasons, by topic or any other criteria</li>
	<li>Moved mission summaries into the mission information page</li>
	<li>Changed list logs and list posts page to pull all items, not just the last 25</li>
	<li>Deck listing allows changing the order and names of decks</li>
</ul>

<h3>Admin Control Panel</h3>

<ul>
	<li>Added Who's Online listing</li>
	<li>Added player statistics to the ACP</li>
	<li>Added ability to ignore a version's update notification</li>
</ul>

<h3>Private Messaging</h3>

<ul>
	<li>Added the ability to send PMs to multiple people simultaneously</li>
	<li>Added the ability to reply to all recipients of a PM</li>
	<li>Added the ability to forward a PM to other people</li>
</ul>

<h3>Writing</h3>

<ul>
	<li>Added a Writing Control Panel</li>
	<li>Added a My Recent Posts tab to the Writing Control Panel</li>
	<li>Added a All Recent Posts tab to the Writing Control Panel</li>
	<li>Added the ability to do a mission post with every member of the crew</li>
	<li>Added ability to post as any character associated with your account, including NPCs</li>
	<li>Added a tags field for keywords about an entry</li>
	<li>Added ability to create a mission on the fly from the write mission post page if no current missions exist or update an existing upcoming mission to be current</li>
	<li>Renamed Post section to Write</li>
	<li>Combined the mission post and joint mission post pages</li>
	<li>Moved Saved Post notification to the Writing Control Panel</li>
	<li>Removed the 8 character limitation on joint posts</li>
	<li>Removed restricted access to news categories</li>
	<li>Removed the Add Post pages</li>
	<li>Removed the tag field</li>
	
</ul>

<h3>Site Management</h3>

<ul>
	<li>Simplified site settings</li>
	<li>Added the ability to set the large awards images directory</li>
	<li>Added the ability to not use large awards images</li>
	<li>Added user-created messages whose message keys can be inserted into PHP variables</li>
	<li>Added drag and drop functionality for re-ordering the chain of command</li>
	<li>Added the ability to see a list of who has a certain access role</li>
	<li>New interface for the messages page</li>
	<li>When changing sim type, Nova will turn off menu items marked as being for the old sim type and turn on items marked as being for the new sim type</li>
	<li>When deleting a rank set from the database, Nova will make sure that any players using that rank set will be updated to one of the admin's choosing. Additionally, if the rank set being deleted is the default rank set, it will also change the system default at the same time.</li>
</ul>

<h3>Data Management</h3>

<ul>
	<li>Added a simple slider and counter to change open slots for a position</li>
	<li>Added the ability to select uploaded images when editing a tour item</li>
	<li>Added the ability to select an uploaded image when editing an award</li>
	<li>Added the ability to select uploaded images when editing a mission</li>
	<li>Updated positions page to only show the position name and open positions and hide everything else for better organization</li>
	<li>When creating a mission with a status of current, Nova automatically sets the start time</li>
	<li>When changing a mission with a status of current to a status of completed, Nova automatically sets the end time</li>
</ul>

<h3>Character Management</h3>

<ul>
	<li>Added AJAX on the chain of command page for a better user experience</li>
	<li>Added drag and drop functionality for re-ordering the chain of command</li>
	<li>Added the ability to set a player's access role if they don't have one when activing a character</li>
	<li>Added the ability to select uploaded images when editing a character bio</li>
	<li>When viewing the listing of playing characters, only departments with characters in them are shown</li>
</ul>

<h3>User Management</h3>

<ul>
	<li>New interface for user account that includes tabs and keeps any items only admins can see in a hidden tab</li>
	<li>Moved moderation flags to the user account instead of its own page</li>
	<li>Added preferences tab for allowing players to set their email preferences</li>
	<li>Changed personalized menus to be 5 items instead of 10 (most of the commonly used menu items like posting, inbox, account, LOA, etc. are available already in the dashboard)</li>
	<li>Selecting a skin in Site Options will use an AJAX request to show a preview image below the menu</li>
	<li>When nominating for an award, selecting the award from the menu triggers AJAX events to show the award description and populate the character menu with the characters that should be available based on the award category</li> 
</ul>

<h3>Reporting</h3>

<ul>
	<li>Added moderation report</li>
	<li>Added application report</li>
	<li>Added LOA report</li>
	<li>Removed the sim progress report</li>
</ul>