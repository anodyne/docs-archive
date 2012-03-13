<h1>Changing Language Items in Nova</h1>

<p>Generally speaking, the language items we've set up for Nova suffice for 99% of sims, but every so often, someone wants to do something a little different. While it isn't as simple as doing something in the control panel, modifying Nova's files to use different terms is really easy.</p>

<h2>The Problem</h2>

<p>When setting up your game, you realize that some of the terms don't line up with how your RPG does things. You want to change some terms so that they're more consistent with what you call them. In this case, you want to change the term mission to episode and mission group to quest.</p>

<h2>The Solution</h2>

<h3>1. Find and Copy the Language Items You Want to Change</h3>

<p>The way that language files work in Nova is that it's a big array. Each key of the array items is unique so that it can be referenced instead of the full string of text. The value of the array items is what's actually printed out on the page. For those without a lot of PHP experience, an array is broken down as follows:</p>

<pre>$array = array(
	'key1' => 'value1',
	'key2' => 'value2',
	'key3' => 'value3',
);</pre>

<p>Now, in order to change the language items, we need to first find the item we're looking to change so we make sure we have the right key. You'll need to open the language file located at <code>nova/modules/core/language/english/base_lang.php</code>. This is the primary language file and will store the majority of what you're looking to change. (If you're looking to change a longer piece of text, odds are its in one of the other files.) With the <code>base_lang.php</code> file open, you can use your text editor to search for what you're looking for. In this case, we want to search for "mission".</p>

<p>Your search will probably return a few results, but the ones you're looking for are the ones that have array keys of <dfn>global_mission</dfn> and <dfn>global_missions</dfn>. Copy both of those items and head on to the next step.</p>

<h3>2. Change the Language Items You Want to Change</h3>

<p>Now that our clipboard has the original items, we can paste them in to the language file located in <code>app/language/english/app_lang.php</code>. Open it up and paste the two items at the bottom of the file. Now, we can change the <strong>value</strong> of the array items to what we want and save the file. Your file items will probably look a little something like this:</p>

<pre>$lang['global_mission'] = "episode";
$lang['global_missions'] = "episodes";</pre>

<p>Make sure you're only changing the <strong>value</strong> of the array item (what's on the right side of the equal side). If you change the key, your changes won't work.</p>

<p class="alert alert-info">So why do I need to copy these into another file? Why not just change them in the first file? The short answer is <strong>because putting them in the application folder is the right way to do it</strong> (kinda like your Mom telling you "because I said so"). The longer answer is that the language folder in the Nova core will get replaced with every update, so unless you want to update your language items after every update, best to put the language changes in the application folder.</p>

<h3>3. Upload Your Changes</h3>

<p>Now that you've made your changes, make sure the <code>app_lang.php</code> file is saved and then upload it to your server (or if you're editing it on the server, just save it). Head over to your Nova site and you should see that things should be changed.</p>

<p>It's important to note that menu items don't respect the language files since they're stored in the database. If you want to change something in a menu item, simply edit the menu item.</p>