<h1><?php echo $header;?></h1>

<p>A typical URL in Nova <em>without</em> mod_rewrite enabled:</p>

<pre>http://localhost/nova1/index.php/main/credits/1</pre>

<p>Let's look closer at each part of the URL:</p>

<ul>
	<li><strong>http://localhost/nova1/index.php</strong> &ndash; On my development server, I've created a folder called nova for all of the Nova files. As you can see, the index.php file that handles all requests is sitting within that folder's root.</li>
	
	<li><strong>/main</strong> &ndash; The next part of the URL is the controller that is being requested within Nova. In this example, we are requesting a controller called <kbd>Main</kbd>. Controllers in Nova can be found in <samp>application/controllers</samp>. This is the first segment of the URI and can be accessed using the URI library with <dfn>$this->uri->segment(1)</dfn>.</li>
	
	<li><strong>/credits</strong> &ndash; The next part of the URL in this example is the method within the <kbd>Main</kbd> controller that we are calling. (A method is simply a function inside of a class.) In this case, we're requesting the <var>Credits</var> method. This is the second segment of the URI and can be accessed using the URI library with <dfn>$this->uri->segment(2)</dfn>.</li>
	
	<li><strong>/1</strong> &ndash; The number one in this instance doesn't relate to a class or method, but instead, is a parameter held in the URI. Throughout the system, Nova passes parameters through the URI and then access them using CodeIgniter's libraries and helpers. This is the third segment of the URI and would be accessed using the URI library with <dfn>$this->uri->segment(3)</dfn>. The URI can contain as many parameters as you want, just keep track of which segment it is.</li>
</ul>