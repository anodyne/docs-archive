<?php include_once APPPATH .'views/modules/' . $this->router->fetch_module() .'/assets.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title><?php echo $title;?></title>
		
		<!-- STYLESHEETS -->
		<?php echo link_tag($css_main); ?>
		
		<script type="text/javascript" src="<?php echo base_url() . APPFOLDER;?>/assets/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo base_url() . APPFOLDER;?>/assets/js/jquery.qtip.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url() . APPFOLDER;?>/assets/js/jquery.scrollto.min.js"></script>
		
		<!-- JAVASCRIPT FILES -->
		<?php echo $javascript;?>
		
		<script type="text/javascript">
			$(document).ready(function(){
				$('a[tooltip]').each(function(){
					$(this).qtip({
						content: $(this).attr('tooltip'),
						style: { 
							border: {
								width: 1,
								radius: 3,
								color: '#444'
							},
							background: '#888',
							color: 'white',
							fontSize: '90%'
						}
					});
				});
				
				$('a.shortcut').click(function(){
					var id = $(this).attr('myID');
					
					$.scrollTo('.' + id, 900, {easing:'swing'});
					
					return false;
				});
				
				$('a.backtop').click(function(){
					$.scrollTo('h1:first', 900, {easing:'swing'});
					
					return false;
				});
				
				$('table.zebra tbody > tr:nth-child(odd)').addClass('alt');
			});
		</script>
		
		<meta http-equiv='expires' content='-1' />
		<meta http-equiv= 'pragma' content='no-cache' />
		<meta name='robots' content='all' />
	</head>
	<body>
		<!-- HEAD -->
		<div id="head">
			<div class="wrapper">
				<ul id="nav-main">
					<li><a href="<?php echo site_url('main/index');?>"<?php if ($this->router->fetch_module() == 'main'): echo ' class="active-main"'; endif;?>>Home</a></li>
					<li><a href="<?php echo site_url('nova/overview/index');?>"<?php if ($this->router->fetch_module() == 'nova'): echo ' class="active-nova"'; endif;?>>Nova</a></li>
					<!--<li><a href="<?php echo site_url('nova2/overview/index');?>"<?php if ($this->router->fetch_module() == 'nova2'): echo ' class="active-nova"'; endif;?>>Nova 2</a></li>-->
					<li><a href="<?php echo site_url('sms/overview/index');?>"<?php if ($this->router->fetch_module() == 'sms'): echo ' class="active-sms"'; endif;?>>SMS</a></li>
				</ul>
				
				<?php if ($this->router->fetch_module() == 'main'): ?>
					<?php echo anchor('main/index', img($logo));?>
				<?php else: ?>
					<?php echo anchor($this->router->fetch_module() .'/overview/index', img($logo));?>
				<?php endif;?>
			</div>
		</div>
		
		<!-- BODY -->
		<div id="body">
			<div class="wrapper">
				<?php include_once APPPATH .'views/modules/' . $this->router->fetch_module() .'/head.php';?>
				
				<!-- PAGE CONTENT -->
				<div class="content">
					<?php include_once APPPATH .'views/search.php'; ?>
					<?php if ($this->uri->segment(3) != 'index' && $this->uri->segment(3) !== FALSE): ?>
						<ul id="breadcrumb">
							<li><?php echo anchor($this->router->fetch_module() .'/'. $this->uri->segment(2, 'overview'), ucfirst($this->uri->segment(2, 'overview')));?></li>
							<?php if (isset($sub) && $sub > ''): ?>
								<li>&laquo;</li>
								<li><?php echo anchor($this->router->fetch_module() .'/'. $this->uri->segment(2) .'/'. $this->uri->segment(3, 'index'), $sub);?></li>
							<?php endif;?>
						</ul>
						
						<div class="clear"></div>
					<?php endif;?>
				
					<?php echo $content;?>
					
					<?php if (isset($related)):?>
					<br />
					<p class="related"><strong>See Also</strong>:
						<?php $count = count($related);?>
						<?php $i = 0;?>
						<?php foreach ($related as $url => $title): ?>
							<?php echo anchor($url, $title);?>
							
							<?php if ($count > 0 && $i < ($count -1)): ?>
								&nbsp; | &nbsp;
							<?php endif;?>
							
							<?php ++$i;?>
						<?php endforeach;?>
					</p>
					<?php endif;?>
				</div>
			</div>
		</div>
		
		<div id="footer">
			&copy; <?php echo date('Y');?> Anodyne Productions<br />
			Powered by <a href="http://codeigniter.com" target="_blank">CodeIgniter</a> &nbsp; | &nbsp; <a href="http://www.anodyne-productions.com/index.php/main/credits">Site Credits</a>
		</div>
	</body>
</html>