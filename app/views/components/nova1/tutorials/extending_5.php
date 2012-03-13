<h1><?php echo $header;?></h1>

<p>We've done the heavy lifting in the controller and model so far and we have all our information. Now, it's time to spit that data out into our view file so that people can see the list of ranks we have available. We'll start by opening the view file we created in our second tutorial. To recap, the view (located at <code>appplication/views/_base/main/pages/main_ranks.php</code>) should look like this:</p>

<pre>&lt;?php echo text_output($header, 'h1', 'page_head');?>
&lt;?php echo text_output($message);?></pre>

<p>We've already told our controller to pass the information to the view, so we have those items available to us without doing anything special, we just have to use the variables! Let's start by again making sure the variable exists to avoid errors if the query doesn't return anything from our model.</p>

<pre>&lt;?php if (isset($ranks)): ?>

&lt;?php endif; ?></pre>

<p>You'll notice we're using a variable called <var>$ranks</var>. Remember that in our controller, we passed the array to the view as <var>$data['ranks']</var>. All we're doing now is removing the <var>$data</var> part and assigning the ranks array to its own variable. Additionally, Nova uses PHP's alternate syntax in view files to keep PHP statements contained to a single line. This makes it easier for people who aren't as familiar with PHP as they don't have to worry about tracking braces and such. Inside that statement, let's loop through our ranks array.</p>

<pre>&lt;?php foreach ($ranks as $rank): ?>

&lt;?php endforeach; ?></pre>

<p>Again, we're using the alternate syntax for the foreach loop. This will step through each item in the array and give us access to the values through <var>$rank['key']</var>. Inside our foreach loop, let's spit out the rank information.</p>

<pre>&lt;?php echo $rank['name'] .' '. img($rank['image']);?><br /></pre>

<p>That will print the name of our rank, a space, then the image. In this instance, we're using a CodeIgniter helper for creating an image tag. Once you've saved the file, you can navigate to your browser and see a full listing of ranks out of the database.</p>

<p>Your view should now look like this:</p>

<pre>&lt;?php echo text_output($header, 'h1', 'page_head');?>
&lt;?php echo text_output($message);?>

&lt;?php if (isset($ranks)): ?>
	&lt;?php foreach ($ranks as $rank): ?>
		&lt;?php echo $rank['name'] .' '. img($rank['image']);?>&lt;br />
	&lt;?php endforeach; ?>
&lt;?php endif; ?></pre>

<p>That's it. The above is the only presentational code you need and you have a full list of ranks. Congratulations, you've just created a brand new page that has database interactivity!</p>

<br />
<p>
	<?php echo Html::anchor('nova1/tutorials/extending/4', '&#171; Previous Tutorial');?>
	&nbsp; &middot; &nbsp;
	<?php echo Html::anchor('nova1/tutorials/extending/6', 'Next Tutorial &#187;');?>
</p>