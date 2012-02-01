<h1><?php echo $header;?></h1>

<p>The all players page gives admins a list of all players in the system as well as options for administering the players' accounts, viewing their player bio or deleting players from the system.</p>

<h3>Permissions</h3>

<p>In order to view the player listing, you need to have level 2 <kbd>user/account</kbd> permissions.</p>

<h2>Editing a Player</h2>

<p>To edit a player, click on the edit icon to the right of their name. You will be redirected to the <?php echo Html::anchor('nova1/pages/user/account', 'Edit Account');?> page where you can edit the user's account.</p>

<h2>Viewing a Player Bio</h2>

<p>To view a player's biography, click on the view icon to the right of their name. You will redirected to their <?php echo Html::anchor('nova1/pages/personnel/player', 'Player Biography');?> page.</p>

<h2>Deleting a Player</h2>

<p>To delete a player, click on the delete icon to the right of their name. A modal window will pop-up asking you to confirm you want to delete the player. Once you have clicked <strong>Submit</strong>, Nova will delete the player. In the process, Nova will also update any characters associated with that player to not be associated with any player.</p>

<p class="alert alert-danger"><strong>Warning:</strong> Use extreme caution when deleting players. Deleted players cannot be recovered. All changes are final.</p>