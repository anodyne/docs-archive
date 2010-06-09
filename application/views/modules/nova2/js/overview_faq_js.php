<script type="text/javascript">
	$(document).ready(function(){
		$('.question').toggle(function(){
			$(this).next().slideDown('fast');
			return false;
		}, function(){
			$(this).next().slideUp('fast');
			return false;
		});
	});
</script>