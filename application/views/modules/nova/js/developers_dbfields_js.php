<script type="text/javascript">
	$(document).ready(function(){
		var tables = $('h2').length;
		var fields = $('table tbody tr').length;
		
		$('dfn.tables').html(tables);
		$('var.fields').html(fields);
		
		$('table tbody > tr:nth-child(even)').addClass('alt');
	});
</script>