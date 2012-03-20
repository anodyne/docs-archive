<h1>Developer Resources</h1>

<p>Nova is a flexible system that allows developers to extend the core, add to the system, modify the system, change its appearance and much more. The resources available here are intended for developers who need documentation on how to use some of these components. Before diving in, it's important to make sure you have a grasp on many of the <a href="<?php echo Uri::create('nova2/developers/concepts');?>">concepts</a> prevelant throughout Nova. If you're comfortable with these concepts, use the documentation below to get to work customizing Nova in a wide array of possibilities.</p><br>

<div class="tabbable">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#modify" data-toggle="tab">Modifying Nova</a></li>
		<li><a href="#skin" data-toggle="tab">Skinning Nova</a></li>
		<li><a href="#core" data-toggle="tab">The Nova Core</a></li>
	</ul>
	
	<div class="tab-content">
		<div id="modify" class="tab-pane active">
			<p>Like the first version of Nova, version 2 allows developers to extend the core and create new ways to manage a game or present information. A good grasp of PHP and the Nova <a href="<?php echo Uri::create('nova2/developers/concepts');?>">development concepts</a> is required to do any significant modifications to Nova.</p><br>
			
			<div class="row">
				<div class="span4">
					<div class="thumbnail">
						<img src="<?php echo Uri::base(false);?>app/views/design/images/nova2/basic.png" alt="">
						<h3 class="align-center">Basic Modifications</h3>
					</div><br>
					
					<ul>
						<li><a href="<?php echo Uri::create('nova2/modify/changeicons');?>">Change some system icons</a></li>
						<li><a href="<?php echo Uri::create('nova2/modify/addimage');?>">Add an image to a page</a></li>
						<li><a href="<?php echo Uri::create('nova2/modify/language');?>">Change language items in Nova</a></li>
					</ul>
				</div>
				
				<div class="span4">
					<div class="thumbnail">
						<img src="<?php echo Uri::base(false);?>app/views/design/images/nova2/intermediate.png" alt="">
						<h3 class="align-center">Intermediate Modifications</h3>
					</div><br>
					
					<ul>
						<li><a href="<?php echo Uri::create('nova2/modify/newpage');?>">Create a brand new page</a></li>
						<!--<li>Display different information from the database</li>
						<li>Create Quick Install files for skins and ranks</li>-->
						<li><a href="<?php echo Uri::create('nova2/modify/changeappfolder');?>">Change the application directory</a></li>
						<li><a href="<?php echo Uri::create('nova2/modify/changeindex');?>">Change the index file</a></li>
						<!--<li>Translate Nova to another language</li>-->
					</ul>
				</div>
				
				<div class="span4">
					<div class="thumbnail">
						<img src="<?php echo Uri::base(false);?>app/views/design/images/nova2/advanced.png" alt="">
						<h3 class="align-center">Advanced Modifications</h3>
					</div><br>
					
					<ul>
						<!--<li>Create new models methods</li>
						<li>Modules</li>
						<li>Routing</li>
						<li>Remove index.php from the URL</li>
						<li>Run multiple Nova applications</li>
						<li>Create and modify helpers</li>
						<li>Create and modify libraries</li>
						<li><a href="<?php echo Uri::create('nova2/modify/github');?>">Nova and Github</a></li>-->
						<li><em class="muted">No advanced modification tutorials available</em></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div id="skin" class="tab-pane">
			<p>Little has changed with skinning from Nova 1. With some basic knowledge of HTML and CSS, you can do a lot of different things with your skins. Below are some tutorials for different things you may want to do with your skins.</p>

			<h2>Before You Get Started</h2>

			<p>Before you dive in to creating a great skin for your game, there are a few things you'll need to familiarize yourself with. The links below will explain some of the concepts behind skinning in Nova as well as provide some resources for learning HTML and CSS to help you as you work your way through building your own skin.</p>

			<ul>
				<!--<li>Understanding seamless substitution</li>
				<li>Anatomy of a Nova skin</li>-->
				<li><a href="http://www.w3schools.com/html/default.asp" target="_blank">HTML</a> (w3schools)</li>
				<li><a href="http://www.w3schools.com/css/default.asp" target="_blank">CSS</a> (w3schools)</li>
				<li><a href="<?php echo Uri::create('nova2/skin/changes');?>">Changes to Skinning in Nova 2</a></li>
			</ul><br>

			<div class="row">
				<div class="span4">
					<div class="thumbnail">
						<img src="<?php echo Uri::base(false);?>app/views/design/images/nova2/basic.png" alt="">
						<h3 class="align-center">Basic Skinning</h3>
					</div><br>
					
					<ul>
						<!--<li>Change colors and fonts in a skin</li>
						<li>Add/change the header image of a skin</li>-->
						<li><em class="muted">No basic skinning tutorials available</em></li>
					</ul>
				</div>
				
				<div class="span4">
					<div class="thumbnail">
						<img src="<?php echo Uri::base(false);?>app/views/design/images/nova2/intermediate.png" alt="">
						<h3 class="align-center">Intermediate Skinning</h3>
					</div><br>
					
					<ul>
						<!--<li>Create a new skin</li>-->
						<li><em class="muted">No intermediate skinning tutorials available</em></li>
					</ul>
				</div>
				
				<div class="span4">
					<div class="thumbnail">
						<img src="<?php echo Uri::base(false);?>app/views/design/images/nova2/advanced.png" alt="">
						<h3 class="align-center">Advanced Skinning</h3>
					</div><br>
					
					<ul>
						<!--<li>Using icons in the main navigation</li>-->
						<li><em class="muted">No advanced skinning tutorials available</em></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div id="core" class="tab-pane">
			<ul class="thumbnails">
				<li class="span4">
					<div class="thumbnail">
						<div class="caption">
							<img src="<?php echo Uri::base(false);?>app/views/design/images/nova2/nova-core.png" alt="Helpers">
							<h2>Helpers</h2>
							<p>Helpers, as the name suggests, help you with tasks. Each helper file is simply a collection of functions in a particular category to help perform specific tasks quickly and easily.</p>
							<p><a href="<?php echo Uri::create('nova2/core/helpers');?>" class="btn">Helpers Reference</a></p>
						</div>
					</div>
				</li>
				
				<li class="span4">
					<div class="thumbnail">
						<img src="<?php echo Uri::base(false);?>app/views/design/images/nova2/libraries.png" alt="Libraries">
						<div class="caption">
							<h2>Libraries</h2>
							<p>Libraries are PHP classes designed to accomplish specific actions. In most cases, libraries will significantly reduce the amount of code you have to write and make it easy to develop advanced applications.</p>
							<p><a href="<?php echo Uri::create('nova2/core/libraries');?>" class="btn">Libraries Reference</a></p>
						</div>
					</div>
				</li>
				
				<li class="span4">
					<div class="thumbnail">
						<div class="caption">
							<img src="<?php echo Uri::base(false);?>app/views/design/images/nova2/models.png" alt="Models">
							<h2>Models</h2>
							<p>Models are PHP classes designed to work with information in your database and remove the need for building queries right in the pages, allowing those queries to be re-used throughout the system.</p>
							<p><a href="<?php echo Uri::create('nova2/core/models');?>" class="btn">Models Reference</a></p>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>