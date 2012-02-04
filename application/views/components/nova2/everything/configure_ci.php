<h1>Configuring CodeIgniter</h1>

<h2>Basic System Settings</h2>

<h3>Base URL</h3>

<p>In SMS, it was called the web location variable. In CI, it's called the base URL. Nova sets the base URL dynamically so you should never have to touch this variable. If you find a situation where the base URL isn't accurate, you can change it in <samp>application/config/config.php</samp>.</p>

<p class="alert alert-info"><strong>Note:</strong> Take great care when changing the base URL as it can cause Nova to break!</p>

<h3>Index File</h3>

<p>CodeIgniter comes with the ability to rename index.php to whatever you want. This is advantageous for a variety of reasons, namely if you want to run multiple sims from the same directory or if you want to create a splash page at index.php and point to another page for Nova. You can change the index.php file in <samp>application/config/config.php</samp>. Make sure you have changed the name of the index.php file, then put the changed name in the file.</p>

<p class="alert alert-info"><strong>Note:</strong> The file must be a PHP file or Nova will not work!</p>

<h3>Default Language</h3>

<p>By default, Nova ships with English as its default language. If you have additional language folders in place, you can change the default language Nova is displayed in. (Content from the database will still be in English; those entries will have to be manually updated.) In addition to having a language folder in the CodeIgniter core, the Nova core also has a language folder that will need to have data for that language. More information can be found in the language documentation pages.</p>

<h3>Character Set</h3>

<p>CodeIgniter allows the default character set to be changed to whatever an admin wants. By default, it is set to <dfn>UTF-8</dfn>. For most situations, that should be fine. If you need to change it, you can find the preference in <samp>application/config/config.php</samp>.</p>

<h3>Error Logging</h3>

<p>CodeIgniter allows admins to change the error logging threshold if they so choose. By default, Nova operates with error reporting turned off, but if you turn it on, you can change the amount of information that is dumped to the error logs. You can change the error logging options from <samp>application/config/config.php</samp>. In addition, you can change the location where the system logs are stored (if your host has changed it from the default location) and the date format for the error logs.</p>

<h3>Master Time Reference</h3>

<p>Unlike SMS, Nova is a lot smarter with dates and times. By default, Nova will convert all dates to GMT to allow for users to set their individual time zones. You can choose to change this to the server's local time if you want, but doing so will break some of the timezone features in Nova. Admins can change this preference in the <samp>application/config/config.php</samp> file.</p>

<h3>Database</h3>

<p>CodeIgniter has an extensive list of options for configuring connections to the database. These options are covered in more depth in the <a href="<?php echo Url::site('nova2/start/install');?>">installation guide</a>. Database connection information can be found in the <samp>application/config/database.php</samp> file.</p>

<h2>Advanced System Settings</h2>

<h3>Auto-Loading</h3>

<p>CodeIgniter comes with a lot of awesome helpers and libraries. By default, Nova auto-loads several of them we use quite often. You can add and remove from these lists in the <samp>application/config/autoload.php</samp> file.</p>

<p>By default, Nova auto-loads the following libraries: Database, Template, Menu, Input, Auth and User Panel. By default, Nova auto-loads the following helpers: Location, URL, Date, HTML, Language, and Form. For models, Nova auto-loads settings_model and messages_model. Finally, Nova auto-loads it's own configuration file (covered later in this document). For more information about auto-loading in CodeIgniter, please visit the <a href="http://codeigniter.com/user_guide/general/autoloader.html" target="_blank">CodeIgniter User Guide</a>.</p>

<p class="alert alert-danger"><strong>Warning:</strong> We don't recommend removing any of these as doing so will break Nova. In addition, use great care when adding items to auto-load as it will slow down Nova's run time.</p>

<h3>URI Protocol</h3>

<p>CodeIgniter gives admins the change the way the URI is retrieved. This item determines which server global should be used to retrieve the URI string. The default setting of <dfn>AUTO</dfn> works for most servers. If your links do not seem to work, try one of the other options. CodeIgniter also allows <dfn>PATH_INFO</dfn>, <dfn>QUERY_STRING</dfn>, <dfn>REQUEST_URI</dfn>, and <dfn>ORIG_PATH_INFO</dfn>. We don't recommend changing this unless you absolutely have to!</p>

<h3>URL Suffix</h3>

<p>CodeIgniter allows admins to add an additional suffix to the end of their URLs. More information about this can be found in the <a href="http://codeigniter.com/user_guide/general/urls.html" target="_blank">CodeIgniter User Guide</a>.</p>

<h3>System Hooks</h3>

<p>CodeIgniter comes with a powerful hooks system for tapping in to the system during initialization at several different points. Nova does not use hooks, but if you want to develop a plugin or MOD that uses hooks, the feature will need to be enabled. You can enable system hooks by setting the config variable to <dfn>TRUE</dfn>. This config setting can be found in <samp>application/config/config.php</samp>. More information about system hooks can be found in the <a href="http://codeigniter.com/user_guide/general/hooks.html" target="_blank">CodeIgniter User Guide</a>. If you are using system hooks, you will define them in <samp>application/config/hooks.php</samp>.</p>

<h3>Class Extension Prefix</h3>

<p>CodeIgniter's class-based approach allows core classes to be extended by using a simple prefix. By default, CI uses <dfn>MY_</dfn> as the prefix. You can change this if you need to, but be warned that changing this will break Nova at several points. You should use great caution when change this setting!</p>

<h3>Allowed URL Characters</h3>

