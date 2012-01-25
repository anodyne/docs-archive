<h1><?php echo $header;?></h1>

<p>By now, you've created the directories you need for your skin and used jQuery UI's powerful ThemeRoller tool to customize the UI widgets like sliders, headers, icons and much more for use by your skin section. But if you've gone to your browser, you've undoubtedly noticed that this skin still looks suspiciously like the Lightness theme, so we'll need to get our hands dirty with some CSS and change that. Open up <dfn>skin.css</dfn> and we'll get started!</p>

<p class="alert alert-info"><strong>Note:</strong> In most cases, these style declarations are going to be scattered around the skin stylesheet, so you'll need to search for the style before you can make any changes. <strong>Don't just copy and paste the whole thing in because it'll cause problems with your skin!</strong></p>

<h2>The Header</h2>

<p>One of the most prominent features and probably the first thing you notice about a site is its header. We could easily just change a few images and colors and leave the layout identical to what Lightness uses, but we want to set this apart a little bit, so we're going to shift the menu down to the bottom of the header, change some of the colors and make a few tweaks all around the header to give it our own flavor.</p>

<pre>#head {
	margin: 0;
	padding: 0;
	height: 80px;
	
	background: #eee;
	color: #333;
	border-bottom: 1px solid #bbb;
}
#head .head_content {
	padding: 12px 0 0 0;
	
	font-weight: bold;
}
#menu {
	height: 25px;
	line-height: 25px;
	margin: 54px 0 0 0;
	float: right;
	
	background: #ddd;
	border-top: 1px solid #ccc;
	border-left: 1px solid #ccc;
	border-right: 1px solid #ccc;
	border-bottom: 0;
	font-size: 95%;
	
	-moz-border-radius: 5px 5px 0 0;
	-webkit-border-radius: 5px 5px 0 0;
}
#menu .nav-main ul li a {
	display: block;
	
	text-decoration: none;
	color: #999;
	font-weight: bold;
	border-left: 1px solid transparent;
	border-right: 1px solid transparent;
	border-bottom: none;
}
#menu .nav-main ul li a.active {
	background: #ccc;
	border-left: 1px solid #bbb;
	border-right: 1px solid #bbb;
	color: #555;
}</pre>

<p>So what did we do? For starters, we changed the background color of the header from a black color to a nice subtle gray with some matching gray tones for borders. Then, we've shifted the menu item to be positioned at the bottom of the header and only rounded off the top corners. Finally, we've changed the active state to match the colors we're using in the rest of the header. These may not seem like big changes, but in the end, the header looks quite different from where it started.</p>

<h2>The Dasboard</h2>

<p>While we're changing the header, we've got to change the dashboard panel too. What's inside the panel can stay, but the actual handle users will see all the time needs to line up with the changes we've already made to the header.</p>

<pre>.panel-handle a:hover span {
	background: #eee;
	color: #c00;
	border-left: 1px solid #ddd;
	border-right: 1px solid #ddd;
}
.panel-handle {
	border: 0 !important;
	border-bottom: 1px solid #bbb !important;
	text-align: center;
	font-size: 85%;
}</pre>

<p>Not a whole lot of changes here, but enough to make sure the handle matches with the header. First, we're changing the hover state for links in the handle (the inbox, writing entries and dashboard links) so they have a different background color, font color and border color. Gone are the orange colors, replaced with grays that'll compliment our header. Next, we've changed the actual handle to make sure it looks right. One thing you'll notice is that we've set the border to zero, then set the bottom border. The reason we do this is because the Lightness theme uses a native UI-style state that automatically puts a border around the element. We don't want that there, so we clear it then set our own bottom border. Again, only a few tweaks but it's enough to make our dashboard handle match with what we've already done to the ehader.</p>

<h2>The Body</h2>

<h3>Sub Navigation Menu</h3>

<p>Next up is the sub navigation menu that's shown on every page. We don't want an orange hover, instead we want it to match with the rest of our skin. In addition, we're going to move the entire menu to the left.</p>

