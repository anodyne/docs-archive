<h1><?php echo $header;?></h1>

<h2>Using ThemeRoller</h2>

<p>Using jQuery UI's <a href="http://jqueryui.com/themeroller/" target="_blank">ThemeRoller</a>, we can customize the look and feel of the widgets used throughout the system. The jQuery UI team has provided a wide variety of pre-built widget templates. Let's start with one of these pre-built templates and customize it a little bit.</p>

<p>After firing up your browser, head over to <a href="http://jqueryui.com/themeroller/" target="_blank">ThemeRoller</a> to get started. For this skin, I'm going to use the Blitzer theme found in the Gallery tab in the left column. This is a nice red theme that we can customize a little bit. Once you click the thumbnail of the theme you want, the content in the center column changes to that theme. After you choosing the Blitzer theme, click on the Roll Your Own tab in the left column and let's tweak a few settings.</p>

<h3>Tweaking ThemeRoller Settings</h3>

<h4>Corner Radius</h4>

<p>I want to give my skin more of a rounded appearance, so let's change the corner radius field to <strong>8px</strong>. Once you click anywhere outside of the field, you'll see the content update to reflect the change. This goes for everything in ThemeRoller.</p>

<h4>Header/Toolbar</h4>

<p>I want to give my headers a little more pop, so let's add a background image to the header/toolbar element. Clicking on the gray to the right of the color will give you a small pop-up where you can select a background pattern. I'm going to choose the wave pattern and change the percentage to <strong>60%</strong>.</p>

<p>Next, I want to darken up the border around the header/toolbar elements a little bit so it pops out from the page. Let's change the border color to <kbd>#8f2d2d</kbd>.</p>

<h4>Clickable: Hover State</h4>

<p>We're moving now! Next, let's make the hover state of stuff a little more complimentary to the rest of our theme. We'll do that by changing the background color of the hover state to <kbd>#faefef</kbd> and the border color to <kbd>#f3d8d8</kbd>. Once the content refreshes (it'll do it automatically), you can hover over the elements and see the changes and how we're using a soft pink color to compliment the hard reds we're using elsewhere.</p>

<h3>Getting &amp; Using Our Theme</h3>

<p>The above are just a few of the changes we can make. Feel free to experiment more with ThemeRoller, but for now, we're going to call it a day and download our theme so we can use it our skin.</p>

<p>Click on the orange download button in the left column to navigate to the download page. We're not going to worry about what's in the center column, just the right column. Click on the Advanced Theme Settings to roll down the hidden menu. Because I like the Nova-style tabs, I'm going to use those instead and I'll need to specify the CSS Scope. In the text box, type: <dfn>.UITheme</dfn> to set that as the scope. Finally, change the folder name to <strong>anodyne</strong> and click Download.</p>

<p>You should now have a zip archive on your desktop with all the files. Using a program like WinZip, open up the zip files and extract them to the desktop into a folder called <strong>ui</strong>. Now that we have these files on our desktop, we can make a quick change to them and then upload them to the server to use in our skin.</p>

<h3>Modifying Our Theme</h3>

<p>Open up <samp>ui/development-bundle/themes/anodyne</samp> from the folder on your desktop. You'll see a directory of images and several CSS files. In order to use the widget theme, we'll need to make a minor change to the way the UI widgets reference images since Nova stores stylesheets and images in their own folders. Open <dfn>jquery.ui.theme.css</dfn> and do a search for all references to <strong>(images</strong> and replace those with <strong>(../images</strong>. That'll ensure Nova is looking in the right place for the image the widgets need.</p>

<h3>Uploading Our Theme</h3>

<p>Now that we've made a few tweaks to our skin, we're ready to upload it. Upload the images from <samp>ui/development-bundle/themes/anodyne/images</samp> to our skin's images folder then upload the <dfn>jquery.ui.theme.css</dfn> file to the skin's css folder. We don't need to make any other changes related to the widget theme now because Nova is smart enough to know that if the theme stylesheet is in the skin to use it.</p>

<p class="important"><strong>Note:</strong> Now that we've gone through that, it's my unfortunate duty to tell you that the main section doesn't actually use any UI widgets, but in the event we add UI widgets to the main section, you'll want to make sure you go through these steps. The admin section uses UI widgets extensively.</p>

<p>In the next section we're going to go through the stylesheet and customize our skin a bit!</p>

<br />
<p>
	<?php echo anchor('nova/tutorials/skins/7', '&#171; Previous Tutorial');?>
	&nbsp; &middot; &nbsp;
	<?php echo anchor('nova/tutorials/skins/9', 'Next Tutorial &#187;');?>
</p>