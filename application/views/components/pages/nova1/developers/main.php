<h1><?php echo $header;?></h1>

<h2>Tutorials</h2>

<ul>
	<li><?php echo anchor('nova/tutorials/extending', 'Extending Nova');?></li>
	<li><?php echo anchor('nova/tutorials/skins', 'Skinning Nova');?></li>
	<li><?php echo anchor('nova/tutorials/models', 'Models in Nova');?></li>
	<li><?php echo anchor('nova/tutorials', 'Advanced Tutorials');?></li>
</ul>

<h2>Resources</h2>

<ul>
	<li><?php echo anchor('nova/developers/images', 'Image Index');?> &ndash; a complete listing of all icons used by the system, their names and where they're found in the system. This is a great resource if you're using seamless substitution and you want to know where icons you're changing will be seen.</li>
	
	<li><?php echo anchor('nova/developers/fields', 'Database Fields Index');?> &ndash; a complete listing of all the database fields in the system.</li>
	<!--<li><?php echo anchor('nova/developers/nova2', 'Nova 2');?> &ndash; information about the upcoming Nova 2 release.</li>-->
</ul>

<h2>Documentation</h2>

<h4>Libraries</h4>

<p>When we use the term &ldquo;Libraries&rdquo; we are normally referring to the classes that are located in the libraries directory and described in the Class Reference of this user guide. In this case, however, we will instead describe how you can create your own libraries within your application/libraries directory in order to maintain separation between your local resources and the global framework resources.</p>

<p>As an added bonus, CodeIgniter permits your libraries to extend native classes if you simply need to add some functionality to an existing library. Or you can even replace native libraries just by placing identically named versions in your application/libraries folder.</p>

<p><?php echo anchor('nova/libraries/index', 'See all libraries &raquo;');?></p>

<h4>Helpers</h4>

<p>Helpers, as the name suggests, help you with tasks. Each helper file is simply a collection of functions in a particular category. There are URL Helpers, that assist in creating links, there are Form Helpers that help you create form elements, Text Helpers perform various text formatting routines, Cookie Helpers set and read cookies, File Helpers help you deal with files, etc.</p>

<p>Unlike most other systems in CodeIgniter, Helpers are not written in an Object Oriented format. They are simple, procedural functions. Each helper function performs one specific task, with no dependence on other functions.</p>

<p><?php echo anchor('nova/helpers/index', 'See all helpers &raquo;');?></p>

<h4>Models</h4>

<p>Models are PHP classes that are designed to work with information in your database. It removes the need for building queries right in the pages and allows those queries to be re-used throughout the system in a variety of ways. Most of the database tables have their own model class that contain functions for inserting, updating, deleting and retrieving data for that table.</p>

<p><?php echo anchor('nova/models/index', 'See all models &raquo;');?></p>