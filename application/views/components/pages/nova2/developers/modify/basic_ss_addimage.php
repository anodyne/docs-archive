<h1>Seamless Substitution: Adding an Image to a Page</h1>

<p>The concept behind seamless substitution is pretty simple: Nova will use its system default for icons, pages and Javascript files unless the same file exists in either the current skin or the base override, in which case, Nova will use that instead.</p>

<h2>The Problem</h2>

<p>You found an awesome image that you want to put on a page in your site.</p>

<h2>The Solution</h2>

<p>There are actually two different ways to accomplish this. We'll talk about both ways since the first way may not apply on every page.</p>

<h3>Using Site Messages</h3>

<p>If you wanted to add the image to the main page or the sim page, you'd be able to very easily use Site Messages to insert the image. All you'd need to do is upload the image to either a photo sharing site or your own site and link to the image using a standard HTML image tag in the respective message in Site Messages. Once you've saved the message, your image will appear where you put it. (Remember, you can use any HTML in Site Messages now.)</p>

<h3>Using Seamless Substitution</h3>

<p>Sometimes though, using a Site Message isn't an option. In those cases, you can use seamless substitution to accomplish the same thing. In order to add an image to a page using seamless substitution, you need to start by uploading the image to either a photo sharing site or your own site. Once you've done that, find the appropriate view file in <samp>nova/modules/core/views/_base</samp>. For this example, we're going to ignore the fact that we can make the change through Site Messages for the sim page and do it with seamless substitution.</p>

<p>The particular view file you'll need to copy into <samp>application/views/_base_override</samp> is <samp>nova/modules/core/views/_base/main/pages/sim_index.php</samp>. How do you know what the right view file is? The <samp>main</samp> part tells us that this is a page in the main section of the site and the view files are prefixed with the controller and the action. In this case, sim/index. While that's not always the case, view files are named well enough that you'll be able to tell which page it's being used for.</p>

<p>Now that you've copied <samp>nova/modules/core/views/_base/main/pages/sim_index.php</samp> to <samp>application/views/_base_override/main/pages</samp> you can edit the version in the <samp>_base_override</samp> folder. Once you're done making your changes, save the file and upload it to your server. The next time you go to the sim page, you'll see your image wherever you put it in the page. Remember that view files are mostly HTML with some PHP mixed in, so any HTML you want to use can easily be used in view files.</p>

<p>This same process will work for any view file in Nova!</p>

<p class="important">Why do I need to copy the file to another location? Why not just change the file in the <em>_base</em> folder? The short answer is <strong>because putting it in the application folder is the right way to do it</strong> (kinda like your Mom telling you "because I said so"). The longer answer is that the <em>_base</em> folder in the Nova core will get replaced with every update, so unless you want to update your views after every update, best to use seamless substitution and put your changes in the application folder.</p>