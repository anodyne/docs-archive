<h1>Nova 3 Requirements</h1>

<p>We've worked hard to make sure Nova's requirements are as wide open as possible so more people can use it, but there are still a few requirements that you should verify before you try to install Nova 3. In the event the server you're going to be installing Nova on doesn't support some or all of these things, you should contact your hosting provider and ask them about the possibility of upgrading these items.</p>

<h2>PHP</h2>

<p>You'll need a server running PHP, a dynamic web development language that Nova is built in. Nova 3 requires that your server has at least <nobr><strong>PHP 5.3.0</strong></nobr> installed. If you have less than 5.3 installed, you won't be able to install Nova 3 since much of Nova 3 leverages functionality built in to PHP 5.3 and not available in previous versions.</p>

<h2>MySQL</h2>

<p>You'll need a server with a MySQL database available and PHP's MySQLi class enabled (which it should be in PHP 5.3). It's possible for Nova to connect to MySQL through the antiquated <em>mysql</em> functions, but the default behavior is to use MySQLi class.</p>

<h2>Browser</h2>

<div class="row">
	<div class="span6">
		<table class="table table-striped">
			<thead>
				<tr>
					<th class="span1"></th>
					<th class="span2"><span class="icn icn-32 tip" title="Windows" data-icon="n"></span></th>
					<th class="span2"><span class="icn icn-32 tip" title="OS X" data-icon="a"></span></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><span class="icn icn-32 icn-red tip" title="Google Chrome" data-icon="r"></span></td>
					<td>15 and up</td>
					<td>15 and up</td>
				</tr>
				<tr>
					<td><span class="icn icn-32 icn-orange tip" title="Mozilla Firefox" data-icon="f"></span></td>
					<td>10 and up</td>
					<td>10 and up</td>
				</tr>
				<tr>
					<td><span class="icn icn-32 icn-blue tip" title="Internet Explorer" data-icon="e"></span></td>
					<td><span class="tip" title="IE 9 requires Windows Vista or higher">9 and up</span></td>
					<td></td>
				</tr>
				<tr>
					<td><span class="icn icn-32 icn-blue tip" title="Safari" data-icon="s"></span></td>
					<td>5 and up</td>
					<td>5 and up</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>