<p>CodeIgniter allows an admin to set what characters are permitted in the URL. By default, CI permits all letters, all numbers, as well as ~ % . : _ \ -. You are encouraged to leave this setting alone. Changing this can have major security repercussions for your Nova site!</p>

<h3>Query Strings</h3>

<p>By default CodeIgniter uses search-engine friendly segment based URLs: <var>www.your-site.com/who/what/where/</var>. You can optionally enable standard query string based URLs <var>www.your-site.com?who=me&amp;what=something&amp;where=here</var>. The other items let you set the query string "words" that will invoke your controllers and its functions: <var>www.your-site.com/index.php?c=controller&m=function</var>. You can change this in <samp>application/config/config.php</samp>.</p>

<p class="alert alert-info"><strong>Note:</strong> Some of the helpers won't work as expected when this feature is enabled, since CodeIgniter is designed primarily to use segment based URLs.</p>

<h3>Session Settings</h3>

<p>Nova stores session data right in the database and CodeIgniter provides some configuration options. You shouldn't need to touch any of the session settings, but in the event you do need to, they can be found in the <samp>application/config/config.php</samp> file. You can change the name of the table where the data is stored, the time to update the session, whether to use the database or not, encrypting cookies (if they're being used to store session data), and other options. In addition, CodeIgniter also provides the ability to change cookie specific options.</p>

<p class="alert alert-danger"><strong>Warning:</strong> Changing any of these values can cause Nova to stop working altogether!</p>

<h3>Global XSS Filtering</h3>

<p>CodeIgniter has the option to filter everything for cross site scripting (XSS) attacks. By default, we don't enable this option as it can cause issues with passwords that use any special characters. Instead, we filter POST values for XSS issues in the controllers. If you want to change this, you can simply enable XSS filtering. The option can be found in the <samp>application/config/config.php</samp> file.</p>

<p class="alert alert-danger"><strong>Warning:</strong> Changing this will cause a pretty decent performance drop with Nova as filtering everything for XSS takes more resources.</p>

<h3>Output Compression</h3>

<p>CodeIgniter has a feature to allow for Gzipping output for faster page loads. Only enable this feature if you know your server can handling this and are reasonably confident that your users are using browsers that support this feature! The setting can be found in <samp>application/config/config.php</samp>.</p>

<h3>Rewrite PHP Short Tags</h3>

<p>CodeIgniter has a feature that allows for rewriting PHP short tags on servers that don't have the option turned on in the PHP configuration, eliminating errors and mishandled pages. By default, Nova runs with this disabled as we've gone to great lengths not to use PHP short tags. You can change this setting from <samp>application/config/config.php</samp>, however, you may see a slight drop in performance by doing so.</p>

<h3>Constants</h3>

<p>CodeIgniter comes with a small group of system constants for working with files and some characters. Those constants can be found in <samp>application/config/constants.php</samp>.</p>

<p class="alert alert-info"><strong>Note:</strong> Anodyne will regularly update the constants in this file for system updates, so any constants you want to create should be put in the controllers or in the Nova config file. Altering any of these constants can cause some of Nova's feature to stop working!</p>

<h3>Routes</h3>

<p>CodeIgniter allows URLs to be re-routed. You can set up re-routing rules in <samp>application/config/routes.php</samp>. This page also sets the default controller (in Nova, it's <dfn>main</dfn>). More information about routes can be found in the <a href="http://codeigniter.com/user_guide/general/routing.html" target="_blank">CodeIgniter User Guide</a>.</p>

<h2>System Email Settings</h2>

<p>Nova uses CodeIgniter's Email class for delivering email from the system to the users of the RPG. The Email class allows for setting a wide array of options for the emails and all those settings can be changed from the configuration file located at <samp>application/config/email.php</samp>. Below are some of the most common items admins may want to change. For more detailed information about CodeIgniter's Email class, please visit the <a href="http://codeigniter.com/user_guide/libraries/email.html" target="_blank">CodeIgniter User Guide</a>.</p>

<h3>Email Protocol</h3>

<p>Depending on your server, you can change the protocol used to deliver email. By default, Nova uses PHP's <var>mail()</var> function. The options you can specify are <dfn>mail</dfn>, <dfn>sendmail</dfn> or <dfn>smtp</dfn>.</p>

<p class="alert alert-info"><strong>Note:</strong> If you specify SMTP as the delivery method, you will also have to specify the SMTP host, user, password, port and timeout. If you specify sendmail as the delivery method, you will also have to specify the path to sendmail. Please contact your host about these items.</p>

<h3>Mail Type</h3>

<p>Nova allows admins to change the type of email that are delivered to users. By default, Nova will attempt to deliver HTML emails, however, some email hosts can classify HTML emails as spam more quickly than text only emails. Because of that, admins can change the mail type to text to have emails delivered in the same format as SMS. The only options accepted by CodeIgniter for the mail type are <dfn>html</dfn> and <dfn>text</dfn>.</p>

<h2>System FTP Settings</h2>

<p>CodeIgniter provides an FTP class that Nova uses for trying to adjust file permissions during install and for deleting upload files. You can choose to set these settings if you want or ignore them. Nova will work either way. For more detailed information about CodeIgniter's FTP class, please visit the <a href="http://codeigniter.com/user_guide/libraries/ftp.html" target="_blank">CodeIgniter User Guide</a>.</p>

<p>From the FTP config file located at <samp>application/config/ftp.php</samp>, you can set your host name, username, password and port for use by CodeIgniter in connecting to your server for advanced operations. If you change settings in this file, make sure the file's permissions on the server are set to an appropriately safe level (664 should be fine).</p>