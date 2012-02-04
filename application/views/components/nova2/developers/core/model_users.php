<h1>Users Model</h1>

<p>The Users model provides access to the users database tables for storing, editing deleting and retrieving user information.</p>

<h2>Loading the Model</h2>

<p>This model is loaded using the following code:</p>

<pre>$this->load->model('users_model', 'user');</pre>

<p class="alert alert-info"><strong>Note:</strong> We load this model in the constructor of every controller, so it is unnecessary to load this again unless you're creating a new controller.</p>

<h2>Using the Model</h2>

<p>You can use the methods in the model and listed on the page in the following manner:</p>

<pre>$this->user->method_name();</pre>

<ul>
	<li><a href="#get">Get Data</a></li>
	<li><a href="#update">Updating Data</a></li>
	<li><a href="#create">Adding Data</a></li>
	<li><a href="#delete">Deleting Data</a></li>
	<li><a href="#count">Counting Data</a></li>
</ul>

<?php foreach ($model as $value): ?>
	<?php foreach ($value as $k => $v): ?>
		<a name="<?php echo $k;?>"></a><h1><?php echo ucfirst($k);?> Data</h1>
		
		<?php foreach ($v as $m): ?>
			<h2><?php echo $m['method'];?></h2>
			
			<?php if ($m['status'] == 'removed'): ?>
				<p class="bold red">This method has been removed from the system and can no longer be used.</p>
			<?php elseif ($m['status'] == 'deprecated'): ?>
				<p class="bold red">This method has been deprecated and is scheduled for removal from the system.</p>
			<?php endif;?>
			
			<p><?php echo $m['description'];?></p>
			
			<?php if (isset($m['parameters'])): ?>
				<h3>Parameters</h3>
				
				<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
					<thead>
						<tr>
							<th class="blue">Parameter</th>
							<th class="blue">Data Type</th>
							<th class="blue">Default Value</th>
							<th class="blue">Options</th>
							<th class="blue">Description</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($m['parameters'] as $p): ?>
						<tr>
							<td class="td col1"><strong><?php echo $p['name'];?></strong></td>
							<td class="td col2"><em><?php echo $p['type'];?></em></td>
							<td class="td col2"><em><?php echo $p['default'];?></em></td>
							<td class="td col3"><em><?php echo $p['options'];?></em></td>
							<td class="td col4"><?php echo $p['notes'];?></td>
						</tr>
					<?php endforeach;?>
					</tbody>
				</table>
			<?php endif;?>
			
			<h3>Return</h3>
			<p><?php echo $m['return'];?></p>
		<?php endforeach;?>
	<?php endforeach;?>
<?php endforeach;?>