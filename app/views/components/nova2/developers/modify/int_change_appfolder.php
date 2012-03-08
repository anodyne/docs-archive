<h1>Changing the Name of the Application Folder</h1>

<h2>The Problem</h2>

<p>You're toying around with the idea of running several Nova installations from the same directory and you can't have multiple application folders (or maybe you just want to change it for the hell of it).</p>

<h2>The Solution</h2>

<p>Changing Nova's application folder is actually incredibly easy. Before you begin though, you should back up your application directory to have it just in case something goes wrong.</p>

<h3>1. Change the Name of the Application Folder</h3>

<p>Rename the application folder on the server from <samp>application</samp> to <samp>uss_enterprise</samp> (or whatever you want it to be).</p>

<h3>2. Change the Index File</h3>

<p>Next, we need to update the index file to point to the right directory for our application. Open <samp>index.php</samp> and find the <var>$app_folder</var> variable (it's on line 66 or somewhere close by). Make the <var>$app_folder</var> variable point to your new application folder.</p>

<pre>$app_folder = 'uss_enterprise';</pre>

<p>Once you've saved and uploaded the index file back up to your server, you can navigate to your Nova installation and you should see Nova as usual.</p>

<p class="alert alert-info"><strong>Important:</strong> Since this change doesn't happen in the application directory, it's possible a change in the future to the index file may force you to re-apply this change after an update.</p>