<h1><?php echo $header;?></h1>

We've looked at what goes in to a skin and what makes up a template file, so let's drill further down into the section directory to find out what makes up the heart and soul of a skin section!

Inside the section's directory, we have 4 folders: css, images, js and pages. These make up the core components of a section and are all pretty self-explanatory, but let's go folder by folder and look at what's involved with each.

<h2>AJAX</h2>

<p>The ajax directory is for, obviously, storing AJAX view files (mostly the modal windows). In Nova, we've managed to separate the AJAX from the actual view files. Like images and pages, Nova will look in your skin's section first to find out if there are AJAX view files that should be used in Nova instead of the base files.</p>

<h2>CSS</h2>

The css directory is for, obviously, storing cascading stylesheets. You can have as many or as few stylesheets as you want. In the default skin's main section, we break the stylesheets out to things like display, text, forms, tabs, reset and panel. Each stylesheet does it's own thing, but what they all have in common is that the main.css stylesheet imports them for use by Nova.

<pre>@import url('structure.css');
@import url('skin.css');
@import url('ui.tabs.css');</pre>

<p>With this block of code, we've pulled all the stylesheets in and once the main.css stylesheet is loaded by our template file, we have access to everything inside these stylesheets. Observant skin developers probably noticed in the last tutorial that we only pulled in one stylesheet, and the reason we do that is because everything else is imported by the main stylesheet. Included in this list is a reset stylehsheet. You don't have to use a reset stylesheet, but we've found it invaluable in making sure that all browsers start at the same place. It lets us eliminate some of the browser-specific issues we tend to run in to when developing skin sections.</p>

<p>While we have developed our section a certain way and with certain classes, you're under no obligations to use the same. In fact, with Seamless Substitution, you could, in theory, completely redo nearly every part of a skin section with your own class names. Of course, an undertaking like that would take some time, but it is possible.</p>

<h2>Images</h2>

<p>The images directory is for, obviously, storing our images. A section's images folder can be used for both background images for the section itself as well as storing replacement images that are used elsewhere in the system. We've already talked about seamless substitution, so you know that adding an image with the same name as the image found in the <samp>_base</samp> directory will prompt Nova to use your item instead of the system default.</p>

<h2>Javascript</h2>

<p>The js directory is for, obviously, storing Javascript view files. In Nova, we've managed to separate the Javascript from the actual view files in the event that someone wants to rewrite part of, or all, of the system's Javascript. This can come in handy in the event that someone, for whatever reason, wanted to change Nova from using jQuery to Prototype or any other Javascript framework. In addition, the Javascript view files can be edited to allow for more Javascript functionality. Like images, Nova will look in your skin's section first to find out if there are Javascript view files that should be used in Nova instead of the base files.</p>

<h2>Pages</h2>

<p>The pages directory is for storing view files that Nova uses. Like images and Javascript, Nova checks your skin's section to find out if there are any view files it should use instead of the base ones. View files are almost entirely HTML, though there is some basic PHP scattered throughout. We've decided to use PHP's alternate syntax for control structures (if, elseif, else, switch, for, foreach, while, etc.) to make it easier for non-PHP coders to work with the PHP code.</p>

<p class="important"><strong>Note:</strong> This is the only place in the system where the alternate syntax should be used.</p>

<br />
<p>
	<?php echo anchor('nova/tutorials/skins/3', '&#171; Previous Tutorial');?>
	&nbsp; &middot; &nbsp;
	<?php echo anchor('nova/tutorials/skins/5', 'Next Tutorial &#187;');?>
</p>