<h1>Fixing the Variables File</h1>

<p>Sometimes, you just aren't paying attention during an update and accidentally overwrite the variables file with all the database connection information. So what now? Fixing this issue is relatively easy.</p>

<p>First, open <samp>framework/variables.php</samp>. Next, paste the following code in to the file:</p>

<pre>&lt;?php

$webLocation = "http://yoursite.com";

$dbServer = "localhost";
$dbName = "database_name";
$dbUser = "database_user";
$dbPassword = "database_password";
$dbErrorMessage = "A database error has occurred! Please try again later.";</pre>

<p>Simply put in your database connection information that you received from your host (make sure that, on each line, your information goes between the double quotes). When you're done, save the file and upload it to your framework directory. You're all set!</p>