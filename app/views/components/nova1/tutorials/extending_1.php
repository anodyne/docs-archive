<h1><?php echo $header;?></h1>

<p>Nova has been designed from the ground up with the idea of extensibility. It's relatively easy to add to or modify Nova's behavior without ever touching the core application files, meaning that when we release an update, your changes stay intact. Let's take a look at how we're going to extend the various pieces of Nova.</p>

<h2>Controllers</h2>

<p>Controllers are the heart and soul of Nova. Entire sections and their pages are generated from the controllers and methods. Because of that, controllers are arguably the most important piece that needs to be extensible. One thing that's very important to understand is how CodeIgniter handles loading pages. One of the main functions of controllers is to determine how HTTP requests should be handled. Ultimately, a controller is simply a class file that is named in a way that can be associated with a URI. When a controller's name matches the first segment of a URI, it will be loaded.</p>

<p>There are two options for extending a Nova controller: adding and modifying. Let's look at each carefully.</p>

<h3>Adding a Page to Nova</h3>

<p>In order to add a page to Nova, we have to add a method to the controller. A method is nothing more than a function inside a class. We've worked hard to make sure that it's very easy to jump in and start extending the controllers (assuming you know PHP). In the controllers directory, you'll notice that the files in there are almost completely empty in addition to a directory called <code>base</code>. Base is where Anodyne does all it's work and it's where you'll find all the existing controllers and methods. Main.php is what you can use to add and modify the default behaviors. Anodyne will never update any of the non-base controllers!</p>

<p>We'll get to modifying a method later on, but for now, let's say we want to create a page that displays all the ranks. We'll start by opening <code>main.php</code> in a text editor. There are a few things to point out here. First, you'll see that we include the main_base file at the top, this allows us to add and modify the methods in this file and allow them to overwrite what's in main_base. Next, you'll see the class declaration. This should never be changed, otherwise, the system will break! Finally, you'll see the contructor, a method that gets called at the top of every single method by default. After that is where we can start our own method. After the closing bracket of the constructor, add the following code:</p>

<pre>function ranks()
{
	echo 'This is my ranks page!';
}</pre>

<p>If you were to go to <strong>http://yoursite/index.php/main/ranks</strong> before you save this file, an error would be displayed that it can't find that page. Once you save main.php and try going to that page, you'll see your text in the browser. That's it. You've just created the first part of a new page in the main section of Nova.</p>

<h3>Modifying an Existing Page</h3>

<p>In addition to creating brand new pages, it's possible to overwrite an existing page in Nova with one of our own. Doing so is really as easy and copying and pasting. To modifying an existing method, all you need to do is copy the method from main_base.php and pasting it into main.php (or whichever files you're working with). Once you have the method in the non-base file, you can modify the method to do whatever you want. You can then use seamless substitution to replace view files, Javascript view files and images to further enhance your modifications.</p>

<p>Using a system like this means that whenever Anodyne updates Nova, your changes stay intact so long as you don't accidentally overwrite the entire directory. No more having to redo all your modifications with every update release or holding off on an update because you don't want to lose changes you've made!</p>

<br />
<p>
	<?php echo Html::anchor('nova1/tutorials/extending/2', 'Next Tutorial &#187;');?>
</p>