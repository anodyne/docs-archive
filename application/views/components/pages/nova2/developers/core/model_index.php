<h1>Models</h1>

<p>Models in Nova are PHP classes designed to work with information in your database. We have created a wide variety of models for inserting, updating, deleting and retrieving data from the Nova database. Creating these items separately allows us to re-use much of the code for retrieving information from the database from all over the system.</p>

<p class="important">Complete documentation about models in CodeIgniter can be found in the <a href="http://codeigniter.com/user_guide/general/models.html" target="_blank">CodeIgniter User Guide</a>.</p>

<h2>Loading a Model</h2>

<p>A model is loaded using the following code:</p>

<pre>$this->load->model(<var>'model_name'</var>, <dfn>'name'</dfn>);</pre>

<h2>Using a Model</h2>

<p>Once you've loaded a model in your controller, you can use the methods in the model in the following manner:</p>

<pre>$this-><dfn>name</dfn>->method_name();</pre>

<h2>Models in Nova</h2>

<ul>
	<li><?php echo Html::anchor('nova2/core/models/access', 'Access');?></li>
	<li><?php echo Html::anchor('nova2/core/models/applications', 'Applications');?></li>
	<li><?php echo Html::anchor('nova2/core/models/awards', 'Awards');?></li>
	<li><?php echo Html::anchor('nova2/core/models/characters', 'Characters');?></li>
	<li><?php echo Html::anchor('nova2/core/models/depts', 'Departments');?></li>
	<li><?php echo Html::anchor('nova2/core/models/docking', 'Docking');?></li>
	<li><?php echo Html::anchor('nova2/core/models/menu', 'Menu');?></li>
	<li><?php echo Html::anchor('nova2/core/models/messages', 'Messages');?></li>
	<li><?php echo Html::anchor('nova2/core/models/missions', 'Missions');?></li>
	<li><?php echo Html::anchor('nova2/core/models/news', 'News');?></li>
	<li><?php echo Html::anchor('nova2/core/models/personallogs', 'Personal Logs');?></li>
	<li><?php echo Html::anchor('nova2/core/models/positions', 'Positions');?></li>
	<li><?php echo Html::anchor('nova2/core/models/posts', 'Posts');?></li>
	<li><?php echo Html::anchor('nova2/core/models/privmsgs', 'Private Messages');?></li>
	<li><?php echo Html::anchor('nova2/core/models/ranks', 'Ranks');?></li>
	<li><?php echo Html::anchor('nova2/core/models/settings', 'Settings');?></li>
	<li><?php echo Html::anchor('nova2/core/models/specs', 'Specs');?></li>
	<li><?php echo Html::anchor('nova2/core/models/system', 'System');?></li>
	<li><?php echo Html::anchor('nova2/core/models/tour', 'Tour');?></li>
	<li><?php echo Html::anchor('nova2/core/models/users', 'Users');?></li>
	<li><?php echo Html::anchor('nova2/core/models/wiki', 'Wiki');?></li>
</ul>

<h2>Models Object Names</h2>

<p>CodeIgniter allows models to be assigned object names when they're loaded. For simplicity and code brevity, we assign almost all models an object name (exceptions are noted). Models are loaded with the following code:</p>

<pre>$this->load->model(<var>model_name</var>, <kbd>name</kbd>);</pre>

<p>The following table shows the model object name assigned throughout the system:</p>

<table cellpadding="0" cellspacing="1" border="0" class="zebra-striped">
	<thead>
		<tr>
			<th class="blue">Model</th>
			<th class="blue">Model Object Name</th>
			<th class="blue">Use</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">access_model</td>
			<td class="td col2">access</td>
			<td class="td col4">$this->access->method_name()</td>
		</tr>
		<tr>
			<td class="td col1">applications_model</td>
			<td class="td col2">apps</td>
			<td class="td col4">$this->apps->method_name()</td>
		</tr>
		<tr>
			<td class="td col1">archive_model</td>
			<td class="td col2">arc</td>
			<td class="td col4">$this->arc->method_name()</td>
		</tr>
		<tr>
			<td class="td col1">awards_model</td>
			<td class="td col2">awards</td>
			<td class="td col4">$this->awards->method_name()</td>
		</tr>
		<tr>
			<td class="td col1">characters_model</td>
			<td class="td col2">char</td>
			<td class="td col4">$this->char->method_name()</td>
		</tr>
		<tr>
			<td class="td col1">depts_model</td>
			<td class="td col2">dept</td>
			<td class="td col4">$this->dept->method_name()</td>
		</tr>
		<tr>
			<td class="td col1">docking_model</td>
			<td class="td col2">docking</td>
			<td class="td col4">$this->docking->method_name()</td>
		</tr>
		<tr>
			<td class="td col1">menu_model</td>
			<td class="td col2"><em>None</em>*</td>
			<td class="td col4">$this->menu_model->method_name()</td>
		</tr>
		<tr>
			<td class="td col1">messages_model</td>
			<td class="td col2">msgs</td>
			<td class="td col4">$this->msgs->method_name()</td>
		</tr>
		<tr>
			<td class="td col1">missions_model</td>
			<td class="td col2">mis</td>
			<td class="td col4">$this->mis->method_name()</td>
		</tr>
		<tr>
			<td class="td col1">news_model</td>
			<td class="td col2">news</td>
			<td class="td col4">$this->news->method_name()</td>
		</tr>
		<tr>
			<td class="td col1">personallogs_model</td>
			<td class="td col2">logs</td>
			<td class="td col4">$this->logs->method_name()</td>
		</tr>
		<tr>
			<td class="td col1">positions_model</td>
			<td class="td col2">pos</td>
			<td class="td col4">$this->pos->method_name()</td>
		</tr>
		<tr>
			<td class="td col1">posts_model</td>
			<td class="td col2">posts</td>
			<td class="td col4">$this->posts->method_name()</td>
		</tr>
		<tr>
			<td class="td col1">privmsgs_model</td>
			<td class="td col2">pm</td>
			<td class="td col4">$this->pm->method_name()</td>
		</tr>
		<tr>
			<td class="td col1">ranks_model</td>
			<td class="td col2">ranks</td>
			<td class="td col4">$this->ranks->method_name()</td>
		</tr>
		<tr>
			<td class="td col1">rss_model</td>
			<td class="td col2">rss</td>
			<td class="td col4">$this->rss->method_name()</td>
		</tr>
		<tr>
			<td class="td col1">settings_model</td>
			<td class="td col2">settings</td>
			<td class="td col4">$this->settings->method_name()</td>
		</tr>
		<tr>
			<td class="td col1">specs_model</td>
			<td class="td col2">specs</td>
			<td class="td col4">$this->specs->method_name()</td>
		</tr>
		<tr>
			<td class="td col1">system_model</td>
			<td class="td col2">sys</td>
			<td class="td col4">$this->sys->method_name()</td>
		</tr>
		<tr>
			<td class="td col1">tour_model</td>
			<td class="td col2">tour</td>
			<td class="td col4">$this->tour->method_name()</td>
		</tr>
		<tr>
			<td class="td col1">users_model</td>
			<td class="td col2">user</td>
			<td class="td col4">$this->user->method_name()</td>
		</tr>
	</tbody>
</table>

<p><em>* Model object name would conflict with an existing library</em></p>

<p><em>Text about models from the <a href="http://codeigniter.com/user_guide/general/models.html" target="_blank">CodeIgniter User Guide</a>.</em></p>