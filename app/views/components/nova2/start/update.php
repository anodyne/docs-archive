<h1>Updating Nova</h1>
<br>

<div class="tabbable">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#nova2" data-toggle="tab">Update Guides</a></li>
		<li><a href="#nova1" data-toggle="tab">Updating From Nova 1</a></li>
	</ul>
	
	<div class="tab-content">
		<div id="nova2" class="tab-pane active">
			<h2>Update Guides</h2>
			
			<p>If you're already running Nova 2, use the update guides below (choose the one for the version you're going to) to get detailed directions on how to update Nova to the latest version. If you're running Nova 1 and want to update to Nova 2, the other tab above has information about doing just that.</p>

			<p class="alert alert-info"><strong>Note:</strong> If you are several updates behind, you can simply delete the <code>nova</code> directory, replace it with the newest version, and then run the update script in the browser.</p>
			<br>

			<table class="table table-striped table-bordered">
				<thead>
					<th class="blue span2">Version</th>
					<th class="blue">Changes</th>
				</thead>
				<tbody>
					<tr>
						<td><a href="<?php echo Url::site('nova2/start/update/202_to_203');?>">2.0.3</a></td>
						<td>Fixes an issue where memory consumption and execution time psuedo-variables didn't work because of the Template engine. In addition, jQuery UI has been updated to version 1.8.18.</td>
					</tr>
					<tr>
						<td><a href="<?php echo Url::site('nova2/start/update/201_to_202');?>">2.0.2</a></td>
						<td>Fixes issues related to the display of the manifest with sub departments, the Who's Online listing, character bio image galleries, orphaned data, the milestone report listing, typos, and deck management. In addition, some minor tweaks were made to post locking to make it smarter when auto-releasing as well as changes to the image modal popups.</td>
					</tr>
					<tr>
						<td><a href="<?php echo Url::site('nova2/start/update/200_to_201');?>">2.0.1</a></td>
						<td>Fixes a minor display issue and an error thrown about not being able to load a language file.</td>
					</tr>
				</tbody>
			</table>
		</div>
		
		<div id="nova1" class="tab-pane">
			<h2>Updating From Nova 1</h2>

			<p>The feedback we've consistently heard about Nova is that it's great, but there are definitely some things that could be better.</p>
			
			<dl>
				<dt>Think Nova is both difficult and tedious to update?</dt>
				<dd>We've fixed that with a brand-new file structure that makes updating as easy as deleting a folder and uploading a new copy of that folder.</dd>
				
				<dt>Think Thresher is a bit limited?</dt>
				<dd>We've addressed that with enhancements to just about every part of the wiki (all-new category selection UI, creating categories while creating/editing pages, page restrictions, the ability to edit the content of core wiki pages, better UIs for several pages, etc.).</dd>
				
				<dt>Frustrated by editing a post only to have it wiped out because someone was editing the post at the same time?</dt>
				<dd>No more with a brand-new post locking feature that makes sure those frustrations are a thing of the past.</dd>
			</dl>
			
			<p>On top of that, we've added or enhanced a ton of features in Nova 2 (users will be automatically removed from a post if they didn't participate in it, add previous disallowed HTML content in site messages like script tags and embedded videos, simplified user and character management controls, all-new character selection mechanism for posts and messages, private messaging updates, a new look and feel for Pulsar and Titan, Writing Control Panel improvements, and much more). No matter what way you slice, Nova 2 is a big step forward.</p>
			
			<p class="alert alert-info"><strong>Note:</strong> It doesn't matter what version of Nova 2 you're going to from Nova 1, follow the instructions in the update guide and you'll be up on the latest version.</p>

			<p><a href="<?php echo Url::site('nova2/start/update/nova1');?>" class="btn btn-large">Update From Nova 1</a></p>
		</div>
	</div>
</div>