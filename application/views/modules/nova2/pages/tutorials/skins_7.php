<h1><?php echo $header;?></h1>

<h2>Getting Started</h2>

<p>Over the next few pages, we're going to go through creating a Nova skin section step-by-step. We'll talk about a lot of topics from the very simple and setting up our files and directores to advanced topics like extending controllers and using seamless substitution in our skin. When you're done with this tutorial, you'll be well on your way to being a Nova skinning guru. Through the course of this tutorial, feel free to experiment with new things and make your skin unique!</p>

<h2>Directories &amp; Files</h2>

<p>The first thing we need to do in order to start is to create the directories and files we'll need in order to build a skin. In this instance, we're only going to create a main section skin, but the principles are the same when creating a login section, admin section and wiki section skin.</p>

<p>Let's start by creating our skin directory in <samp>application/views</samp>; let's call the directory our skin sits in <kbd>anodyne</kbd>.</p>

<p>The best way to create a skin in Nova is to start with one that already exists. For this tutorial, let's use the Lightness skin as a template. Open the <samp>application/views/lightness</samp> folder and copy the <kbd>main</kbd> folder, <dfn>template_main.php</dfn>, <dfn>index.html</dfn> and <dfn>preview-main.png</dfn> over to the <kbd>anodyne</kbd> directory. This gives us the basis for our skin and makes sure we have all the files, classes and components we need. From here, we'll simply overwrite what's there and build our skin.</p>

<h2>Setting Up the Template File</h2>

<p>We have a base template to work off, but let's tweak it a little bit. To start, open up <dfn>template_main.php</dfn> from the anodyne skin. Let's make sure that the credits at the top of the file are accurate:</p>

<pre>/*
|---------------------------------------------------------------
| TEMPLATE - MAIN
|---------------------------------------------------------------
|
| File: application/views/anodyne/template_main.php
| Skin Version: 1.0
|
| Main layout file used by the anodyne skin.
|
| $sec options are: main, wiki, admin, login
| $css can be anything you want (with a .css extension of course)
|
*/</pre>

<p>For the most part, we're not going to make very many changes to the template file because it's already pretty flexible. Most of the work we'll do is going to be in the stylesheets. If you have an HTML you'd like to use, you can easily copy and paste it in, then move the PHP variables spread throughout the template into the right locations.</p>

<p>One last thing we're going to do is add our name to the footer so people can see right away who created the skin. We could also add the name of our RPG Group or any other information right here. As a general rule, try to keep the information in the footer short, sweet and to the point.</p>

<pre>&lt;div id="footer">
	Powered by &lt;strong>&lt;?php echo APP_NAME;?>&lt;/strong> from
	&lt;a href="http://www.anodyne-productions.com" target="_blank">Anodyne Productions&lt;/a> | 
	
	&lt;?php echo anchor('main/credits', 'Site Credits');?> |
	Skin created by &lt;strong>David VanScott&lt;/strong>
&lt;/div></pre>

<p>We now have the framework for our skin and in the next tutorial, we can start to play with our stylesheets to make this skin unique to our own tastes. We only have one last thing to do to make sure we've set up the skin properly.</p> 

<h2>Telling Nova About Our Skin</h2>

<p>Whew! We've made some good progress, but before we can go any farther, we need to tell Nova about our skin so we can make sure everything is working like it should. In order to do this, we need to log in to Nova and go to the Admin Control Panel. Once there, look on the right in your menus for the Skin Catalogue link. We're going to start this step by creating a new skin with following settings:</p>

<ul>
	<li><strong>Name</strong>: My First Skin</li>
	<li><strong>Server Directory</strong>: anodyne</li>
	<li><strong>Credits</strong>: Skin based on the skinning tutorials released by Anodyne.</li>
</ul>

<p>This highlights one of the features of catalogues in Nova: you can name your skin completely differently from the name of the directory on the server!</p>

<p>Now that we have our skin catalogue record, let's add a skin section to it. Click on Add Skin Section and use the following values to create a new skin section:</p>

<ul>
	<li><strong>Section</strong>: Main</li>
	<li><strong>Skin</strong>: My First Skin</li>
	<li><strong>Preview Image</strong>: preview-main.png</li>
	<li><strong>Status</strong>: In Development</li>
	<li><strong>Default Section</strong>: No</li>
</ul>

<p>Here's another chance to highlight one of Nova's features. You can set a skin to be in development. When that happens, only people who have permissions to the skin catalogue will be able to select the skin from Site Options. This allows admins to put skins up on their servers and test them fully without showing them to all the users until it's ready to go!</p>

<p>With our skin section created, you'll be able to see your new skin and skin section at the bottom of the page. Now that that's done, we can go to Site Options and select this skin as the skin we want to see. After you've updated your options, navigate to the main page and if everything is working right, you should see the Lightness skin on the main section. This tells us we've set up the skin section right and we're all set to start customizing!</p>

<br />
<p>
	<?php echo anchor('nova/tutorials/skins/6', '&#171; Previous Tutorial');?>
	&nbsp; &middot; &nbsp;
	<?php echo anchor('nova/tutorials/skins/8', 'Next Tutorial &#187;');?>
</p>