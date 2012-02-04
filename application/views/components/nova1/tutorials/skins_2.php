<h1><?php echo $header;?></h1>

<p>A term that's been thrown around over the last few months when talking about skinning in Nova is <kbd>Seamless Substitution</kbd>. There have been some vague descriptions of what seamless substitution is, but not a detailed look at one of the biggest features for skin developers in Nova. So, let's take a step back and look in to what exactly seamless substitution is and why it's such a big deal!</p>

<p>In SMS, it never failed that someone would want to edit a core application file to get a desired effect. With SMS having open source code, admins were free to make the changes to the source code themselves, but the problem became that the next SMS update would wipe out those changes if we updated that page. There was nothing that could be done about it either; the admin was just plain out of luck. When we sat down to start planning Nova, this was a major issue we wanted to address. The answer we came up with was Seamless Substitution.</p>

<p>We've already talked about the fact that the _base directory contains all the default view files, Javascript view files and images used by Nova. This folder acts as the central repository for all non-skin related assets. Each skin has folders for admin, main, login and wiki; _base does as well (though the _base folder doesn't contain a CSS directory for the 4 sections). In addition, elements that aren't skinnable are in _base as well.</p>

<p>The _base_override contains directories for the admin, main, login and wiki sections. We'll get in to the exact purpose of the override directory shortly, but for now, just know that it exists and is part of the seamless substitution workflow.</p>

<p>Seamless substitution starts in the application controllers with one of 3 location helpers: view_location, js_location and img_location. Each of these helpers follows the same basic workflow to determine where the views, javascript files and images should be pulled from. Let's focus on the view_location helper to illustrate this point. In our controller, we would have the following code:</p>

<pre>$view_loc = view_location('main_index', $this->skin, 'main');</pre>

<p>That variable is then put into our template code to write the content region, but all the variable contains by that time is a string of text that describes the path Nova should use for where to pull the view file from. The workflow of view_location is pretty straightforward. You'll remember that every section has a pages directory in it that, by default, is empty. The first thing Nova does is looks in the skin currently being used and drills down to the section. In our example, we're looking for main_index.php in the current skin's main section. Once there, it checks the pages directory for a file called main_index.php. If Nova finds that the file is there, the process ends and Nova uses that file. More often than not though, it won't find it and will continue on to the next step.</p>

<p>It dawned on us as we were developing Nova that you may want to change the manifest layout for your skin, but then, there are other pages where you may want to change it for the whole site. The way seamless substitution worked before, you would have to put that file in every skin as well as remember to put it in any new skins you add. That's a lot of work and remember and we wanted this to be as simple a process as possible, so we came up with the override idea. That brings us to step 2 of seamless substitution.</p>

<p>If Nova didn't find the view file we told it to look for in the skin section's pages folder, then it goes up to _base_override and searches the section's pages folder for that file. If it finds it, it uses it. If it doesn't find it, it moves on to the last step. This 2nd step allows an admin to change an image or page for the entire system without touching every single skin. This also has the added benefit of giving people another place to put stuff that isn't _base. Want to create a new page? The override is the perfect place to put it! Anodyne really doesn't want people messing around with _base because if we change something in there, we don't want you to lose your changes. Hence, the override, which will remain intact through an update (assuming you haven't overwritten the entire views directory).</p>

<p>So Nova has gotten through the skin and the _base_override directories and still hasn't found what it's looking for, where to next? After that, it's time to look in _base. Odds are, Nova's going to find what it's looking for in _base and will use it. So just like that, with a line of code, Nova is adding a whole new level of flexibility for skin developers. So how do you use seamless substitution?</p>

<p>Using it is even easier than the line of code. All you have to do is create a file in your skin section's pages directory (or the override directory) with the same name as the one you want to replace. (The best way to go about it is to copy the file from _base and paste it into either your skin or the override directory and then edit it from there.) The only catch is that the file has to be named identically or it won't work. (Also a good tip if your page isn't working and you want to revert back to the system default but don't want to delete your work, just rename the file to something different.) As you've seen already, Nova just knows what to do from there.</p>

<p>What's even better? The same process works for images, javascript files and AJAX views! Want to use some different icons for your skin? Throw the icons in your skin section's images folder with the same names and Nova uses yours. Want to use a different icon for the RSS icon throughout the entire application? Throw the new icon in the override section's images folder and Nova uses it!</p>

<p>Seamless substitution is a powerful tool available to skin developers that will help them easily make changes to the Nova core without ever touching it!</p>

<br />
<p>
	<?php echo Html::anchor('nova1/tutorials/skins/1', '&#171; Previous Tutorial');?>
	&nbsp; &middot; &nbsp;
	<?php echo Html::anchor('nova1/tutorials/skins/3', 'Next Tutorial &#187;');?>
</p>