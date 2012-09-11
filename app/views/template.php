<?php

// grab the current request object
$req = Request::main();

// set the different URI segments
$dir = Uri::segment(1);
$con = Uri::segment(2);
$act = Uri::segment(3);
$param = Uri::segment(4);

// set up the translation for directories
$directories = array(
	'nova1' 	=> 'Nova 1',
	'nova2' 	=> 'Nova 2',
	'nova3' 	=> 'Nova 3',
	'satellite'	=> 'Satellite',
	'sms'		=> 'SMS',
);

// set up the translation for controllers
$controllers = array(
	'nova1' => array(
		'overview'		=> 'Overview',
		'developers'	=> 'Developers',
		'helpers'		=> 'Helpers',
		'libraries'		=> 'Libraries',
		'models'		=> 'Models',
		'tour'			=> 'Take a Tour',
		'tutorials'		=> 'Tutorials',
		'pages'			=> 'Page Guides',
	),
	'nova2' => array(
		'overview'		=> 'Overview',
		'start'			=> 'Getting Started',
		'developers'	=> 'Developers',
		'everything'	=> 'The Kitchen Sink',
		'modify'		=> 'Modifying Nova',
		'skin'			=> 'Skinning Nova',
		'core'			=> 'The Nova Core',
	),
	'nova3' => array(
		'overview'		=> 'Overview',
		'start'			=> 'Getting Started',
		'developers'	=> 'Developers',
		'everything'	=> 'The Kitchen Sink',
		'modify'		=> 'Modifying Nova',
		'skin'			=> 'Skinning Nova',
		'core'			=> 'The Nova Core',
	),
	'satellite' => array(),
	'sms' => array(
		'overview'		=> 'Overview',
	),
);

?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title;?></title>
		<link rel="icon" href="<?php echo Uri::base(false);?>favicon.ico" type="image/x-icon">
		
		<link rel="stylesheet" href="<?php echo ASSETS;?>design/css/prettify.css">
		<link rel="stylesheet" href="<?php echo ASSETS;?>design/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo ASSETS;?>design/css/base.css">
		<link rel="stylesheet" href="<?php echo Uri::base(false);?>app/views/design/custom.css">
		
		<!--[if IE 8]>
		<style type="text/css">
			#page_container { display:table; height:100%; }
		</style>
		<![endif]-->
	</head>
	<body onload="prettyPrint()">
		<div id="page_container">
			<header>
				<div class="container">
					<div class="logo"></div>
					<nav>
						<ul>
							<li><a href="<?php echo Uri::create('main');?>" id="nav-home"></a></li>
							<li><a href="<?php echo Uri::create('nova2/overview');?>" id="nav-nova2"></a></li>
							<!--<li><a href="<?php echo Uri::create('nova3/overview');?>" id="nav-nova3"></a></li>-->
							<li><a href="<?php echo Uri::create('sms/overview');?>" id="nav-sms"></a></li>
							<!--<li><a href="<?php echo Uri::create('satellite/overview');?>" id="nav-satellite"></a></li>-->
							<li><a href="http://www.anodyne-productions.com" id="nav-anodyne" class="tip-below" title="Anodyne-Productions.com"></a></li>
						</ul>
					</nav>
				</div>
			</header>
			
			<?php if ($dir != 'main' and $con != 'index'): ?>
				<div class="nav-sub">
					<div class="container">
						<ul class="breadcrumb">
							<li><a href="<?php echo Uri::create('main');?>">Home</a></li>
							
							<?php if ($dir): ?>
								<li><span class="divider">/</span> <a href="<?php echo Uri::create($dir.'/overview');?>"><?php echo $directories[$dir];?></a></li>
								<?php if ($dir == 'nova2' and ($con == 'modify' or $con == 'skin' or $con == 'core')): ?>
									<li><span class="divider">/</span> <a href="<?php echo Uri::create('nova2/developers/index');?>">Developers</a></li>
								<?php endif;?>
								
								<?php if ($con): ?>
									<li><span class="divider">/</span> <a href="<?php echo Uri::create($dir.'/'.$con);?>"><?php echo $controllers[$dir][$con];?></a></li>
									
									<?php if ($act and ($con == 'pages' or ($con == 'pages' and $act != 'index'))): ?>
										<li><span class="divider">/</span> <a href="<?php echo Uri::create($dir.'/'.$con.'/'.$act);?>"><?php echo ucfirst($act);?></a></li>
									<?php endif;?>
								<?php endif;?>
							<?php endif;?>
						</ul>
					</div>
				</div>
			<?php endif;?>
			
			<div class="container">
				<div class="inner-container"></div>
				<div class="row">
					<div class="span12">
						<?php echo $content;?>
					</div>
				</div>
			</div>
			
			<div class="bottom-container"></div>
		</div>
		
		<footer>
			<div class="container">
				<table width="100%" height="50" cellpadding="0" cellspacing="0">
					<tbody>
						<tr>
							<td class="footer-anodyne"><a href="http://www.anodyne-productions.com" target="_blank" class="anodyne"></a></td>
							<td class="footer-copyright">
								<a href="" class="tip" title="Icons used were created by Drew Wilson and Kevin Andersson. IE HTML5 compatability achieved with the HTML5 Shim. Additional functionality achieved with Bootstrap from Twitter.">Credits</a>
								<span class="footer-subtle">
									&nbsp; | &nbsp;
									&copy; <?php echo date('Y');?> Anodyne Productions.
								</span>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</footer>
		
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.1.min.js"></script>
		<script type="text/javascript" src="<?php echo ASSETS;?>js/google-code-prettify/prettify.js"></script>
		<script type="text/javascript" src="<?php echo ASSETS;?>js/bootstrap.min.js"></script>
		
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<script type="text/javascript">
			$(document).ready(function(){
				$('.tip').tooltip();
				
				$('.tip-below').tooltip({
					placement: 'bottom'
				});
			});
		</script>
	</body>
</html>