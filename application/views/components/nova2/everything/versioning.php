<h1>Versioning in Nova</h1>

<p>For transparency and insight into our release cycle, and for striving to maintain backwards compatibility, Nova will be maintained under the Semantic Versioning guidelines as much as possible. Releases will be numbered with the follow format:</p>

<pre>{major}.{minor}.{patch}</pre>

<p>Below are some examples of valid version numbers:</p>

<pre>1.0.0
1.0.9
1.3.6
2.0.3</pre>

<p>These version numbers are constructed with the following guidelines:</p>

<ul>
	<li><strong>Major Version:</strong> this will only change when there has been a major architectural change to Nova and significant changes that could break backwards compatibility. It is possible that while major versions will include update scripts, some data may not be able to be retained through a major version update. We will do our best to avoid and limit these situations.</li>
	<li><strong>Minor Version:</strong> an increase to the minor version indicates new features or the enhancement of an existing feature. Minor versions will come with an update script and there should be little to no impact on existing data.</li>
	<li><strong>Patch Version:</strong> this is the most common change to the version number and indicates bug fixes or other changes that only impact functionality in very minor ways. Edit version updates will come with an update script but will never impact existing data in a way where that data is not retained during the update process.</li>
</ul>

<p>For more information on SemVer, please visit <a href="http://semver.org/" target="_blank">http://semver.org/</a>.</p>