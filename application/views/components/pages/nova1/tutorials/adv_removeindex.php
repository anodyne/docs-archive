<h1><?php echo $header;?></h1>

<p>Further adding to Nova's flexibility, you can create an .htaccess file that will allow users to access your site without the <samp>index.php</samp>. In order to do this, you need to have a host that allows .htaccess files and has mod_rewrite turned on. If you're not sure if your server matches these things, contact your host. Once you (or your host) have created the .htaccess file in your root directory, copy and paste the following code in:</p>

<pre>&lt;IfModule mod_rewrite.c>
    RewriteEngine On
    # Leave 'RewriteBase /' if not installing into subfolder
    RewriteBase /nova/
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ index.php?/$1 [L]
&lt;/IfModule>

&lt;IfModule !mod_rewrite.c>
    # If we don't have mod_rewrite installed, all 404's
    # can be sent to index.php, and everything works as normal.
    # Submitted by: ElliotHaughin

    ErrorDocument 404 /index.php
&lt;/IfModule></pre>

<p class="important"><strong>Note:</strong> If you have changed the name of your index file, you need to make the necessary change to the script where it tries to find the file. In addition, you'll need to set the RewriteBase to the proper subfolder or simple a slash if you aren't installing Nova in a subfolder.</p>