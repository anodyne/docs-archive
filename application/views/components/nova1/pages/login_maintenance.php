<h1><?php echo $header;?></h1>

<p>Nova provides the ability to shut the entire system down while admins are doing maintenance on the system. This ensures that no one is in the site reading and writing to the database while you're doing updates to it. Turning maintenance mode is done from the Site Settings page. Once you've turned it on, only logged in system administrators are the only peopel who can log in and use the site. (The system administrator tag is found in each user's account page admin tab.) Everyone else is redirected to the login page with a message that the site is in maintenance mode and they should try coming back later.</p>

<h2>Making It Pretty</h2>

<p>Nova does provide a simple way to build a custom maintenance page for your users to see instead of the login page. In order to create a custom maintenance page, all you need to do is build a simple <dfn>maintenance.php</dfn> page and store it in the proper place on your server.</p>

<p class="alert alert-info"><strong>Note:</strong> When building a maintenance.php page, you don't have to know any PHP, you can simply build an HTML page then change the extension to .php before you upload it.</p>

<p>Once you've created your maintenance page, you will need to upload to one of two locations on your server and Nova will take care of the rest. If you want it to be specific for your skin, you can put the maintenance page in <samp>application/views/{your default skin}/login/pages</samp> or in <samp>application/views/_base_override/login/pages</samp>. If Nova finds the maintenance file in either of those locations, it'll use that instead of redirecting to the login page.</p>