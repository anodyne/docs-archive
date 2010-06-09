<h1><?php echo $header;?></h1>

<p>Social interaction is an important part of the comments feature in Nova. Now, after you&rsquo;ve read a post or log you really like, you can easily add a comment to it letting the author(s) know that you liked it. If you have questions about it, you can ask a question too. Comments are a great way to interact with the other players on the RPG.</p>

<p>The page is split up in to 3 tabs: post comments, log comments and news comments. The tabs allow you to easily move from one type of comment to the other. Within each tab are 2 additional sub-tabs: activated and pending. If you get an email stating you have pending comments to approve, this is where you will approve them.</p>

<h4>Permissions</h4>

<p>In order to manage comments, a user needs to have <kbd>manage/comments</kbd> permissions.</p>

<h2>Editing a Comment</h2>

<p>Like most other components in Nova, you can easily edit a comment by clicking on the <a href="#" class='tip' tooltip='<?php echo img($images['edit']);?>'>edit icon</a> and making your changes in the pop-up window that appears. Clicking <strong>Submit</strong> will complete the update and the changes will be seen immediately for that comment.</p>

<h2>Deleting a Comment</h2>

<p>Deleting a comment is only a matter of clicking on the <a href="#" class='tip' tooltip='<?php echo img($images['delete']);?>'>delete icon</a> and confirming you want to delete the comment by clicking <strong>Submit</strong>. If you decide that you don&rsquo;t want to delete the comment, you can get out of the modal window by either clicking the X in the upper corner, hitting escape on your keyboard or clicking anywhere outside the window.</p>

<h2>Approving a Comment</h2>

<p>If an admin has set a moderation flag on a player&rsquo;s ability to comment on posts, their comments will automatically be held for review. If that happens, Nova will send an email out to anyone with <kbd>manage/comments</kbd> permissions to notify them of a pending comment. In addition, a notification will appear in the admin control panel as well. While activated comments only show the first 25 words, pending comments will show you the entire comment string. You can choose to approve the comment by clicking on <a href="#" class='tip' tooltip='<?php echo img($images['approve']);?>'>approve icon</a> and confirming you want to approve that comment by clicking <strong>Submit</strong>. If you do not want to approve the comment, simply delete it.</p>