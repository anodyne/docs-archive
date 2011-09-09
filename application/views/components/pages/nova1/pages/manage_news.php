<h1><?php echo $header;?></h1>

<p>RPGs aren&rsquo;t all about the story. Sometimes, it&rsquo;s important to get information out to the players. In that case, Nova has a built-in news feature which allows anyone to post news items that will be emailed out to the crew. Using the features on this page, you can manage news items.</p>

<p>The page is split up in to 3 tabs: activated, saved and pending. The tabs allow you to easily move from one status of news item to the other quickly. The saved tab will show you all in progress news items. If you get an email stating you have pending news items to approve, you will come to the pending tab to approve them.</p>

<h4>Permissions</h4>

<p>In order to manage news items, you need to have <kbd>manage/news</kbd> permissions with either access level 1 or 2. Level 1 allows an author to see their own news items, activated and saved. Level 2 allows an admin to see all news items in all states.</p>

<h2>Editing a News Item</h2>

<p>Like most other components in Nova, you can easily edit a news item by clicking on the <a href="#" class='tip' tooltip='<?php echo img($images['edit']);?>'>edit icon</a> and making your changes in the pop-up window that appears. Clicking <strong>Submit</strong> will complete the update and the changes will be seen immediately for that news item.</p>

<p class="important"><strong>Note:</strong> News items that have been edited will not be emailed out to the players again. If it&rsquo;s an important change, you&rsquo;re better off deleting the news item and creating a new one.</p>

<h2>Deleting a News Item</h2>

<p>Deleting a news item is only a matter of clicking on the <a href="#" class='tip' tooltip='<?php echo img($images['delete']);?>'>delete icon</a> and confirming you want to delete the news item by clicking <strong>Submit</strong>. If you decide that you don&rsquo;t want to delete the news item, you can get out of the modal window by either clicking the X in the upper corner, hitting escape on your keyboard or clicking anywhere outside the window.</p>

<h2>Approving a News Item</h2>

<p>If an admin has set a moderation flag on a player&rsquo;s ability to send news items, any news items they post will automatically be held for review. If that happens, Nova will send an email out to anyone with <kbd>manage/news</kbd> permissions to notify them of a pending news item. In addition, a notification will appear in the admin control panel as well. (If you want to view the news item, you can click the <a href='#' class='tip' tooltip='<?php echo img($images['view']);?>'>view icon</a> and you&rsquo;ll be taken to that news item.) You can choose to approve the news item by clicking on the <a href="#" class='tip' tooltip='<?php echo img($images['approve']);?>'>approve icon</a> and confirming you want to approve that news item by clicking <strong>Submit</strong>. If you do not want to approve the news item, simply delete it.</p>