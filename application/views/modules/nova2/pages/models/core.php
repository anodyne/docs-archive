<h1><?php echo $header;?></h1>

<p>One of the biggest changes to Nova 2 has been the complete refactoring of the model system that provide access to the database that drives Nova. In Nova 1, we relied heavily on individual models doing the work, but the system was confusing and highly inefficient as the bulk of model methods duplicated functionality across several files but often times used a different API. To combat these issues, we've created the Core model to provide a consistent API to access the database for 95% of everything the system needs. This makes the system highly flexible and the consistent API means that once you know how to use it in one place, you can use it anywhere you want.</p>

<h3>Limitations</h3>

<p>Since the Core model relies exclusively on Kohana's query builder feature, you can build your parameters array using many of the query builder methods. Out of all the query builder methods there are several that aren't available for various reasons. Builder methods not available through the Core model are:</p>

<ul>
	<li>get</li>
	<li>getwhere</li>
	<li>update</li>
	<li>delete</li>
	<li>insert</li>
	<li>set</li>
	<li>merge</li>
	<li>count_records</li>
	<li>select</li>
	<li>from</li>
	<li>regex</li>
	<li>orregex</li>
	<li>notregex</li>
	<li>ornotregex</li>
</ul>

<p>Building parameter arrays is discussed at great length in the model tutorials.</p>

<h2>Loading the Model</h2>

<p>This model is loaded by the base controller for every page, so you don't need to load this model. All models are now prefaced with a lowercase m, so this model is available through the variable <var>$this->mCore</var>.</p>

<h2>Using the Model</h2>

<p>You can use the methods in the model and listed on the page in the following manner:</p>

<pre>$this->mCore->method_name();</pre>

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