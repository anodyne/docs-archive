<h1>Location Helper</h1>

<p>The Location Helper file contains functions that assist in dynamically determining the location of an asset.</p>

<p class="alert alert-danger"><strong>Note:</strong> This library is initialized automatically by Nova so there is no need to do it manually.</p>

<h2>view_location</h2>

<p>Seamless substitution works by checking a series of locations for a view file and using the first one it finds. The order in which Nova will check view files is: the current skin, _base_override, _base. Once the helper has the path to the view file, the variable it&rsquo;s assigned to can be used in rendering the template.</p>

<h3>Parameters</h3>

<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>view</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The view file you want to load</td>
	</tr>
	<tr>
		<td class="td col1"><strong>skin</strong></td>
		<td class="td col2">default</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The skin to check first</td>
	</tr>
	<tr>
		<td class="td col1"><strong>section</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3">main, admin, wiki, login</td>
		<td class="td col4">The section to check</td>
	</tr>
	<tr>
		<td class="td col1"><strong>application path</strong></td>
		<td class="td col2">/path/to/application/folder</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The path to the application folder (uses the <var>APPPATH</var> constant)</td>
	</tr>
</table>

<h3>Example</h3>

<pre>$view_loc = view_location('main_index', $this->skin, 'main');

// would produce:
[skin]/main/pages/main_index

$this->template->write_view('content', $view_loc, $data);</pre>

<h2>img_location</h2>

<p>Seamless substitution works by checking a series of locations for an image file and using the first one it finds. The order in which Nova will check image files is: the current skin, _base_override, _base. Once the helper has the path to the image file, the variable it&rsquo;s assigned to can be passed to the view for rendering the image.</p>

<h3>Parameters</h3>

<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>image</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The image file you want to load</td>
	</tr>
	<tr>
		<td class="td col1"><strong>skin</strong></td>
		<td class="td col2">default</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The skin to check first</td>
	</tr>
	<tr>
		<td class="td col1"><strong>section</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3">main, admin, wiki, login</td>
		<td class="td col4">The section to check</td>
	</tr>
	<tr>
		<td class="td col1"><strong>application path</strong></td>
		<td class="td col2">/path/to/application/folder</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The path to the application folder (uses the <var>APPPATH</var> constant)</td>
	</tr>
	<tr>
		<td class="td col1"><strong>application folder</strong></td>
		<td class="td col2">application</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The application folder (uses the <var>APPFOLDER</var> constant)</td>
	</tr>
</table>

<h3>Example</h3>

<pre>$data['image'] = array(
	'src' => img_location('monkey.png', $this->skin, 'main'),
	'alt' => 'Monkey!',
	'class' => 'image'
);

// would produce:
application/views/[skin]/main/images/monkey.png</pre>

<p>In your view, you can then do this:</p>

<pre>&lt;?php echo img($image);?></pre>

<h2>cb_location</h2>

<p>Seamless substitution works by checking a series of locations for a comm badge image and using the first one it finds. The order in which Nova will check image files is: the current skin, application/assets/common/[genre]/images, _base. Once the helper has the path to the comm badge image file, the variable it&rsquo;s assigned to can be passed to the view for rendering the image.</p>

<h3>Parameters</h3>

<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>image</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The image file you want to load</td>
	</tr>
	<tr>
		<td class="td col1"><strong>skin</strong></td>
		<td class="td col2">default</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The skin to check first</td>
	</tr>
	<tr>
		<td class="td col1"><strong>section</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3">main, admin, wiki, login</td>
		<td class="td col4">The section to check</td>
	</tr>
	<tr>
		<td class="td col1"><strong>application path</strong></td>
		<td class="td col2">/path/to/application/folder</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The path to the application folder (uses the <var>APPPATH</var> constant)</td>
	</tr>
	<tr>
		<td class="td col1"><strong>application folder</strong></td>
		<td class="td col2">application</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The application folder (uses the <var>APPFOLDER</var> constant)</td>
	</tr>
</table>

<h3>Example</h3>

<pre>$data['image'] = array(
	'src' => cb_location('combadge.png', $this->skin, 'main'),
	'alt' => '',
	'class' => 'image'
);

// would produce (by default):
application/views/_base/main/images/combadge.png</pre>

<h2>js_location</h2>

<p>Seamless substitution works by checking a series of locations for a Javascript view file and using the first one it finds. The order in which Nova will check Javascript view files is: the current skin, application/views/_base_override, _base. Once the helper has the path to the Javascript view file, the variable it&rsquo;s assigned to can be passed to the Template library for building the Javascript the page uses.</p>

<h3>Parameters</h3>

<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>file</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The Javascript view file you want to load</td>
	</tr>
	<tr>
		<td class="td col1"><strong>skin</strong></td>
		<td class="td col2">default</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The skin to check first</td>
	</tr>
	<tr>
		<td class="td col1"><strong>section</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3">main, admin, wiki, login</td>
		<td class="td col4">The section to check</td>
	</tr>
	<tr>
		<td class="td col1"><strong>application path</strong></td>
		<td class="td col2">/path/to/application/folder</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The path to the application folder (uses the <var>APPPATH</var> constant)</td>
	</tr>
	<tr>
		<td class="td col1"><strong>application folder</strong></td>
		<td class="td col2">application</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The application folder (uses the <var>APPFOLDER</var> constant)</td>
	</tr>
</table>

<h3>Example</h3>

<pre>$js_loc = js_location('main_index', $this->skin, 'main');

// would produce (by default):
application/views/_base/main/js/main_index

// this can then be used like:
$this->template->write_view('javascript', $js_loc);</pre>

<h2>asset_location</h2>

