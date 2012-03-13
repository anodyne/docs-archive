<h1><?php echo $header;?></h1>

<p>A library is just a normal PHP class. It doesn't need to extend anything or follow any conventions. In Nova, libraries are stored in <code>application/libraries</code> and have the first letter of the filename capitalized. Our example library would look like this:</p>

<pre>class Example {
	
	function Example()
	{
		log_message('debug', 'Example Library Initialized');
	}
}</pre>

<p>You can add methods to your library like you normally would. Since Nova follows PHP 4 compatability, visibility keywords (public, private, protected) aren't available. If you want to make a method private (in a psuedo manner), simply append an underscore to the beginning of the method name. For instance, if we wanted a private method to add some numbers up, the name of the method would be <dfn>_add</dfn>.</p>

<h2>Loading a library</h2>

<p>To load a library from your controller or model (you should never load a library from a view file), you'll need to manually call the load method, like this:</p>

<pre>$this->load->library('example');</pre>

<h2>Libraries in subdirectories</h2>

<p>Libraries can be stored in subdirectories if you want to organize them in that way. If we wanted to store our example library in a directory called "test", we would load the library like this now:</p>

<pre>$this->load->library('test/example');</pre>