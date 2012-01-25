<h1><?php echo $header;?></h1>

<p>So you've read about seamless substitution (or maybe you haven't), but now you're sitting there scratching your head wondering how the hell you actually take that information and do something with it. You've got specific ideas of things you want to do with your sim's Nova site, but you're not sure how to do it. Let's dig in to a practical application of how to replace view files to change up your site a little bit. In this tutorial, we're going to use seamless substitution to replace the view file of the main index file to add a reference to a YouTube video.</p>

<p>So why are we doing that through seamless substitution instead of just adding the code to the welcome message? Nova's security setup doesn't allow certain types of HTML tags to be used because they're often used for malicious purposes. We don't want Nova to become something that can easily transport malicious code, so those tags aren't allowed in the database. In order to do this, we'll have to extend Nova to add the reference ourselves.</p>

<h2>Prepping the File</h2>

<p>To get started, we're going to copy <samp>application/views/_base/main/pages/main_index.php</samp> and paste that copy into <samp>application/views/_base_override/main/pages</samp>.</p>

<p>Why are we copying files and pasting them into different locations? Why not just open the file in the <samp>_base</samp> directory, edit it and be done?</p>

<p>For those who haven't read up on seamless substitution, it's a way of overriding Nova's defaults without touching the default files. The advantages to a system like this is that you can make all the changes you want to view files without ever touching Nova's core. Not only is that a cool feature, but it means your changes stay intact even when you update to a newer version of Nova. So going from Nova 1.1.2 to Nova 1.2, you won't lose those changes, but you'll still have all the cool new features and handy bug fixes that come along with a newer version. Beacuse of that, we put our files into <samp>_base_override</samp> so that Nova will use those files instead of what's in <samp>_base</samp>. (If you were developing a skin and wanted your skin to override the default, you can do the same kind of thing.)</p>

<p>With the view file in <samp>_base_override</samp>, we're ready to get started!</p>

<h2>Doing the Work</h2>

<p>If we open up <samp>application/views/_base_override/main/pages/main_index.php</samp> right now, we'd see that it looks like this:</p>

<pre>&lt;?php echo text_output($header, 'h1', 'page-head');?>

&lt;?php echo text_output($msg_welcome);?>

&lt;?php if (isset($news)): ?>
	&lt;?php echo text_output($label['news'], 'h2', 'page-subhead');?>
	
	&lt;?php foreach ($news as $value): ?>
		&lt;h3>&lt;?php echo Html::anchor('main/viewnews/' . $value['id'], RARROW .' '. $value['title']);?>&lt;/h3>
		
		&lt;p class="gray fontSmall bold">
			&lt;?php echo $label['posted'] .' '. $value['date'];?>
			&lt;?php echo $label['by'] .' '. $value['author'];?>
			&lt;?php echo $label['in'] .' '. $value['category'];?>&lt;/p>
		
		&lt;?php echo text_output($value['content'], 'p');?>&lt;br />
	&lt;?php endforeach; ?>
&lt;?php endif; ?></pre>

<p>What we want to do here is add a YouTube video reference under the welcome message. If we go to YouTube and go to the video, you'll notice a button below the video player with the text <dfn>&lt;Embed></dfn>. Click this button and you'll be shown the code you need to use. Copy it and come back to your main index view file. The code we copied will look a little something like this:</p>

<pre>&lt;object width="640" height="385">
	&lt;param name="movie" value="http://www.youtube.com/v/EZgZBn0Eyis?fs=1&amp;hl=en_US">&lt;/param>
	&lt;param name="allowFullScreen" value="true">&lt;/param>
	&lt;param name="allowscriptaccess" value="always">&lt;/param>
	&lt;embed src="http://www.youtube.com/v/EZgZBn0Eyis?fs=1&amp;hl=en_US" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="640" height="385">&lt;/embed>
&lt;/object></pre>

<p>Take the code you copied and paste it into the view file exactly where you want the video to appear.</p>

<pre>&lt;?php echo text_output($header, 'h1', 'page-head');?>

&lt;?php echo text_output($msg_welcome);?>

&lt;div>
	&lt;object width="640" height="385">
		&lt;param name="movie" value="http://www.youtube.com/v/EZgZBn0Eyis?fs=1&amp;hl=en_US">&lt;/param>
		&lt;param name="allowFullScreen" value="true">&lt;/param>
		&lt;param name="allowscriptaccess" value="always">&lt;/param>
		&lt;embed src="http://www.youtube.com/v/EZgZBn0Eyis?fs=1&amp;hl=en_US" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="640" height="385">&lt;/embed>
	&lt;/object>
&lt;/div></pre>

<p class="alert alert-info"><strong>Note:</strong> For spacing purposes, we've wrapped our object tag, it's parameters and embed object in div tags. They aren't required for this to work. Also, the above example doesn't include the necessary code for showing news items on the main page. This was done for brevity. The final view code is below.</p>

<p>With this content in our view file, we can save the file to our server and fire up a browser. Once we navigate to your Nova site, you'll see that the YouTube video is placed directly below the intro text just like we wanted.</p>

<p>Congratulations, you've used seamless substitution to quickly and easily change the way your main Nova page looks! You can take what you've learned here and use that on any page in the system.</p>

<h2>Final Code</h2>

<p>The final code for the view file, for reference, would be:</p>

<pre>&lt;?php echo text_output($header, 'h1', 'page-head');?>

&lt;?php echo text_output($msg_welcome);?>

&lt;div>
	&lt;object width="640" height="385">
		&lt;param name="movie" value="http://www.youtube.com/v/EZgZBn0Eyis?fs=1&amp;hl=en_US">&lt;/param>
		&lt;param name="allowFullScreen" value="true">&lt;/param>
		&lt;param name="allowscriptaccess" value="always">&lt;/param>
		&lt;embed src="http://www.youtube.com/v/EZgZBn0Eyis?fs=1&amp;hl=en_US" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="640" height="385">&lt;/embed>
	&lt;/object>
&lt;/div>

&lt;?php if (isset($news)): ?>
	&lt;?php echo text_output($label['news'], 'h2', 'page-subhead');?>
	
	&lt;?php foreach ($news as $value): ?>
		&lt;h3>&lt;?php echo Html::anchor('main/viewnews/' . $value['id'], RARROW .' '. $value['title']);?>&lt;/h3>
		
		&lt;p class="gray fontSmall bold">
			&lt;?php echo $label['posted'] .' '. $value['date'];?>
			&lt;?php echo $label['by'] .' '. $value['author'];?>
			&lt;?php echo $label['in'] .' '. $value['category'];?>&lt;/p>
		
		&lt;?php echo text_output($value['content'], 'p');?>&lt;br />
	&lt;?php endforeach; ?>
&lt;?php endif; ?></pre>