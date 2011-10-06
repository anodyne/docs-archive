<h1>The Nova Core</h1>

<div class="row">
	<div class="span-one-third">
		<a href="<?php echo Url::site('nova2/core/helpers');?>" class="n2-options n2-options-helpers">
			<div></div>
			<h1>Helpers</h1>
		</a>
		<p class="n2-sub-text">Helpers, as the name suggests, help you with tasks. Each helper file is simply a collection of functions in a particular category. There are URL Helpers, that assist in creating links, there are Form Helpers that help you create form elements, Text Helpers perform various text formatting routines, Cookie Helpers set and read cookies, File Helpers help you deal with files, etc.</p>

		<p class="n2-sub-text">Unlike most other systems in CodeIgniter, Helpers are not written in an Object Oriented format. They are simple, procedural functions. Each helper function performs one specific task, with no dependence on other functions.</p>
	</div>
	
	<div class="span-one-third">
		<a href="<?php echo Url::site('nova2/core/libraries');?>" class="n2-options n2-options-libraries">
			<div></div>
			<h1>Libraries</h1>
		</a>
		<p class="n2-sub-text">When we use the term "Libraries" we are normally referring to the classes that are located in the libraries directory and described in the Class Reference of this user guide. In this case, however, we will instead describe how you can create your own libraries within your application/libraries directory in order to maintain separation between your local resources and the global framework resources.</p>

		<p class="n2-sub-text">As an added bonus, CodeIgniter permits your libraries to extend native classes if you simply need to add some functionality to an existing library. Or you can even replace native libraries just by placing identically named versions in your application/libraries folder.</p>
	</div>
	
	<div class="span-one-third">
		<a href="<?php echo Url::site('nova2/core/models');?>" class="n2-options n2-options-models">
			<div></div>
			<h1>Models</h1>
		</a>
		<p class="n2-sub-text">Models are PHP classes that are designed to work with information in your database. It removes the need for building queries right in the pages and allows those queries to be re-used throughout the system in a variety of ways. Most of the database tables have their own model class that contain functions for inserting, updating, deleting and retrieving data for that table</p>
	</div>
</div>