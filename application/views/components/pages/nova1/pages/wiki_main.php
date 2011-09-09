<h1><?php echo $header;?></h1>

<ul>
	<li><?php echo anchor('nova/pages/wiki/main', 'Thresher Main Page');?></li>
	<li><?php echo anchor('nova/pages/wiki/categories', 'Categories Listing');?></li>
	<li><?php echo anchor('nova/pages/wiki/category', 'Category Page Listing');?></li>
	<li><?php echo anchor('nova/pages/wiki/managecategories', 'Manage Categories');?></li>
	<li><?php echo anchor('nova/pages/wiki/managepages', 'Manage Pages');?></li>
	<li><?php echo anchor('nova/pages/wiki/page', 'Create/Edit Page');?></li>
	<li><?php echo anchor('nova/pages/wiki/recent', 'Recent Changes');?></li>
	<li><?php echo anchor('nova/pages/wiki/view', 'View Page/Draft');?></li>
</ul>

<h4>Configuring Thresher</h4>

<p>You can read more about configuring Thresher in the <?php echo anchor('nova/tutorials/config/nova', 'Configuring Nova');?> page.</p>