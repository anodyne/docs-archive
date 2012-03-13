<h1><?php echo $header;?></h1>

<h2>What is a View?</h2>

<p>Views are how Nova takes the information from the database and displays it in the browser. Views allow for separating the logic and presentation for Nova. Views are typically HTML or Javascript, but also contain variables passed into them from the controller.</p>

<h2>Understanding the Views Directory</h2>

<p>In Nova, views are located in the <code>application/views</code> directory. Because of seamless substitution, there's a method to the way view files are stored in the view directory.</p>

<p>The "default" view file that's used by Nova is located in <code>application/views/_base</code>. Within the _base directory, we separate view files into the different template types: admin, login, main and wiki. Inside each of the template type directories, we use the same structure: ajax, images, js and pages. The only place we store view files are in the js and pages directories.</p>

<p>If you want to create a view file that will be used instead of Nova's default, you can put your version in <code>application/views/_base_override</code>, making sure that the view file goes in the right template type directory. So for instance, if you wanted to override the manifest view file, you'd put your copy of the file in <code>application/views/_base_override/main/pages/personnel_index.php</code>.</p>

<p>Finally, system skins are stored in the views directory as well. Skins, like the _base_override directory, can circumvent Nova's default view files. Much the same as the _base_override directory, a skin is broken down into the different template types. If you wanted to override the manifest view file only for your skin, you'd put your copy of the file in <code>application/views/[your skin]/main/pages/personnel_index.php</code>.</p>

<h2>Creating a View</h2>

<p>Creating a view is as simple as creating a PHP file with what you want. The file <strong>has</strong> to have the .php extension, otherwise you won't be able to use it since Nova wants all view files (Javascript views included) to be PHP files. Just because it's a PHP file doesn't mean you have to put any PHP code in there. Your PHP file can be made up entirely of HTML if you want.</p>

<pre>&lt;h1>My New View File&lt;/h1>
	
&lt;p>This is an example of my new view file. It would have a .php extension, but as you can see, there's no PHP in here.&lt;/p></pre>

<p>When creating views for new pages, you should store your view files in <code>application/views/_base_override</code> to prevent it from being wiped out during an update. We frequently fix issues within the view files in _base and storing your view files in there could cause issues when updating.</p>

<h2>Using Views</h2>

<p>Seamless substitution can seem like magic at first, but it's really just a simple process that looks in a few different locations for the right file and then loads it from the location where it finds it first. So how the heck do you make your files do that too? Nova uses a simple function to check for the existence of view files. If you want to plug in to seamless substitution, you can offload figuring out the location of your view file to Nova.</p>

<h3>Simple Views</h3>

<p>If you have a simple view file called example.php, you can use Nova's built-in functions in your controller method to find the file and load it with the following code:</p>

<pre>$view_loc = view_location('example', $this->skin, 'main');

$this->template->write_view('content', $view_loc);</pre>

<p>The <dfn>view_location</dfn> function takes 3 parameters that you'll need to provide. The first is the name of the view file without the extension. If our file is example.php, then we'll pass <var>example</var> to the function. The second parameter we have to pass is the skin. Fortunately, all the controllers handle this, so you can simply pass the <var>$this->skin</var> variable and it'll take care of the rest. The third and final parameter is the section. If you were creating a page in the main section, that'd be <var>main</var>. If you were creating a page in the admin section, that'd be <var>admin</var>.</p>

<p>The call to the template library's <dfn>write_view</dfn> method just renders your stuff in the template. You don't need to change anything about this if you have a simple view that doesn't use any PHP variables.</p>

<h3>Advanced Views</h3>

<p>Sometimes, you need more than just a simple view file though. In those instances, only a couple things will change.</p>

<pre>$data['foo'] = 'This is my variable';
	
$view_loc = view_location('example', $this->skin, 'main');

$this->template->write_view('content', $view_loc, $data);</pre>

<p>You can see that we've added a variable with information at the start and the <dfn>write_view</dfn> method has a third parameter with the variable where we've stored our information. By making these changes, we can reference the information in the 'foo' variable by writing <var>&lt;?php echo $foo;?></var>. Nova will take the information, put it in the right place and render everything in the browser.</p>