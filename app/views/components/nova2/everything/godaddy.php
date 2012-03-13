<h1>GoDaddy &amp; Nova 2</h1>

<p>During the course of the Nova launch, users on GoDaddy hosting reported several major issues. After doing some research, it's become clear that GoDaddy's setup doesn't work well with CodeIgniter, so some changes need to be made in order to make it work properly.</p>

<h2>404s and/or a Blank White Page</h2>

<p>GoDaddy doesn't respect CodeIgniter's URI protocol, so we have to change it and make sure the URI is built the right way to ensure we aren't getting 404s or simply a white page. In order to change the URI protol, you need to open <code>app/config/config.php</code>. The first item to change is the index page. Because we're changing the way the URI is handled, we need to add to the index. Find the <var>$config['index_page']</var> variable near the top of the page and add a question mark to the end of it. The final line should look like:</p>

<pre>$config['index_page'] = "index.php?";</pre>

<p>With that finished, find the variable <var>$config['uri_protocol']</var> and change it from <dfn>AUTO</dfn> to <dfn>REQUEST_URI</dfn>. In the end, it should look like:</p>

<pre>$config['uri_protocol'] = "REQUEST_URI";</pre>

<p>Save the file, upload it and refresh Nova and you should see your site.</p>

<h2>Emails</h2>

<p>GoDaddy's setup doesn't play well with CodeIgniter's email class, so users on a GoDaddy host may notice that emails aren't being sent out from the system. To fix this, open <code>app/config/email.php</code> to change several settings. The following items need to be changed:</p>

<h4>Protocol</h4>

<p>By default, Nova uses PHP's mail function, but it doesn't work on GoDaddy. Change the protocol to sendmail. If it still doesn't work for you, check with GoDaddy about the proper mailpath.</p>

<pre>$config['protocol'] = 'sendmail';</pre>

<h4>SMTP</h4>

<p>You'll need to set up the SMTP information for sendmail to use. The SMTP host should be copied exactly and then you can fill in your information in the username and password sections.</p>

<pre>$config['smtp_host'] = 'relay-hosting.secureserver.net';
$config['smtp_user'] = '[your_username]@[your_domain]';
$config['smtp_pass'] = '[your_password]';</pre>

<p>The SMTP port should stay the same. Save the file, upload it and you should be all set with email. Other users have successfully used Gmail and Yahoo mail to use for SMTP, but there have also been reports of it not working because of the need for SSL to connect to Google and Yahoo's email servers.</p>