<h1>Development Concepts in Nova 2</h1>

<p>Nova is a complex, highly-dynamic system and can be difficult to understand top to bottom without some basic understanding of the concepts involved with such a system. Below are several topics that are important to understand before embarking on any development tasks within Nova.</p>

<h2>Object-Oriented Programming</h2>

<p>Object-oriented programming (OOP) is a programming paradigm that relies on using objects to design and build applications. When most people learn PHP, they learn the procedural way of coding which is just a top to bottom programming relies very little on outside classes and methods. There's nothing wrong with learning that way, but when it comes to building something like Nova, procedural coding just doesn't work as well. (SMS was a procedurally-built system.) Using OOP allows us to re-use a lot of our work and build applications in pieces.</p>

<p>When you think about objects, don't think of it as a programming concept, but instead, think of it like a car. Every car has a few things that don't change, like its manufacturer, model and year. In programming terms, those things that are set ahead of time are properties. Cars can also do things, like drive forward, drive backwards and play the radio, or in programming terms, methods that do things. So then how would a car object look like?</p>

<pre>class Car {
	
	private $_manufacturer;
	private $_model;
	private $_year;
	
	public function __construct($manufacturer, $model, $year)
	{
		$this->$_manufacturer = $manufacturer;
		$this->$_model = $model;
		$this->$_year = $year;
	}
	
	public function drive_forward()
	{
		// code to drive forward
	}
	
	public function drive_backwards()
	{
		// code to drive backwards
	}
	
	public function play_radio($station)
	{
		// code to play a specific radio station
	}
	
	public function manufacturer()
	{
		return $this->$_manufacturer;
	}
	
	public function model()
	{
		return $this->$_model;
	}
	
	public function year()
	{
		return $this->$_year;
	}
}</pre>

<p>Now that we have a class that represents our car, we can use it!</p>

<pre>$car = new Car('Honda', 'Civic', 2011);

echo $car->manufacturer();
echo $car->model();
echo $car->year();

$car->drive_forward();
$car->drive_backwards();
$car->play_radio('99.7');</pre>

<p>The first line creates a new car object. In this case, we're creating a new 2011 Honda Civic. Once we've created the object, we have access to everything about that car, including telling it to do things, like driving forward, driving backwards and playing the radio. We can also get information from the car as well, such as what model and year the car is.</p>

<p>While this is a pretty simple explanation of how objects work in PHP, you can start to see how this kind of thing allows us to build pieces of an application and re-use them all over the application. If you want to delve more in to OOP, try doing a few Google searches for "PHP OOP".</p>

<h2>MVC</h2>

<p>Unlike SMS, Nova is built with adherence to MVC principles. MVC (model-view-controller) is a way of separating application development in to several different components to make it easier to develop and change things. Understanding these different components is key to understand how Nova is put together and how you can best change Nova.</p>

<h3>Models</h3>

<p>Simply put, models are used to interact with the database. A model is nothing more than a PHP class intended to talk to the database, be that asking for information or giving information. When called, a model method will usually query the database for something and return an object with all of the information (be it 1 record or several records) requested.</p>

<h3>Views</h3>

<p>In the MVC paradigm, views control the presentation of the information. In most cases, view files contain mostly HTML with some PHP variables sprinkled throughout (the file needs to have a .php extension since there is PHP in the file). There's nothing overly complicated about views and in fact, most view files should be pretty straightforward. Views shouldn't interact directly with the database or do a ton of logic, it should take what's passed to it from the controller and simply display that information for a user.</p>

<h3>Controllers</h3>

<p>Think of controllers as the traffic cops of Nova. Controllers are PHP classes whose sole purpose is to carry out the business logic of the application. A controller will set up the page, use models to pull information back, do logic on that information and finally, prepare the information and send it over to the view file. The majority of the work in Nova is done through controllers (libraries and helpers do some of the work too, but the heavy lifting is done by the controllers).</p>

<h2>Seamless Substitution</h2>

<p>One of the biggest features of Nova, seamless substitution allows developers to substitute their own version of a view file, JavaScript view file or image in their skin and Nova will use that version instead of its default. In addition to being able to substitute on a skin-by-skin basis, admins can also override a view file, JavaScript view file or image across the entire system without touching the core file, all by just putting their version of the file the specific location necessary.</p>

<p>Why do we think this is an incredible feature? It means developers and admins can make changes to the system without ever touching a core file. When an update for Nova comes out, there's no worrying about overwriting your changes, they'll stay intact during the update process. Understanding seamless substitution is pretty easy and while it may seem easier to just change a core file, substituting files offers more power and stability. So how does it work?</p>

<h3>Overriding from a Skin</h3>

<p>Let's say you're working on a brand-new skin for your game, but you don't like the way a few of the icons look in your new skin and want to change them. All you need to do is find an icon that you like better, name it the same as the original icon and put it in your skin section's images directory (if you're working on the main section, you'd put it in your skin's main/images directory). Done. Nova will use the image you specified instead of the system default.</p>

<p>The same process applies to view files and JavaScript view files. Simply copy the original version (which can be found in nova/modules/core/views/_base) and paste it into your skin section's pages directory (or js directory if you're overriding a JavaScript view file). From there, you can make any changes you want to the view file, save it and Nova will use your version instead of the system default.</p>

<h3>Overriding the System Default</h3>

<p>That's great and all, but if you want to make changes across the entire system, you don't want to have to change something in every single skin. We've thought of that and provide a similar process to override something across the entire system. Instead of storing the images, view files or JavaScript view files in skins, you can use the _base_override directory in the application/views directory. Using the same process as above, just put your assets in the right location and Nova will use those instead of the system default.</p>

<h3>Order of Preference</h3>

<p>One important to thing to understand about seamless substitution is the order in which Nova looks for these assets. Nova starts by looking in the current user's skin to see if it can find the image/view file/JavaScript view file. If the system finds the asset (remember, things have to named identical to the system default), it stops and uses that asset. If the skin doesn't have that item, Nova goes to the _base_override directory to do the same search. Like the skin, if the asset is found, Nova stops looking and uses it. Again, if the asset isn't found, the system goes to the system default location and pulls the asset from there.</p>

<p>It may seem a little confusing at first, but just remember, if you put something in the _base_override directory, Nova will use your version instead of its own. If a skin developer overrides that same asset in their skin, the skin gets preference and Nova uses the skin's version of the asset.</p>