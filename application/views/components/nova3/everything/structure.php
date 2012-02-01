<h1>Nova 2 File Structure</h1>

<p>In order to fully understand how Nova works, the best place to start is the file structure. Nova's file structure is significantly different from SMS and getting used to these changes can be daunting. To help you get used to the new file layout, a brief walkthrough of the root, application and core folders is below.</p>

<h2>The Nova Root Directory</h2>

<?php echo Html::image(null);?>

<ul>
	<li><strong>application</strong> &ndash; For all intents and purposes, this folder is a placeholder. Blank controllers, models and libraries tell CodeIgniter what to do when those components are accessed, but there is no Nova code in the <samp>application</samp> directory. This allows developers to make changes in this directory and not have to worry about their changes being wiped out during an update.</li>
	<li><strong>nova</strong> &ndash; This is the heart and soul of Nova. Included in this directory is the CodeIgniter framework (which should never be edited or updated ... always let Anodyne test and release any changes to CI), the CI and Nova licenses and the Nova core.</li>
	<li><strong>index.php</strong> &ndash; This is the main Nova file that all requests go through. It's possible to change the name of this file in the event you want to run several installations from the same server. You could easily name your index.php file, nova.php and then change the reference in the config file to point to the nova.php file. More information about that is available in the <a href="<?php echo Url::site('nova2/developers/index');?>">developers section</a>.</li>
	<li><strong>message.php</strong> &ndash; The message file is used by Nova to display informational messages to users in the event an error has occurred. If a user's browser doesn't meet the requirements, the server doesn't meet the requirements or a user has been issued a level 2 ban, this page will display information to the user.</li>
</ul>

<h2>The Application Directory</h2>

<?php echo Html::image(null);?>

<ul>
	<li><strong>assets</strong> &ndash; The assets folder contains a little bit of everything. Install files, update files, images, genre files Javascript files and backups are just a few of the things you'll find if you go exploring the assets folder. It's highly recommended that you don't try to edit anything in this folder since the system as a whole relies on some of the pieces found in this folder.</li>
	<li><strong>cache</strong> &ndash; CodeIgniter comes with the ability to cache view files to help speed up the loading of pages. CI will store its cache files in this directory. (Because of the dynamic nature of Nova, there's little we can cache.)</li>
	<li><strong>config</strong> &ndash; The config directory stores all of the application and framework's configuration files, including general configuration, database connections, auto-loading, constants and many others.</li>
	<li><strong>controllers</strong> &ndash; Controllers are the heart of Nova and determine how HTTP requests should be handled. A Controller is simply a class file that is named in a way that can be associated with a URI. When a controller's name matches the first segment of a URI, it will be loaded.</li>
	<li><strong>errors</strong> &ndash; The errors directory holds simple view files that are called in the event an error is encountered by CodeIgniter. Included in this directory is a 404 error page, a database error page, a PHP error page and a general error page.</li>
	<li><strong>helpers</strong> &ndash; Helpers, as the name suggests, help you with tasks. Each helper file is simply a collection of functions in a particular category. Unlike most other systems in CodeIgniter, helpers are not written in an Object Oriented format. They are simple, procedural functions. Each helper function performs one specific task, with no dependence on other functions.</li>
	<li><strong>hooks</strong> &ndash; By default, Nova doesn't make use of CodeIgniter's hook system, but if you develop a hook for your own site, this is where they'll live and where CodeIgniter will look to find them.</li>
	<li><strong>language</strong> &ndash; The language directory is where CodeIgniter will look for the language files needed to translate the system from English to whatever you language you want.</li>
	<li><strong>libraries</strong> &ndash; Libraries are PHP classes designed with a specific set of actions in mind. CodeIgniter contains many of these and we've also built some of our own for Nova as well.</li>
	<li><strong>logs</strong> &ndash; CodeIgniter has the ability to log all kinds of errors and information messages that can help in debugging. By default, Nova ships with the bare minimum being written to this directory, but if you need more information about what CodeIgniter is doing, you can turn up the error reporting and view the error logs here.</li>
	<li><strong>models</strong> &ndash; Models are PHP classes designed to work with information in your database. They provide a quick and easy way to pull information that doesn't require admins to write lots of database queries. Even better, models in Nova use CodeIgniter's Active Record class meaning they're easy to build and understand.</li>
	<li><strong>modules</strong> &ndash; Modules are a way to store related code that makes it easy to distribute. Because of CI's file structure, the flexibility of these modules is significantly reduced. <kbd>Support for modules is experimental in Nova 2!</kbd>
	<li><strong>views</strong> &ndash; A view is simply a PHP page that contains the HTML markup that creates the presentation of the page you're viewing. Views are never called directly, they must be loaded by a controller.</li>
</ul>

<h2>The Nova Directory</h2>

<p class="alert alert-danger"><strong>Warning:</strong> Never edit core files unless you know what you're doing! Editing core files can cause the entire system and framework to fail.</p>

<?php echo Html::image(null);?>

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
					<li>database</li>
					<li>install</li>
					<li>js</li>
					<li>update</li>
				</ul>
			</li>
			<li><strong>core</strong>
				<ul>
					<li>config</li>
					<li>controllers</li>
					<li>helpers</li>
					<li>hooks</li>
					<li>language</li>
					<li>libraries</li>
					<li>models</li>
					<li>views</li>
				</ul>
			</li>
		</ul>
	</li>
</ul>