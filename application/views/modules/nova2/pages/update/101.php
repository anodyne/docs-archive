<h1><?php echo $header;?></h1>

<h2>Step 1: Turn on Maintenance Mode</h2>

<p>Nova includes a new feature called maintenance mode that allows admins to shut off access to the site to everyone except system administrators. This isn't just handy when doing updates, it's actually required. Nova will not let you update the system without first turning maintenance mode on. This ensures that no one is accessing the database while you're running the update.</p>

<p class="important"><strong>Note:</strong> You can turn maintenance mode on from the Site Settings page in the Admin Control Panel.</p>

<h2>Step 2: Update the CodeIgniter Core</h2>

<p>Replace these files and directories in your "core" folder with the new versions:</p>

<ul>
	<li><dfn>core/codeigniter</dfn></li>
	<li><dfn>core/database</dfn></li>
	<li><dfn>core/helpers</dfn></li>
	<li><dfn>core/language</dfn></li>
	<li><dfn>core/libraries</dfn></li>
</ul>

<h2>Step 3: Run the Update Script</h2>

<p>Open your browser and navigate to <samp>http://&lt;yoursite&gt;/index.php/update</samp>. Verify your email address and password to be given access to the page and then click on the link to begin the database update.</p>
