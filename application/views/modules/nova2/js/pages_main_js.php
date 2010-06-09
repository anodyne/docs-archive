<script type="text/javascript">
	$(document).ready(function(){
		$('a.panel-toggle').toggle(function(){
			$(this).parent().next('div').slideDown();
			$(this).html('Hide pages &raquo;');
			return false;
		}, function(){
			$(this).parent().next('div').slideUp();
			$(this).html('Show pages &raquo;');
			return false;
		});
	});
</script>