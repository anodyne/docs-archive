<h1><?php echo $header;?></h1>

<p>Our skin is finished now and we're really happy with the way it came out, but we don't want to horde our skin and we want to share it with other people so they can enjoy the skin we've spent all that time working on. We could easily just zip up the files and put it up on a server to distribute, but Nova includes a cool new feature called Quick Install that lets you include a simple YAML file with all the information about your skin and other admins can quickly install your skin. But how do we create a skin quick install file? Read on to find out!</p>

<h2>What is YAML?</h2>

<p>What the heck is a YAML file anyway?</p>

<p>Simply put, YAML stands for YAML Ain't Markup Language and is a human friendly data serialization standard for all programming languages. That's just a fancy way of saying it's an easy to use format that can be used across a wide variety of programming languages. Much like XML is a standard, YAML is a standard as well and easier to use and build.</p>

<p>There are a few rules to remember when using YAML:</p>

<ul>
	<li>Structure is shown through indentation (always spaces, never tabs!)</li>
	<li>Sequence items are denoted by a dash</li>
	<li>Key value pairs within a map are separated by a colon</li>
</ul>

<p>That sounds more complicated than it is, so let's dive in and start building our YAML file.</p>

<h2>Building Our YAML File</h2>

<p>Skin Quick Install files rely on two things. First, the file must be named <samp>skin.yml</samp> and second, it must be located in the skin's root directory. So what does a skin.yml file look like? Check out Redmond's sample file.</p>

<pre>skin: Redmond
location: redmond
credits: Skin created by David VanScott. Edits are permissible as long as original credits stay intact.
sections:
  -
    type: main
    preview: preview-main.png
  -
    type: admin
    preview: preview-admin.png</pre>

<p>Let's break this down piece by piece so we understand what's happening. First, we need to provide some of the basic skin information. This is the stuff that's going to go into our skin catalogue table in the database. Create a skin.yml file in your skin's root directory and toss the following information into the file.</p>

<pre>skin: My First Skin
location: anodyne
credits: Skin created by [insert your name here]. Please make sure credit is given to the original author!</pre>

<p>The first line is the name of our skin. Remember that in Nova, the location of our skin and its name don't have to line up, so in this instance, we've named it something else entirely. The second line is the name of the folder our skin is in. Since we named the directory <strong>anodyne</strong>, that's what we're going to put in for the location. (Obviously if you used a different name you have to use that instead of our name.) Finally, the third line is just some basic credits. Don't put any HTML code in this, just straight text about who created the skins or if you need to provide any additional credits. (If you've used seamless substitution to use new icons, you'll want to put those icon credits in there for example.) That's it for the basic information. Now let's tackle the section information!</p>

<pre>sections:
  -
    type: main
    preview: preview-main.png</pre>
	
<p>Yep, that simple. Since we only did a main section, we only need the one section. Remember when we said that structure is shown through idententation? The dash is two spaces in from the left margin and the other items are four spaces in. If your skin included more sections, you'd just need to hit Enter and backspace two spaces, enter another dash, hit Enter, put in two spaces and keep going.</p>

<p>Our final skin.yml file will look like this:</p>

<pre>skin: My First Skin
location: anodyne
credits: Skin created by [insert your name here]. Please make sure credit is given to the original author!
sections:
  -
    type: main
    preview: preview-main.png</pre>
	
<p>That's it! When an admin uploads your skin to their <samp>views</samp> directory then navigates to the skin catalogue page, they'll be prompted to install the new skin and will be able to use it only a few seconds later.</p>

<p class="important"><strong>Note:</strong> For the best results, you should copy one of the skin.yml files from an existing skin and use that as a starting point.</p>
	
<br />
<p>
	<?php echo Html::anchor('nova1/tutorials/skins/10', '&#171; Previous Tutorial');?>
</p>