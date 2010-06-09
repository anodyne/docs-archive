<h1><?php echo $header;?></h1>

<h4>Permissions</h4>

<p>In order to manage pages in Thresher, a user needs to have <kbd>wiki/page</kbd> permissions.</p>

<h2>Viewing a Page</h2>

<p>The page view is where most people will spend their time when using Thresher. From this page, users can read the page, view the page history and, if logged in, comment on the wiki page. In addition, admins can revert a wiki page to a previous draft of the page if they so choose.</p>

<p>Below the wiki page title, logged in users will be shown the <a href="#" class='tip' tooltip='<?php echo img($images['comment']);?>'>add comment icon</a> where they can add their comments to a wiki page. Below the comments section is the summary (if one exists) of the page. This is a good way to let users know exactly what the page is about before they start reading.</p>

<h3>History</h3>

<p>The history tab when viewing a page shows the progression the page has gone through to get to its current form, including who and when drafts of the page were created as well as links to the specific drafts so users can see how the page has changed over the course of the page's life.</p>

<h4>Reverting To a Previous Draft</h4>

<p>If a user is logged in, the <a href="#" class='tip' tooltip='<?php echo img($images['revert']);?>'>revert icon</a> will appear to the right of each history entry. Clicking on the revert icon will create a new draft that's a duplicate of the one clicked and set it to the page's current draft. This can be useful if someone makes changes to page and they need to be removed.</p> 

<h3>Comments</h3>

<p>Like mission posts, personal logs and news items, Thresher allows comments to be added to wiki pages and viewed by anyone. In order to add a comment to a wiki page, users will have to be logged in and comments will have to be turned on for that particular page (done by editing the page). Like other kinds of comments, users can be moderated if need be from the admin tab of the user account page. A page's comments can be seen by clicking on the Comments tab.</p>

<h4>Adding a Comment</h4>

<p>To add a comment to a wiki page, simply click on the <strong>Add a Comment</strong> link at the top of the page. A modal window will appear with a text field where you can type your comment. Once you're done, click <strong>Submit</strong> and the comment will be added to the database. If you change your mind and don't want to add the comment, you can close the model window by clicking on the X, hitting the Escape button or clicking anywhere outside of the modal window.</p>

<h4>Managing Comments</h4>

<p>Comments are managed from the <?php echo anchor('nova/pages/manage/comments', 'Manage Comments');?> page.</p>

<h2>Viewing a Draft</h2>

<p>In addition to being able to view a full page, you can also view a specific draft of a wiki page by clicking on the <a href="#" class='tip' tooltip='<?php echo img($images['view']);?>'>view icon</a> from the history tab when viewing a wiki page. Unlike viewing a page, viewing a draft does not include tabs with comments and history. (The reason for this is that comments and history are page-level items, not draft-level items.) In addition to the author of the draft, Thresher will display the categories associated with that draft and the content of the draft.</p>