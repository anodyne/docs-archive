<h1>Updating Nova</h1>

<p>Since the release of Nova 1.0, we've consistently heard two gripes about Nova. First, it's harder to get up and running than SMS. Second, it's tedious to update. We've addressed both issues in Nova 2, but none more than the update process. To say our number one focus with Nova 2 was the update process would be an over-simplification of the reasons behind Nova 2, but truth be told, it was one of the biggest motivations for the release.</p>

<p>Gone are the days of wading through a long list of files that have to be updated. Now, the update process is dead simple: delete the <samp>nova</samp> directory and upload the new copy. Open your browser and run the update. Done. It doesn't get much simpler than that.</p>

<p>The reason the update process is so simple is that we've worked hard to pull every last bit of Nova code out of the application directory. As long as admins aren't modifying anything in the <samp>nova</samp> directory, it really is as simple as delete and replace.</p>

<p>Like with Nova 1 though, it's <kbd>imperative</kbd> that you delete that directory and replace it. Why? Because there are some very strange issues when using Windows that won't properly overwrite files. The only way to ensure you won't have issues is to delete the directory and then upload the new copy. So far, we haven't seen these issues on Mac or Linux machines, but just to be safe, all admins should follow this process to update Nova's files.</p>

<h2>Update Guides</h2>

<p>Use the update guides below for detailed instructions on how to update from one version to another. If you're running Nova 2 and want to update across multiple versions, you'll just need to remove the <samp>nova</samp> directory and upload a new copy. If you're running Nova 1 and want to update across multiple versions, you'll need to go through each update guide from the version you're on to the version you're going to (skipping the step where you run the update from the browser) and then after all the files are updated, do the system update from the browser.</p>

<ul>
	<li><a href="<?php echo Url::site('nova2/start/update/125_to_200');?>">Nova 1.2.5 to Nova 2.0</a></li>
	<li><a href="<?php echo Url::site('nova2/start/update/124_to_125');?>">Nova 1.2.4 to Nova 1.2.5</a></li>
	<li><a href="<?php echo Url::site('nova2/start/update/123_to_124');?>">Nova 1.2.3 to Nova 1.2.4</a></li>
	<li><a href="<?php echo Url::site('nova2/start/update/122_to_123');?>">Nova 1.2.2 to Nova 1.2.3</a></li>
	<li><a href="<?php echo Url::site('nova2/start/update/121_to_122');?>">Nova 1.2.1 to Nova 1.2.2</a></li>
	<li><a href="<?php echo Url::site('nova2/start/update/120_to_121');?>">Nova 1.2 to Nova 1.2.1</a></li>
	<li><a href="<?php echo Url::site('nova2/start/update/112_to_120');?>">Nova 1.1.2 to Nova 1.2</a></li>
	<li><a href="<?php echo Url::site('nova2/start/update/111_to_112');?>">Nova 1.1.1 to Nova 1.1.2</a></li>
	<li><a href="<?php echo Url::site('nova2/start/update/110_to_111');?>">Nova 1.1 to Nova 1.1.1</a></li>
	<li><a href="<?php echo Url::site('nova2/start/update/106_to_110');?>">Nova 1.0.6 to Nova 1.1</a></li>
	<li><a href="<?php echo Url::site('nova2/start/update/105_to_106');?>">Nova 1.0.5 to Nova 1.0.6</a></li>
	<li><a href="<?php echo Url::site('nova2/start/update/104_to_105');?>">Nova 1.0.4 to Nova 1.0.5</a></li>
	<li><a href="<?php echo Url::site('nova2/start/update/103_to_104');?>">Nova 1.0.3 to Nova 1.0.4</a></li>
	<li><a href="<?php echo Url::site('nova2/start/update/102_to_103');?>">Nova 1.0.2 to Nova 1.0.3</a></li>
	<li><a href="<?php echo Url::site('nova2/start/update/101_to_102');?>">Nova 1.0.1 to Nova 1.0.2</a></li>
	<li><a href="<?php echo Url::site('nova2/start/update/100_to_101');?>">Nova 1.0 to Nova 1.0.1</a></li>
</ul>