<pre>.nav-sub {
	float: left;
	width: 160px;
	margin: 0 0 10px 0;
	
	text-align: left;
	font-size: 92%;
}
.nav-sub ul li a {
	display: block;
	
	text-decoration: none;
	color: #004276;
	border: 1px solid transparent;
	font-weight: bold;
	
	-moz-border-radius: 0 8px 8px 0;
	-webkit-border-radius: 0 8px 8px 0;
}
.nav-sub ul li a:hover {
	color: #111;
	background: #faefef;
	border: 1px solid #f3d8d8;
}</pre>

<p class="alert alert-info"><strong>Note:</strong> To make sure we're not showing stuff we don't need, you'll need to delete the <strong>.nav-sub ul li:first-child a:hover</strong> and <strong>.nav-sub ul li:last-child a:hover</strong> items. If you don't feel comfortable doing that, at least clear out the styles in the declarations.</p>

<p>Like other places in this tutorial, all we've done is change some colors and border radii to get a look that's familiar yet has our own touch to it. You can experiment with all kinds of changes to the way the sub navigation works. You'll see in skins like Redmond and Sunny, we go about presenting menu items in a very different way. The sky really is the limit if you have a little CSS knowledge.</p>

<h3>The Content</h3>

<p>It still looks a little funny though, so we're going to force the content to respect the dimensions of the sub navigation menu. To do that, we're going to make one very simple change to the content class.</p>

<pre>.content {
	margin-left: 210px;
	line-height: 1.4;
}</pre>

<p>That's it. We've shift the margin from right to left and now our content will respect our menu.</p>

<h2>Text &amp; Links</h2>

<h3>Text</h3>

<p>Let's start to tackle some of the text changes and specifically getting rid of the orange colors leftover from the Lightness theme. We can change the page-head class colors to change the colors of the header items. In addition, let's change up the font we're using throughout the site to be something more classic.</p>

<pre>body {
	margin: 0;
	padding: 0;
	
	background: #fff;
	color: #363636;
	font: 75%/1.5 georgia, times, serif;
	text-align: center;
}

