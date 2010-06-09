<h1><?php echo $header;?></h1>

<h2>Server Requirements</h2>

<p>Nova comes with a server verification tool you can run before installing to ensure your server can run Nova without any problems. For those without access to the server or who want to verify the requirements ahead of time, the following items are the minimum requirements and Anodyne&rsquo;s recommendations.</p>

<h3>Minimum</h3>

<p>In order to run Nova, your server must meet, at the minimum, the following criteria:</p>

<ul>
	<li>PHP version 5.2.4 or newer</li>
	<li>MySQL version 4.1+</li>
	<li>Apache or IIS</li>
	<li>Server memory limit of at least 8M</li>
	<li>15MB of free space</li>
</ul>

<h3>Recommendations</h3>

<p>After extensive testing and development, Anodyne recommends the following server setup if it&rsquo;s available:</p>

<ul>
	<li>PHP version 5.3 or newer</li>
	<li>MySQL version 5 or newer</li>
	<li>Server memory limit greater than 32M</li>
	<li>Apache 2 or higher</li>
	<li>Server running some form of *nix</li>
	<li>Register Globals turned <strong>OFF</strong></li>
	<li>At least 30MB of free space</li>
</ul>

<h2>Browser Requirements</h2>

<p>In order to run at peak performance and with all features enabled, Nova requires that Javascript be turned <dfn>ON</dfn>. In addition, Anodyne recommends running a standards compliant browser like <?php echo anchor('nova/overview/firefox', 'Firefox 3.6');?> for using the system. Nova will work in Internet Explorer 8 or higher, Firefox 3.5 or higher, Safari 3 or higher and Google Chrome.</p>