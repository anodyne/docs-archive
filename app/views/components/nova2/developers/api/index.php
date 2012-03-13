<h1>The Nova API</h1>

<p>New to Nova 2 is a basic API that allows developers to tap in to a Nova system and pull back information about mission posts, personal logs, news items and characters without having to be on the actual Nova site. There are several advantages to an API:</p>

<ul>
	<li>Convenience &ndash; information can be pulled from a Nova site without actually being on the site.</li>
	<li>Ease-of-use &ndash; the API uses standard HTTP verbs and standard web technologies so there isn't a large learning curve.</li>
	<li>More secure &ndash; admins don't need to open up database server ports to the wider Internet (and potentially harmful attacks) so the information can be accessed from elsewhere.</li>
</ul>

<h2>What the Hell is an API?</h2>

<p>So what exactly do we mean when we talk about an API? In general terms, an API is an application programming interface. More specifically, when we're talking about an API in web development (which can also be called a web service), an API is a set of HTTP requests and their responses that send information from the system to a client as XML or JSON. It sounds complicated, but basically, it just means you can use something like cURL to send a specific URL to the server and in return, the server will send formatted XML or JSON back to the user to use however they want.</p>

<p>The Nova API would come in very handy in situations where a game is part of a fleet or group and that group wants to pull the latest posts or news from Nova. Using simple API calls, a site sitting on a different server and different domain can easily pull that information and display it on their site without admins having to do anything. This is just one simple example. There are plenty of other potential use-cases for the API.</p>

<h2>How To Use the API</h2>

<ul>
	<li><a href="<?php echo Uri::create('nova2/api/using/curl');?>">With cURL</a></li>
	<li><a href="<?php echo Uri::create('nova2/api/using/simplexml');?>">With SimpleXML</a></li>
</ul>

<h2>Limitations</h2>

<ul>
	<li>As of version 1.0 of the API, it is <strong>read-only</strong>. In future versions, we'll provide means of authentication and using the DELETE, PUT and POST verbs for interacting with the system in new ways. (For example, a fleet could be set up to automatically push certain categories of fleet news to a Nova site from the fleet site as long as authenticated credentials are passed along.)</li>
	<li>Calls that return news items will not return private news items.</li>
	<li>Retrieving a list of users or specific user information is prohibited. This information would require authentication so that only authorized people are allowed to retrieve it.</li>
</ul>

<h2>API Methods</h2>

<p>The Nova API comes with access to a wide variety of data from your Nova site for you to use however you want. Using this reference, you can check out all of the things you can pull from the NOva API and get started working with the Nova API today!</p>

<h3><a href="<?php echo Uri::create('nova2/api/methods');?>">API Methods &raquo;</a></h3>