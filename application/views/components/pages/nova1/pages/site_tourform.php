<h1><?php echo $header;?></h1>

<p>Nova makes it easy to customize the tour pages to just about anything you want. Through Nova&rsquo;s tour form management page, admins can update the fields used. This gives admins an unparalleled level of control and customization at their fingertips. Updating the tour form is incredibly easy.</p>

<h4>Permissions</h4>

<p>In order to manage the tour form, a user needs to have <kbd>site/tourform</kbd> permissions.</p>

<h2>Adding a Field</h2>

<p>To add a field to the tour form, simply click on the Add Tour Field link. A pop-up window will give you fields to fill in information. After providing a page label, type, the order and whether it&rsquo;s displayed or not, you can customize additional details, like class, ID and rows (for textareas only). In addition, if you&rsquo;ve selected Dropdown Menu as the type, you can specify the values in the menu at the bottom of the page. Values for the dropdown menus should be in a simple comma separated list with the value going into the database first then the label in menu second. New values should go on a new line. Once you&rsquo;re finished, click Submit and Nova will create the field.</p>

<h2>Editing a Field</h2>

<p>If you want to change something about a field, you can click the <a href="#" class='tip' tooltip='<?php echo img($images['edit']);?>'>edit icon</a> to the right of the field in the list of fields. From the edit screen, you can change any of the values about the field. If the item is a dropdown menu, an additional section will be shown at the bottom of the page with the management tools for menu values. From the lower section, you can reorder the menu values by clicking and dragging the box to the proper order and clicking update. Deleting a menu value is as simple as clicking the X on the right side of the box. In addition, values can be added to the menu by providing the value and menu label and clicking add. If you want to edit an existing menu value, just click the text in the box.</p>

<h2>Deleting a Field</h2>

<p>Deleting a field from Nova is as simple as clicking the <a href="#" class='tip' tooltip='<?php echo img($images['delete']);?>'>delete icon</a> to the right of the field in the list of fields. A pop-up window will confirm that you want to delete the field. Clicking Submit will remove the item from the database. In addition, Nova will also remove any menu values associated with that field and remove all tour data related to that field to avoid orphan data being left in the database. Deleting a field is permanent and cannot be undone!</p>