.page-head { color: #c00; }
.page-subhead { color: #888; }</pre>

<p>Now, our skin is using a new font and we've gotten rid of the orange that was clashing so terribly with a red theme. This is actually starting to look more and more like a coherent them throughout the section.</p>

<h3>Links</h3>

<p>We're still looking at blue links instead of something that matches the red theme, so let's dig in and change that. We're going to change the links from the blue color they are now to a red color. Like now, we're going to make sure they don't have a border, but when you hover over something, we'll put a simple underline beneath the link.</p>

<pre>a {
	text-decoration: none;
	color: #8f2d2d;
}
a:hover {
	color: #c00;
	border-bottom: 1px solid;
}</pre>

<h2>Tabs</h2>

<p>Since we're not using the UI-style tabs, we'll need to make some modifications to the <dfn>ui.tabs.css</dfn> file in our css directory. Let's open the file and get ready to make a bunch of changes. You'll need to find these sections and either copy and replace or make the changes manually.</p>

<h3>Normal State</h3>

<p>It's time to start tweaking what our tabs look like when they aren't selected and aren't being hovered over. Lining up with the UI widget theme we created, we're going to keep them a neutral gray. Our final style declaration will look like:</p>

<pre>.ui-tabs-nav a {
	position: relative;
	z-index: 2;
	padding-left: 0;
	line-height: 1.4;

	font-size: 92%;
	font-weight: bold;
	text-align: center;
	text-decoration: none;
	white-space: nowrap; /* required in IE 6 */
	border-top: 1px solid #d8dcdf;
	border-left: 1px solid #d8dcdf;
	border-right: 1px solid #d8dcdf;
	border-bottom: 0;
	background: #eee;
	color: #004276;

	-moz-border-radius: 8px 8px 0 0;
	-webkit-border-radius: 8px 8px 0 0;
}</pre>

<h3>Hover State</h3>

<p>Naturally, the next thing we're going to do with a tab is hover over it before we click it. Because of that, we're going to tweak our hover state to use the same color scheme we created for the UI widgets hover state.</p>

<pre>.ui-tabs-nav a:hover, .ui-tabs-nav a:active {
	outline: 0; /* prevent dotted border in Firefox */

	background-color: #faefef;
	color: #111;
	border-top: 1px solid #f3d8d8;
	border-left: 1px solid #f3d8d8;
	border-right: 1px solid #f3d8d8;
}</pre>

<h3>Selected State</h3>

<p>The final thing we need to do is change the state of the tab when it's selected. Since we're using the Lightness theme, everything is orange, but the widgets we did up in ThemeRoller are red. Let's start by changing the selected state background color to <kbd>#c00</kbd> and its border to the same color with a font color of <kbd>#fff</kbd>. Finally, we're going to have our tabs match the border radius of the widget theme: 8px. Our final style declaration will look like:</p>

<pre>.ui-tabs-nav .ui-tabs-selected a, .ui-tabs-nav .ui-tabs-selected a:hover {
	outline: 0; /* prevent dotted border in Firefox */

	background: #c00;
	color: #fff;
	border-top: 1px solid #c00;
	border-left: 1px solid #c00;
	border-right: 1px solid #c00;
	border-bottom: 0;

	-moz-border-radius: 8px 8px 0 0;
	-webkit-border-radius: 8px 8px 0 0;
}</pre>

<h3>The Panel</h3>

<p>The last thing we need to do is get rid of the orange border and make it red. To do that, we're going to find the tabs-panel item and change it up a bit. The final tab panel should have the following style declaration:</p>

<pre>.ui-tabs-panel {
	padding: .5em 8px;

	border-top: 3px solid #c00;
	background: #fff;
}</pre>

<p>You can make any changes you want to these that relate to background images, border radii (the border-radius property does not work in Internet Explorer), font color or any other presentational items, but you should be careful when tweaking paddings, line heights and such as they can drastically change how the tabs behave. Experiment a little bit to get exactly the look you're going for!</p>

<h2>Buttons</h2>

<p>The last thing we're going to tweak with our skin is how buttons look. There are only a couple of places in the main section where buttons show up, the contact page being one of them. Once you've gotten to the page, get ready to make a few minor changes to the buttons.</p>

<pre>button {
	-moz-border-radius: 8px;
	-webkit-border-radius: 8px;
	
	font-weight: bold;
}
button.button-main {
	border: 1px solid #ccc;
	background: #eee;
	color: #004276;
}
button.button-main:hover {
	border: 1px solid #f3d8d8;
	background: #faefef;
	color: #c00;
}
input.button-main {
	font-weight: bold;
	font-size: 120%;
	border: 1px solid #ccc;
	background: #eee;
	color: #004276;
}
input.button-main:hover {
	border: 1px solid #f3d8d8;
	background: #faefef;
	color: #c00;
}</pre>

<p>By now, you should be sensing a pattern. All we're doing here is tweaking some of the colors and border radii to make our buttons match the theme we've got going so far. You'll notice here that we're changing stuff for both buttons and inputs with a class of <var>button-main</var>. The reason we do this is to maintain IE7 compatability because of a major bug in how IE handles submitted buttons in IE7 (the issue was finally fixed in IE8).</p>

<p>If you're poking around in the skin stylesheet, you probably noticed a <var>button-sec</var> class as well. Nova uses styling for both primary and secondary buttons, but the main section doesn't use this, only the admin section.</p>

<br />
<p>
	<?php echo Html::anchor('nova1/tutorials/skins/8', '&#171; Previous Tutorial');?>
	&nbsp; &middot; &nbsp;
	<?php echo Html::anchor('nova1/tutorials/skins/10', 'Next Tutorial &#187;');?>
</p>