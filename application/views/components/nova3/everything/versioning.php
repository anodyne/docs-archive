<h1>Versioning in Nova</h1>

<p>Nova is versioned using a three-part number in the following format:</p>

<pre>{major_version}.{minor_version}.{update_version}</pre>

<p>Below are some examples of valid version numbers:</p>

<pre>1.0.0
1.0.9
1.3.6
2.0.3</pre>

<p>The version numbers have the following significance:</p>

<ul>
	<li><strong>Major Version:</strong> this will only change when there has been a major architectural change to Nova and significant changes. It is possible that while major versions will include update scripts, some data may not be able to be retained through a major version update. We will do our best to avoid and limit these situations.</li>
	<li><strong>Minor Version:</strong> an increase to the minor version indicates new features or the enhancement of an existing feature. Minor versions will come with an update script and there should be little to no impact on existing data. We will do our best to avoid any situations where data cannot be retained.</li>
	<li><strong>Update Version:</strong> this is the most common change to the version number and indicates bug fixes or other changes that only impact functionality in very minor ways. Edit version updates will come with an update script but will never impact existing data in a way where that data is not retained during the update process.</li>
</ul>