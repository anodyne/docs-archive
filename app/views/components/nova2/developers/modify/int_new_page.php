<h1>Creating a New Page</h1>

<p>Oftentimes, the built-in pages in Nova just won't be enough and you need to create a new page for you sim to hold new information.</p>

<h2>The Problem</h2>

<p>After having a killer month, your simming organization bestows on you several awards and you want a place to display those awards for the world to see.</p>

<h2>The Solution</h2>

<p>Like a lot of things in Nova, there are two ways to accomplish this. We'll start with the easy way and then move up to the more advanced way.</p>

<h3>Using Thresher</h3>

<p>The simplest solution is to use Thresher, Nova's built-in mini-wiki. Using Thresher, you can quickly and easily create a new page, add links to images and whatever else you want. The only downside to this solution is that it's stored in the wiki. If that isn't an issue or you're having trouble following the more advanced option below, Thresher is your best bet.</p>

<h3>Creating a New Page</h3>

<p>That's all well and good, but what if you don't want the page stored in the wiki? Instead, you want it as part of your sim section. Let's step through how you would go about adding a new page to the sim section.</p>

<h4>1. Set Up the Controller</h4>

<p>This is, most likely, one of your first forays into controllers. In the simplest terms, a controller is like a traffic cop. The web browser navigates to a URL at which point the traffic cop (the controller), tells you where to go from there. A controller is simply a PHP class that directs a request to the appropriate place. In order to build our page, we need some simple code in our controller.</p>

<p>To start, we're going to open <code>app/controllers/sim.php</code>. This is the controller that handles all of the pages in the sim section. When you open the file, you'll notice that it's almost empty. The core sim pages are stored in the base controller in the Nova module. Since we're not interested in modifying those, we're going to just add a new controller action to this file after the comment about adding your own methods after it.</p>

<pre>public function sim_awards()
{
	$this->_regions['content'] = Location::view('sim_allawards', $this->skin, 'main');
	$this->_regions['title'].= "Awards We've Won";
	
	Template::assign($this->_regions);
	
	Template::render();
}</pre>

<p>Let's step through this piece-by-piece to see what's going on.</p>

<pre>public function sim_awards()</pre>

<p>A controller action is nothing more than a class method. A class method is a function inside a class. Pretty simple. Nova will use the name of the controller action as part of the URL. (This actually is what tells the controller where it needs to go.) In this case, our URL would be <code>index.php/sim/sim_awards</code>. You can name your controller action whatever you want provided it doesn't conflict with another method in that particular controller or that it isn't a reserved PHP word.</p>

<pre>$this->_regions['content'] = Location::view('sim_allawards', $this->skin, 'main');</pre>

<p>Nova templates are broken up into regions. The guts of a page are part of the <var>content</var> region. What we're doing here is assigning a view file to the content region to be rendered by the browser. Sounds complicated, but it really isn't. All you need to know is the second part: the location class.</p>

<p>In order for seamless substitution to work, we created a location class (it used to be a helper in Nova 1) that does all the heavy lifting and figures out where to pull files from. In this case, we're looking for a view that's named <code>sim_allawards.php</code> (the .php part is assumed so you don't have to include it). After that, the class is simplying being told where to look and what section it's part of.</p>

<pre>$this->_regions['title'].= "Awards We've Won";</pre>

<p>Now, we're simply setting the title of the page (what we see in the browser's title bar). You can see that to whatever you want provided it's a string.</p>

<pre>Template::assign($this->_regions);</pre>

<p>This is required as it takes all the regions and assigns them to the template.</p>

<pre>Template::render();</pre>

<p>Pretty self-explanatory here, but we're telling the Template class to render the template to the browser window.</p>

<h4>2. Set Up the View</h4>

<p>If you tried to go to your page above, you'd be greeted by a nasty error telling you something is missing. What we're missing is the guts of the page, or the view file. The second part of this is to create your view file. To do that, we're going to create a file called <code>sim_allawards.php</code> in <nobr><code>app/views/_base_override/main/pages</code></nobr>.</p>

<p>So what are we going to put in our view file?</p>

<pre>&lt;h1 class="page-head">Awards We've Won&lt;/h1>

&lt;p>Below is a list of all the awards we've won!&lt;/p>

&lt;p>&lt;img src="&lt;?php echo base_url();?>app/assets/images/award_image.jpg" />&lt;/p></pre>

<p>As you can see, it's <strong>really</strong> straightforward. The only thing we're doing is using CodeIgniter's built-in <dfn>base_url</dfn> function to get the base URL of our site. (If we don't use the base URL, CI will try to append index.php to our image path and it won't be able to find the image.)</p>

<p>From here, you can make whatever changes you want to the view file and continue to add awards. Because we've done all this work in the <code>application</code> directory, we don't have to worry about losing our changes when we make an update either!</p>