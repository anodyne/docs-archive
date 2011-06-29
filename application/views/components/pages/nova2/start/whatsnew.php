<h1 class="page-head">What's New in Nova 2</h1>

<h2>New File Structure</h2>

<p>One of the biggest reasons for Nova 2 was to vastly improve the file structure of Nova. We've heard from our customers that updating Nova is difficult and time consuming. For a product that promises to "get you back to playing your game" that's unacceptable. We went back to the drawing board with our file structure to make sure updating Nova is dead simple and we think we've nailed it.</p>

<p>When it comes time to update Nova, all you'll need to do is delete the <samp>nova</samp> directory and upload the newer copy. After that, just run the update script from your web browser like you would normally and you're done. In, out and back to your game.</p>

<h2>New Database Configuration Process</h2>

<p>Taking cues from SMS, Nova 2 includes a brand new database configuration process. Instead of having to open files up and edit them before starting the Nova 2 install, you'll simply go to the site and if there's no database configuration file, you'll be taken through a simple process that will collect your information and create the file for you. Before the file is created though, Nova will actually try to connect to the database and will let you know right away if something is wrong. We think this new process will make it easier and faster to get your game up and running on Nova 2.</p>

<h2>Thresher R2</h2>

<p>By far, the majority of our focus has been on Thresher and getting it up to Release 2. There are a ton of improvements to our mini-wiki that will make using it even better than before.</p>

<h3>System Pages</h3>

<p>People told us they wanted more control of some of the static content in Thresher and we came up with a solution that does just that. System pages are specialized wiki pages that cannot be deleted but can be edited like any other wiki page. Make the front Thresher page just what you want by editing the system page in the same place you'd edit a normal wiki page. In addition to the main page, we've added system pages for the all categories listing page, individual category page and creating and editing pages.</p>

<h3>Page Restrictions</h3>

<p>Have a page that only a few people should be able to get to? In Thresher R1, you were out of luck. In Thresher R2, you can simply set access level restrictions on the page and only those access levels will be able to see them.</p>

<h3>Brand New Category Selection Interface</h3>

<p>Let's be honest, a listing of checkboxes wasn't much of an interface for selecting categories for a page. Now, a more elegant solution makes it easier to categorize your pages.</p>

<h3>Create Categories On-the-Fly</h3>

<p>Another one of the big things users told us they wanted to be able to do was to create categories right from the create/edit page. Now you can. Don't have a category for what you want? Just create it then select it and your page will be using that category. Just getting started with Thresher and don't have any categories yet? Don't worry, Thresher will prompt you to create some categories right on the page.</p>

<h3>User Experience Improvements</h3>

<p>We're always looking to make the user experience of our products better than before. In Thresher R2, we've made viewing a wiki page a much better and simpler experience. In addition, we've overhauled the Manage Pages section with a whole new user interface that puts more controls at admins fingertips and allows filtering pages by restrictions, the type of page and more. All in all, you'll be pleasantly surprised with the new interface for managing your Thresher pages.</p>

<h3>Better Searching</h3>

<p>This one is pretty self-explanatory. We've worked out several bugs that existed in the search features for Thresher so that you'll get more accurate search results. In addition, we've brought search front and center on the main page with an option to search the minute you land in Thresher.</p>

<h2>Simplified Character/User Management</h2>

<p>One of Nova 1's major features was the separation of users and characters, allowing a single user to control multiple characters. While this was a great feature, the management piece was a bit of a struggle for a lot of admins. It was all-to-easy to deactivate a character but leave the user active or vice versa. To help with this management headache, we've again borrowed from Nova 3's features to provide a dead-simple way to manage characters and users. If you want to take action on a character (activate, deactivate, make an NPC or make an NPC a playing character), admins will do so now with a series of buttons:</p>

<ul>
	<li><strong>Activating an Inactive Character</strong> &ndash; Only displayed with inactive characters, this button will not only activate an inactive character, but will also give admins the ability to activate the user if they're inactive, make the character the primary character for the user or even assign the character to a completely different user.</li>
	<li><strong>Deactivating an Active Character</strong> &ndash; Only displayed with active character, this button will deactivate the active character and check the user for any other active characters. If the user doesn't have any other active characters, admins will have an option to deactivate the user right then and there. If the user does have other characters and the one being deactivated is their main character, a dropdown menu will allow admins to set a new main character for that user.</li>
	<li><strong>Making an Active or Inactive Character an NPC</strong> &ndash; Displayed for both active and inactive characters, this button will move an active or inactive character to be an NPC. If the character in question is someone's main character, a dropdown menu will allow admins to set a new main character for that user. The character will continue to be associated with that user even as an NPC unless the admins selects the option to clear the user association. In the event that making an active character an NPC leaves a user without an active character, admins will have the option to deactivate the user as well.</li>
	<li><strong>Making an NPC an Active Character</strong> &ndash; Only displayed for non-playing characters, this button will move an NPC to be an active character. Admins will be able to associate the character with a user or change the user the character is associated with in addition to setting the character to be the primary character. In the event a character is being associated with an inactive user, the option will be given to activate that user.</li>
	<li><strong>Activating a User</strong> &ndash; Only displayed for inactive user accounts, this button will activate an inactive user as well providing admins with the ability to activate any of that user's inactive characters at the same time.</li>
	<li><strong>Deactivating a User</strong> &ndash; Only displayed for active user accounts, this button will deactivate an active user as well as deactivate all of their active characters.</li>
</ul>

<h2>Nested Mission Groups</h2>

<p>One of the final additions to Nova 1 was mission groups as a way to pull missions together. After seeing how people are using the feature, we've expanded mission groups to allow them to be nested down one level. This means you can now have groups inside groups. Along with this, we've completely re-written the user interface for viewing mission groups which will give users more information at a glance than before.</p>

<h2>Expandable Text Areas</h2>

<p>Like Facebook and other sites, some of Nova's text areas (mainly when writing mission posts, personal logs and news items) will now expand as you type to give you a bigger canvas to compose your messages.</p>

<h2>Updates to Site Messages</h2>

<p>One of the biggest complaints about Nova is that it makes adding content more difficult than it needs to be. For us, it's always been a security issue to allow script, audio, video, iframe and object tags in the site messages. There are just too many documented cases of people using those for malicious purposes. Sadly, our focus on security made it more difficult for games to do the things they could do before with SMS. That shouldn't be the case. Because of that, we've relented on this issue and now allow all of the previously disallowed HTML tags in site messages. That means that games can now link to YouTube and Vimeo media without having to use seamless substitution. We think this is a big win for our users, though it does come at a cost. You should make sure you absolutely trust the source of any code you put in to your site messages so there are no security issues.</p>

<h2>Deck Listing Updates</h2>

<p>The deck listing page received several much-needed user interface updates for Nova 2.</p>

<p>The first change you'll notice on the deck listing page is the new menu at the top that will let you quickly move from item to item without having to scroll forever. Games that have a lot of decks in their deck listing will find this especially handy.</p>

<p>The second change is that decks are now displayed outside of a table. The previous table-based layout made the page look messy. Without tables, the deck listing flows a little better and makes it significantly easier to read, especially for games with lots of decks and even more content.</p>