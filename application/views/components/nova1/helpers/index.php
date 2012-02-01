<h1>Helpers</h1>

<p>Helpers, as the name suggests, help you with tasks. Each helper file is simply a collection of functions in a particular category. There are URL Helpers, that assist in creating links, there are Form Helpers that help you create form elements, Text Helpers perform various text formatting routines, Cookie Helpers set and read cookies, File Helpers help you deal with files, etc.</p>

<p>Unlike most other systems in CodeIgniter, Helpers are not written in an Object Oriented format. They are simple, procedural functions. Each helper function performs one specific task, with no dependence on other functions.</p>

<h2>Loading a Helper</h2>

<p>Loading a helper file is quite simple using the following function:</p>

<pre>$this->load->helper('<var>name</var>');</pre>

<p>Where name is the file name of the helper, without the .php file extension or the "helper" part.</p>

<p>A helper can be loaded anywhere within your controller functions (or even within your View files, although that's not a good practice), as long as you load it before you use it. You can load your helpers in your controller constructor so that they become available automatically in any function, or you can load a helper in a specific function that needs it.</p>

<h2>Helpers in Nova</h2>

<p>We have added several helpers to Nova for the most common tasks and we've even extended some of CodeIgniter's base helpers. In addition to all the helpers CodeIgniter comes with, the following have been created or extended for use in Nova:</p>

<h3>New Helpers</h3>

<ul>
	<li><?php echo Html::anchor('nova1/helpers/debug', 'Debug Helper');?></li>
	<li><?php echo Html::anchor('nova1/helpers/location', 'Location Helper');?></li>
	<li><?php echo Html::anchor('nova1/helpers/panel', 'Panel Helper');?></li>
	<li><?php echo Html::anchor('nova1/helpers/utility', 'Utility Helper');?></li>
</ul>

<h3>Extended Helpers</h3>

<ul>
	<li><?php echo Html::anchor('nova1/helpers/date', 'Date Helper');?></li>
	<li><?php echo Html::anchor('nova1/helpers/form', 'Form Helper');?></li>
	<li><?php echo Html::anchor('nova1/helpers/html', 'HTML Helper');?></li>
	<li><?php echo Html::anchor('nova1/helpers/language', 'Language Helper');?></li>
	<li><?php echo Html::anchor('nova1/helpers/url', 'URL Helper');?></li>
</ul>

<p><em>Text about helpers from the <a href="http://codeigniter.com/user_guide/general/helpers.html">CodeIgniter User Guide</a>.</em></p>