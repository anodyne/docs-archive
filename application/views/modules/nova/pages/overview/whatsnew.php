<h1><?php echo $header;?></h1>

<p>Despite only being available since April 2010, Nova has already gone through a myriad of changes. Eight maintenance releases and a major update later, Nova is a better, more stable system than it was when it was released. Originally, our intention was to launch right in to Nova 2 and leave Nova 1 to its own devices after it was stable, but we realized that doing that would handicap RPGs, so it's our goal to progressively enhance Nova through regular updates. The goal is to release a major update to Nova 1 every 3 months that'll provide bug fixes and make managing your RPG even easier.</p>

<p>For version 1.2, we've patched nearly two dozen outstanding issues with the system and added several major new features. This is the biggest update to Nova so far and we want to make sure everyone knows all of the cool new features they have at their disposal now, so let's take a little tour of what's new in Nova 1.2!</p>

<h2>Multiple Manifests</h2>

<p>Let's face it, sims these days have evolved beyond the standard single manifest format we've been using since 2005. There are a growing number of sims that have sub-sims or want more control over where certain things are shown. To address these new demands, Nova 1.2 includes the ability to create and manage multiple manifests. This new functionality will allow admins to have greater control over how their manifests are presented to their users and visitors.</p>

<p>Creating a manifest, like many other features in Nova, is simply a matter of clicking a button and filling out some information. That's the easy part. The biggest challenge with creating this feature was the best way to do it. We'll spare you the details, but in the end, we decided that a department should have to be assigned to a manifest. This will allow admins to duplicate departments and then assign the same department and positions to a completely different manifest. (The department management page was updated to allow admins to duplicate departments and to make it easier to move around the page in general.)</p>

<p>So once you've created the manifest, there are two ways to assign departments to a manifest. The first way is to use the new dropdown in department management to set the manifest. If you have a lot of departments to assign though, that process could be tedious. The second way is to use the new assign departments page, available from the manifest management page. Using some simple drag and drop functionality, admins can simply drag the department they want into the right manifest. Unfortunately, the jQuery UI's functionality for drag and drop isn't as smooth as we'd like, so we'll be looking to improve this in future releases.</p>

<p>On to the manifest display!</p>

<p>The way it works by default is that if you only have one manifest, the character manifest will look the same as it does in Nova 1.1. Simple enough. If you have more than one manifest, Nova will show you a list of manifests at the top of the page. The initial manifest Nova uses is based on which manifest is set as the default. Clicking on one of the manifest links will take the user to that manifest. In addition, we've also added the ability for admins to create text at the top of the manifest in the event you want to provide introductory text, links or images above each manifest. Just fill in the text on the manifest management page and you're good to go!</p>

<h2>Ban Controls</h2>

<p>Every so often, we hear about someone getting incessantly spammed through the join form. It's not common, but it does happen from time to time. Even if it isn't a spambot, sometimes users can be a little dense and constantly apply despite having been rejected repeatedly. Before 1.2, admins simply had to live with these things; not any more. Nova 1.2 introduces <strong>ban controls</strong> to Nova's repertoire.</p>

<h3>Level 1 Ban</h3>

<p>Of the two levels of bans in Nova, a level 1 ban is probably the most common one you'll use. A level 1 ban simply doesn't let an application get put into the database. The user will be notified that they've been banned from applying through a standard flash message. These types of bans can be instituted by email address or IP address. To help with managing bans in Nova, we've also updated the Application report to provide the user's IP address in the event it's needed.</p>

<h3>Level 2 Ban</h3>

<p>A level 2 ban goes even further, preventing a user from even viewing the site. Instead, they're redirected to a page that tells them they've been banned and gives them access to the contact page in the event they want to get a hold of the admin. These types of bans can only be instituted by IP address (the application report will come in really handy here).</p>

<p>It's important to note that level 2 bans required us to create a hook. Basically, a hook is a piece of code that "hooks" in to the execution of the system at different points before it's rendered in the browser. Because of the fact that we're using a hook, Nova has to go out to the database and look for level 2 bans on every page load. This means the more level 2 bans it finds, the longer it'll take for your site to load. You should only be using level 2 bans in extreme circumstances. For instance, if a spambot is spamming you through the join form, you'll want to use a level 1 ban instead so that you aren't creating a longer list of bans for the system to check through.</p>

<h2>Deck Listing Improvements</h2>

<p>One of the things we unfortunately overlooked in the 1.1 release was the deck listing. We expanded Nova's specifications feature so that admins could create a bunch of different specification items and even associate tour items with specification items, but we didn't update the deck listing to allow the same. Consider that issue fixed. In 1.2, when you add a deck, you can simply tell it what specification item it should be associated with.</p>

<p>If you only have one specification item, the deck listing will only show those decks, but if you have several specification items, you'll be able to select from a list to see all of your deck listings.</p>

<h2>Contact Page Updates</h2>

<p>The contact page is the first update to come out of work on Nova 2. Instead of making users select who the email should go to, now all emails will go to the system administrators (that is, anyone who has the system administrator flag set in their account, done from the Admin tab on a user's account page). This makes it easier and quicker for a user to get in contact if they need to and eliminates confusion as to who their message will be going to.</p>

<h2>Bug Fixes</h2>

<p>Here are some of the major bugs that were fixed in 1.2:</p>

<ul>
	<li>Some users noticed that the activity panel was showing warnings for users who no longer had any active characters on the RPG. We've gone through and made sure that activity panel is only checking users who have active characters so you aren't seeing unnecessary information.</li>
	<li>Users reported that when they received the email from Nova with an application, the sample post was simply a wall of text and didn't respect the line breaks the user had put in. We've gone through and made sure that any line breaks the users puts in are shown in the email the GM gets.</li>
	<li>A bug in the SMS upgrade process meant that a lot of people weren't able to update their specifications properly, or in some cases, they weren't there. Unfortunately there's nothing we can do to bring them back, but for anyone still needing to upgrade from SMS, this won't be an issue any longer.</li>
	<li>In site settings, the timezone menu pulled in the wrong value to populate the field with, so even though the database was right, it looked like it was wrong because of what the dropdown menu was being populated with.</li>
	<li>For anyone who's done any major work with skinning, we've managed to fix a few spacing issues that could cause some headaches, especially if you were using seamless substitution to replace some of the icon files.</li>
	<li>There were still some pesky errors being thrown throughout the system and we've gone through and done our best to clean all of them up. There may still be a few out there, so if you see something in your error logs, make sure to let us know!</li>
	<li>Without even realizing it during development, we blocked out the flash message view file from being overridden through seamless substitution. That's been changed for the login side of things. In a future release of Nova, we'll make sure you can always override the flash message view with seamless substitution.</li>
	<li>Users with more than one character probably noticed that when they would post a mission entry when their primary character wasn't involved, Nova would still pull their primary character's name and put it in the email's FROM field. Now, we grab the first of the user's characters that we find on the entry instead.</li>
	<li>Oops! Private message emails didn't contain the contents of a private message. Our bad.</li>
	<li>In recent days, we've noticed an influx of people who are having a database error thrown that mentions not being able to count posts. The reason for this is that Nova is trying to do a count when it doesn't have a character ID. In most cases, this would happen when a user wasn't associated with a character though some people have reported that they're getting this error even when not logged in. We've gone through the system and tried our best to patch these issues up, even going so far as updating the actual models that pull information from the database as well. If people are still seeing the error, let us know!</li>
	<li>In addition, we've patched up all kinds of smaller bugs as well, some that you may notice, others you may not. If you find issues with Nova, make sure to let us know!</li>
</ul>