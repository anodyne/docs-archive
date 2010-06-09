<h1><?php echo $header;?></h1>

<p>Nova gives users the freedom to select from a variety of rank images (if the system administrator has put them on the server) to see when they&rsquo;re logged in. Managing the rank sets available to your players has never been easier with a few simple clicks. Once you have uploaded the rank set to your genre&rsquo;s rank folder, you can create new entries in Nova for making the rank sets available to everyone.</p>

<h4>Permissions</h4>

<p>In order to manage rank catalogues, a user needs to have <kbd>site/catalogueranks</kbd> permissions.</p>

<h2>Adding a Rank Set</h2>

<p>To create a new rank catalogue item, simply click on the Add Rank Set link near the top of the page. A modal window will appear with all the fields you need to fill in to create your new rank set. You can specify a name for the set (that everyone will see), the server directory where the ranks are stored (you do not need to provide the full path, just the name of the rank set&rsquo;s folder), a preview image, a blank image, the extension of the images you&rsquo;ve uploaded, status (you can choose between active, inactive and in development*), credits and whether or not it will be the default rank set. Once you&rsquo;ve completed all the fields, click Submit to create the rank set.</p>

<p class="important">A rank set listed as being in development will only be available to someone with <kbd>site/catalogueranks</kbd> access, allowing them to tweak the rank set until it&rsquo;s ready for the rest of the players.</p>

<h2>Editing a Rank Set</h2>

<p>To edit a rank set, simply click on the <a href="#" class='tip' tooltip='<?php echo img($images['edit']);?>'>edit icon</a> to the right of the list of rank sets. A modal window will appear with all the fields you can edit. After updating the fields you want, just click Submit and your role page will be updated. If you don&rsquo;t want to edit that particulare rank set, you can close the window by hitting Escape, clicking anywhere outside of the modal window or clicking the X icon in the upper lefthand corner of the modal window.</p>

<p class="critical"><strong>Warning:</strong> Editing rank sets will affect the entire system, is permanent and cannot be undone. Use caution when editing rank sets!</p>

<h2>Deleting a Rank Set</h2>

<p>To delete a rank set, click on the <a href="#" class='tip' tooltip='<?php echo img($images['delete']);?>'>delete icon</a> to the right of the list of rank sets. A modal window will appear confirming that you want to delete that rank set. Because user management and rank management rely on the rank catalogue, you will be prompted to select another rank set to update anyone using the rank set you&rsquo;re trying to delete to. If you&rsquo;re sure you want to delete the rank set, simply click Submit. If you do not want to delete that access role, you can hit Escape, click anywhere outside of the modal window or click the X icon in the upper lefthand corner of the modal window.</p>

<p class="critical"><strong>Warning:</strong> Deleting rank sets will affect the entire system, is permanent and cannot be undone. Use caution when deleting rank sets!</p>