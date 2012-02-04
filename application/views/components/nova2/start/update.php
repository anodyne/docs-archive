<h1>Updating Nova</h1>

<p>Since the release of Nova 1.0, we've consistently heard two gripes about Nova. First, it's harder to get up and running than SMS. Second, it's tedious to update. We've addressed both issues in Nova 2, but none more than the update process. To say our number one focus with Nova 2 was the update process would be an over-simplification of the reasons behind Nova 2, but truth be told, it was one of the biggest motivations for the release.</p>

<p>Gone are the days of wading through a long list of files that have to be updated. Now, the update process is dead simple: delete the <samp>nova</samp> directory and upload the new copy. Open your browser and run the update. Done. It doesn't get much simpler than that.</p>

<p>The reason the update process is so simple is that we've worked hard to pull every last bit of Nova code out of the application directory. As long as admins aren't modifying anything in the <samp>nova</samp> directory, it really is as simple as delete and replace.</p>

<p>Like with Nova 1 though, it's <kbd>imperative</kbd> that you delete that directory and replace it. Why? Because there are some very strange issues when using Windows that won't properly overwrite files. The only way to ensure you won't have issues is to delete the directory and then upload the new copy. So far, we haven't seen these issues on Mac or Linux machines, but just to be safe, all admins should follow this process to update Nova's files.</p>

<h2>Update Guides</h2>

<p>Use the update guides below for detailed instructions on how to update from one version to another. If you're running Nova 2 and want to update across multiple versions, you'll just need to remove the <samp>nova</samp> directory and upload a new copy. If you're running Nova 1 and want to update across multiple versions, you'll need to go through each update guide from the version you're on to the version you're going to (skipping the step where you run the update from the browser) and then after all the files are updated, do the system update from the browser.</p>

<p class="alert alert-info"><strong>Note:</strong> The update guides assume you're coming from the immediately prior version. So if you're reading the Nova 2.0.4 guide, it's assuming you're coming from version 2.0.3, not 2.0.1 (or earlier). If you are several updates behind, you can simply delete the <strong>nova</strong> directory, replace it with the newest version, and then run the update script in the browser.</p>
<br>

<table class="table table-striped table-bordered">
	<thead>
		<th class="blue span2">Version</th>
		<th class="blue">Changes</th>
	</thead>
	<tbody>
		<tr>
			<td><a href="<?php echo Url::site('nova2/start/update/126_to_200');?>">Nova 2.0</a></td>
			<td>You've spoken and we've listened. The feedback we've consistently heard about Nova is that it's great, but there are some things that could be better. Instead of waiting for the next generation of Nova, we've decided to address some of theses issues now. Think Nova is difficult to update? We've fixed that with a brand-new file structure that makes updating as easy as deleting a folder and uploading a new copy of that folder. Think Thresher is a bit limited? We've addressed that with enhancements to just about every part of the wiki (all-new category selection UI, creating categories while creating/editing pages, page restrictions, the ability to edit the content of core wiki pages, better UIs for several pages, etc.). Frustrated by editing a post only to have it wiped out because someone was editing the post at the same time? No more with a brand-new post locking feature that makes sure those frustrations are a thing of the past. On top of that, we've added or enhanced a ton of features in Nova 2 (users will be automatically removed from a post if they didn't participate in it, add previous disallowed HTML content in site messages like script tags and embedded videos, simplified user and character management controls, all-new character selection mechanism for posts and messages, private messaging updates, a new look and feel for Pulsar and Titan, Writing Control Panel improvements, and much more). No matter what way you slice, Nova 2 is a big step forward.</td>
		</tr>
	</tbody>
</table>