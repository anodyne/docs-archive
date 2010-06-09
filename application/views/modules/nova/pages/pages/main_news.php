<h1><?php echo $header;?></h1>

<p>The news page will display all news that&rsquo;s in the database in the activated state in an abbreviated state (by default, the first 50 words of the item). Pending and saved news items will not show up. If you are logged in, private news items will also appear in the list.</p>

<p>At the top of the page is a listing of the news categories with links to view only news items in those categories. Much like the manifest, once you click a link, it will hide everything but that category on the page. Because of this, if you have a lot of news items, a loading image may appear while the page works on hiding and showing the necessary news items.</p>

<p>Clicking on the title of a news item will take you to the full view of the news item.</p>

<p>Below the news item is a list of the author, when the news item was posted and the category it is in. If any of those elements are empty, they will not appear in the list. Additionally, if there are comments associated with the news item, a count of the number of comments will appear below the information.</p>