<h1><?php echo $header;?></h1>

<p>Nova uses a simple role based access control (RBAC) system. Users are assigned a role and the role dictates what they can and can't access. Those roles are made up of pages and access levels. Because of this system, you are able to create your own pages and tie them in to Nova's access control system. For the purposes of organization, you can create groups for categorizing your access role pages.</p>

<p>The Role Page Groups page is accessible from the Role Page management page as a link.</p>

<h3>Permissions</h3>

<p>In order to manage access role page groups, a user needs to have <kbd>site/roles</kbd> permissions.</p>

<h2>Adding an Access Page Group</h2>

<p>To create a new access page group, simply click on the Add Role Page Group link. A modal box will pop-up on the screen with all the fields you need to fill-in. After supplying the name of the group and its order, just click Submit and your role page group will be created. Once created, you'll be able to add your new pages to the group.</p>

<h2>Editing an Access Page Group</h2>

<p>To edit an access page group, simply click on the <a href="#" class='tip' tooltip='<?php echo img($images['edit']);?>'>edit icon</a> to the right of the list of role pages. A modal window will pop-up with all the fields you can edit. After updating the fields you want, just click Submit and your role page group will be updated.</p>

<h2>Deleting an Access Page Group</h2>

<p>To delete an access page group, click on the <a href="#" class='tip' tooltip='<?php echo img($images['delete']);?>'>delete icon</a> to the right of the list of role pages. A modal window will pop-up confirming that you want to delete that role page group. If you want to delete the role page, simply click Submit. If you do not want to delete that access role, you can hit Escape, click anywhere outside of the modal window or click the X icon in the upper lefthand corner of the modal window.</p>