<h1><?php echo $header;?></h1>

<p>When we use the term &ldquo;Libraries&rdquo; we are normally referring to the classes that are located in the libraries directory and described in the Class Reference of this user guide. In this case, however, we will instead describe how you can create your own libraries within your application/libraries directory in order to maintain separation between your local resources and the global framework resources.</p>

<p>As an added bonus, CodeIgniter permits your libraries to extend native classes if you simply need to add some functionality to an existing library. Or you can even replace native libraries just by placing identically named versions in your application/libraries folder.</p>

<p>In summary:</p>

<ul>
	<li>You can create entirely new libraries.</li>
	<li>You can extend native libraries.</li>
	<li>You can replace native libraries.</li>
</ul>

<p class="important">Complete documentation about native libraries and creating your own libraries can be found in the <a href="http://codeigniter.com/user_guide/general/creating_libraries.html" target="_blank">CodeIgniter User Guide</a>.</p>

<h2>Libraries in Nova</h2>

<p>We have added several libraries to Nova for some of the advanced process and we&rsquo;ve even extended some of CodeIgniter&rsquo;s base libraries. In addition to all the libraries CodeIgniter comes with, the following have been created or extended for use in Nova:</p>

<h3>New Libraries</h3>

<ul>
	<li><?php echo anchor('nova/libraries/auth', 'Auth Library');?></li>
	<li><?php echo anchor('nova/libraries/menu', 'Menu Library');?></li>
	<li><?php echo anchor('nova/libraries/thresher', 'Thresher Library');?></li>
	<li><?php echo anchor('nova/libraries/userpanel', 'User Panel Library');?></li>
</ul>

<h3>Extended Libraries</h3>

<ul>
	<li><?php echo anchor('nova/libraries/input', 'Input Library');?></li>
	<li><?php echo anchor('nova/libraries/loader', 'Loader Library');?></li>
	<li><?php echo anchor('nova/libraries/template', 'Template Library');?><span class="fontSmall">*</span></li>
	<li><?php echo anchor('nova/libraries/uri', 'URI Library');?></li>
</ul>

<br />
<p class="fontSmall"><em>Text about libraries from the <a href="http://codeigniter.com/user_guide/general/creating_libraries.html" target="_blank">CodeIgniter User Guide</a>.</em></p>

<p class="fontSmall"><em>*The Template library, while not officially part of the CI core, is held in the core and extended beyond its original functionality.</em></p>