<h1>Location Library</h1>

<p>Nova's Location library is the heart and soul of seamless substitution and helps developers to retrieve files from the proper locations.</p>

<p class="alert alert-danger"><strong>Note:</strong> This library is initialized automatically by the system so there is no need to do it manually.</p>

<h2>Location::ajax()</h2>

<p>Finds and returns the content of an Ajax view file.</p>

<h3>Options</h3>

<table class="table table-bordered">
	<tr>
		<th class="span2 blue">Parameter</th>
		<th class="span2 blue">Default/Options</th>
		<th class="span2 blue">Data Type</th>
		<th class="span6 blue">Description</th>
	</tr>
	<tr>
		<td>View</td>
		<td><span class="muted">&mdash;</span></td>
		<td>String</td>
		<td>The name of the Ajax view file</td>
	</tr>
	<tr>
		<td>Skin</td>
		<td><span class="muted">&mdash;</span></td>
		<td>String</td>
		<td>The name of the current skin</td>
	</tr>
	<tr>
		<td>Section</td>
		<td>
			<div class="muted">&mdash;</div>
			<em>main, admin, wiki</em>
		</td>
		<td>String</td>
		<td>The name of the current section</td>
	</tr>
	<tr>
		<td>Data</td>
		<td><span class="muted">&mdash;</span></td>
		<td>Array</td>
		<td>The data to be passed to the view</td>
	</tr>
</table>

<h3>Return</h3>

<p>This method returns a string with the full content of the Ajax view for the browser to render.</p>

<h3>Example</h3>

<pre class="prettyprint linenums">// set the data
$data['header'] = sprintf(
	lang('fbx_head'),
	ucwords(lang('actions_add')),
	ucwords(lang('labels_bio') .' '. lang('labels_field'))
);

// set the content
$this->_regions['content'] = Location::ajax('add_bio_field', $skin, 'admin', $data);</pre>

<hr>

<h2>Location::asset()</h2>

<p>Finds and returns the returns the path to an asset image.</p>

<h3>Options</h3>

<table class="table table-bordered">
	<tr>
		<th class="span2 blue">Parameter</th>
		<th class="span2 blue">Default/Options</th>
		<th class="span2 blue">Data Type</th>
		<th class="span6 blue">Description</th>
	</tr>
	<tr>
		<td>Location</td>
		<td><span class="muted">&mdash;</span></td>
		<td>String</td>
		<td>The folder in the <code>assets</code> directory to use</td>
	</tr>
	<tr>
		<td>Image</td>
		<td><span class="muted">&mdash;</span></td>
		<td>String</td>
		<td>The image to use</td>
	</tr>
</table>

<h3>Return</h3>

<p>This method returns a string with the full path to the image.</p>

<h3>Example</h3>

<pre class="prettyprint linenums">// set the image array for the award image
$award_img = array(
	'src' => Location::asset('images/awards', $row->award_image),
	'alt' => $row->award_name,
	'class' => 'image award-small'
);

// assign the image attributes to the data variable
$data['image'] = $award_img;</pre>

<hr>

<h2>Location::cb()</h2>

<p>Finds and returns the path to the right combadge image.</p>

<h3>Options</h3>

<table class="table table-bordered">
	<tr>
		<th class="span2 blue">Parameter</th>
		<th class="span2 blue">Default/Options</th>
		<th class="span2 blue">Data Type</th>
		<th class="span6 blue">Description</th>
	</tr>
	<tr>
		<td>Image</td>
		<td><span class="muted">&mdash;</span></td>
		<td>String</td>
		<td>The image to use</td>
	</tr>
	<tr>
		<td>Skin</td>
		<td><span class="muted">&mdash;</span></td>
		<td>String</td>
		<td>The current skin</td>
	</tr>
	<tr>
		<td>Section</td>
		<td>
			<div class="muted">&mdash;</div>
			<em>main, admin, wiki</em>
		</td>
		<td>String</td>
		<td>The current section</td>
	</tr>
</table>

<h3>Example</h3>

<pre class="prettyprint linenums">// build the combadge image array
$cb_img = array(
	'src' => Location::cb('combadge.png', $this->skin, 'main'),
	'alt' => ucwords(lang('actions_view').' '.lang('labels_bio')),
	'class' => 'image'
);

// send the image attributes to 
$data['combadge'] = $cb_img;</pre>

<hr>

<h2>Location::email()</h2>

<p>Finds and returns the path to the right email view.</p>

<h3>Options</h3>

<table class="table table-bordered">
	<tr>
		<th class="span2 blue">Parameter</th>
		<th class="span2 blue">Default/Options</th>
		<th class="span2 blue">Data Type</th>
		<th class="span6 blue">Description</th>
	</tr>
	<tr>
		<td>View</td>
		<td><span class="muted">&mdash;</span></td>
		<td>String</td>
		<td>The email view to use</td>
	</tr>
	<tr>
		<td>Type</td>
		<td>
			<div>html</div>
			<em>html, text</em>
		</td>
		<td>String</td>
		<td>The type of email view to use</td>
	</tr>
</table>

<h3>Example</h3>

<pre class="prettyprint linenums">// set the email data
$email_data = array(
	'email_subject' => $data['subject'],
	'email_from' => ucfirst(lang('time_from')) .': '. $data['name'] .' - '. $data['email'],
	'email_content' => nl2br($data['message'])
);

// where should the email be coming from
$loc = Location::email('main_contact', $this->email->mailtype);

// parse the message
$message = $this->parser->parse_string($loc, $email_data, true);</pre>

<hr>

<h2>Location::img()</h2>

