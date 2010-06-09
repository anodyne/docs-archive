<h1><?php echo $header;?></h1>

<p>The Character model includes a variety of custom methods that are available to use for pulling common information quickly. Using these methods is as simple as adding them to the chain of methods, like this:</p>

<pre>Jelly::select('character')->active()->execute();
// this would pull all active characters from the database</pre>

<p>The advantage of this type of system means that if the definitions of an active character change, it can be changed in a single place instead of having to search through the entire codebase to find and replace code.</p>

<h1>The Methods</h1>

<?php foreach ($model as $value): ?>
	<?php foreach ($value as $k => $v): ?>
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