<h1>Auth Library</h1>

<p>Nova's Auth library handles all authentication to the system and authorization once logged in.</p>

<p class="alert alert-danger"><strong>Note:</strong> This library is initialized automatically by the system so there is no need to do it manually.</p>

<h3>Circumventing the Lockout</h3>

<p>If you run in to a situation where a user needs to login but they are locked out of their account, you can open the database and navigate to the <var>login_attempts</var> table and delete all records with that user's email address.</p>

<h2>$this->auth->check_access()</h2>

<p>Permits you to check whether the user is allowed to access the page.</p>

<h3>Parameters</h3>

<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>URI</strong></td>
		<td class="td col2">The current page</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The URI of the page being checked</td>
	</tr>
	<tr>
		<td class="td col1"><strong>redirect</strong></td>
		<td class="td col2">TRUE</td>
		<td class="td col3">TRUE/FALSE</td>
		<td class="td col4">Determines if the user should be redirected if they don't have access</td>
	</tr>
	<tr>
		<td class="td col1"><strong>partial</strong></td>
		<td class="td col2">FALSE</td>
		<td class="td col3">TRUE/FALSE</td>
		<td class="td col4">Determines whether the library should try a partial match (the first segment) of the URI</td>
	</tr>
</table>

<h3>Return</h3>

<p>This method returns <dfn>TRUE</dfn> if the user has access and <dfn>FALSE</dfn> if they do not. Additionally, if the second parameter is set to TRUE (which it is by default), the library will redirect to the login page, if the second parameter is FALSE, the library will only return the value.</p>

<h3>Examples</h3>

<p>The following example will check the current page to see if the current user has permission to view the page. If they don't have permission, they will be redirected to the login page.</p>

<pre>$this->auth->check_access();</pre>

<p>In this example, we set a specific URI to check for. This can come in handy for pages that are related and don't really need their own access level. A good example in Nova are the various pages for private messaging. The only thing a user needs to access PMs is <var>messages/index</var> permissions instead of one for each page.</p>

<pre>$this->auth->check_access('messages/index');</pre>

<p>The third parameter is useful if you're just trying to find out if the current has access to a section. The Menu library uses this for printing menu categories. In the first line of code, Nova will check if the user has access to anything in that section. For instance, if the user is on the admin/index page and this code is used, it will check to see if the user has access to anything in the admin section. In the second line of code, Nova is checking if the user has access to anything in that specific section (site).</p>

<pre>$this->auth->check_access('', FALSE, TRUE);

$this->auth->check_access('site/settings', FALSE, TRUE);</pre>

<h2>$this->auth->get_access_level()</h2>

<p>Permits you to get the access level for the current user for a page.</p>

<h3>Parameters</h3>

<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>URI</strong></td>
		<td class="td col2">The current page</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The URI of the page being checked</td>
	</tr>
</table>

<h3>Return</h3>

<p>This method returns a string with the access level if the user has access and <dfn>FALSE</dfn> if they do not have access to the page.</p>

<h2>$this->auth->hash()</h2>

<p>Adds a salt and hashes any text passed to it.</p>

<h3>Parameters</h3>

<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>string</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A string of text to salt and hash</td>
	</tr>
</table>

<h3>Return</h3>

<p>This method returns a string that has been salted and hashed for use in the login method, verify method or any other function needed.</p>

<h2>$this->auth->is_gamemaster()</h2>

<p>Permits you to check whether the user has the game master tag.</p>

<h3>Parameters</h3>

<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>player</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numerical player ID</td>
	</tr>
</table>

<h3>Return</h3>

<p>This method returns <dfn>TRUE</dfn> if the user has the game master tag or <dfn>FALSE</dfn> if they do not.</p>

<h2>$this->auth->is_logged_in()</h2>

<p>Permits you to check whether the user is currently logged in. If they are't, Nova will attempt to do an autologin if they've selected to be remembered at the login screen.</p>

<h3>Parameters</h3>

<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>redirect</strong></td>
		<td class="td col2">FALSE</td>
		<td class="td col3">TRUE/FALSE</td>
		<td class="td col4">Determines if the user should be redirected if they don't have access</td>
	</tr>
</table>

