<h1><?php echo $header;?></h1>

<p>One of Nova's biggest features is the ability to associate multiple characters with a single player, allowing players to post as a playing character or even as one of their NPCs. The number of playing characters and NPCs that can be associated with a single account is set in the <?php echo Html::anchor('nova1/pages/site/settings', 'Site Settings');?> page.</p>

<p>At the top of the page, a player info section shows you which account you're currently editing. If you don't want to edit that account, simply click on the All Players link. Below the player info section is a section listing all the current characters associated with that player. From here, you can remove a character or change the main character for that account. Finally, at the bottom of the page are two tabs with playing and non-playing characters. The listings in each of these tabs are for characters and NPCs who are not currently assigned to a player.</p>

<p class="alert alert-info"><strong>Note:</strong> In order to re-assign a character from one account to another, the character must first be removed from the original account before it can be assigned to the new account.</p>

<p>The link character page can be accessed from the admin sub navigation menu or from a user's account page.</p>

<h3>Permissions</h3>

<p>In order to update the characters tied to a user account, you need to have <kbd>user/account</kbd> permissions with level 2 access.</p>

<h2>Adding a Character</h2>

<p>To add a character to someone's account, simply click on the add user icon to the right of their name in the listing of characters. Nova will add the character to the player's account. If the player doesn't have any characters associated with their account, the character you add will be set as their main character. In order for those changes to take affect, the player must log out and log back in.</p>

<p>Nova will not allow more characters to be added than is specified in Site Settings. By default, Nova will allow each player to have one playing character and three non-playing characters. If those numbers have been reached, the add user icons will not be displayed. Attempting to manually add the characters through the URL will also not work. The only way to get the characters associated with the account is to change the settings for allowed characters.</p>

<h2>Deleting a Character</h2>

<p>To remove a character from someone's account, simply click on the remove user icon to the right of their name at the top of the page. Nova will remove the character from the player's account. In order for those changes to take affect, the player must log out and log back in.</p>

<h2>Changing the Main Character</h2>

<p>You can change an account's main character by clicking on the star icon to the right of their name at the top of the page. Only playing characters can be set as a main character, so the star icon will not appear next to NPCs. In order for the change to take affect, the player must log out and log back in.</p>