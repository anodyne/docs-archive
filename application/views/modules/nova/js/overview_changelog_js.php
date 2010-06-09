<script type="text/javascript">
	$(document).ready(function(){
		$('.detailed').hide();
		
		$('.toggle').toggle(function(){
			var id = $(this).attr('myid');
			$('#' + id).slideDown();
			$(this).html('Hide Details &raquo;');
			return false;
		}, function(){
			var id = $(this).attr('myid');
			$('#' + id).slideUp();
			$(this).html('Show Details &raquo;');
			return false;
		});
	});
</script>