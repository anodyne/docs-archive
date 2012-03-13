<h1>Updating Nova</h1>

<p>Since the release of Nova 1.0, we've consistently heard two gripes about Nova. First, it's harder to get up and running than SMS. Second, it's tedious to update. We've addressed both issues in Nova 2, but none more than the update process. To say our number one focus with Nova 2 was the update process would be an over-simplification of the reasons behind Nova 2, but truth be told, it was one of the biggest motivations for the release.</p>

<p>Gone are the days of wading through a long list of files that have to be updated. Now, the update process is dead simple: delete the <samp>nova</samp> directory and upload the new copy. Open your browser and run the update. Done. It doesn't get much simpler than that.</p>

<p>The reason the update process is so simple is that we've worked hard to pull every last bit of Nova code out of the application directory. As long as admins aren't modifying anything in the <samp>nova</samp> directory, it really is as simple as delete and replace.</p>

<p>Like with Nova 1 though, it's <kbd>imperative</kbd> that you delete that directory and replace it. Why? Because there are some very strange issues when using Windows that won't properly overwrite files. The only way to ensure you won't have issues is to delete the directory and then upload the new copy. So far, we haven't seen these issues on Mac or Linux machines, but just to be safe, all admins should follow this process to update Nova's files.</p>

<h2>Update Guides</h2>

<p>Use the update guides below for detailed instructions on how to update from one version to another. If you're running Nova 2 and want to update across multiple versions, you'll just need to remove the <samp>nova</samp> directory and upload a new copy. If you're running Nova 1 and want to update across multiple versions, you'll need to go through each update guide from the version you're on to the version you're going to (skipping the step where you run the update from the browser) and then after all the files are updated, do the system update from the browser.</p>

<ul>
	<li><a href="<?php echo Uri::create('nova3/start/update/300_to_301');?>">Nova 3.0 to Nova 3.0.1</a></li>
</ul>