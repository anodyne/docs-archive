<h1><?php echo $header;?></h1>

<p>Simply put, libraries in CodeIgniter are PHP classes designed with a specific set of actions in mind. The CodeIgniter core contains many of these and we've also built some of our own for Nova as well. Like helpers, it's relatively easy to extend existing libraries and even create your own if the situation fits.</p>

<h2>Creating Your Own Library</h2>

<p>Sometimes, the things you may want to do will require more than just a simple helper. Sometimes, you'll have to create an entire library to hold everything you want to do. Creating libraries in Nova is straightforward. Your library classes should be placed within your <code>application/libraries</code> folder, as this is where CodeIgniter will look for them when they are initialized.</p>

<p>You can name your library files whatever you want provided they meeting the following naming conventions:</p>

<ul>
	<li>File names must be capitalized. For example: <dfn>Myclass.php</dfn></li>
	<li>Class declarations must be capitalized. For example: <kbd>class Myclass</kbd></li>
	<li>Class names and file names must match</li>
</ul>

<h3>The Class File</h3>

<p>Classes should have this basic prototype (Note: We are using the name <kbd>Someclass</kbd> purely as an example):</p>

<pre>&lt;?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Someclass {

	function some_function()
	{
	}
}</pre>

<h3>Using Your Class</h3>

<p>From within any of your controller functions you can initialize your class using the standard:</p>

<pre>$this->load->library('someclass');</pre>

<p>Where <em>someclass</em> is the file name, without the ".php" file extension. You can submit the file name capitalized or lower case. CodeIgniter doesn't care. Once loaded you can access your class using the lower case version:</p>

<pre>$this->someclass->some_function(); // Object instances will always be lower case</pre>

<h3>Passing Parameters When Initializing Your Class</h3>

<p>In the library loading function you can dynamically pass data as an array via the second parameter and it will be passed to your class constructor:</p>

<pre>$params = array('type' => 'large', 'color' => 'red');

$this->load->library('Someclass', $params);</pre>

<p>If you use this feature you must set up your class constructor to expect data:</p>

<pre>&lt;?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Someclass {

	function Someclass($params)
	{
		// Do something with $params
	}
}</pre>

<p class="alert alert-info">You can also pass parameters stored in a config file. Simply create a config file named identically to the class file name and store it in your <code>application/config</code> folder. <strong>Note:</strong> if you dynamically pass parameters as described above, the config file option will not be available.</p>

<h3>Utilizing CodeIgniter Resources within Your Library</h3>

<p>To access CodeIgniter's native resources within your library use the <kbd>get_instance()</kbd> function. This function returns the CodeIgniter super object.</p>

<p>Normally from within your controller functions you will call any of the available CodeIgniter functions using the <kbd>$this</kbd> construct:</p>

<pre>$this->load->helper('url');
$this->load->library('session');
$this->config->item('base_url');</pre>

<p><kbd>$this</kbd>, however, only works directly within your controllers, your models, or your views. If you would like to use CodeIgniter's classes from within your own custom classes you can do so as follows:</p>

<p>First, assign the CodeIgniter object to a variable:</p>

<pre>$CI =& get_instance();</pre>

<p>Once you've assigned the object to a variable, you'll use that variable <em>instead</em> of <kbd>$this</kbd>:</p>

<pre>$CI =& get_instance();

$CI->load->helper('url');
$CI->load->library('session');
$CI->config->item('base_url');</pre>

<p class="alert alert-info"><strong>Note:</strong> You'll notice that the above get_instance() function is being passed by reference:<br /><br />

$CI =& get_instance();<br /><br />

This is very important. Assigning by reference allows you to use the original CodeIgniter object rather than creating a copy of it.<br /><br />

Also, please note: If you are running PHP 4 it's usually best to avoid calling get_instance() from within your class constructors. PHP 4 has trouble referencing the CI super object within application constructors since objects do not exist until the class is fully instantiated.</p>

<h2>Modifying CodeIgniter Libraries</h2>

<p>CodeIgniter comes with a wide variety of pre-built helpers that are handy in doing simple tasks, but every so often, you might need to change the default behavior of one of those helpers. The framework actually provides a simple way of extending and overwriting core helpers by simply using the <dfn>MY_</dfn> prefix in the name of the helper.</p>

<p class="alert alert-info"><strong>Note:</strong> This only applies to CodeIgniter's core helpers and not helpers built by Anodyne.</p>

<h3>Replacing Core Libraries</h3>

<p>In some rare instances, you may want to actually replace an entire library with your own version of that library. CodeIgniter allows doing that by simply naming your class files identically to a native library. Doing so will cause CodeIgniter to use your version instead of the native one. To do this, all you need to do is name the file and the class declaration exactly the same as the native library. For example, to replace the native Email library you'd create a file named <code>application/libraries/Email.php</code>, and declare your class with:</p>

<pre>class CI_Email {

}</pre>

<p class="alert alert-info"><strong>Note:</strong> Most native classes are prefixed with <dfn>CI_</dfn>.</p>

<p>You would then load the library the same way you would the native library.</p>

<p class="alert alert-danger"><strong>Note:</strong> At this time, EllisLab does not provide a way to replace the Database classes with your own versions.</p>

<h3>Extending Core Libraries</h3>

<p>In other situations though, you may only want to add some functionality to an existing library &ndash; perhaps add a function or two &ndash; then it's overkill to replace the entire library with your version. In this case it's better to simply extend the class. Extending a class is nearly identical to replacing a class with a couple exceptions:</p>

<ul>
	<li>The class declaration must extend the parent class.</li>
	<li>Your new class name and filename must be prefixed with <dfn>MY_</dfn>.</li>
</ul>

<p>For example, to extend the native Email class you'd simply create a file named <code>application/libraries/MY_Email.php</code> and declare your class with:</p>

<pre>class MY_Email extends CI_Email {

}</pre>

<p class="alert alert-info"><strong>Note:</strong> If you need to use a constructor in your class make sure you extend the parent constructor:</p>

<pre>class MY_Email extends CI_Email {

	function My_Email()
	{
		parent::CI_Email();
	}
}</pre>

<h3>Using Your Methods</h3>

<p>To load your sub-class you'll use the standard syntax normally used. DO NOT include your prefix. For example, to load the example above, which extends the Email class, you would use:</p>

<pre>$this->load->library('email');</pre>

<p>Once loaded you will use the class variable as you normally would for the class you are extending. In the case of the email class all calls will use:</p>

<pre>$this->email->some_function();</pre>

<br />
<p class="fontSmall"><em>Text about libraries from the <a href="http://codeigniter.com/user_guide/general/creating_libraries.html" target="_blank">CodeIgniter User Guide</a>.</em></p>