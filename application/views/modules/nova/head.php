<div class="subnav">
	<ul id="menu-sub">
		<li><?php echo anchor('nova/overview/index', img($images['home']) .' Overview', '', TRUE);?></li>
		<li><?php echo anchor('nova/tour/index', img($images['tour']) .' Tour', '', TRUE);?></li>
		<li><?php echo anchor('nova/pages/index', img($images['pages']) .' Pages', '', TRUE);?></li>
		<li><?php echo anchor('nova/developers/index', img($images['developers']) .' Developers', '', TRUE);?></li>
		<li><?php echo anchor('nova/tutorials/index', img($images['tutorials']) .' Tutorials', '', TRUE);?></li>
		<li><?php echo anchor('nova/libraries/index', img($images['libraries']) .' Libraries', '', TRUE);?></li>
		<li><?php echo anchor('nova/helpers/index', img($images['helpers']) .' Helpers', '', TRUE);?></li>
		<li><?php echo anchor('nova/models/index', img($images['models']) .' Models', '', TRUE);?></li>
		<li><a href="#" id="search-btn"><img src="<?php echo base_url() . APPFOLDER;?>/assets/magnifier.png" class="search-trigger" /></a></li>
	</ul>
</div>