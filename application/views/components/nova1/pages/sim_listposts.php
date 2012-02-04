<h1><?php echo $header;?></h1>

<p>The list mission posts page will show a user all activated mission posts in the system, starting with the last mission entry to be posted. The list that's generated from the database will show the title of the post as well as the date the post was posted, the authors and the mission the post is in. On the far right is a link to the view post page for that entry.</p>

<p>By default, Nova will display all mission posts. By adding <dfn>mission/X</dfn> where X is the ID number of a mission, the page will change to just show mission posts for that particular mission.</p>

<p>To reduce the load on the database, Nova uses CodeIgniter's built-in pagination library. By default, Nova will show 25 posts per page. This can be changed from the <?php echo Html::anchor('nova1/pages/site/settings', 'Settings');?> page. The pagination will work regardless of whether you're listing all posts or just a mission's posts.</p>