<p>The assets directory contains a wide variety of images that Nova uses, such as tour images, character images, award images and mission images. In order to efficiently pull these images from the right location, we can use the asset location helper.</p>

<h3>Parameters</h3>

<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>location</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The location you want the helper to look</td>
	</tr>
	<tr>
		<td class="td col1"><strong>image</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The image you want loaded</td>
	</tr>
	<tr>
		<td class="td col1"><strong>application folder</strong></td>
		<td class="td col2">application</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The application folder (uses the <var>APPFOLDER</var> constant)</td>
	</tr>
</table>

<h3>Example</h3>

<pre>$data['image'] = array(
	'src' => asset_location('images/missions', $item->mission_image),
	'alt' => $item->mission_name,
	'class' => 'image'
);

// would produce (by default):
application/assets/images/missions/mission_1.jpg</pre>

<h2>rank_location</h2>

<p>The rank location helper pulls rank images from the proper place just by passing a few variables to the function.</p>

<h3>Parameters</h3>

<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>rank set</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The rank set being used</td>
	</tr>
	<tr>
		<td class="td col1"><strong>image</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The rank image you want loaded</td>
	</tr>
	<tr>
		<td class="td col1"><strong>ext</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The extention of the rank image</td>
	</tr>
	<tr>
		<td class="td col1"><strong>genre</strong></td>
		<td class="td col2">The system genre</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The genre as stored in the config file (uses the <var>GENRE</var> constant)</td>
	</tr>
	<tr>
		<td class="td col1"><strong>application folder</strong></td>
		<td class="td col2">application</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The application folder (uses the <var>APPFOLDER</var> constant)</td>
	</tr>
</table>

<h3>Example</h3>

<pre>$data['image'] = array(
	'src' => rank_location($this->rank, $rank->rank_image, '.png'),
	'alt' => $rank->rank_name,
	'class' => 'image'
);

// would produce (by default):
application/assets/common/[GENRE]/ranks/default/a4.png</pre>

<h2>award_location</h2>

<p>The award location helper pulls award images from the proper place just by passing a few variables to the function.</p>

<h3>Parameters</h3>

<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>image</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The award image you want loaded</td>
	</tr>
	<tr>
		<td class="td col1"><strong>large image</strong></td>
		<td class="td col2">FALSE</td>
		<td class="td col3">TRUE/FALSE</td>
		<td class="td col4">Whether you want to produce a large image or not</td>
	</tr>
	<tr>
		<td class="td col1"><strong>large image directory</strong></td>
		<td class="td col2">large</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The directory where the large images can be found</td>
	</tr>
	<tr>
		<td class="td col1"><strong>application path</strong></td>
		<td class="td col2">/path/to/application/folder</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The path to the application folder (uses the <var>APPPATH</var> constant)</td>
	</tr>
	<tr>
		<td class="td col1"><strong>application folder</strong></td>
		<td class="td col2">application</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The application folder (uses the <var>APPFOLDER</var> constant)</td>
	</tr>
</table>

<h3>Examples</h3>

<pre>$data['image'] = array(
	'src' => award_location($award->award_image, TRUE),
	'alt' => $award->award_name,
	'class' => 'image'
);

// would produce (by default):
application/assets/images/awards/large/award.jpg

$data['image'] = array(
	'src' => award_location($award->award_image),
	'alt' => $award->award_name,
	'class' => 'image'
);

// would produce (by default):
application/assets/images/awards/award.jpg

$data['image'] = array(
	'src' => award_location($award->award_image, TRUE, 'mega'),
	'alt' => $award->award_name,
	'class' => 'image'
);

// would produce (by default):
application/assets/images/awards/mega/award.jpg</pre>

<h2>email_location</h2>

<p>The email location helper pulls the proper email view file for use by the private email classes.</p>

<h3>Parameters</h3>

<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>view</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The email view file you want loaded</td>
	</tr>
	<tr>
		<td class="td col1"><strong>type</strong></td>
		<td class="td col2">html</td>
		<td class="td col3">html/text</td>
		<td class="td col4">Whether you want the email to be in HTML format or text</td>
	</tr>
	<tr>
		<td class="td col1"><strong>application path</strong></td>
		<td class="td col2">/path/to/application/folder</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The path to the application folder (uses the <var>APPPATH</var> constant)</td>
	</tr>
</table>

<h3>Example</h3>

<pre>$em_loc = email_location('main_join', $this->email->mailtype);

// would produce (by default):
application/views/_base/emails/html/main_join</pre>

<p class="alert alert-info">The mailtype is pulled from the <strong>application/config/email.php</strong> file. Changing that variable to <var>text</var> would change where the email location helper looks by default.</p>

<h2>ajax_location</h2>

<p>Seamless substitution works by checking a series of locations for a view file and using the first one it finds. The order in which Nova will check view files is: the current skin, _base_override, _base. Once the helper has the path to the view file, the variable it&rsquo;s assigned to can be used in rendering the template.</p>

<h3>Parameters</h3>

<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>view</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The view file you want to load</td>
	</tr>
	<tr>
		<td class="td col1"><strong>skin</strong></td>
		<td class="td col2">default</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The skin to check first</td>
	</tr>
	<tr>
		<td class="td col1"><strong>section</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3">main, admin, wiki, login</td>
		<td class="td col4">The section to check</td>
	</tr>
	<tr>
		<td class="td col1"><strong>application path</strong></td>
		<td class="td col2">/path/to/application/folder</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The path to the application folder (uses the <var>APPPATH</var> constant)</td>
	</tr>
</table>

<h3>Example</h3>

<pre>$ajax_loc = ajax_location('del_comment', $this->skin, 'admin');

// would produce:
[skin]/admin/ajax/del_comment</pre>