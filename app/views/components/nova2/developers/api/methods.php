<h1>API Methods</h1>

<h2>Format</h2>

<p>Any of the API calls can pass a format option which allows a developer to change the return format. By default, the API will return XML, but you can also have it return JSON and HTML.</p>

<pre>api/characters/format/json
api/characters/format/html</pre>

<h2>Get a Character</h2>

<pre>api/character/id/:id</pre>

<p>Pulls back the character with the ID passed to the call. Any numerical value can be passed to the call. If no character is found a 404 will be returned.</p>

<h2>Get All Characters</h2>

<pre>api/characters/status/:status</pre>

<p>Pulls back a complete list of characters with the status passed to the call. Nova understands the following values for status:</p>

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