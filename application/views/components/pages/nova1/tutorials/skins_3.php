<h1><?php echo $header;?></h1>

<p>Now that we've seen what goes in to a skin, let's take a closer look at one of those components (and arguably the most important): the template file.</p>

<p>In Nova, templates are a single file unlike SMS where you had at the very least 2, sometimes 3 or 4 files. Nova simplifies the template file by bringing everything into a single file and removing as much excess code as possible. That means that minus some code above the HTML, the file is almost entirely HTML. It's easy to create an HTML template and convert it to a Nova skin section (we'll do just that in other tutorials). For reference here, let's open up the default skin's main template file: template_main.php.</p>

<p>After the block of comments, you'll notice a few lines of PHP code:</p>

<pre>$sec = 'main'; /* set the section of the system */
$css = 'main.css'; /* the name of the main css file */</pre>

<p>These are pretty self-explanatory. The first, sets the section of the skin. In this case, it's main. If you were creating an admin section, you'd change the $sec variable from main to admin. The second sets the name of the main stylesheet. You can change this to be whatever you want based on what you've named your files. None of the PHP after that should be changed. In a nutshell, the PHP makes sure that we have the right path to the skin and we set up the variable used to set where the stylesheet comes from.</p>

<p>Where we want to focus our attention now is the HTML of the template file. It starts off just like standard HTML document. You'll notice in the head we have our standard title tag, but this time, with a little twist:</p>

<pre>&lt;title>&lt;?php echo $title;?>&lt;/title></pre>

<p>The PHP code in the title tags is called a <strong>region</strong>. Regions are defined in the template config file and should never be changed since Nova relies on knowing exactly what regions exist for which sections. All we're doing here is printing out whatever's been passed to the title region. (If you've gone through the extending tutorials, you'll remember that we set the title region in our controller.) Next up, we have our meta tags:</p>

<pre>&lt;meta name="description" content="&lt;?php echo $this->config->item('meta_desc');?>" />
&lt;meta name="author" content="&lt;?php echo $this->config->item('meta_author');?>" />
&lt;meta name="keywords" content="&lt;?php echo $this->config->item('meta_keywords');?>" />
&lt;?php echo $_redirect;?></pre>

<p>There's some more PHP code in here that pulls the meta values from the config file. If you want to change the meta data for Nova, you can do so from the config files. This ensures that every skin has their meta data changed at the same time (assuming every skin has these tags, which they should). Finally, the <var>$_redirect</var> variable is used by Nova to build redirecting into the system in as easy a way as possible. Continuing down through the head, we see our next block of code:</p>

<pre>&lt;!-- STYLESHEETS -->
&lt;?php echo link_tag($link); ?>

&lt;!-- JAVASCRIPT FILES -->
&lt;?php include_once($this->config->item('include_head_main')); ?>

&lt;?php echo $javascript;?></pre>

<p>Pretty self-explanatory here too. The first prints out the main stylesheet using CodeIgniter's link_tag helper. This allows us to pass an array to the function and CodeIgniter will build the tag for us. Next, we're including the main head include file which provides us with the necessary Javascript pieces used by Nova. Each section has its own include file. You need to make sure these lines are in all your template files! Finally, we have a region for Javascript which allows us to write Javascript code to the template from our controllers (more on this in a later tutorial).</p>

<p>So let's turn our attention now to the header.</p>

<pre>&lt;!-- HEAD -->
&lt;div id="head">
	&lt;div class="head_top">&lt;/div>
	&lt;div class="wrapper">
		&lt;div class="head_content">
			&lt;?php echo img(APPFOLDER .'/views/'. $current_skin .'/'. $sec .'/images/head_logo.png', FALSE);?>
		&lt;/div>
	&lt;/div>
&lt;/div></pre>

<p>Nothing too crazy here. We're using CodeIgniter's image helper to build the image tag for us, but besides that, it's all straight HTML.</p>

<pre>&lt;!-- MENU -->
&lt;div id="menu">
	&lt;div class="wrapper">
		&lt;div class="nav-main">
			&lt;?php echo $nav_main;?>
		&lt;/div>
	&lt;/div>
&lt;/div></pre>

<p>Here's where regions come in really handy. In SMS, when it came to building the menus, there was a good chunk of code involved. We've managed to move that code right out of the template now though. As you can see here, it's HTML save for a single PHP variable called $nav_main. That region tells Nova where to put the main menu. We fill that data in our controllers, this just tells Nova where to put it. When creating your own template files, all you need to do is put &lt;?php echo $nav_main;?> wherever you want the main menu. It's that easy!</p>

<pre>&lt;!-- BODY -->
&lt;div id="body">
	&lt;div class="wrapper">
		&lt;!-- SUB NAVIGATION -->
		&lt;div class="nav-sub">
			&lt;?php echo $nav_sub;?>
		&lt;/div>
		
		&lt;!-- PAGE CONTENT -->
		&lt;div class="content">
			&lt;?php echo $flash_message;?>
			&lt;?php echo $content;?>
			&lt;?php echo $ajax;?>
		&lt;/div>
	&lt;/div>
&lt;/div></pre>

<p>That right there is the entire body of Nova. You can see we have a sub navigation region that will tell the system where to render the sub navigation. After that, we have our flash message region, our content and our AJAX region. After that, we're done. We can move these things around our template files and Nova will put the components where we tell it to.</p>

<p>When it comes to template files, you really have a lot of freedom. Want to use a table-based layout to do something akin to SMS 1? No problem, just create your HTML and drop the regions and PHP code in. Want to create a new template that uses no tables? No problem, just create your HTML and drop the regions and PHP code in and you're all set.</p>

<p>As you can see, Nova provides a lot more flexibility when it comes to templates and should make things easier to understand and grasp overall.</p>

<br />
<p>
	<?php echo anchor('nova/tutorials/skins/2', '&#171; Previous Tutorial');?>
	&nbsp; &middot; &nbsp;
	<?php echo anchor('nova/tutorials/skins/4', 'Next Tutorial &#187;');?>
</p>