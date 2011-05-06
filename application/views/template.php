<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title;?></title>
		
		<link rel="stylesheet" href="<?php echo Url::base();?>application/views/design/main.css">
		<link rel="stylesheet" href="<?php echo Url::base();?>application/views/design/jquery.tipsy.css">
		
		<script type="text/javascript" src="<?php echo Url::base();?>application/assets/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo Url::base();?>application/assets/js/jquery.tipsy.js"></script>
		
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<script type="text/javascript">
			$(document).ready(function(){
				$('#tipsy').tipsy({
					gravity: 'se',
					fade: true,
					delayOut: 500,
					offset: 25,
					opacity: 0.9
				});
			});
		</script>
	</head>
	<body>
		<a name="top" class="top"></a>
		<header>
			<div class="wrapper">
				<div class="logo"></div>
				<nav>
					<ul>
						<li><a href="<?php echo Url::site();?>" id="nav-home"></a></li>
						<li><a href="<?php echo Url::site('nova1');?>" id="nav-nova1"></a></li>
						<li><a href="<?php echo Url::site('nova2');?>" id="nav-nova2"></a></li>
						<li><a href="<?php echo Url::site('sms');?>" id="nav-sms"></a></li>
					</ul>
				</nav>
			</div>
		</header>
		
		<div id="content">
			<div class="wrapper">
				<div class="inner">
					<?php echo $content;?>
				</div>
			</div>
			
			<div style="clear:both;"></div>
		</div>
		
		<footer>
			<div class="wrapper">
				<table width="950" height="50" cellpadding="0" cellspacing="0">
					<tbody>
						<tr>
							<td class="footer-anodyne"><a href="http://www.anodyne-productions.com" target="_blank" class="anodyne"></a></td>
							<td class="footer-copyright">
								<a href="" id="tipsy" title="Icons used were created by Drew Wilson. IE HTML5 compatability achieved with the HTML5 Shim. Additional functionality created jQuery Tipsy.">Credits</a>
								&nbsp; | &nbsp;
								&copy; <?php echo date('Y');?> Anodyne Productions.
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</footer>
	</body>
</html>