<h1><?php echo $header;?></h1>

<p>Nova takes full advantage of the jQuery Javascript library for all kinds of dynamic and rich user interface interactions. Using the UI library allows us to create accordions, tabs, sliders, sortable elements, modal windows and tooltips with only a few lines of code. If you're familiar with writing jQuery code, you can jump right in and start modifying Nova's Javascript, or if you aren't familiar with jQuery, you can find tutorials all over the Internet for getting started. The following tutorial assumes you're familiar with jQuery.</p>

<h2>Modifying Existing Javascript</h2>

<h3>Using Loaders</h3>

<p>If your server runs a little slower and is creating some lag situations that you want to hide from your users, you can easily add a loader to your page using a little extra HTML markup and some jQuery code.</p>

<p>For this example, let's use the missions page and let's work in the <samp>_base_override</samp> directory. Start by copying the sim_missions_js.php file from <samp>./application/views/_base/main/js</samp> to <samp>./application/views/_base_override/main/js</samp> and the sim_missions_all.php file from <samp>./application/views/_base/main/pages</samp> to <samp>./application/views/_base_override/main/pages</samp>. Copying the files is important because it means we won't lose any of the existing functionality.</p>

<p>To start, we need to wrap the content of our page with a simple loaded div that'll be hidden at the start. Make sure the sim_missions_all.php view file looks like this:</p>

<pre>&lt;div id="loader" class="loader">
	&lt;img src="&lt;php echo base_url() . APPFOLDER;?>/views/_base/main/images/loading-circle.gif" alt="" />&lt;br />
	Loading...
&lt;/div>

&lt;div id="loaded" class="hidden">
	{Page content goes here...}
&lt;/div></pre>

<p>Once we've set up our markup, we can go into our Javascript file and add the loader code at the end of the document ready function:</p>

<pre>$('#loader').hide();
$('#loaded').removeClass('hidden');</pre>

<p>Just like that, Nova will display a loading circle and text until the page is ready to use, then it will remove them from the page and your users will be able to go on their merry way using the page!</p>

<h3>Using UI Widgets</h3>

<p>If you create a custom page for Nova and want to use some of the UI widgets found throughout Nova, you can pretty easily add a few of them (adding things like the sortable widget is incredibly complicated as it involves AJAX calls, callbacks and many other complex Nova elements). In this case, let's add a tab panel to our page so we can split up the information we want to display. Let's create a page in the main section for holding fleet rules and sim rules.</p>

<p class="important"><strong>Note:</strong> This tutorial does not cover creating the controller method for such a page, just creating the view file and Javascript view file.</p>

<p>To start, we'll create our main_rules.php file in <samp>_base_override/main/pages</samp>. Once it's been created, we'll need to flesh out the content a little to look something like this:</p>

<pre>&lt;?php echo text_output($header, 'h1', 'page-head');?>

&lt;div id="tabs">
	&lt;ul>
		&lt;li>&lt;a href="#one">&lt;span>Fleet Rules&lt;/span>&lt;/a>&lt;/li>
		&lt;li>&lt;a href="#two">&lt;span>Sim Rules&lt;/span>&lt;/a>&lt;/li>
	&lt;/ul>
	
	&lt;div id="one">
		{Fleet rules go here...}
	&lt;/div>
	
	&lt;div id="two">
		{Sim rules go here...}
	&lt;/div>
&lt;/div></pre>

<p>Now that we have our markup in place, we can use the UI Tabs widget to change our markup to a full-blown tab panel. Create a main_rules_js.php file in <samp>_base_override/main/js</samp>. Once it's been created, add the following code:</p>

<pre>&lt;script type="text/javascript">
	$(document).ready(function(){
		$("#tabs").tabs();
	});
&lt;/script></pre>

<p>This Javascript takes the element with an ID of <var>tabs</var> and turns it into our tab panel. You can plug these files in to your controller method using the view_location and js_location helpers and Nova will take care of the rest. For examples of how to do this, check out the code for any page in the system that uses tabs.</p>

<h2>Creating New Javascript</h2>

<p>For advanced jQuery users, you can easily add custom jQuery code to do whatever you want in the same manner. Simply copy and paste the original file from the <samp>_base</samp> directory to either your skin section's <samp>js</samp> directory or the <samp>_base_override</samp> directory if you want it to be used for all pages in the system. You can add your custom code and when you navigate to that page, you'll see the results of your new code.</p>

<br />
<p>
	<?php echo anchor('nova/tutorials/skins/5', '&#171; Previous Tutorial');?>
	&nbsp; &middot; &nbsp;
	<?php echo anchor('nova/tutorials/skins/7', 'Next Tutorial &#187;');?>
</p>