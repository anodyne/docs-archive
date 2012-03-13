<h1><?php echo $header;?></h1>

<p>In October of 2009, Anodyne switched our source control from Subversion to Git. There were a lot of reasons for the change, but the biggest reasons were Git's awesome branching/merging and the fact that Git is distributed and significantly faster. Instead of setting up a private Git server, we decided to use Github for hosting our code.</p>

<h2>What Is Github?</h2>

<p>Github is, simply put, social coding. Github makes it incredibly easy to fork projects, make changes and request pulls back into the original repository. Because Nova (and SMS) are hosted on Github, it's easy to track Nova's development and even get involved with development by forking Nova, making bug fixes and then issuing a pull request for Anodyne to put your code into the repository (we'll get in to talking about that policy later).</p>

<h3>What You Need to Know</h3>

<p>In order to continue with this tutorial, we're going to assume a few things. First, we assume you know what Git is, how it works and some of the basic principles involved with it. If you don't, you can read a great article called <a href="http://tom.preston-werner.com/2009/05/19/the-git-parable.html" target="_blank">The Git Parable</a> which highlights what Git is.</p>

<p>Second, we assume you have installed Git on your local machine and understand, at a very basic level, of how to interact with Git. You can find installation guides for Git at <a href="http://www.gitready.com/beginner/2009/01/27/installing-git.html" target="_blank">Git Ready</a>.</p>

<h2>So Why Do We Care About Github?</h2>

<p>Anodyne has always maintained a very closed development cycle, but starting with Nova, we opened that process up a little more to provide monthly builds for people to use and test the system before it's release. The response has been incredible so far and we're going to continue doing that during Nova's development, but sometimes, curiosity can get the best of you and you want to see what's being worked on before a beta is released. Since we're using Github, now you can get your hands on the code before the main release and even before the beta releases.

<p class="alert alert-info"><strong>Note:</strong> Code in the master tree can very often be incomplete and filled with bugs, so make sure you back up all your Nova data before trying to use code pulled from Github.</p>

<p>So let's talk about a specific situation to make this all more clear. Let's say after a few weeks of using Nova, you run across a bug, but it's a fairly easy fix that you know you could fix. Using Github, you can grab the source code, make the fix and request a pull with the fix. If approved, your code goes into the central repository and will be included in the next release!</p>

<h2>Okay, That's Kinda Cool. How Do I Get Started?</h2>

<p>Once you have Git installed, you need to fork Nova. In order to do this, you'll need to have a Github account. Forking a project is really easy. When you navigate to Nova's Github page (<a href="http://github.com/anodyne/nova" target="_blank">http://github.com/anodyne/nova</a>), there's a button at the top of the page that says <strong>Fork</strong>. Once you click that, Github will fork the project and put it into your repositories. From there, you can simply clone the project to your computer, make the changes and interact with Github like you normally would. Once you're done, you can click on the <strong>Pull Request</strong> button and send a message requesting for us to pull your code into Nova's master tree.</p>

<p class="alert alert-info"><strong>Note:</strong> If you have questions about Git or Github, please use Google or contact Github for answers. Like we said at the top of this tutorial, you need to know about this stuff before attempting to use it.</p>

<h2>So What Kinds of Things Can I Fork For?</h2>

<h3>Bugs</h3>

<p>No one likes having bugs in the system, so if you find something and you think you can fix it, you can make the fix and request a pull with bug fixes, just make sure you've tested it thoroughly before requesting the pull. We'd hate to have to reject the pull request because of buggy code.</p>

<h3>Translations</h3>

<p>If you've gone through the process of translating Nova and want it to be included, you can issue a pull request for the language files and we'll make sure those items are included on the AnodyneXtras site. If you are translating Nova into a language where the CodeIgniter core language files don't exist, you'll need to translate those as well. <strong>Translations are the only things we'll allow modifications to the <code>core</code> directory.</strong>

<h2>What Kinds of Things Shouldn't I Fork For?</h2>

<p>MODs for Nova are awesome, but those kinds of things don't belong in the Nova core. If you have a great MOD you'd like to share, you can easily create your own Github account and host your MODs from your Github page. If you'd prefer not to do that, you can sign up for a Google Code project and host your stuff on there or on your own server.</p>

<p>Skins won't be stored in the master tree either. If you send a pull request for a skin, it'll be rejected.</p>

<p>At this point, we're not going to accept pull request with new features. Because of the roadmap that's been developed for Nova, adding new features that aren't planned for can cause issues. If you have an idea for a feature, make sure to drop us a line and we'll look in to it for future versions of the system.</p>