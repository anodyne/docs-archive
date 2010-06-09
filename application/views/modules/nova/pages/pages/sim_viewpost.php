<h1><?php echo $header;?></h1>

<p>Viewing mission posts in Nova is effortless. The page&rsquo;s title is the post title with the pertinent author information and post date below the title. Further down the page, information about mission, post tags, location and timeline are displayed, but only if there&rsquo;s something in those fields, eliminating blank fields if players didn&rsquo;t put information in those fields when posting the mission entry. The tag field has been removed from Nova as it has no viable use.</p>

<p>The main content of the post is below the post information.</p>

<p>After the content of the post, an <a href="#" class='tip' tooltip='<?php echo img($images['rss']);?>'>RSS icon</a> gives users the chance to subscribe to the RSS feed for mission posts from the page. In addition, at both the top of the page and the bottom after the content of the mission post are arrows to move back and forth through activated mission posts. The ordering is in the order they were posted.</p>

<h2>Comments</h2>

<p>If there are comments associated with a mission post, they will be displayed after the body of the post along with a count of how many comments there are. To add a comment to the mission post you&rsquo;re viewing, simply click the Add a Comment link or the <a href="#" class='tip' tooltip='<?php echo img($images['comment']);?>'>icon</a> to the side. A Facebox window will appear over everything where you can add the text you want and click submit. You will only be able to submit a post comment as your primary character. This cannot be changed. You will only see the link and be able to add a comment if you are logged in to the site, though everyone visiting the site can see comments.</p>

<p>Once you&rsquo;ve submitted your comment, an email will be sent to the authors of the mission post notifying them that someone has posted a comment to one of their mission posts (if their preferences are set up to send them emails for that event). It will then display the text of the comment you added. By default, post authors have no control over deleting or editing comments, only the game master has that control (unless that power is given to every member of the crew).</p>

<p>If the person submitting the comment has their moderation flag set to yes, the comment will be given a status of pending and all users with Level 2 Comment Management access will receive an email notifying them of a pending comment. Once the comment has been approved, it will appear on the site.</p>