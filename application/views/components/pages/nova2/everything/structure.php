<h1>Nova 2 File Structure</h1>

<p>In order to fully understand how Nova works, the best place to start is the file structure. Nova's file structure is significantly different from SMS and getting used to these changes can be daunting. To help you get used to the new file layout, a brief walkthrough of the root, application and core folders is below.</p>

<h2>The Nova Root Directory</h2>

<ul>
	<li><strong>application</strong> &ndash; For all intents and purposes, this folder is a placeholder. Blank controllers, models and libraries tell CodeIgniter what to do when those components are accessed, but there is no Nova code in the <samp>application</samp> directory any more. This allows developers to make changes in this directory and not have to worry about their changes being wiped out during an update.</li>
	<li><strong>nova</strong> &ndash; This is the heart and soul of Nova. Included in this directory is the CodeIgniter framework (which should never be edited or updated ... always let Anodyne test and release any changes to CI), the CI and Nova licenses and the Nova core.</li>
	<li><strong>index.php</strong> &ndash; This is the main Nova file that every page uses. It's possible to change the name of this file in the event you want to run several installations from the same server. You could easily name your index.php file, nova.php and then change the reference in the config file to point to the nova.php file. More information about that is available in the <a href="<?php echo Url::site('nova2/developers/index');?>">developers section</a>.</li>
	<li><strong>message.php</strong> &ndash; The message file is used by Nova to display informational messages to users in the event an error has occurred. If a user's browser doesn't meet the requirements, the server doesn't meet the requirements or a user has been issued a level 2 ban, this page will display information to the user.</li>
</ul>

<h2>The Application Directory</h2>

