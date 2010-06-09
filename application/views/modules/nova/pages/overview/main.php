<div class="main-container">
	<h1><?php echo $header;?></h1>
	
	<p class="critical"><strong>Note:</strong> Due to several bugs we've been unable to track down in Thresher and the SMS Archives feature, both now require PHP 5.0 or higher in order to be used. We apologize for the inconvenience, but at this time, the decision is unavoidable.</p>
	
	<p class="important"><strong>Important Note for GoDaddy Hosted Sites:</strong> GoDaddy has several issues with CodeIgniter because of the way it's setup such as 404s, blank white pages and email problems. You can change a few CodeIgniter settings to get around these issues. A full explanation of the changes and instructions are available <?php echo anchor($this->router->fetch_module() .'/overview/godaddy', 'here');?>.</p>
	
	<p>The Nova User Guide is the single most exhaustive source for information about Nova, whether it's tutorials, developer resources, information about individual pages in Nova or general reference. If you've got questions, odds are it's answered here somewhere.</p>
	
	<p>&nbsp;</p>
	
	<div class="main-right">
		<div class="main-panel">
			<h4>Getting Started</h4>
			<p>These guides are your one-stop-shop for installing, upgrading and updating Nova. Make sure to read through them <strong>before</strong> you try to do anything with Nova!</p>
			<ul>
				<li><?php echo anchor('nova/overview/install', 'Install Guide');?></li>
				<li><?php echo anchor('nova/overview/upgrade', 'SMS Upgrade Guide');?></li>
				<li><?php echo anchor('nova/overview/update', 'Updating Nova');?></li>
				<li><?php echo anchor('nova/tutorials/intro/backup', 'Backup Guide');?></li>
			</ul>
		</div>
		
		<div class="main-panel">
			<h4>Page Guides</h4>
			<p>Every page in Nova is packed full of functionality, but if you don&rsquo;t know all those pieces, you can lose out on a lot of Nova&rsquo;s power and ease. To help you get the most out of Nova, we&rsquo;ve compiled page guides for nearly every page in the system that will explain in detail how to use every feature on every page in the system.</p>
			<p><?php echo anchor('nova/pages/index', 'See all pages guides &raquo;');?></p>
		</div>
		
		<div class="main-panel">
			<h4>Developer Resources</h4>
			<p>Whether you're building a new skin, extending Nova or developing something complete new with Nova, the developer resource center has information for you! If you're interested in extending Nova, learning about features or pouring through countless pages of technical documentation about the pieces that make Nova tick, this is the place to do it!</p>
			<p><?php echo anchor('nova/developers/index', 'See developer resources &raquo;');?></p>
		</div>
	</div>
	
	<div class="main-left">
		<div class="main-panel">
			<h4>General Information</h4>
			<p>These links provide general information about Nova includes changes, licenses and requirements.</p>
			<ul>
				<li><?php echo anchor('nova/overview/changes', 'Changes Since SMS 2');?></li>
				<li><?php echo anchor('nova/overview/changelog', 'Change Log');?></li>
				<li><?php echo anchor('nova/overview/license/nova', 'Nova License Agreement');?></li>
				<li><?php echo anchor('nova/overview/license/ci', 'CodeIgniter License Agreement');?></li>
				<li><?php echo anchor('nova/overview/requirements', 'Server &amp; Browser Requirements');?></li>
				<li><?php echo anchor('nova/overview/faq', 'Frequently Asked Questions');?></li>
			</ul>
		</div>
		
		<div class="main-panel">
			<h4>Take a Tour</h4>
			<p>Nova is the next evolution of RPG management software. Complete with a wide array of new features, Nova brings an unprecedented amount of power and ease-of-use to game masters to run their RPGs the way they want and focus on getting back to playing the game.</p>
			<p><?php echo anchor('nova/tour/index', 'Take a tour of Nova &raquo;');?></p>
		</div>
		
		<div class="main-panel">
			<h4>Tutorials</h4>
			<p>We are pleased to be able to make a wide array of tutorials available for people curious about Nova and developing for it. The tutorials cover many different topics and are a fairly comprehensive look at their particular subject matter. Requests for additional tutorials should be done on the <a href="http://forums.anodyne-productions.com" target="_blank">Anodyne forums</a>.</p>
			<ul>
				<li><?php echo anchor('nova/tutorials/index#intro', 'Getting Started with Nova');?></li>
				<li><?php echo anchor('nova/tutorials/index#skinning', 'Skinning');?></li>
				<li><?php echo anchor('nova/tutorials/index#advanced', 'Advanced Tutorials');?></li>
			</ul>
		</div>
	</div>
</div>