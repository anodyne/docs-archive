<h1>Nova Configuration</h1>

<h2>Genre</h2>

<p>One of the most important configuration variables, the genre option will tell Nova what position, department, and rank data to use when installing the system as well as when accessing the database. If this is blank, the system will not install! By default, Nova ships with <dfn>DS9</dfn> as the default genre.</p>

<h2>Meta Data</h2>

<p>Nova comes with some default meta data, but admins can change the data to their preference through variables in the <samp>./application/config/nova.php</samp> file. By default, Nova ships with the following meta data:</p>

<ul>
	<li><strong>Description</strong> &ndash; Anodyne Productions' premier online RPG management software</li>
	<li><strong>Author</strong> &ndash; Anodyne Productions</li>
	<li><strong>Keywords</strong> &ndash; nova, rpg management, anodyne, rpg, sms</li>
</ul>

<h2>RSS Settings</h2>

<p>Nova allows people (crew and otherwise) to subscribe to RSS feeds with mission posts, personal logs, and news items. There are several options for configuring these in <samp>./application/config/nova.php</samp>. More information about the configuration options can be found in the RSS Feeds page.</p>

<h2>Thresher Settings</h2>

<p>Nova's integrated mini wiki, Thresher, has a single config file that allows admins to change the way content is stored and parsed. By default, Thresher will store and parse wiki page content as HTML, but you can also use BBCode, Markdown and Textile for storing and parsing. You can change the parse type in the Thresher config file found at <samp>application/config/thresher.php</samp>.</p>

<p class="important"><strong>Note:</strong> Once you have selected a parse type, you shouldn't change it. If you change the parse type, your wiki pages may not display properly.</p>