<h3>Return</h3>

<p>This method returns <dfn>TRUE</dfn> if the user is logged in or if the system has successfully done an autologin or <dfn>FALSE</dfn> if they are not logged in. Additionally, if the second parameter is set to TRUE (FALSE by default), the library will redirect to the login page.</p>

<h2>$this->auth->is_sysadmin()</h2>

<p>Permits you to check whether the user has the system administrator tag.</p>

<h3>Parameters</h3>

<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>player</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numerical player ID</td>
	</tr>
</table>

<h3>Return</h3>

<p>This method returns <dfn>TRUE</dfn> if the user has the system administrator tag or <dfn>FALSE</dfn> if they do not.</p>

<h2>$this->auth->is_webmaster()</h2>

<p>Permits you to check whether the user has the webmaster tag.</p>

<h3>Parameters</h3>

<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>player</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numerical player ID</td>
	</tr>
</table>

<h3>Return</h3>

<p>This method returns <dfn>TRUE</dfn> if the user has the webmaster tag or <dfn>FALSE</dfn> if they do not.</p>

<h2>$this->auth->login()</h2>

<p>Permits you to log a user in based on an email and password sent to the method. Additionally, a third parameter allows a cookie to be set for autologin.</p>

<h3>Parameters</h3>

<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>email</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An email address to check the database for</td>
	</tr>
	<tr>
		<td class="td col1"><strong>password</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A hashed password string to check the database for</td>
	</tr>
	<tr>
		<td class="td col1"><strong>remember me</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3">Yes</td>
		<td class="td col4">Whether to set a cookie on the user's computer for autologin</td>
	</tr>
</table>

<h3>Return</h3>

<p>If the login is successful, the method will return a value of <dfn>0</dfn>, otherwise, the user will be redirected to the login page with the proper error message.</p>

<h2>$this->auth->logout()</h2>

<p>Logs the current user out of the site and destroys all cookies they may have set for the site.</p>

<h3>Parameters</h3>

<p><em>None</em></p>

<h3>Return</h3>

<p><em>None</em></p>

<h2>$this->auth->set()</h2>

<p>Allows for overriding default settings in the library.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>variable</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3">allowed_login_attempts, lockout_time</td>
		<td class="td col4">The variable to be overridden</td>
	</tr>
	<tr>
		<td class="td col1"><strong>value</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The new value for the variable</td>
	</tr>
</table>

<h3>Return</h3>

<p><em>None</em></p>

<h3>Example</h3>

<pre>$this->auth->set('allowed_login_attempts', 5);
$this->auth->set('lockout_time', 900) // 5 minutes</pre>

<p class="alert alert-info"><strong>Note:</strong> The lockout time variable must be stored as seconds for the library to make the necessary calculations for whether a user is allowed to login or not.</p>

<h2>$this->auth->verify()</h2>

<p>Verify a user's login credentials without triggering the login process.</p>

<h3>Parameters</h3>

<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>email</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The email address to be checked</td>
	</tr>
	<tr>
		<td class="td col1"><strong>password</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The password to check (<strong>Note:</strong> the password must be hashed before being passed to the method)</td>
	</tr>
</table>

<h3>Return</h3>

<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Error Code</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>0</strong></td>
		<td class="td col4">Login credentials verified and correct</td>
	</tr>
	<tr>
		<td class="td col1"><strong>1</strong></td>
		<td class="td col4">Not logged in</td>
	</tr>
	<tr>
		<td class="td col1"><strong>2</strong></td>
		<td class="td col4">Email address does't exist</td>
	</tr>
	<tr>
		<td class="td col1"><strong>3</strong></td>
		<td class="td col4">Password is incorrect</td>
	</tr>
	<tr>
		<td class="td col1"><strong>4</strong></td>
		<td class="td col4">More than one account found with the given email address</td>
	</tr>
</table>

<h3>Example</h3>

<pre>$email = $this->input->post('email', TRUE);
$password = sha1($this->input->post('password', TRUE));

$verify = $this->auth->verify($email, $password);</pre>

<p class="alert alert-info"><strong>Note:</strong> The method will only return the numerical error code. You can use the <var>error_login_X</var> language items to display the proper error message.</p>