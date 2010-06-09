<h1><?php echo $header;?></h1>

<p>The all non-playing characters page gives admins a list of all non-playing characters in the system as well as options for administering the characters' bios or deleting characters from the system.</p>

<h4>Permissions</h4>

<p>In order to view the non-playing character listing, you need to have <kbd>characters/npcs</kbd> permissions. To edit bios and accounts, you will need to have the proper access levels.</p>

<h2>Deleting a Character</h2>

<p>To delete a character, click on the <a href="#" class='tip' tooltip='<?php echo img($images['delete']);?>'>delete icon</a> to the right of their name. A modal window will pop-up asking you to confirm you want to delete the character. Once you have clicked <strong>Submit</strong>, Nova will delete the character. In the process, if that character is someone's main character, it will be changed.</p>

<p class="critical"><strong>Warning:</strong> Use caution when deleting characters. Mission posts, personal logs and news items use character ID numbers so deleting a character can leave posts orphaned and without an author.</p>

<h2>Editing a Character</h2>

<p>To edit a character's biography, click on the <a href="#" class='tip' tooltip='<?php echo img($images['edit']);?>'>edit icon</a> to the right of their name and you will be redirected to the edit biography page for the respective character.</p>

<h2>Viewing a Character's Bio</h2>

<p>To view a character's biography, click on the <a href="#" class='tip' tooltip='<?php echo img($images['view']);?>'>view icon</a> to the right of their name and you will be redirected to their biography page. This is the only option for viewing the biography of a pending character from the site. The email sent by Nova will give you the details as well, but if you want to see the biography on the site, you will have to view their biography.</p>