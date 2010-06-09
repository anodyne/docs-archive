<h1><?php echo $header;?></h1>

<p>Scattered throughout Nova are widgets that are part of the jQuery UI library. Out of the box, Nova uses the slider widget, sortable widget, progress bar widget (install only), the accordion widget and the tabs widget. Of those components, all but the tabs use the jQuery UI theme styles. For most of the skins produced by Anodyne, the tabs are skinned in a different way. We've built Nova in such a way that you can easily use jQuery UI's ThemeRoller to build your own widget themes and put them into your skin with little to no issues. This tutorial will show you how to do that.</p>

<h2>Welcome to ThemeRoller</h2>

<p>With the launch of jQuery UI 1.5, the folks at jQuery launched a handy utility called <a href="http://jqueryui.com/themeroller/" target="_blank">ThemeRoller</a> to help people customize the look and feel of widgets and provide the images and stylesheets for users to simply upload to their server and use. Nova has been built to tap in to that widget theming system, making it easy to use a new jQuery UI theme if you want to change the widgets to match the skin you're working on.</p>

<h3>Getting Started</h3>

<p>To start, navigate to the <a href="http://jqueryui.com/themeroller/" target="_blank">ThemeRoller</a>. By default, ThemeRoller uses the Smoothness skin which is a neutral gray color. That doesn't have much color or vibrancy, so let's switch over to something a little more lively. If you click on the Gallery tab at the top of the left column, you'll see a whole list of pre-defined themes you can use and begin to modify. Let's use the Blitzer theme that's loosely based off of CNN.com. Once you click the thumbnail, all the widgets on the page change to use that theme.</p>

<h3>Let's Have Some Fun</h3>

<p>ThemeRoller is a powerful tool that gives you a lot of control over the look and feel of widgets. Click on the Roll Your Own tab at the top of the left column and we can start tweaking the theme. We'll start with the corner radius section. Change the value from the default (6px) to something else, let's say 8px. Once you click outside the box, the change is reflected in the theme.</p>

<p>That was an easy change, but let's do something to set our widgets apart even more. Next up, we'll change the Header/Footer. For now, we'll leave the color intact, but we should use a different background image. Click on the gray box between the color and percentage and you'll be shown a list of possible background patterns. Pick one and change the percentage to 50%. Now, our header/footer elements have the new background image. From here, we could change the colors as well if we wanted too.</p>

<p>The jQuery UI library also includes a wide variety of icons that are also skinnable through ThemeRoller. In each section, you'll notice an option for icon color. You can change how the UI library handles colors for icons found in those different sections. Give it a try with the header/footer section and change the icon color to blue. You can see that you've got a lot of control in customizing the widgets to your liking with ThemeRoller.</p>

<h3>On to the Download</h3>

<p>Once you've customized the theme to your liking, you can grab a zip archive of the theme's icons, images and stylesheets. With those files, we can easily add them to Nova and the system will use these new widgets we've just customized! To download the theme, click on the orange download button at the top of the Roll Your Own tab in the left column. We don't care about the components on the left, so leave those alone for the time being. What we care about is in the right column.</p>

<p>Here is where you have to make a crucial decision: do you want to use the Nova-style tabs or the jQuery UI-style tabs? (If you don't remember the difference, make sure you look at Nova's tabs and jQuery UI's tabs to figure out which you like better.) If you want to use the Nova-style tabs, you have to take one extra step before downloading. Click on the advanced theme settings link in the right column and specify a CSS scope. In the textbox, you must specify the scope as <dfn>.UITheme</dfn>. Once you've done that, you can download the theme by clicking the download button.</p>

<p class="important"><strong>Note:</strong> If you want to use the jQuery UI-style tabs, you don't need to specify a CSS scope and can simply download the theme using the download button.</p>

<h2>Making Nova Sing</h2>

<p>You've had a good time customizing your widget theme and you've downloaded it to your desktop, but what now? How do we get Nova to play nice with the new widget stuff we've just done? It's actually a lot easier than you might think.</p>

<h3>Prep the Files</h3>

<p>Before you upload the files, you need to make one change to the stylesheet and everything will work beautifully. Open the <strong>jquery.ui.theme.css</strong> file and do a simple search and replace. You want to search for <strong>(images</strong> (including the opening parenthesis) and replace it with <dfn>(../images</dfn> (including the open parenthesis). This ensures that Nova looks in the right place for the theme images.</p>

<h3>Upload the Files</h3>

<p>After you've changed the theme stylesheet, you can start the upload process. In order to get your theme to work with Nova, you'll need to upload the jquery.ui.theme.css file to the css directory and all the images from the theme to the skin section's images folder. Once you've uploaded the files, Nova does the rest for you!</p>

<h3>Update Your Stylesheet (Optional)</h3>

<p>Once your images and theme stylesheet are up on the server, Nova does the rest for you. If it finds the theme stylesheet in your skin, it'll immediately start to use it instead of the system default. If you want to use the jQuery UI-style tabs, you'll need to make one additional change and remove the ui.tabs.css import declaration from your main stylesheet. Once those changes are made, your skin section should be using your changes like clockwork. If you want to roll these changes out to all your skin sections, you'll need to add these files to all your skins.</p>

<p class="important"><strong>Note:</strong> Because of the way skins are built, you cannot use the <dfn>_base_override</dfn> directory for jQuery UI theme changes, they have to be made in each skin.</p>

<br />
<p>
	<?php echo anchor('nova/tutorials/skins/4', '&#171; Previous Tutorial');?>
	&nbsp; &middot; &nbsp;
	<?php echo anchor('nova/tutorials/skins/6', 'Next Tutorial &#187;');?>
</p>