<h1><?php echo $header;?></h1>

<p>Now that we've tweaked our skin to match what we're looking for, we can get into some more advanced things like using seamless substitution to replace some icons and pages.</p>

<h2>Using Seamless Substitution</h2>

<h3>Substituting Icons</h3>

<p>Let's experiment with seamless substitution by replacing a few icons on the view news page. For these examples, you can download the Silk icon set from <a href="http://famfamfam.com" target="_blank">famfamfam.com</a>.</p>

<p>When you view a news items, you'll notice there's an RSS icon at the bottom of the article. Let's change that icon to another RSS icon that looks similar but has a slightly softer feel. The only requirement is that the name of the icon is identical to the icon we're replacing. In this case, the RSS icon has a name of <strong>feed.png</strong>. Drop the Silk <strong>feed.png</strong> image into the skin's images folder and refresh the view news page and you'll see the page is now using the icon you just provided. If you changed skins back to Lightness, it'd still be using the old RSS icon. We've substituted this icon just for our skin.</p>

<p class="alert alert-info"><strong>Note:</strong> If you want to know what an image is named, you can open <code>application/views/_base/main/images</code> to see all the icons.</p>

<p>Next, let's swap out the comments icon for one in the Silk set. Let's drop <strong>comment_add.png</strong> into the skin's images folder. For this one, we need to rename the icon to <strong>comment-add.png</strong>. Once that change is made, you can refresh the view news page and you'll see the new icon in place of the old comment icon. Seamless substution is really just as easy as putting an icon of a similar name into your skin's images directory.</p>

<h3>Substituting Pages</h3>

<p>Finally, let's say we want to add a little message at the top of the listing of all news. There's no way to do it with a site message out of the box, so let's use seamless substitution to replace the default version with one for our skin that provides a message about the new icons. To do this, we're going to first copy the file <strong>main_news.php</strong> from <code>application/views/_base/main/pages</strong> and paste the copied file into our skin's <strong>pages</strong> directory. Then, we can open the file and add our message to the top of the page:</p>

<pre>&lt;?php echo text_output($header, 'h1', 'page-head');?>

&lt;p class="orange bold">Thanks to FamFamFam's Silk icon set for providing the new images for the
View News pages!&lt;/p>&lt;br /></pre>

<p>Save the page and upload it to your server and you'll see that your message is now at the top of the page for your skin. Since we're not using the Silk icons on the other skins though, this only affects our skin and not the others.</p>

<h2>Wrapping Up</h2>

<p>As you can see from the above examples, seamless substitution offers powerful ways to modify Nova's core files without ever having to actually touch them. That means that you can make all kinds of changes and still update to the latest version of Nova without fear of wiping out your custom changes.</p>

<p>These are just a few examples of how you can skin Nova with only a few changes to the stylesheets. There's plenty more you can do and the other skins available for Nova show some of the variations that are possible with a little patience and experimenting!</p>

<br />
<p>
	<?php echo Html::anchor('nova1/tutorials/skins/9', '&#171; Previous Tutorial');?>
	&nbsp; &middot; &nbsp;
	<?php echo Html::anchor('nova1/tutorials/skins/11', 'Next Tutorial &#187;');?>
</p>