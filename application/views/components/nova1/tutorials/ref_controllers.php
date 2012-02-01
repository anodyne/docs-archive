<h1><?php echo $header;?></h1>

<h2>What is a controller?</h2>

<p>Controllers are classes that can be reached through the URL and take care of handling the request from the browser. A controller calls models and other classes to fetch the information and finally will pass everything to a view for output. If a URL like <samp>www.yoursite.com/example/index</samp> is requested, the first segment will be which controller is called ("example") and the second which method of that controller is called ("index").</p>

<h2>Creating a controller</h2>

<p>In Nova, controllers are put in the <samp>application/controllers</samp> directory. At the very least, they need to extend the Controller class. Below is an example of the controller "example":</p>

<pre>class Example extends Controller {

	function Example()
	{
		parent::Controller();
	}

	function index()
	{
		$data['header'] = 'My New Controller';
		
		$this->template->write('title', $data['header']);
		$this->template->write_view('content', '_base_override/main/pages/example_index', $data);
		
		$this->template->render();
	}
}</pre>

<p>Anyone familiar with PHP will recognize that our constructor doesn't use PHP's <dfn>contruct()</dfn> method nor do controller methods have a visibility scope (public, private, protected). This is because we maintain PHP 4 compatability. A future version of Nova 1 will require PHP 5.0 or higher, but for now, we recommend that if you're distributing your work to other Nova sims that you make sure all your code works on PHP 4.3.2 and higher.</p>

<h2>Using more parameters from the URL</h2>

<p>In addition to pulling the controller and method from the URL, Nova can also pull additional parameters from the URL that you can pass from page to page. It's important though that you realize the security implications of doing so. Anything like usernames, passwords or any sensitive information should not be passed over the URL.</p>

<p>For the URL <samp>www.yoursite.com/example/index/action/2</samp>, you can access the final two segments using the following code:</p>

<pre>$data['type'] = $this->uri->segment(3);
$data['id'] = $this->uri->segment(4);</pre>

<p>Notice that we're referencing segments 3 and 4 since segments 1 and 2 are the controller and method respectively. Once you have these segments, you can do any type of logic with them that you'd like using standard PHP logic.</p>

<h2>Editing a controller</h2>

<p>In Nova, controllers are a two part entity. The first part is the base controller, always located in <samp>application/controllers/base</samp> and having a "_base" after the name of the file. This is the file we create and shouldn't be edited. Instead, if you want to edit a controller, you should use the file located in <samp>application/controllers</samp>. So if you wanted to edit the "sim" controller to edit an existing page, you would copy the method you want from <samp>application/controllers/base/sim_base.php</samp> and paste it into <samp>application/controllers/sim.php</samp>, make your edits, save it and upload it to the server.</p>