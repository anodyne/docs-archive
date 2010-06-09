<link rel="stylesheet" href="<?php echo base_url() . APPFOLDER .'/assets/js/css/black/style.css';?>" type="text/css" />

<script type="text/javascript" src="<?php echo base_url() . APPFOLDER .'/assets/js/jquery.piroBox.js';?>"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$().piroBox({
			my_speed: 300, //animation speed
			scrollImage : false, // true == image follows the page _|_ false == image remains in the same open position
		                           // in some cases of very large images or long description could be useful.
			slideShow : 'true', // true == slideshow on, false == slideshow off
			slideSpeed : 3, //slideshow
			pirobox_next : 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox
			pirobox_prev : 'piro_prev', // Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox
		});
	});
</script>