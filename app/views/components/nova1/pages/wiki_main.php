<h1><?php echo $header;?></h1>

<ul>
	<li><?php echo Html::anchor('nova1/pages/wiki/main', 'Thresher Main Page');?></li>
	<li><?php echo Html::anchor('nova1/pages/wiki/categories', 'Categories Listing');?></li>
	<li><?php echo Html::anchor('nova1/pages/wiki/category', 'Category Page Listing');?></li>
	<li><?php echo Html::anchor('nova1/pages/wiki/managecategories', 'Manage Categories');?></li>
	<li><?php echo Html::anchor('nova1/pages/wiki/managepages', 'Manage Pages');?></li>
	<li><?php echo Html::anchor('nova1/pages/wiki/page', 'Create/Edit Page');?></li>
	<li><?php echo Html::anchor('nova1/pages/wiki/recent', 'Recent Changes');?></li>
	<li><?php echo Html::anchor('nova1/pages/wiki/view', 'View Page/Draft');?></li>
</ul>

<h3>Configuring Thresher</h3>

<p>You can read more about configuring Thresher in the <?php echo Html::anchor('nova1/tutorials/config/nova', 'Configuring Nova');?> page.</p>