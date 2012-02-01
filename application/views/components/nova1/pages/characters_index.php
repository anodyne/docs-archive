<h1><?php echo $header;?></h1>

<p>The all characters page gives admins a list of all playing, inactive and pending characters in the system as well as options for administering the characters' bios, their players' accounts or deleting characters from the system.</p>

<h3>Permissions</h3>

<p>In order to view the character listing, you need to have <kbd>characters/index</kbd> permissions. To edit bios and accounts, you will need to have the proper access levels.</p>

<h2>Deleting a Character</h2>

<p>To delete a character, click on the delete icon to the right of their name. A modal window will pop-up asking you to confirm you want to delete the character. Once you have clicked <strong>Submit</strong>, Nova will delete the character. In the process, if that character is someone's main character, it will be changed.</p>

<p class="alert alert-danger"><strong>Warning:</strong> Use caution when deleting characters. Mission posts, personal logs and news items use character ID numbers so deleting a character can leave posts orphaned and without an author.</p>

<h2>Editing a Character</h2>

<p>To edit a character's biography, click on the edit icon to the right of their name and you will be redirected to the edit biography page for the respective character.</p>

<h2>Viewing a Character's Bio</h2>

<p>To view a character's biography, click on the view icon to the right of their name and you will be redirected to their biography page. This is the only option for viewing the biography of a pending character from the site. The email sent by Nova will give you the details as well, but if you want to see the biography on the site, you will have to view their biography.</p>

<h2>Accepting a Pending Character</h2>

<p>To accept a pending character, click on the accept icon to the right of their name. A modal window will pop-up asking you to confirm their position and rank and give you the opportunity to change the email message they will receive. If the character is associated with a player that is inactive or pending, you will also be able to set their access role as well. Once you click <strong>Submit</strong> the character will be activated and an email will be sent to the player who applied as well as anyone with <kbd>characters/index</kbd> privileges.</p>

<p class="alert alert-info"><strong>Note:</strong> If a player is at or above the allowed limit of playing characters and they submit a character, you will still be able to accept the player, but it will have to be assigned to the player from the <?php echo Html::anchor('nova1/pages/user/link', 'character linking');?> page once they are below the allowed playing character limit.</p>

<h3>Customizing the Acceptance Email</h3>

<p>To make customizing the acceptance message easier, Nova allows admins to set variables in the acceptance message that will automatically be replaced when the message is parsed. Below are the available variables for the acceptance message:</p>

<ul>
	<li><strong>#sim#</strong> &ndash; your sim name</li>
	<li><strong>#name#</strong> &ndash; the name of the user being accepted</li>
	<li><strong>#character#</strong> &ndash; the name of the character being accepted</li>
	<li><strong>#rank#</strong> &ndash; the rank selected for the user</li>
	<li><strong>#position#</strong> &ndash; your position the character will have</li>
</ul>

<p class="alert alert-info"><strong>Note:</strong> To maintain SMS upgrade compatability, using the variable <strong>#ship#</strong> will still work, but we recommend switching over to <strong>#sim#</strong>.</p>

<h2>Rejecting a Pending Character</h2>

<p>To reject a pending character, click on the reject icon to the right of their name.</p>

<p class="alert alert-info"><strong>Note:</strong> If a player only has one character, it's pending and the character is rejected, Nova will also delete the player record as well.</p>

<h3>Customizing the Rejection Email</h3>

<p>To make customizing the rejection message easier, Nova allows admins to set variables in the rejection message that will automatically be replaced when the message is parsed. Below are the available variables for the rejection message:</p>

<ul>
	<li><strong>#sim#</strong> &ndash; your sim name</li>
	<li><strong>#name#</strong> &ndash; the name of the user being accepted</li>
	<li><strong>#character#</strong> &ndash; the name of the character being accepted</li>
	<li><strong>#position#</strong> &ndash; your position the character will have</li>
</ul>

<p class="alert alert-info"><strong>Note:</strong> To maintain SMS upgrade compatability, using the variable <strong>#ship#</strong> will still work, but we recommend switching over to <strong>#sim#</strong>.</p>

<h2>Editing a Player Account</h2>

<p>To edit a player's account, click on the account icon to the right of their name and you will be redirected to their account page.</p>

<p class="alert alert-info"><strong>Note:</strong> The account icon will only appear if the character is assigned to a player. If the character does not have a character associated with them, a warning message will appear below their name indicating they have no player associated with them.</p>