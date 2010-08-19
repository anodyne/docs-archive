<script type="text/javascript">
	$(document).ready(function(){
		$('.show_versions').toggle(function(){
			var id = $(this).attr('myID');
			$('#versions_' + id).slideDown();
			$(this).find('span.action').html('Hide');
			return false;
		}, function(){
			var id = $(this).attr('myID');
			$('#versions_' + id).slideUp();
			$(this).find('span.action').html('Show');
			return false;
		});
	});
</script>