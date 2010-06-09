<style type="text/css">
	.content { position: relative; }
	#search {
		position: absolute;
		top: 0px;
		right: 7px;
		padding: .5em 1em 1em 1em;
		
		background: #999;
		border: 1px solid #888;
		border-top: 0;
		color: #fff;
		
		border-radius: 0 0 4px 4px;
		-moz-border-radius: 0 0 4px 4px;
		-webkit-border-bottom-left-radius: 4px;
		-webkit-border-bottom-right-radius: 4px;
	}
	#search strong { font-size: 120%; }
	#search .cse-branding-form { text-align: right; }
	#search .cse-branding-logo { float: right; }
	#search button {
		padding: 2px 3px;
		
		font-family: "lucida grande", verdana, arial, sans-serif;
		font-size: 95%;
		color: #555;
		font-weight: bold;
		background: transparent;
		background: #ccc;
		border: 1px solid #777;
		cursor: pointer;
		
		border-radius: 3px;
		-moz-border-radius: 3px;
		-webkit-border-radius: 3px;
	}
	#search button:hover { border: 1px solid #555; }
	#search input {
		padding: 3px 4px;
		background: #ccc;
		border: 1px solid #777;
		color: #555;
		font-family: "lucida grande", verdana, arial, sans-serif;
		
		border-radius: 2px;
		-moz-border-radius: 2px;
		-webkit-border-radius: 2px;
	}
	#search input:focus { border: 1px solid #555; }
</style>

<script type="text/javascript">
	$(document).ready(function(){
		$('#search-btn').toggle(function(){
			$(this).addClass('active').css('height', '33px');
			$('#search').show();
			return false;
		}, function(){
			$(this).removeClass('active').css('height', '32px');
			$('#search').hide();
			return false;
		});
	});
</script>
		
<div id="search" class="hidden">
	<div class="cse-branding-bottom">
		<div class="cse-branding-form">
			<strong>Search by Google</strong><br />
			<form action="http://www.google.com/cse" id="cse-search-box">
				<div>
					<input type="hidden" name="cx" value="011972202580642983366:xftngh4v4qy" />
					<input type="hidden" name="ie" value="UTF-8" />
					<input type="text" name="q" size="31" />
					<!--<input type="submit" name="sa" value="Search" />-->
					<!--<button type="submit" name="sa" value="Search"><?php echo img(APPFOLDER .'/assets/magnifier.png', FALSE);?></button>-->
					<button type="submit" name="sa" value="Search">GO</button>
				</div>
			</form>
		</div>
	</div>
</div>