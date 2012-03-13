<h1><?php echo $header;?></h1>

<p>Nova is incredibly flexible and allows admins to change the name of the application folder in the event you want to run multiple installations of Nova from the same server directory. Changing the name of the application folder is pretty straightforward.</p>

<h2>The Scenario</h2>

<p>You are running an RPG called USS Enterprise on your own web space. Out of the blue, your host notifies you that there's a conflict with a folder in your directory and you can't have a folder called application and need to change it right away to avoid further conflicts.</p>

<h2>The Steps</h2>

<h3>1. Rename the application folder</h3>

<p>The first step is to upload a copy of Nova to your server and rename the application folder to <strong>enterprise</strong>.</p>

<h3>2. Change the application folder variable</h3>

<p>Each copy of Nova references the application folder by name, allowing you to easily change the name and location of the folder. (CodeIgniter, by default, stores the application folder inside the core, which is normally called system instead of core. For Nova, we've renamed the system folder for security reasons and moved the application folder outside of the CI core.) To change this variable, we have to open <code>index.php</code> which is located in the root Nova folder.</p>

<p>In <code>index.php</code>, find the line that defines the variable <var>$app_folder</var>. Make that line read:</p>

<pre>$app_folder = 'enterprise';</pre>

<h3>3. Upload your new file</h3>

<p>With the changes complete, save the file and upload it to your server, overwriting the existing index.php file. When you navigate to your site, you won't notice anything different, but instead of reference a folder named application, Nova will instead be referencing a folder named enterprise.</p>