<h1><?php echo $header;?></h1>

<p>New in Nova 1.2 is the ability to create multiple manifests for separating how your characters are displayed on the manifest. This can be especially helpful for sims that have multiple sections and want to keep them separated. Manifests work just like most other elements in Nova where you can set a default and turn their display on and off. More information about how multiple manifests are handled on the manifest page can be found <?php echo Html::anchor('nova1/pages/personnel/index', 'here');?>.</p>

<h3>Permissions</h3>

<p>In order to manage menu categories, a user needs to have <kbd>site/manifests</kbd> permissions.</p>

<h2>Adding a Manifest</h2>

<p>To add a new manifest, click on the Add Manifest link at the top of the page. A new section will slide into view and you'll be given fields for a name, order, description and header content. The header content allows you to create whatever text you want which will be dispayed at the top of the manifest. Once you have filled the fields in, click Submit and the entry will be created in the database.</p>

<h2>Editing a Manifest</h2>

<p>To edit a manifest, click on the edit icon to the right of the name. A model window will open and you'll be given fields that have the current values for the name, order, default, display, description and header content. Once you have changed the fields, click Submit and the entry will be updated in the database.</p>

<h2>Deleting a Manifest</h2>

<p>To delete a manifest, click on the delete icon to the right of the name. A model window will open to confirm whether you want to delete the manifest. Clicking Submit will delete the manifest and move all departments assigned to the manifest to an unassigned status. If you do not want to delete the manifest, you can hit Escape, click outside the modal window or click the X in the upper lefthand corner.</p>