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
	</head>
	<body>
		<a name="top" class="top"></a>
		<header>
			<div class="wrapper">
				<div class="logo"></div>
				<nav>
					<ul>
						<li><a href="<?php echo Url::site();?>" id="nav-aboutus"></a></li>
						<li><a href="<?php echo Url::site();?>" id="nav-products"></a></li>
						<li><a href="<?php echo Url::site();?>" id="nav-news"></a></li>
						<li><a href="<?php echo Url::site();?>" id="nav-support"></a></li>
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
							<td class="footer-followus"><div class="followus"></div></td>
							<td class="footer-followicon">
								<a href="http://anodyne-productions.tumblr.com" target="_blank" class="followicons" id="follow-tumblr" title="Tumblr">&nbsp;</a>
							</td>
							<td class="footer-followicon">
								<a href="http://www.twitter.com/anodyneprod" target="_blank" class="followicons" id="follow-twitter" title="Twitter">&nbsp;</a>
							</td>
							<td class="footer-followicon">
								<a href="http://www.facebook.com/anodyneproductions" target="_blank" class="followicons" id="follow-facebook" title="Facebook">&nbsp;</a>
							</td>
							<td class="footer-copyright">
								<a href="" id="tipsy" title="Icons used were created by Drew Wilson. IE HTML5 compatability achieved with the HTML5 Shim. Additional functionality created by the jQuery ScrollTo plugin and jQuery Tipsy.">Credits</a>
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