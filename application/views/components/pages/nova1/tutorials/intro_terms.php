<h1><?php echo $header;?></h1>

<p>While Nova is far bigger and more complicated than SMS, using and modifying it doesn't have to be. What follows is a glossary of some of the most common terms used throughout the documentation. It's important to understand these terms so you can get the most out of the tutorials and documentation on the user guide.</p>

<h2>Object-Oriented Programming</h2>

<p>The biggest difference between Nova and SMS is that Nova uses an <em>object-oriented</em> approach to building the system instead of a <em>procedural</em> approach.</p>

<p>What the hell does that mean?</p>

<p>In PHP, procedural programming is the simplest way to get started. Usually, you won't be dealing with classes or functions too much (though you may a little). It's pretty much starting at the top of the page and programming it from top to bottom without using classes to build the page in pieces. It really follows a very "this tag, then this tag, then this tag" type of approach. So what would a block of procedural code look like anyway?</p>

<pre>&lt;php

$query = "SELECT * FROM table WHERE id > 5";
$result = mysql_query($query);

while ($info = mysql_fetch_array($result))
{
	extract($info, EXTR_OVERWRITE);
	
	$array[$id] = $name;
}

include_once 'template_header.php';

?>

&lt;table>
	&lt;tbody>
	&lt;php foreach ($array as $key => $value): ?>
		&lt;tr>
			&lt;td>&lt;php echo $key;?>&lt;/td>
			&lt;td>&lt;php echo $value;?>&lt;/td>
		&lt;/tr>
	&lt;php endforeach;?>
	&lt;/tbody>
&lt;/table>

&lt;php include_once 'template_footer.php';?></pre>

<p>This is a highly simplified example, but you can see from this that within the same document, we connect to the database (assumed in this code example), write our query to pull information back from the database, loop through what the database sends back, pull in our header and footer and finally loop through the results and put them into a table. It's all very simple, but the above code does all of that in a procedural way. Unfortunately, this isn't the most flexible way of doing things.</p>

<p>Enter object-oriented programming.</p>

<p>Object-oriented programming (or OOP) relies more heavily on the use of classes and functions to reuse code as much as possible. This highly dynamic approach to programming make development faster, but can be more difficult for beginngers to understand. Let's convert the example above into a simple OOP example using Nova's syntax and principles.</p>

<pre>&lt;php

$this->load->model('items_model', 'items');

$items = $this->items->get_items();

if ($items->num_rows() > 0)
{
	foreach ($items->result() as $i)
	{
		$data['items'][$i->id] = $i->name;
	}
}

$this->template->write_view('view_name', $data);
$this->template->render();

?></pre>

<p>In order to be more reusable, connecting to and querying the database, as well as compiling the results, is handled by a model. Once we get that data back from the model, we can do our logic with it, in this case, assigning it to an array, then finally, we send that data to the view file to be printed out. Clearly in this example, we're not showing all of the code, but that isn't important here as much as highlighting the sorts of changes that exist between procedural programming and OOP. Nova uses the latter, so it's important to understand that things are different.</p>

<p>If you want to read more about OOP, you can do a <a href="http://www.google.com/search?q=object+oriented+php" target="_blank">Google search</a> to read more information.</p>

<h2>Controller</h2>

<p>Nova uses a programming approach known as MVC which stands for Model-View-Controller. In procedural programming, all three phases are handled by the same component: the page. In OOP though, these different phases are separated into different files.</p>

<p>The controller is arguably the most important of the three. A controller is simply a PHP class that corresponds to a specific page. For example, all of the pages in the personnel section of Nova are located inside the personnel controller. Put quite simply, in Nova, the controller controls the page. In addition to controlling the page, the controller is also responsible for doing the heavy lifting and the majority of the logic surrounding the page itself. The data it puts together then gets shipped off to the view (which we'll talk about later).</p>

<p>So let's take a quick look at what a controller looks like in Nova.</p>

<pre>class Personnel extends Controller
{
	function Personnel()
	{
		parent::Controller();
	}
	
	function index()
	{
		// code for the page located at personnel/index goes here
	}
}</pre>

<p>Pretty straightforward. Don't get bogged down with <em>how</em> this works just yet, just focus on the fact that this is a controller and it's what creates and controls the page you're trying to develop or edit.</p>

<p>Now that we've seen what a controller is, we can talk more specifically about the components inside the controller.</p>

<h3>The Constructor</h3>

<p>In PHP, every class has two special methods (a method is what OOP calls functions inside a class) that exist whether you create them or not: the constructor and destructor. If you don't explicitly declare them, they're just considered to be empty methods. Nova doesn't use destructors because they are only available in PHP 5 and higher, but constructors are found in every single controller in Nova. In a nutshell, a constructor is a method that gets executed immediately after the controller is requested by the browser (in programming terms, the constructor is called after the object is created). Because it gets called first, any kind of actions we want to take before the page is created would be run inside the constructor.</p>

<p>In Nova, we use the PHP 4 style constructors (to maintain backwards compatability). A constructor would look like this:</p>

<pre>function Personnel()
{
	parent::Controller();
	
	$this->load->model('characters_model', 'char');
}</pre>

<p>Constructors in PHP 4 are named the exact same thing as the class is named and include a call to the parent constructor. All that means is that if anything is being done in the Controller class constructor, it'll also be done in the Personnel class constructor as well.</p>

<p>In our example above, we've called the parent constructor as well as loading the characters model. That means that for any page inside the Personnel section, we'll be able to use the characters model without having to load it before using it. Constructors are handy to take these kinds of actions as a controller is starting up to make sure we have all the pieces we need.</p>

<h3>The Methods</h3>

<h2>Method</h2>

<h2>Model</h2>

<h2>Helper</h2>

<h2>Library</h2>