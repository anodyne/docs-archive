<h1><?php echo $header;?></h1>

<p>The System model provides access to various system database table for storing, editing deleting and retrieving a myriad of information.</p>

<h2>Loading the Model</h2>

<p>This model is loaded using the following code:</p>

<pre>$this->load->model('system_model', 'sys');</pre>

<p class="important"><strong>Note:</strong> We load this model in the constructor of every controller, so it is unnecessary to load this again unless you're creating a new controller.</p>

<h2>Using the Model</h2>

<p>You can use the methods in the model and listed on the page in the following manner:</p>

<pre>$this->sys->method_name();</pre>

<ul>
	<li><a href="#get">Getting Data</a></li>
	<li><a href="#update">Updating Data</a></li>
	<li><a href="#create">Adding Data</a></li>
	<li><a href="#delete">Deleting Data</a></li>
	<li><a href="#count">Counting Data</a></li>
	<li><a href="#misc">Miscellaneous</a></li>
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
				<h4>Parameters</h4>
				<br />
				<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
					<thead>
						<tr>
							<th>Parameter</th>
							<th>Data Type</th>
							<th>Default Value</th>
							<th>Options</th>
							<th>Description</th>
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
			
			<h4>Return</h4>
			<p><?php echo $m['return'];?></p>
		<?php endforeach;?>
	<?php endforeach;?>
<?php endforeach;?>