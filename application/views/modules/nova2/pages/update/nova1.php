<h1><?php echo $header;?></h1>

<p>So you've used Nova 1 before and now you're looking to make the jump to Nova 2, but how? This guide will walk you through the entire process so that in a matter of minutes, you'll be up and running on Nova 2 and using all the brand new features version 2 has to offer! Don't let the size of the guide scare you, it's actually a painless process. But before you do anything, make sure you read the entire guide.</p>

<p>Before we start, you'll need the make sure you're running at least Nova 1.1 as well as needing the following information:</p>

<ul>
	<li>Your database location (localhost or another means of connecting)</li>
	<li>Your database name</li>
	<li>Your database username &amp; password (these may or may not be the same as your FTP username &amp; password ... if you have questions, contact your web host)</li>
	<li>Your FTP username &amp; password</li>
	<li>The database table prefix of your Nova 1 installation (in most cases, this will be <dfn>nova_</dfn> unless you changed it when installing Nova 1)</li>
</ul>

<p>In addition, you'll need to make sure your server is running at least PHP 5.2.4 in order to run Nova 2. If you aren't, you'll likely see an error like the one below:</p>

<pre>Parse error: syntax error, unexpected T_ARRAY, expecting '&' or T_VARIABLE or T_CONST</pre>

<p class="important">If you have SMS and want to upgrade to Nova 2, please see the <?php echo anchor($this->router->fetch_module().'/overview/upgrade', 'upgrade guide');?>. If you want to do a fresh install of Nova 2, please see the <?php echo anchor($this->router->fetch_module().'/overview/install', 'install guide');?>.</p>

<h2><span class="install-step">1</span> Backup Nova 1</h2>

<p>You're about to make massive changes to the database and the files of Nova, so it's important you have a good backup of your Nova installation before you start. Open your FTP program and download all of your Nova files to your desktop for safe keeping. After that's done, go in to phpMyAdmin and export the Nova tables to your desktop (it'll end up being a <samp>.sql</samp> file) in case you have to fall back to your Nova 1 installation. Once the backup process is finished, you're ready to start the update process!</p>

<h2><span class="install-step">2</span> Upload Nova</h2>

<p>Nova is software that runs on a server, so in order to use and install it, you'll need to upload it to a server that has PHP and MySQL. The first thing you have to do to start the installation process is upload the Nova files to your server. Since you'll likely have the old Nova 1 file still in place, make sure you delete all of them and then upload the new files. Windows machines especially have trouble overwriting files sometimes, so it's best to delete and then upload again. If you aren't sure how to upload files to your server, contact your web host for help.</p>

<h2><span class="install-step">3</span> Verification</h2>

<p>Nova is a pretty advanced piece of web-based software, so it's important to verify that everything will work properly. Nova comes with a file that is called automatically when you try to go to a Nova page. To start the verification, fire up your browser of choice and point it to your site. You'll automatically be redirected to a simple page that runs several tests on your server to make sure everything will work. Once you've verified Nova can run on your server, you have to delete the <samp>install.php</samp> file. With the verification file deleted, you can go back to your site and you'll be redirected into the install process.</p>

<p class="critical"><strong>Note:</strong> It's incredibly important that you delete the file and don't just rename it. There's information in the install file about your server that you shouldn't be making available to the world!</p>

<h4><span class="install-substep">a</span> Kohana</h4>

<p>Nova is built off of the Kohana PHP framework which has several requirements. The requirement page is broken down in to three sections: required, recommended and optional. If anything in the required section fails, you won't be able to install Nova at all and you'll need to talk to your web host about getting things updated. In most cases though, you shouldn't have any issues. If you do have issues, please refer to the Installation FAQ for answers to the most common questions about installing Nova.</p>

<h4><span class="install-substep">b</span> Exceptions</h4>

<p>If there's a major issue with something on your server or in Nova, Kohana will thrown an exception. An exception is something that changes the normal flow of a program. In Kohana's case, it's expecting one thing but seeing something else. There are a few items that will throw exceptions in Kohana that you may see when using Nova. Unfortunately, there's nothing we can do to get around these, so the following steps should help you resolve the exception and be able to continue.</p>

<h5>Cache Directory Is Not Writable</h5>

<p>In some cases, Kohana will attempt to write cache files to help speed things up. In order to do that though, Kohana needs to write cache files to a specific directory, in this case, <samp>application/cache</samp>. If the directory isn't writable, you'll need to manually change the permissions of the folder to 777. This process can be accomplished through your FTP client or cPanel. If you have questions about how to change file permissions, contact your web host for help.</p>

<h5>Logs Directory Is Not Writable</h5>

