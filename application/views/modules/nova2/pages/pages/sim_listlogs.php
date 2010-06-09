<h1><?php echo $header;?></h1>

<p>The list personal logs page will show a user all activated personal logs in the system, starting with the last personal log to be posted. The list that&rsquo;s generated from the database will show the title of the log as well as the date the log was posted. To the right, the author will be displayed and further right, a link to the view log page for that particular log.</p>

<p>To reduce the load on the database, Nova uses CodeIgniter&rsquo;s built-in pagination library. By default, Nova will show 25 logs per page. This can be changed from the <?php echo anchor('nova/pages/site/settings', 'Settings');?> page.</p>