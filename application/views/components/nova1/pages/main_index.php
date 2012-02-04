<h1><?php echo $header;?></h1>

<p>The index page of the main section is, by default, the first page someone lands at when they go to your site. You can change which section is loaded when nothing is explicitly stated in the URL in the <samp>application/config/routes.php</samp> file. All you have to do is change the <var>$route['default_controller']</var> from main to whatever controller (section) you want to be loaded first.</p>

<h2>Welcome</h2>

<p>The main title is controlled through the Site Messages page. You can change the title to be whatever you want. Likewise, the content below the title is controlled through the same page and can be changed to whatever you'd like. For both, you can include some "light HTML" (&lt;strong>, &lt;em>, &lt;font>, &lt;span>) if you want. We don't recommend trying to put tables and divs in either.</p>

<h2>Recent News</h2>

<p>In order to show news on the main index page, two criteria must be met. First, there have to be news items coming out of the database. If there are no news items, it will not display the Recent News section. Second, your settings must be set to show news on the main page. Even if you have news items and that is set to not display news, it will not display the Recent News section.</p>

<p>Within the Recent News section, clicking on the title will take you to the news item. If you want to go to all the news, you can use the menu item in the sub-navigation labeled News.</p>