<p>When an error occurs, Kohana writes the information to a log file. Log files come in handy when trying to debug problems people are having with Nova, especially if it's one of your players who reports the issue to you instead of you seeing it yourself. Kohana writes all of its logs to <samp>application/logs</samp>. If the directory isn't writable though, Kohana can't write the logs and will throw an exception. In order to fix this, you'll need to manually change the permissions of the folder to 777. This process can be accomplished through your FTP client or cPanel. If you have questions about how to change file permissions, contact your web host for help.</p>

<h5>The fopen Function Is Not Available</h5>

<p>Kohana's debug and error classes open files that cause errors and read their contents to show you exact line numbers where problems are happening. In order to do this, Kohana needs PHP's <em>fopen</em> function. In most cases, this function is enabled on servers, but in some cases, your web host may have disabled use of this function. If that's the case, you'll need to contact them and see if they can turn fopen back on. You can explain to them that you need it to read and write files in Nova.</p>

<h4><span class="install-substep">c</span> Nova</h4>

<p>If Kohana's verification passes, then Nova can be installed. Since the verification file needs to be deleted from the server in order for the system to run, we've built a second verification script in the install module that can be run whenever you want. The advantage to Nova's built-in verification page is that it doesn't show any information about your server, just failures and warnings and simple explanations about those items. If you want to run the Nova verification, you can reach it by going to the install section of your site.</p>

<h2><span class="install-step">4</span> Install the System</h2>

<p>With the verification out of the way, Nova's installation process is easy and straightforward. After deleting <samp>install.php</samp> from your server, go back to your site and Nova will redirect you into the install process.</p>

<h4><span class="install-substep">a</span> Database Connection Settings</h4>

<p>The first thing Nova does is look for a database connection file. If you're doing a fresh install, this file obviously won't exist, so Nova will take you to a brand new process that allows you to just type your connection information in and Nova will write the database connection file for you. Once you've typed your information in, Nova will try to connect to your database. If it's able to connect, it'll give you the option of writing the file. If it isn't able to connect, you'll be taken back to the form with all the information you supplied and you'll be told what the problem is.</p>

<p>If all of the necessary PHP functions are available, Nova will write the database connection file to the right place and you'll be all set. If the necessary PHP functions aren't available, you'll be shown the information to copy and paste into the database connection file. In order for this to work right, the database connection file can't exist. If you have to copy and paste information into the file, you'll first have to create the file at <samp>application/config/database.php</samp>. Once you've pasted the information into the newly created file and saved it up to the server, you'll be able to again verify the information and then move on to the install process.</p>

<h4><span class="install-substep">b</span> The Database</h4>

<p>Once the database connection file has been written, you'll be given the option to continue the installation and will be shown a screen with your options. Choose the option to Update from Nova 1. From this page, you'll be able to kick off the update process. The first step of the process will install Nova 2's database, insert the basic data and insert the genre data for you. These are all of the basic pieces Nova needs in order to run.</p>

<h4><span class="install-substep">c</span> Updating Your Nova 1 Information</h4>

<p>Once the database has been created, it's time to let Nova 2 do its thing and convert your Nova 1 data to the Nova 2 format. A simple table shows you the information that will be converted. You cannot change these items and the process may take several minutes to complete. Once you click on the Update button, the process will begin and you'll be shown the progress of the update. If an item is being converted, a simple loader graphic will be shown in the table row. Once the process is complete, you'll see one of 3 icons. A green checkmark means the process completed successfully. A yellow exclamation point means that there were some issues with that item. A red exclamation point means there was an error or the process didn't complete at all. If you get the warning icon or error icon, you can hover over the icon to get an explanation of what's wrong.</p>

<p>Once the update process has completed, the button at the bottom will change. Click the button to move to the last step of the update.</p>

<p class="important"><strong>Note:</strong> Under some circumstances, you may be shown the warning icon when nothing is actually wrong. This would happen if you, for instance, don't have any decks in your Nova 1 installation. The process worked fine, but taking that in to account during the process would've taken signifcantly more code that simply wasn't necessary.</p>

<h2><span class="install-step">5</span> Post-Installation</h2>

<p>That's it! If everything worked, Nova 2 is installed in your database and your Nova 1 data should be converted tothe new format. You can now go to your site and start using it.</p>

<h4><span class="install-substep">a</span> Using the Update Module After Installation</h4>

<p>If you want to go back to the update module after you've installed the system (to update to a newer version of Nova 2), you will have to be logged in and have the system administrator flag set to yes. This allows us to prevent any type of unwanted access to the update module.</p>

<h4><span class="install-substep">b</span> Built-In Userguide</h4>

<p>Nova comes with a built-in userguide for developers. This userguide is not intended to be used for average users but should give third party developers useful resources for developing without having to constantly be going to AnodyneDocs. The built-in userguide and API browser can be found by pointing your browser to <samp>http://[yoursite]/index.php/guide</samp>.