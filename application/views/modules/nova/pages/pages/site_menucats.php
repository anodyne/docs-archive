<h1><?php echo $header;?></h1>

<p>New to Nova is a menu category system that&rsquo;s used exclusively with the admin sub navigation menu items. Menu categories allow admins to change the labels associated with groups of menu items. For instance, by default, Nova groups all pages associated with post into a category called write. That category in the menu items table is the same as the category in the categories table. In return, Nova prints the title from the categories table in the menu. This system allows admins to change those labels or even create new ones to use for additional groups.</p>

<p>The menu category management page is accessible by clicking on the Manage Menu Categories link from the Menu Management page. Once on the page, you will see a list of menu category names as well as they&rsquo;re category keyword. Icons to the right give you the ability to edit and delete that particular menu category.</p>

<h4>Permissions</h4>

<p>In order to manage menu categories, a user needs to have <kbd>site/menus</kbd> permissions.</p>

<h2>Adding a Menu Category</h2>

<p>To add a new menu category, click on the Add Menu Category link at the top of the page. A model window will open and you&rsquo;ll be given fields for a name, order and category. The category dropdown consists of every category from the menu items database table. It is recommended that you first create at least one menu item with the category you want, then create the category. You must have a name and category in order to create a new category! Once you have filled the fields in, click Submit and the entry will be created in the database. You will need to refresh the page to see your changes in the admin sub menus.</p>

<h2>Editing a Menu Category</h2>

<p>To edit a menu category, click on the <a href="#" class='tip' tooltip='<?php echo img($images['edit']);?>'>edit icon</a> to the right of the name. A model window will open and you&rsquo;ll be given fields that have the current values for the name, order and category. The category dropdown, like when creating a menu category, consists of every category from the menu items database table. You must have a name and category in order to edit a category! Once you have changed the fields in, click Submit and the entry will be updated in the database. You will need to refresh the page to see your changes in the admin sub menus.</p>

<h2>Deleting a Menu Category</h2>

<p>To delete a menu category, click on the <a href="#" class='tip' tooltip='<?php echo img($images['delete']);?>'>delete icon</a> to the right of the name. A model window will open to confirm whether you want to delete the category. Clicking Submit will delete the category. If you do not want to delete the category, you can hit Escape, click outside the modal window or click the X in the upper lefthand corner. Deleting a category will not change any of your menu items, but they will not be visible, so make sure that any menu items in that category have been properly updated before deleting the category!</p>