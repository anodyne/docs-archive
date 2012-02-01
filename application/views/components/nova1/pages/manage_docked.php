<h1><?php echo $header;?></h1>

<p>The all characters page gives admins a list of all playing, inactive and pending characters in the system as well as options for administering the characters' bios, their players' accounts or deleting characters from the system.</p>

<h3>Permissions</h3>

<p>In order to view the character listing and take any of the actions, you need to have <kbd>manage/docked</kbd> permissions.</p>

<h2>Deleting a Docked Item</h2>

<p>To delete a docked item, click on the delete icon to the right of its name. A modal window will pop-up asking you to confirm you want to delete the item. Once you have clicked <strong>Submit</strong>, Nova will delete the docked item.</p>

<h2>Editing a Docked Item</h2>

<p>To edit a docked item, click on the edit icon to the right of its name and you will be redirected to the edit docked item page for the respective item.</p>

<h2>Viewing a Docked Item</h2>

<p>To view a docked item, click on the view icon to the right of its name and you will be redirected to the docked item display page.</p>

<h2>Accepting a Pending Docking Request</h2>

<p>To accept a pending docking request, click on the accept icon to the right of its name. A modal window will pop-up asking you to confirm the acceptance and give you the opportunity to change the email message they will receive. Once you click <strong>Submit</strong> the item will be accepted and an email will be sent to the game master who applied as well as anyone with <kbd>manage/docked</kbd> privileges.</p>

<h3>Customizing the Acceptance Email</h3>

<p>To make customizing the acceptance message easier, Nova allows admins to set variables in the acceptance message that will automatically be replaced when the message is parsed. Below are the available variables for the acceptance message:</p>

<ul>
	<li><strong>#sim#</strong> &ndash; your sim name</li>
	<li><strong>#sim_name#</strong> &ndash; the name of the sim that applied</li>
	<li><strong>#gm_name#</strong> &ndash; the name of the game master that accepted</li>
</ul>

<h2>Rejecting a Pending Docking Request</h2>

<p>To reject a pending docking request, click on the reject icon to the right of its name. A modal window will pop-up asking you to confirm the rejection and give you the opportunity to change the email message they will receive. Once you click <strong>Submit</strong> the item will be rejected, deleted from the database and an email will be sent to the game master who applied as well as anyone with <kbd>manage/docked</kbd> privileges.</p>

<h3>Customizing the Rejection Email</h3>

<p>To make customizing the rejection message easier, Nova allows admins to set variables in the rejection message that will automatically be replaced when the message is parsed. Below are the available variables for the rejection message:</p>

<ul>
	<li><strong>#sim#</strong> &ndash; your sim name</li>
	<li><strong>#sim_name#</strong> &ndash; the name of the sim that applied</li>
	<li><strong>#gm_name#</strong> &ndash; the name of the game master that accepted</li>
</ul>