<h1>Changing the Index File</h1>

<h2>The Problem</h2>

<p>Your sim is running a static site, static page, forums or something else (or hell, you just want a new file name) and you want to change the name of the front file Nova uses from <samp>index.php</samp> to <samp>nova.php</samp>.</p>

<h2>The Solution</h2>

<p>Changing Nova's bootstrap file is actually incredibly easy. Before you begin though, you should back up a copy of the index file to have it just in case something goes wrong.</p>

<h3>1. Change the Index File Name</h3>

<p>Rename the index file from <samp>index.php</samp> to <samp>nova.php</samp> (or whatever you want it to be). Upload the bootstrap file to your server.</p>

<h3>2. Change the Config File</h3>

<p>Next, we need to update the config file to point to the right bootstrap file. Open <samp>application/config/config.php</samp>. You'll notice that the file is pretty much empty. This is done so that we can update the configuration if necessary without having admins change config options with every update. In order to change the index file, you just need to add the following line at the end of the file:</p>

<pre>$config['index_page'] = "nova.php";</pre>

<p>All this does is overrides the default <samp>index.php</samp> option with the new bootstrap file. Once you've saved and uploaded the config file back up to your server, you can navigate to your new file and you should see Nova as usual.</p>