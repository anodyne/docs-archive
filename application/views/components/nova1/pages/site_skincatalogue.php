<h1><?php echo $header;?></h1>

<p>Nova gives users the freedom to select from a variety of skins to use when they're logged in. Managing the skins available to your players has never been easier with a few simple clicks. Once you have uploaded the skin to your <dfn>views</dfn> folder, you can create new entries in Nova for making the skins available to everyone.</p>

<p>Nova breaks presentation down in to two distinct elements: skins and sections. A skin is a collection of sections. Because of the way Nova is built, skin developers can choose to develop one section of a skin or all of them if they so choose. The sections that are available to be skinned in Nova are the main section, admin section, login pages and the wiki. You have to have a skin created before you can add sections to it. Once both the skin and sections are added, the crew will be able to view and use those skin sections.</p>

<p>The default skin sections are highlighted with a green icon.</p>

<h3>Permissions</h3>

<p>In order to manage the system skin catalogue, a user needs to have <kbd>site/catalogueskins</kbd> permissions.</p>

<h2>Quick Install</h2>

<p>To make managing skins easier, Nova includes skin catalogues for organizing skins and providing administration options like putting a skin in development or assigning new skins in the event one is deleted. The drawback to such a system though is that it can add a level of complication for installation. While Nova allows admins to create skins and skin sections manually, there is also another option available: Quick Install.</p>

<p>For an admin, installing a skin can now be as simple as clicking a single button now and letting Nova do the rest. It isn't just a feature Anodyne can take advantage of, the process behind creating a Quick Install file can be utilitized by skin developers as well, allowing them to create Quick Install skins for their In addition, the Quick Install feature is something any skin developer can take advantage of for their own distributed skins!</p>

<p>Nova introduces a brand new feature that makes installing news skins easier than ever before. Quick Install employs a simple YAML file to hold all of the skin's information. Using a YAML parser, we can split the information up and automatically install the skin and any of its sections by only clicking a button. The Install Skins section will only appear if you have uploaded a new skin directory that isn't installed and the skin has a skin.yml file in it.</p>

<p>The Quick Install feature does have 2 limitations. First, it will not allow you to create a skin that's listed as in development or inactive. And second, it will not allow a skin to be installed as the default.</p>

<h2>Adding a Skin</h2>

<p>To create a skin, click on the <strong>Add Skin</strong> link at the top of the page. A pop-up window will appear with all the information you need to complete to build the skin. You will need to provide a name for the skin, it's location on the server (just the name of the folder) and its credits. Once all the information is filled in, click <strong>Submit</strong> and Nova will create your skin record. Once the record is created, you can add sections to it.</p>

<p class="alert alert-info"><strong>Note:</strong> Always provide credits for your skin. If you use any icons or images that need to receive credit, this is where you should do it. Since sections do not use credits, put all your credits for all sections in the skin credits.</p>

<h2>Adding a Skin Section</h2>

<p>To create a new skin section, simply click the <strong>Add Skin Section</strong> link near the top of the page. A pop-up window will appear with all the fields you need to fill-in. After supplying the section (main, admin, login, wiki), the skins, a preview image, its status and whether it's the default for that section, click <strong>Submit</strong> and your skin section will be created. Once created, players will be able to use the sections for their own display preferences.</p>

<p class="alert alert-info"><strong>Note:</strong> Nova includes the ability to set a skin section as being "in development". If a skin section status is set to that, only those with permissions to the skin catalogue will be able to use that skin section, allowing skin developers to work on skins without interfering with players skin choices.</p>

<h2>Editing a Skin</h2>

<p>To edit a skin, simply click on the edit icon to the right of the list of skins. A modal window will pop-up with all the fields you can edit. After updating the fields you want, just click Submit and your skin will be updated.</p>

<h2>Editing a Skin Section</h2>

<p>To edit a skin section, simply click on the edit icon to the right of the list of skins. A pop-up window will appear with all the fields you can edit. After updating the fields you want, just click <strong>Submit</strong> and your skin section will be updated.</p>

<h2>Deleting a Skin</h2>

<p class="alert alert-danger"><strong>Warning:</strong> You must delete all skin sections from a skin before you will be allowed to delete it. In addition, make sure that you have changed all skin section defaults before deleting a skin!</p>

<p>To delete a skin, click on the delete icon to the right of the list of skins. A modal window will pop-up confirming that you want to delete that skin. If you want to delete the skin, simply click Submit. If you do not want to delete that access role, you can hit Escape, click anywhere outside of the modal window or click the X icon in the upper lefthand corner of the modal window.</p> 

<h2>Deleting a Skin Section</h2>

<p>To delete a skin section, click on the delete icon to the right of the list of skins. A pop-up window will appear confirming that you want to delete that role page. If you want to delete the role page, you will need to select a new skin so that Nova can update anyone currently using the skin section you're trying to delete. This helps prevent presentation errors. When you're done, simply click <strong>Submit</strong>. If you do not want to delete that access role, you can hit Escape, click anywhere outside of the modal window or click the X icon in the upper lefthand corner of the modal window.</p>