<p>Finds and returns the path to the right version of an image.</p>

<h3>Options</h3>

<table class="table table-bordered">
	<tr>
		<th class="span2 blue">Parameter</th>
		<th class="span2 blue">Default/Options</th>
		<th class="span2 blue">Data Type</th>
		<th class="span6 blue">Description</th>
	</tr>
	<tr>
		<td>Image</td>
		<td><span class="muted">&mdash;</span></td>
		<td>String</td>
		<td>The image to use</td>
	</tr>
	<tr>
		<td>Skin</td>
		<td><span class="muted">&mdash;</span></td>
		<td>String</td>
		<td>The current skin</td>
	</tr>
	<tr>
		<td>Section</td>
		<td>
			<div class="muted">&mdash;</div>
			<em>main, admin, wiki</em>
		</td>
		<td>String</td>
		<td>The current section</td>
	</tr>
	<tr>
		<td>Module</td>
		<td>core</td>
		<td>String</td>
		<td>The module to search in</td>
	</tr>
</table>

<h3>Example</h3>

<pre class="prettyprint linenums">// set the image
$data['character']['noavatar'] = array(
	'src' => Location::img('no-avatar.png', $this->skin, 'main'),
	'alt' => '',
	'class' => 'image',
	'width' => 200
);</pre>

<hr>

<h2>Location::js()</h2>

<p>Finds and generates a javascript view file using seamless substitution.</p>

<h3>Options</h3>

<table class="table table-bordered">
	<tr>
		<th class="span2 blue">Parameter</th>
		<th class="span2 blue">Default/Options</th>
		<th class="span2 blue">Data Type</th>
		<th class="span6 blue">Description</th>
	</tr>
	<tr>
		<td>View</td>
		<td><span class="muted">&mdash;</span></td>
		<td>String</td>
		<td>The Javascript view to use</td>
	</tr>
	<tr>
		<td>Skin</td>
		<td><span class="muted">&mdash;</span></td>
		<td>String</td>
		<td>The current skin</td>
	</tr>
	<tr>
		<td>Section</td>
		<td>
			<div class="muted">&mdash;</div>
			<em>main, admin, wiki</em>
		</td>
		<td>String</td>
		<td>The current section</td>
	</tr>
	<tr>
		<td>Data</td>
		<td><span class="muted">&mdash;</span></td>
		<td>Array</td>
		<td>The data to use in the view</td>
	</tr>
</table>

<h3>Example</h3>

<pre class="prettyprint linenums">// set the javascript data
$js_data = array('display' => $this->uri->rsegment(3));

// set the javascript region
$this->_regions['javascript'] = Location::js('personnel_index_js', $this->skin, 'main', $js_data);</pre>

<hr>

<h2>Location::rank()</h2>

<p>Returns the path to a rank image.</p>

<h3>Options</h3>

<table class="table table-bordered">
	<tr>
		<th class="span2 blue">Parameter</th>
		<th class="span2 blue">Default/Options</th>
		<th class="span2 blue">Data Type</th>
		<th class="span6 blue">Description</th>
	</tr>
	<tr>
		<td>Rank Set</td>
		<td><span class="muted">&mdash;</span></td>
		<td>String</td>
		<td>The rank set to use</td>
	</tr>
	<tr>
		<td>Rank Image</td>
		<td><span class="muted">&mdash;</span></td>
		<td>String</td>
		<td>The rank image to use</td>
	</tr>
	<tr>
		<td>Extension</td>
		<td><span class="muted">&mdash;</span></td>
		<td>String</td>
		<td>The extension to use for the rank image</td>
	</tr>
</table>

<h3>Example</h3>

<pre class="prettyprint linenums">// get the rank catalogue item for the current rank set
$rank = $this->ranks->get_rankcat($this->rank);

// get the rank data we need
$ranksdata = $this->ranks->get_rank(1, array('rank_name', 'rank_image'));
									
// build the rank image array
$rank_img = array(
	'src' => Location::rank(
		$this->rank,
		$ranksdata['rank_image'],
		$rank->rankcat_extension),
	'alt' => $ranksdata['rank_name'],
	'class' => 'image'
);

// assign the rank image to the data variable
$data['rank_img'] = $rank_img;</pre>

<hr>

<h2>Location::view()</h2>

<p>Finds and generates a view file using seamless substitution.</p>

<h3>Options</h3>

<table class="table table-bordered">
	<tr>
		<th class="span2 blue">Parameter</th>
		<th class="span2 blue">Default/Options</th>
		<th class="span2 blue">Data Type</th>
		<th class="span6 blue">Description</th>
	</tr>
	<tr>
		<td>View</td>
		<td><span class="muted">&mdash;</span></td>
		<td>String</td>
		<td>The Javascript view to use</td>
	</tr>
	<tr>
		<td>Skin</td>
		<td><span class="muted">&mdash;</span></td>
		<td>String</td>
		<td>The current skin</td>
	</tr>
	<tr>
		<td>Section</td>
		<td>
			<div class="muted">&mdash;</div>
			<em>main, admin, wiki</em>
		</td>
		<td>String</td>
		<td>The current section</td>
	</tr>
	<tr>
		<td>Data</td>
		<td><span class="muted">&mdash;</span></td>
		<td>Array</td>
		<td>The data to use in the view</td>
	</tr>
</table>

<h3>Example</h3>

<pre class="prettyprint linenums">// set the page header
$data['header'] = ucwords(lang('labels_crew') .' '. lang('labels_manifest'));

// send the content to the region
$this->_regions['content'] = Location::view('personnel_index', $this->skin, 'main', $data);</pre>