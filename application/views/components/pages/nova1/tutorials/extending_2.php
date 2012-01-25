<h1><?php echo $header;?></h1>

<p>Nova uses a simplified template system, accurately named Template. Instead of building the template through multiple pages, a single HTML/PHP file is used and "regions" are defined where content appears. We're not going to get in to the specifics of Template in this tutorial, but one thing we do need to do is to call the template code in our method. So let's pull up main.php and keep working on our new ranks page.</p>

<p>In the last tutorial, we ended up creating a simple method in main.php that looked like this:</p>

<pre>function ranks()
{
	echo 'This is my ranks page!';
}</pre>

<p>Let's add some meat to this controller and start to break apart the presentation and logic. The first thing we're going to do is add code that tells the template what to do for our page. You can remove the echo statement and add the following code to your method (between the braces):</p>

<pre>// write the data to the template
$this->template->write('title', 'Ranks');
$this->template->write_view('content', $view_loc, $data);

// render the template
$this->template->render();</pre>

<p>These 3 lines of code are paramount to getting Nova to display what we want; these tell the template where to pull the content from. The first line tells our method to write something to the title region, and the second parameter tells it what to write. In this case, we're adding Ranks to the title of the page after the ship name. The second line tells our method to write a view to the content region. The second parameter tells the template where to look for the view file, and the third parameter is actually going to be passing data from the controller method to the view file for the browser to display. Finally, the last line renders the template in it's entirety.</p>

<p class="alert alert-info"><strong>Note:</strong> Without the last line, your page won't display, it'll just be a blank, white page.</p>

<p>In the line that writes the view file to the content region, you see the $view_loc variable where I said we were telling the system where to look for our view file. That variable will contain information about where our view file is. In our method, above the code we just added, let's add the following line of code:</p>

<pre>// figure out where the view file should be coming from
$view_loc = view_location('main_ranks', $this->skin, 'main');</pre>

<p>So what does this code do? We've built a handy little helper for Nova that helps figure out what skin is being used and where it should be pulling view files from. View files are the PHP files that have all the HTML code for our pages. In this case, we're looking for the main_ranks.php view file in whatever the current skin is and in the main section. Of course, that file doesn't exist right now, so we need to create it. Create a file called main_ranks.php in the views/_base/main/pages directory. It should look like this:</p>

<pre>&lt;?php echo text_output($header, 'h1', 'page-head');?>
&lt;?php echo text_output($message);?></pre>

<p>One of the advantages of the view_location helper is that it checks the current skin to see if there's a view in the skin's pages directory with that name. If it finds a file, it'll use the skin's version of the file instead of whatever's in _base. For creating a new page, that doesn't do us a lot of good, because then other skins can't use it. However, when we get into modifying existing pages, that'll become a huge part because it allows us to "overwrite" the _base view file with our own, meaning our skin can have a unique layout for a page and it doesn't ever affect the system default.</p>

<p>Back to our new view file. The <dfn>text_output()</dfn> part is a helper that will generate our HTML for us.  The first parameter you see is the variable we're passing from the controller (which doesn't exist just yet).  The second parameter is the element you want the text to be wrapped in.  You can use any HTML element here (h1, h2, h3, h3, h5, h6, p, div, span, quote, etc.). In addition, if you don't want it to have an element, you can simply put nothing in between those single quotes.  Finally, the third parameter (which is optional), tells the helper what class to put on the element.  In this case, we're putting our text in an H1 element with a class of page-head.  That's it. If we tried to load the page now, it would generate a few errors though, so let's keep powering through and finish this tutorial up!</p>

<p>Back in main.php, we're going to add two new lines of code after we declare <var>$view_loc</var>:</p>

<pre>$data['header'] = 'My Ranks';
$data['message'] = "This is the page where I'm going to see all my rank images!";</pre>

<p>Just like that, we've created variables that are passed to the view file. Those two variables we created in the view file? You guessed it, they line up with the names here and will display the data we've set them to. You'll notice that our base variable here is $data and that we passed a variable named $data to our write_view function. Making more sense now? Go ahead and refresh the page in your browser and you'll see the text we put in here.</p>

<p>Congratulations, you've just added a view file and told our method to send our data from the method to the new view file!</p>

<br />
<p>
	<?php echo Html::anchor('nova1/tutorials/extending/1', '&#171; Previous Tutorial');?>
	&nbsp; &middot; &nbsp;
	<?php echo Html::anchor('nova1/tutorials/extending/3', 'Next Tutorial &#187;');?>
</p>