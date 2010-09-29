<?php $module = $this->router->fetch_module();?>
<div class="subnav">
	<ul id="menu-sub">
		<li><?php echo anchor($module .'/overview/index', '<span class="icon-sprite icon-home"></span>Overview', '', TRUE);?></li>
		<!--<li><?php echo anchor($module .'/tour/index', '<span class="icon-sprite icon-tour"></span>Tour', '', TRUE);?></li>-->
		<!--<li><?php echo anchor($module .'/pages/index', '<span class="icon-sprite icon-pages"></span>Pages', '', TRUE);?></li>-->
		<!--<li><?php echo anchor($module .'/classes/index', '<span class="icon-sprite icon-classes"></span>Classes', '', TRUE);?></li>-->
		<li><?php echo anchor($module .'/developers/index', '<span class="icon-sprite icon-developers"></span>Developers', '', TRUE);?></li>
		<!--<li><?php echo anchor($module .'/tutorials/index', '<span class="icon-sprite icon-tutorials"></span>Tutorials', '', TRUE);?></li>-->
		<li><a href="#" id="search-btn" class="search-trigger"><span class="icon-sprite icon-search sprite-no-right"></span></a></li>
	</ul>
</div>