<h1><?php echo $header;?></h1>

<p>Skins in SMS underwent little change from version to version; even moving from SMS 1 to SMS 2 didn't bring a lot of skin changes. In Nova though, we've taken a radically different approaching to skins that will give skin developers more control than ever before to customize their skins without the risk of touching core application files and causing headaches through non-destructive editing of those core files, or as we've begun to call it, seamless substitution. Let's start by taking a quick tour through the view directory and then we'll take a closer look at what seamless substitution is and how it works in the next tutorial.</p>

<h2>The Views Directory</h2>

<p>Before we start, it's important to understand that a skin is a collection of sections. The sections are what actually do all the heavy lifting. We'll be using Nova's default skin when we're talking about skins here.</p>

<h3>_base</h3>

<p>In SMS, all the skins were organized into a skins folder; in Nova, all the presentation files are found in the views directory (this was a necessary change because of the CodeIgniter core and cannot be changed).</p>

<p>Before we even get in to talking about skins, it's important to understand the components that build a skin in Nova as they're the keys to how seamless substitution works. The first directory you'll see is <dfn>_base</dfn> and is where every view file, Javascript view file, icon and other images not specific to the skin section (we'll get in to that later) are found. The <dfn>_base</dfn> directory is the third and final place Nova looks for view files, images and Javascript view files in the seamless substition process because <dfn>_base</dfn> will always contain all the presentation files for Nova pages.</p>

<p>Because of the fact that <dfn>_base</dfn> contains all the presentation files for Nova, it could be tempting to just edit a file in <dfn>_base</dfn> and watch it change throughout the entire system. Not only does Anodyne strongly discourage this, but we've come up with an easy-to-use process for changing core application files without touching the core application files. When there's a change to a view file, Anodyne will always make it in <dfn>_base</dfn> and never touch anything else when it comes to presentation files. So as a skin developer, how would you change a view, Javascript view or image throughout the entire system?</p>

<h3>_base_override</dfn></h3>

<p>Welcome to the <dfn>_base_override</dfn> directory, the second second stop in the seamless substitution process. Before Nova checks the <dfn>_base</dfn> directory for presentation files, it'll check <dfn>_base_override</dfn> and if it finds the file, it'll use it instead of the <dfn>_base</dfn> version. This allows admins to change a view, Javascript view or image in one place and have it changed across the entire system. The <dfn>_base_override</dfn> file structure is identical to the file structure of skin. We think the <dfn>_base_override</dfn> is a good compromise to give admins control while still maintaining our desire to keep core application files unchanged to help admins and skin developers avoid the heartache of losing their work because Anodyne updates a <dfn>_base</dfn> presentation file.</p>

<h3>Skin Directories</h3>

<p>The first place Nova looks in the seamless substitution process are the skin directories. Nova will always give preference to skin directories for seamless substitution, even if you put something in <dfn>_base_override</dfn>. If the file being replaced exists in all 3 locations, the skin will get preference.</p>

<p>Skin directories consists of template files and matching directories (plus an index.html which we recommend you put in every fold to prevent people from looking at your file listing). At the very least, a skin needs one template file and one directory. This approach allows a skin developer to create a skin that just has a login section while someone else creates a skin that has a main section and admin section. This gives skin developers more flexibility than before. The default skin has four template files (main, admin, wiki and login) and four matching directories.</p>

<p>If we drill down into the main directory, there are four more directories: css, js, images and pages (plus an index.html file). These directories are pretty self-explanatory and will contain the CSS files, Javascript files, images and pages for a skin section. This directory structure is maintained is both <dfn>_base</dfn> and <dfn>_base_override</dfn> (neither contain the CSS directory though).</p>

<h4>AJAX</h4>

<p>The AJAX directory contains all of the AJAX view pages the skin section will use. The default skin doesn't have anything in this folder because we choose to use the system defaults found in the <dfn>_base</dfn> directory. If you wanted to change the behavior of an AJAX file (mostly the modal windows), you would simply copy the file from <dfn>_base</dfn> and put it into your skin section's AJAX directory (or <dfn>_base_override</dfn> if you want to verride for the entire system) and make any changes you want. In order for seamless substitution to work, the AJAX file has to be named identically to the file in <dfn>_base</dfn>!</p>

<h4>CSS</h4>

<p>The CSS directory contains all of the stylesheets your skin section will use. For the default skin, we've chosen to break them up into different files. You don't have to do that for your skin. You can leave them in one or break them up even further. When you start your own skin, it's always a good idea to start with the default skin as that has everything you'll need, including stylesheets for the jQuery UI tabs and other classes used extensively throughout Nova.</p>

<h4>JS</h4>

<p>The JS directory contains all of the Javascript view files the system uses. The default skin doesn't have anything in this folder because we choose to use the system defaults found in the <dfn>_base</dfn> directory. If you wanted to change the Javascript behavior or add to it, you would simply copy the file from <dfn>_base</dfn> and put it into your skin section's JS directory (or <dfn>_base_override</dfn> if you want to override for the entire system) and make any changes you want. In order for seamless substitution to work, the JS file has be named identically to the file in <dfn>_base</dfn>!</p>

<h4>Images</h4>

<p>The skin's images folder serves two purposes. First, it can contain any icons found in the <dfn>_base</dfn> directory in the event you want change the default icons used by the system. In addition, any skin-specific image files, like background images and other skin images and components, would be put in the skin's images directory. In order for seamless substitution to work, the image file has be named identically to the file in <dfn>_base</dfn>!</p>

<h4>Pages</h4>

<p>The skin's pages folder holds the guts of the system. All view pages are found in <dfn>_base</dfn>, but using seamless substitution, you can copy and paste the view file from <dfn>_base</dfn> to your skin (or <dfn>_base_override</dfn>), make any changes you want and the system will use the version in your skin or <dfn>_base_override</dfn> before using the <dfn>_base</dfn> version. This is a great tool if you want to add images to your pages or make any other changes as it'll ensure that even when Nova gets updated, your changes stay intact through the update. In order for seamless substitution to work, the page file has be named identically to the file in <dfn>_base</dfn>!</p>

<h2>Seamless Substitution Disclaimer</h2>

<p>We've designed seamless substitution to give the admins and skin developers as much control as possible, but that comes at a price. In the event that Nova updates a <dfn>_base</dfn> view or changes something in the controller, your changes may break the page. We considered putting versioning into the view files, but that would've required a skin developer to change their view files every time an update comes out. To make things simple, we don't touch your view files, so it'll be the admin/developer's responsibility to make sure that an update doesn't break their skins.</p>

<br />
<p>
	<?php echo anchor('nova/tutorials/skins/2', 'Next Tutorial &#187;');?>
</p>