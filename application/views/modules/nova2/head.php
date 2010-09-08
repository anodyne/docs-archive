<?php $module = $this->router->fetch_module();?>
<div class="subnav">
	<ul id="menu-sub">
		<li><?php echo anchor($module .'/overview/index', '<span class="icon-sprite icon-home"></span>Overview', '', TRUE);?></li>
		<!--<li><?php echo anchor($module .'/tour/index', img($images['tour']) .' Tour', '', TRUE);?></li>-->
		<li><?php echo anchor($module .'/pages/index', '<span class="icon-sprite icon-pages"></span>Pages', '', TRUE);?></li>
		<li><?php echo anchor($module .'/developers/index', '<span class="icon-sprite icon-developers"></span>Developers', '', TRUE);?></li>
		<li><?php echo anchor($module .'/tutorials/index', '<span class="icon-sprite icon-tutorials"></span>Tutorials', '', TRUE);?></li>
		<!--<li><?php echo anchor($module .'/libraries/index', img($images['libraries']) .' Libraries', '', TRUE);?></li>-->
		<!--<li><?php echo anchor($module .'/helpers/index', img($images['helpers']) .' Helpers', '', TRUE);?></li>-->
		<!--<li><?php echo anchor($module .'/models/index', img($images['models']) .' Models', '', TRUE);?></li>-->
		<li><a href="#" id="search-btn" class="search-trigger"><span class="icon-sprite icon-search sprite-no-right"></span></a></li>
	</ul>
</div>