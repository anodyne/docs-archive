<h1>Developers</h1>

<h2>Tutorials</h2>

<ul>
	<li><a href="<?php echo Url::site('nova1/tutorials/extending');?>">Extending Nova</a></li>
	<li><a href="<?php echo Url::site('nova1/tutorials/skins');?>">Skinning Nova</a></li>
	<li><a href="<?php echo Url::site('nova1/tutorials/models');?>">Models in Nova</a></li>
	<li><a href="<?php echo Url::site('nova1/tutorials');?>">Advanced Tutorials</a></li>
</ul>

<h2>Resources</h2>

<ul>
	<li><a href="<?php echo Url::site('nova1/developers/images');?>">Image Index</a> &ndash; a complete listing of all icons used by the system, their names and where they're found in the system. This is a great resource if you're using seamless substitution and you want to know where icons you're changing will be seen.</li>
	<li><a href="<?php echo Url::site('nova1/developers/fields');?>">Database Fields Index</a> &ndash; a complete listing of all the database fields in the system.</li>
</ul>

<h2>Documentation</h2>

<h3>Libraries</h3>

<p>When we use the term &ldquo;Libraries&rdquo; we are normally referring to the classes that are located in the libraries directory and described in the Class Reference of this user guide. In this case, however, we will instead describe how you can create your own libraries within your application/libraries directory in order to maintain separation between your local resources and the global framework resources.</p>

<p>As an added bonus, CodeIgniter permits your libraries to extend native classes if you simply need to add some functionality to an existing library. Or you can even replace native libraries just by placing identically named versions in your application/libraries folder.</p>

<p><a href="<?php echo Url::site('nova1/libraries/index');?>">See all libraries &raquo;</a></p>

<h3>Helpers</h3>

<p>Helpers, as the name suggests, help you with tasks. Each helper file is simply a collection of functions in a particular category. There are URL Helpers, that assist in creating links, there are Form Helpers that help you create form elements, Text Helpers perform various text formatting routines, Cookie Helpers set and read cookies, File Helpers help you deal with files, etc.</p>

<p>Unlike most other systems in CodeIgniter, Helpers are not written in an Object Oriented format. They are simple, procedural functions. Each helper function performs one specific task, with no dependence on other functions.</p>

<p><a href="<?php echo Url::site('nova1/helpers/index');?>">See all helpers &raquo;</a></p>

<h3>Models</h3>

<p>Models are PHP classes that are designed to work with information in your database. It removes the need for building queries right in the pages and allows those queries to be re-used throughout the system in a variety of ways. Most of the database tables have their own model class that contain functions for inserting, updating, deleting and retrieving data for that table.</p>

<p><a href="<?php echo Url::site('nova1/models/index');?>">See all models &raquo;</a></p>