<ul>
	<li><strong>assets</strong> &ndash; The assets folder mainly contains genre files and images. You'll also find any backups Nova does for you in this folder.</li>
	<li><strong>cache</strong> &ndash; CodeIgniter comes with the ability to cache view files to help speed up the loading of pages. CI will store its cache files in this directory. (Because of the dynamic nature of Nova, there's little we can cache.)</li>
	<li><strong>config</strong> &ndash; The config directory stores all of the application and framework's configuration files, including general configuration, database connections, auto-loading, constants and many others.</li>
	<li><strong>controllers</strong> &ndash; Controllers are the heart of Nova and determine how HTTP requests should be handled. A Controller is simply a class file that is named in a way that can be associated with a URI. When a controller's name matches the first segment of a URI, it will be loaded.</li>
	<li><strong>errors</strong> &ndash; The errors directory holds simple view files that are called in the event an error is encountered by CodeIgniter. Included in this directory is a 404 error page, a database error page, a PHP error page and a general error page.</li>
	<li><strong>helpers</strong> &ndash; Helpers, as the name suggests, help you with tasks. Each helper file is simply a collection of functions in a particular category. Unlike most other systems in CodeIgniter, helpers are not written in an Object Oriented format. They are simple, procedural functions. Each helper function performs one specific task, with no dependence on other functions.</li>
	<li><strong>hooks</strong> &ndash; Nova takes advantage of CodeIgniter's hook system to "hook" in to various points during the execution process to check whether maintenance mode is turned on, if the user has a supported browser or to find out if the user has a level 2 ban. If you develop any hooks, this is where you'll store them.</li>
	<li><strong>language</strong> &ndash; The language directory is where CodeIgniter will look for the language files needed to translate the system from English to whatever you language you want. In Nova 2, the language files are stored in the Nova module and a single language file pulls the necessary files in as well as giving admins the ability to override language items.</li>
	<li><strong>libraries</strong> &ndash; Libraries are PHP classes designed with a specific set of actions in mind. CodeIgniter contains many of these and we've also built some of our own for Nova as well.</li>
	<li><strong>logs</strong> &ndash; CodeIgniter has the ability to log all kinds of errors and information messages that can help in debugging. By default, Nova ships with the bare minimum being written to this directory, but if you need more information about what CodeIgniter is doing, you can turn up the error reporting and view the error logs here.</li>
	<li><strong>models</strong> &ndash; Models are PHP classes designed to work with information in your database. They provide a quick and easy way to pull information that doesn't require admins to write lots of database queries. Even better, models in Nova use CodeIgniter's Active Record class meaning they're easy to build and understand.</li>
	<li><strong>modules</strong> &ndash; Modules are a way to store related code that makes it easy to distribute. Because of CI's file structure, the flexibility of these modules is significantly reduced. <kbd>Support for modules is experimental in Nova 2!</kbd>
	<li><strong>views</strong> &ndash; A view is simply a PHP page that contains the HTML markup that creates the presentation of the page you're viewing. Views are never called directly, they must be loaded by a controller.</li>
</ul>

<h2>The Nova Directory</h2>

<p class="critical"><strong>Warning:</strong> Never edit core files unless you know what you're doing! Editing core files can cause the entire system and framework to fail.</p>

<ul>
	<li><strong>codeigniter</strong>
		<ul>
			<li><strong>codeigniter</strong> &ndash; This is the heart of CodeIgniter. Once the index file is executed, the last thing it does is to pull in the main CodeIgniter file from this directory.</li>
			<li><strong>database</strong> &ndash; CodeIgniter comes with some robust database drivers that allow it to connect to MySQL, MS SQL, PostgreSQL, SQLite, Oracle and ODBC databases. While Nova only uses MySQL, these other drivers may come in handy in the future.</li>
			<li><strong>fonts</strong> &ndash; CodeIgniter stores a single font in this directory for use in the system. Nova makes no use of this directory.</li>
			<li><strong>helpers</strong> &ndash; Helpers, as the name suggests, help you with tasks. Each helper file is simply a collection of functions in a particular category. Unlike most other systems in CodeIgniter, helpers are not written in an Object Oriented format. They are simple, procedural functions. Each helper function performs one specific task, with no dependence on other functions.</li>
			<li><strong>language</strong> &ndash; The language directory is where CodeIgniter will look for the language files needed to translate the system from English to whatever you language you want. In order to use additional languages, you must have a corresponding language directory in both this directory as well as the application's language folder.</li>
			<li><strong>libraries</strong> &ndash; Libraries are PHP classes designed with a specific set of actions in mind. CodeIgniter contains many of these and we've also built some of our own for Nova as well.</li>
			<li><strong>plugins</strong> &ndash; Plugins work almost identically to Helpers. The main difference is that a plugin usually provides a single function, whereas a Helper is usually a collection of functions. Helpers are also considered a part of the core system.</li>
			<li><strong>scaffolding</strong> &ndash; CodeIgniter's Scaffolding feature provides a fast and very convenient way to add, edit, or delete information in your database during development. Nova ships with scaffolding disabled. <span class="red"><strong>Very Important:</strong> Scaffolding is intended for development use only. It provides very little security other than a "secret" word, so anyone who has access to your CodeIgniter site can potentially edit or delete your information. If you use scaffolding make sure you disable it immediately after you are through using it. DO NOT leave it enabled on a live site. And please, set a secret word before you use it. <strong>Scaffolding has been deprecated from CodeIgniter as of 1.6.0.</strong></span></li>
		</ul>
	</li>
	<li><strong>licenses</strong></li>
	<li><strong>modules</strong>
		<ul>
			<li><strong>assets</strong>
				<ul>
					<li><strong>database</strong> &ndash; The database asset folder stores the default database config file that Nova's new setup process uses to write the database connection file. <kbd>Never edit this file. Doing so will break the setup config process.</kbd></li>
					<li><strong>install</strong> &ndash; The install folder contains all of the assets needed to install the system. These assets are also used during the SMS upgrade process as well as during some of the database changes proccesses.</li>
					<li><strong>js</strong> &ndash; Nova makes extensive use of jQuery and a wide array of plugins. The js folder holds all those Javascript pieces that are used by the system.</li>
					<li><strong>update</strong> &ndash; The update folder contains all of the assets needed to update the system.</li>
				</ul>
			</li>
			<li><strong>core</strong>
				<ul>
					<li><strong>config</strong> &ndash; While all of Nova's config files are in the application directory, there are often times where some of those files need to be edited on a regular basis. Because of that, "base" config files are in the Nova config directory so the initial values can be set and then overridden by the application version.</li>
					<li><strong>controllers</strong> &ndash; In Nova 1, these controllers were found in the "base" directory. We've removed all Nova code from the application and moved those base controllers here. If you need to override a base controller, you'll need to copy the method(s) from these files.</li>
					<li><strong>helpers</strong> &ndash; Like other things in Nova 2, these are the base files that are then extended in the application directory. If you need to override a helper, you'll want to copy it from these base files.</li>
					<li><strong>hooks</strong> &ndash; The hooks used in Nova are defined in this directory. If you need to modify an existing hook, copy it from here to the application directory's hook folder and edit it from there.</li>
					<li><strong>language</strong> &ndash; Save for one files, all the language files are stored here.</li>
					<li><strong>libraries</strong> &ndash; The base libraries used by Nova are stored here. If you need to modify an existing library, copy it (or the method(s) you need) to the application's libraries folder and edit from there.</li>
					<li><strong>models</strong> &ndash; The base models used by Nova are stored here. If you need to modify an existing model, copy it (or the method(s) you need) to the application's models folder and edit from there.</li>
					<li><strong>views</strong> &ndash; The base views used by Nova are stored here. If you need to modify an existing view, copy it to the specific skin you want it to apply to or the <samp>_base_override</samp> folder and edit from there.</li>
				</ul>
			</li>
		</ul>
	</li>
</ul>