<?php

// grab the current request object
$req = Request::current();

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
		<link rel="icon" href="<?php echo Url::base();?>favicon.ico" type="image/x-icon">
		
		<link rel="stylesheet" href="<?php echo ASSETS;?>design/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo ASSETS;?>design/css/base.css">
		<link rel="stylesheet" href="<?php echo Url::base();?>application/views/design/custom.css">
		
		<script type="text/javascript" src="<?php echo ASSETS;?>js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="<?php echo ASSETS;?>js/bootstrap-transition.js"></script>
		<script type="text/javascript" src="<?php echo ASSETS;?>js/bootstrap-tooltip.js"></script>
		<script type="text/javascript" src="<?php echo ASSETS;?>js/bootstrap-tab.js"></script>
		
		<!--[if IE 8]>
		<style type="text/css">
			#page_container { display:table; height:100%; }
		</style>
		<![endif]-->
		
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
	</head>
	<body>
		<div id="page_container">
			<header>
				<div class="container">
					<div class="logo"></div>
					<nav>
						<ul>
							<li><a href="<?php echo Url::site();?>" id="nav-home"></a></li>
							<li><a href="<?php echo Url::site('nova2');?>" id="nav-nova2"></a></li>
							<!--<li><a href="<?php echo Url::site('nova3');?>" id="nav-nova3"></a></li>-->
							<li><a href="<?php echo Url::site('sms');?>" id="nav-sms"></a></li>
							<!--<li><a href="<?php echo Url::site('satellite');?>" id="nav-satellite"></a></li>-->
							<li><a href="http://www.anodyne-productions.com" id="nav-anodyne" class="tip-below" title="Anodyne-Productions.com"></a></li>
						</ul>
					</nav>
				</div>
			</header>
			
			<div class="container">
				<div class="inner-container"></div>
				<div class="row">
					<div class="span12">
						<?php if ($req->controller() != 'main' and $req->action() != 'index'): ?>
							<ul class="breadcrumb">
								<li><a href="<?php echo Url::site();?>">Home</a></li>
								
								<?php if ($req->directory()): ?>
									<li><span class="divider">/</span> <a href="<?php echo Url::site($req->directory());?>"><?php echo $directories[$req->directory()];?></a></li>
									<?php if ($req->directory() == 'nova2' and ($req->controller() == 'modify' or $req->controller() == 'skin' or $req->controller() == 'core')): ?>
										<li><span class="divider">/</span> <a href="<?php echo Url::site('nova2/developers/index');?>">Developers</a></li>
									<?php endif;?>
									
									<?php if ($req->controller()): ?>
										<li><span class="divider">/</span> <a href="<?php echo Url::site($req->directory().'/'.$req->controller());?>"><?php echo $controllers[$req->directory()][$req->controller()];?></a></li>
										
										<?php if ($req->param('id') and ($req->controller() == 'pages' or ($req->controller() == 'pages' and $req->param('id') != 'index'))): ?>
											<li><span class="divider">/</span> <a href="<?php echo Url::site($req->directory().'/'.$req->controller().'/'.$req->action());?>"><?php echo ucfirst($req->action());?></a></li>
										<?php endif;?>
									<?php endif;?>
								<?php endif;?>
							</ul>
						<?php endif;?>
						
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
	</body>
</html>