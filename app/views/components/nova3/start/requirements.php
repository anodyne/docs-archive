<h1>Nova 3 Requirements</h1>

<p>We've worked hard to make sure Nova's requirements are as wide open as possible so more people can use it, but there are still a few requirements that you should verify before you try to install Nova 3. In the event the server you're going to be installing Nova on doesn't support some or all of these things, you should contact your hosting provider and ask them about the possibility of upgrading these items.</p>

<h2>PHP</h2>

<p>You'll need a server running PHP, a dynamic web development language that Nova is built in. Nova 3 requires that your server has at least <nobr><strong>PHP 5.3.0</strong></nobr> installed. If you have less than 5.3 installed, you won't be able to install Nova 3 since much of Nova 3 leverages functionality built in to PHP 5.3 and not available in previous versions.</p>

<h2>MySQL</h2>

<p>You'll need a server with a MySQL database available and PHP's MySQLi class enabled (which it should be in PHP 5.3). It's possible for Nova to connect to MySQL through the antiquated <em>mysql</em> functions, but the default behavior is to use MySQLi class.</p>

<h2>Browser</h2>

<table class="table table-striped">
	<thead>
		<tr>
			<th class="span3"></th>
			<th class="span3">Windows</th>
			<th class="span3">Mac</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><img src="<?php echo Uri::base(false);?>app/views/design/images/nova3/browser-chrome.png" alt=""> Google Chrome</td>
			<td>15 and up</td>
			<td>15 and up</td>
		</tr>
		<tr>
			<td><img src="<?php echo Uri::base(false);?>app/views/design/images/nova3/browser-firefox.png" alt=""> Firefox</td>
			<td>10 and up</td>
			<td>10 and up</td>
		</tr>
		<tr>
			<td><img src="<?php echo Uri::base(false);?>app/views/design/images/nova3/browser-ie.png" alt=""> Internet Explorer</td>
			<td>9 and up</td>
			<td></td>
		</tr>
		<tr>
			<td><img src="<?php echo Uri::base(false);?>app/views/design/images/nova3/browser-safari.png" alt=""> Safari</td>
			<td>5 and up</td>
			<td>5 and up</td>
		</tr>
	</tbody>
</table>

<p class="alert alert-info">IE 9 requires Windows Vista or Windows 7. We realize there may still be a significant number of people on Windows XP, but by the time we release Nova 3, we believe that Windows Vista, Windows 7, and Windows 8 will constitute a large majority of the Nova user base.</p>