<h1><?php echo $header;?></h1>

<div class="tour">
	<div class="tour-left">
		One player, multiple characters.<br /><br />
		
		We've torn down the barriers between playing characters and non-playing characters to give users options to play both! Simply associate other characters with an account and the user will be able to post as the other characters in no time at all.<br /><br />
		
		By default, Nova will allow 1 playing character and 3 non-playing characters to be linked to a player, but if you want to change those numbers, you can do so from the Site Settings page!
	</div>
	
	<div class="tour-right">
		<?php echo img($image);?>
	</div>
</div>

<div class="float-right">
	<?php echo anchor('nova/tour/genres', '&laquo; Genres', array('class' => 'button-normal'));?>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<?php echo anchor('nova/tour/writing', 'Writing &raquo;', array('class' => 'button-normal'));?>
</div>

&nbsp;