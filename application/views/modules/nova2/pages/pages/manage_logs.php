<h1><?php echo $header;?></h1>

<p>In character posts are one way for other players to get to know your character, but personal logs are another great way to delve deeper in to your characters. Personal logs allow your character to share details they may not share with other characters. These are great tools for character development.</p>

<p>The page is split up in to 3 tabs: activated, saved and pending. The tabs allow you to easily move from one status of personal log to the other quickly. The saved tab will show you all in progress personal logs. If you get an email stating you have pending personal logs to approve, you will come to the pending tab to approve them.</p>

<h4>Permissions</h4>

<p>In order to manage personal logs, you need to have <kbd>manage/logs</kbd> permissions with either access level 1 or 2. Level 1 allows an author to see their own personal logs, activated and saved. Level 2 allows an admin to see all personal logs in all states.</p>

<h2>Editing a Personal Log</h2>

<p>Like most other components in Nova, you can easily edit a personal log by clicking on the <a href="#" class='tip' tooltip='<?php echo img($images['edit']);?>'>edit icon</a> and making your changes in the pop-up window that appears. Clicking <strong>Submit</strong> will complete the update and the changes will be seen immediately for that personal log.</p>

<h2>Deleting a Personal Log</h2>

<p>Deleting a personal log is only a matter of clicking on the <a href="#" class='tip' tooltip='<?php echo img($images['delete']);?>'>delete icon</a> and confirming you want to delete the log by clicking <strong>Submit</strong>. If you decide that you don&rsquo;t want to delete the log, you can get out of the modal window by either clicking the X in the upper corner, hitting escape on your keyboard or clicking anywhere outside the window.</p>

<h2>Approving a Personal Log</h2>

<p>If an admin has set a moderation flag on a player&rsquo;s ability to post personal logs, their logs will automatically be held for review. If that happens, Nova will send an email out to anyone with <kbd>manage/logs</kbd> permissions to notify them of a pending log. In addition, a notification will appear in the admin control panel as well. (If you want to view the personal log, you can click the <a href='#' class='tip' tooltip='<?php echo img($images['view']);?>'>view icon</a> and you&rsquo;ll be taken to that personal log.) You can choose to approve the personal log by clicking on the <a href="#" class='tip' tooltip='<?php echo img($images['approve']);?>'>approve icon</a> and confirming you want to approve that log by clicking <strong>Submit</strong>. If you do not want to approve the log, simply delete it.</p>