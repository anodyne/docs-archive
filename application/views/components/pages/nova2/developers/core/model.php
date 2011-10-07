<h1><?php echo $header;?> Model</h1>

<?php foreach ($model as $value): ?>
	<?php foreach ($value as $k => $v): ?>
		<h1><?php echo ucfirst($k);?> Data</h1>
		
		<?php foreach ($v as $m): ?>
			<h2><?php echo $m['method'];?></h2>
			
			<?php if ($m['status'] == 'removed'): ?>
				<p><span class="label warning">WARNING</span> This method has been removed from the system and can no longer be used.</p>
			<?php elseif ($m['status'] == 'deprecated'): ?>
				<p><span class="label warning">WARNING</span> This method has been deprecated and is scheduled for removal from the system.</p>
			<?php endif;?>
			
			<p><?php echo $m['description'];?></p>
			
			<?php if (isset($m['parameters'])): ?>
				<h3>Parameters</h3>
				
				<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
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