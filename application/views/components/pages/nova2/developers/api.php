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

<p>Coming soon...</p>

<h2>Limitations</h2>

<p>As of version 1.0 of the API, it is <strong>read-only</strong>. In future versions, we'll provide means of authentication and using the DELETE, PUT and POST verbs for interacting with the system in new ways. (For example, a fleet could be set up to automatically push certain categories of fleet news to a Nova site from the fleet site as long as authenticated credentials are passed along.)</p>

<p>The API calls that return news items will not return private news items.</p>

<h1>The API</h1>

<h2>Format</h2>

<p>Any of the API calls can pass a format option allows a developer to change the return format. By default, the API will return XML, but you can also have it return JSON and HTML.</p>

<pre>api/characters/format/json
api/characters/format/html</pre>

<h2>Get a Character</h2>

<pre>api/character/id/:id</pre>

<p>Pulls back the character with the ID passed to the call. Any numerical value can be passed to the call. If no character is found a 404 will be returned.</p>

<h2>Get All Characters</h2>

<pre>api/character/status/:status</pre>

<p>Pulls back a complete list of character with the status passed to the call. Nova understands the following values for status:</p>

<ul>
	<li>active (default if nothing is passed)</li>
	<li>inactive</li>
	<li>pending</li>
	<li>npc</li>
	<li>user_npc</li>
	<li>has_user</li>
	<li>no_user</li>
	<li>all</li>
</ul>

<h2>Get a Personal Log</h2>

<pre>api/log/id/:id</pre>

<p>Pulls back the personal log with the ID passed to the call. Any numerical value can be passed to the call. If no personal log is found a 404 will be returned.</p>

<h2>Get All Personal Logs</h2>

<pre>api/logs/status/:status
api/logs/limit/:number
api/logs/offset/:number
api/logs/user/:id
api/logs/character/:id</pre>

<p>Pulls back a complete list of personal logs with the options passed to the call. These calls can be strung together to pull back specific information:</p>

<pre>api/logs/user/1/status/saved
// this would pull back all saved personal logs owned by the user with ID 1</pre>

<h2>Get All Current Missions</h2>

<pre>api/mission</pre>

<p>Pulls back the current missions. If no current missions are found a 404 will be returned.</p>

<h2>Get a News Item</h2>

<pre>api/news/id/:id</pre>

<p>Pulls back the news item with the ID passed to the call. Any numerical value can be passed to the call. If no news item is found a 404 will be returned. If the call attempts to retrieve a private news item, a 403 will be returned.</p>

<h2>Get All News Items</h2>

<pre>api/allnews/status/:status
api/allnews/limit/:number
api/allnews/offset/:number
api/allnews/user/:id
api/allnews/character/:id</pre>

<p>Pulls back a complete list of news items with the options passed to the call. These calls can be strung together to pull back specific information:</p>

<pre>api/allnews/user/1/status/saved
// this would pull back all saved news items owned by the user with ID 1</pre>

<h2>Get a Mission Post</h2>

<pre>api/missionpost/id/:id</pre>

<p>Pulls back the mission post with the ID passed to the call. Any numerical value can be passed to the call. If no mission post is found a 404 will be returned.</p>

<h2>Get All Mission Posts</h2>

<pre>api/missionposts/status/:status
api/missionposts/limit/:number
api/missionposts/offset/:number
api/missionposts/user/:id
api/missionposts/character/:id
api/missionposts/mission/:id
api/missionposts/order/:order</pre>

<p>Pulls back a complete list of mission posts with the options passed to the call. These calls can be strung together to pull back specific information:</p>

<pre>api/missionposts/mission/1/status/saved
// this would pull back all saved mission posts that are part of the mission with ID 1</pre>