<h1><?php echo $header;?></h1>

<p>Nova uses a simple role based access control (RBAC) system. Users are assigned a role and the role dictates what they can and can't access. By default, Nova comes with several pre-made roles. In addition, admins can create an unlimited number of roles to assign players to. If you want, each player can have their own role, or you can group people together into their jobs/duties on your RPG. Further to that, pages can be added to access control through the use of role pages.</p>

<h3>Permissions</h3>

<p>In order to manage access roles, a user needs to have <kbd>site/roles</kbd> permissions.</p>

<h2>Adding an Access Role</h2>

<p>To create a new access role, click on the Add Role link at the top of the page. A new page will appear with fields to specify a name and description for the role. The rest of the page has tables with page names and URLs. To create the role, simply select the pages you want that role to have access to and click Submit. Doing so will add the new role to the database and make it available to assign players to. You can duplicate an existing role by clicking on the Duplicate Role link at the top of the page. Once you've selected the role you want to duplicate from the dropdown menu and clicked Submit, Nova will create a new role identical to the one you chose.</p>

<h2>Editing an Access Role</h2>

<p>To edit an access role, click on the edit icon to the right of the list of roles. A new page will appear with fields populated with the name and description of the role. The rest of the page has tables with page names and URLs. To edit the role, simply select the pages you want that role to have access to and click Submit. Doing so will updated the role to the database and make it available to assign players to.</p>

<h2>Deleting an Access Role</h2>

<p>To delete an access role, click on the delete icon to the right of the list of roles. A modal window will pop up confirming that you want to delete that role. If you want to delete the role, you have to first select a new role to assign all users to who currently have the role you want to delete. Once you've clicked Submit, the role will be removed from the database. If you do not want to delete that access role, you can hit Escape, click anywhere outside of the modal window or click the X icon in the upper lefthand corner of the modal window.</p>

<h2>Viewing Players in an Access Role</h2>

<p>You can view the players who have a given access role by clicking the view icon for the specific role. A modal window will pop up with a list of all the main characters of the players who have that role. You can add/remove a player from a role from the user/roles page.</p>