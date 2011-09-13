<h1><?php echo $header;?></h1>

<p>In Nova, menu items are driven entirely out of the database, meaning that menus can be updated from within Nova instead of through an HTML or PHP file. In order for the system to remain as dynamic as possible, menu items are rendered as text and styled with CSS. The use of images isn't supported in this version of Nova.</p>

<p>The menu management page is accessible from the admin sub menu under the Site category. Once on the page, you will see 3 tabs that break the menu items up into manageable groups: main navigation, sub navigation and admin sub navigation. Within each tab, menu items are ordered by their order value and include the name, URL and an indicator if the menu item is set not to display. Icons to the right give you the ability to edit (the icons with the pencil) and delete (the icons with the red minus sign) that particular menu item.</p>

<h3>Permissions</h3>

<p>In order to manage menu items, a user needs to have <kbd>site/menus</kbd> permissions.</p>

<h2>Adding a Menu Item</h2>

<p>To add a menu item, click on the Add Menu Item link at the top of the page. A modal window will open giving you a wide variety of fields to fill-in with information about your menu item. (Full explanations of the options are available below.) Once you have completed all the fields, click Submit and Nova will add your menu item to the database. You must have a name, URL, category and type in order to create a new menu item!</p>

<p class="important"><strong>Note:</strong> If you want to separate menu items into groups, all subsequent groups <strong>must</strong> have their first item's order set to zero or the grouping will not work.</p>

<h2>Editing a Menu Item</h2>

<p>To edit a menu item, click on the <a href="#" class='tip' tooltip='<?php echo img($images['edit']);?>'>edit icon</a> to the right of the table of menu items. A modal window will open giving you a wide variety of fields that are populated with the current data for that menu item. (Full explanations of the options are available below.) Once you have updated all the fields you want to, click Submit and Nova will updated your menu item in the database. You must have a name, URL, category and type in order to update a menu item!</p>

<h2>Deleting a Menu Item</h2>

<p>To delete a menu item, click on the <a href="#" class='tip' tooltip='<?php echo img($images['delete']);?>'>delete icon</a> to the right of the table of menu items. A modal window will open confirming that you do in fact want to delete the menu item. Clicking Submit will delete the menu item from the database. If you do not want to delete that menu item, you can hit Escape, click anywhere outside of the modal window or click on the X in the upper left corner of the modal window.</p>

<h2>Menu Item Options</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th class="blue">Field Name</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1"><strong>Name</strong></td>
			<td class="td">The actual text that will display for the menu item.</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Link</strong></td>
			<td class="td">The URL that Nova uses to figure out where to send a user when they've clicked the link. For onsite links, only the end of the URL is necessary. For instance, if you created a new link to go back to the main page, you would only need to put the URL as main/index. You do not need the rest of the URL and putting it in will break the link. For offsite links, you must put the entire URL.</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Link Type</strong></td>
			<td class="td">Specify whether your link is pointing to another page on the site or a page on another site.</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Group</strong></td>
			<td class="td">Allows you to group menu items together. If you have more than 1 group, a space will separate multiple groups.</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Order</strong></td>
			<td class="td">What order the menu items should be in. If you have more than 1 group, ordering for a menu item will only relate to the group that menu item is in.</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Display</strong></td>
			<td class="td">Allows you to turn a menu item on and off.</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Type</strong></td>
			<td class="td">Nova breaks menu items up into 3 types: main navigation, sub navigation and admin sub navigation. You must select one of the types based on where you want your menu item to appear. Sub navigation relates to the main, sim, personnel and wiki sections while the admin sub navigation applies to everything else.</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Category</strong></td>
			<td class="td">
				Nova further breaks menu items up into categories. The list below shows the different categories you can use depending on which type you select.
				<ul>
					<li><strong>Main Navigation</strong>
						<ul>
							<li>main</li>
						</ul>
					</li>
					<li><strong>Sub Navigation</strong>
						<ul>
							<li>main</li>
							<li>sim</li>
							<li>personnel</li>
							<li>wiki</li>
						</ul>
					</li>
					<li><strong>Admin Sub Navigation</strong>
						<ul>
							<li>write</li>
							<li>site</li>
							<li>acp</li>
							<li>manage</li>
							<li>reports</li>
							<li>messages</li>
							<li>users</li>
							<li>characters</li>
						</ul>
					</li>
				</ul>
			</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Login Requirement</strong></td>
			<td class="td">Nova allows you to specify a login requirement. Your options are to only show a menu item if a user is logged in or logged out. In addition, selecting NONE will show the menu item regardless of a user's logged in status.</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Use Access Control</strong></td>
			<td class="td">Nova allows you to specify whether that particular menu item should use access control to determine if it's shown or not. This will generally only be used for admin sub navigation items.</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Access</strong></td>
			<td class="td">If you have told Nova that you want a menu item to use access control, you must specify an access URL. For instance, if you created a new page at admin/foo that uses it's own access level, you would put admin/foo in to the access field. Nova will check to make sure the user has the proper permissions before showing the menu item. You can additionally set a URL that is not the same as your menu item. If you were to create a menu item for accessing the Menu Categories page, you would set the access URL to site/menus since the menu category page doesn't use its own access URL.</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Sim Type</strong></td>
			<td class="td">You can tell Nova what type of sim your menu item relates to. In most cases, it'll be all. However, if you have a docking request form, you could set the sim type to base. If you were to change your sim type (from the Site Settings page) from base to ship, Nova will make sure to turn off all base menu items and turn on any ship-specific items.</td>
		</tr>
	</tbody>
</table>