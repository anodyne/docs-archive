<h1><?php echo $header;?></h1>

<p>The Writing Control Panel is where users will see a variety of information and be able to create a new mission post, personal log, or news item.</p>

<p>At the top of the page are a series of links for writing new entries. If the user doesn't have access to one or more of the pages, the links will not be displayed. Clicking on the links will take the user to the respective page for writing that type of entry.</p>

<p>There are 3 tabs on the Writing Control Panel for saved entries, the user's recent entries, and all recent entries.</p>

<p>Saved Entries will show all the user's in progress entries, categorized by type (mission post, personal log, news item). With saved mission posts, if the user wasn't the last person to update it, a <a href="#" class='tip' tooltip='<?php echo img($images['unread']);?>'>green icon</a> will be displayed next to the title indidating the user needs to respond. The check to see if the user was the last one to save the post comes from the user's main character flag. If the user has recently changed their main character, all their saved posts will show as not having been responded to yet, even if the user was the last person to do something with it.</p>

<p>My Recent Entries will show the user's last 5 mission posts, 5 personal logs, and 5 news items with links to view all that player's posts and logs. Additionally, a user can go from the Writing Control Panel to the post, log, or news page to view the specific item.</p>

<p>All Recent Entries will show the last 5 mission posts, 5 personal logs, and 5 news items posted to Nova from all players. Additionally, there are links to see all posts, all logs, and all news items from that tab as well as links to see the individual items listed in the tabs.</p>

<h3>Permissions</h3>

<p>In order to access the write control panel, a user needs <kbd>write/index</kbd> privileges.</p>