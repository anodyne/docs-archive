<h1><?php echo $header;?></h1>

<p>To most efficiently display information on the character biographies, Nova uses tabs by default. In order to give admins more control over the character biography page, tabs are built on the fly from the database, meaning they can be changed to whatever you want through a simple interface.* If you don't want to use tabs for your character biography page, you can simply set the display property for each tab to NO and Nova will display the biography with just the sections. The join page does not use tabs and cannot be changed to use tabs.</p>

<h3>Permissions</h3>

<p>In order to manage bio tabs, a user needs to have <kbd>site/bioform</kbd> permissions.</p>

<h2>Adding a Tab</h2>

<p>Clicking the Add Bio Tab link will open a pop-up window and let you create a brand new tab, including its name, order, whether it's displayed or not and the link ID.</p>

<p>The link ID is used by Nova to tell it what section needs to be shown. By default, Nova allows up to 10 tabs to be shown using IDs one, two, three, four, five, six, seven, eight, nine and ten. Nova only uses the first 3 for character biographies. Any tabs you add to the system must use a link ID from the above list and cannot be duplicates of another one on the page. In other words, if Nova has tabs that have link IDs of one, two and three, your first created tab has to start with a link ID of four, otherwise, things won't display properly.</p>

<p>Once you've filled out the information, click submit at the tab will be added to the database and available to put sections inside.</p>

<h2>Editing a Tab</h2>

<p>You can update a tab's name, link ID, whether it's displayed or not and the order in which they appear by clicking on the <a href="#" class='tip' tooltip='<?php echo img($images['edit']);?>'>edit icon</a> in the table on the bio tabs management page. You will be given a pop-up window with fields populated with the current data. Change the values to what you want then click Submit and Nova will update the tab. If you don't want to use tabs, simply set the display property for each tab to NO and Nova won't use tabs on the character biography page.</p>

<h2>Deleting a Tab</h2>

<p>If you decide that you don't want one of the tabs that comes with Nova or one that you created, you can delete them by clicking on the <a href="#" class='tip' tooltip='<?php echo img($images['delete']);?>'>delete icon</a> in the table on the bio tabs management page. You will be presented with a pop-up window verifying that you want to delete the tab as well as a dropdown menu. Because tabs can have sections inside them, you need to select a new tab so Nova can move those sections from the tab you're deleting to the new tab to avoid orphan data in the database. This ensures that players will still have access to fields and sections if you remove a tab. Click Submit and Nova will delete the tab and return you to the bio tabs management page.</p>

<p class="fontSmall"><em>* For character biographies, Nova uses fields, sections and tabs. Fields can only be put inside sections, they can't be put into tabs without a section. Sections can only be put inside tabs, they can't be put anywhere but in a tab. Tabs cannot be put inside anything.</em></p>