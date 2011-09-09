<h1><?php echo $header;?></h1>

<p>Viewing a log in Nova is effortless. The page&rsquo;s title is the log title with the pertinent author information and date posted below the title. If any tags exist for the log, a field will appear with the relevant tags.</p>

<p>The main content of the log is below the log information.</p>

<p>After the content of the log, an <a href="#" class='tip' tooltip='<?php echo img($images['rss']);?>'>RSS icon</a> gives users the chance to subscribe to the RSS feed for personal logs from the page. In addition, at both the top of the page and the bottom after the content of the personal log are arrows to move back and forth through activated logs. The ordering is in the order they were posted.</p>

<h2>Comments</h2>

<p>If there are comments associated with a personal log, they will be displayed after the body of the log along with a count of how many comments there are. To add a comment to the log you&rsquo;re viewing, simply click the Add a Comment link or the <a href="#" class='tip' tooltip='<?php echo img($images['comment']);?>'>icon</a> to the side. A Facebox window will appear over everything where you can add the text you want and click submit. You will only be able to post a log comment as your primary character. This cannot be changed. You will only see the link and be able to add a comment if you are logged in to the site, though everyone visiting the site can see comments.</p>

<p>Once you&rsquo;ve submitted your comment, an email will be sent to the author of the log notifying them that someone has posted a comment to one of their personal logs (if their preferences are set up to send them emails for that event). It will then display the text of the comment you added. By default, log authors have no control over deleting or editing comments, only the game master has that control (unless that power is given to every member of the crew).</p>

<p>If the person submitting the comment has their moderation flag set to yes, the comment will be given a status of pending and all users with Level 2 Comment Management access will receive an email notifying them of a pending comment. Once the comment has been approved, it will appear on the site.</p>