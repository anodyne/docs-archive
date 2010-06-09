<?php $module = $this->router->fetch_module();?>
<div class="subnav">
	<ul id="menu-sub">
		<li><?php echo anchor($module .'/overview/index', img($images['home']) .' Overview', '', TRUE);?></li>
		<!--<li><?php echo anchor($module .'/tour/index', img($images['tour']) .' Tour', '', TRUE);?></li>-->
		<!--<li><?php echo anchor($module .'/pages/index', img($images['pages']) .' Pages', '', TRUE);?></li>-->
		<li><?php echo anchor($module .'/developers/index', img($images['developers']) .' Developers', '', TRUE);?></li>
		<!--<li><?php echo anchor($module .'/tutorials/index', img($images['tutorials']) .' Tutorials', '', TRUE);?></li>-->
		<!--<li><?php echo anchor($module .'/libraries/index', img($images['libraries']) .' Libraries', '', TRUE);?></li>-->
		<!--<li><?php echo anchor($module .'/helpers/index', img($images['helpers']) .' Helpers', '', TRUE);?></li>-->
		<li><?php echo anchor($module .'/models/index', img($images['models']) .' Models', '', TRUE);?></li>
		<li><a href="#" id="search-btn"><img src="<?php echo base_url() . APPFOLDER;?>/assets/magnifier.png" class="search-trigger" /></a></li>
	</ul>
</div>