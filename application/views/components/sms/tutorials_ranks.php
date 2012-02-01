<h1>Creating New Ranks</h1>

<p>Ranks in SMS are dependent on more than just themselves to be displayed throughout the system. Because of the system in place that limits ranks based on rank color and rate, ranks rely on being associated with a department in order to be properly displayed on the rank management page and in the rank menus throughout the system. Once you know the process for creating new sections of ranks, it's very straightforward.</p>

<h2>Create a Department</h2>

<p>The first thing you need to do is create a department. In many cases, you'll want your new rank associated with a brand new department; there are other cases where you wouldn't necessarily want that. Either way, the department has to be created. If you don't want the new department to be displayed, you simply set the display flag to no and it won't appear on the manifest. Another thing you have to do is make sure that the class ID is a unique number. In other words, it can't share its class number with any other department. By default, SMS uses up to number 8 for classes, so if you're using a default installation you can use 9. Basically, just find the highest class number and increment it by 1.</p>

<h2>Create a Blank Rank</h2>

<p>The first thing you need to do from the Rank Mangement page is to create a blank rank. If you don't create a blank rank first, you'll have no way of accessing the page to see the rank images you're creating. Leave the name and short name fields blank and put the image name in. Important: the name of the image has to be suffixed with -blank.png. You can put whatever you want at the start, but it has to end with -blank.png. If you're dealing with JPG or GIF images, you'll need to convert them to PNGs. SMS isn't flexible with this unfortunately, but Nova is. Once you've filled the information, click OK and create the rank.</p>

<h2>Create the Other Ranks</h2>

<p>Once the page reloads, you should see your blank image at the top with other blank images (odds are it's going to be on the very end of that list). Click the image and it'll show you all the images in that class so far. Right now, there should only be the blank image. Now you can begin adding ranks one by one and you'll see them appear here as you do. When you create your ranks, just make sure the department is set to the department you just created and everything should take care of itself.</p>

<h3>Department Head Rank Management</h3>

<p>One thing to take note of is the fact that department heads trying to manage a department that has characters with two sets of ranks will only be able to change ranks in the rank class they are part of. In order to get around this, you have to raise the management level of your department heads.</p>