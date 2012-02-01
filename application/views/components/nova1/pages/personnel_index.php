<h1><?php echo $header;?></h1>

<p>The index page of the personnel section is the crew manifest. From here, a person can see all the playing characters, all the non-playing characters, former characters, and open positions. They can also click a link to move to the join page and apply for an open position.</p>

<p class="alert alert-info"><strong>Note:</strong> Any active characters not assigned to a player will not be displayed on the manifest.</p>

<p>For large manifests, a loading icon will be shown while Nova loads the manifest. Once the page is ready to be displayed, the loading graphic goes away and is replaced by the manifest. The image can be replaced by placing an image called loader.gif into your skin's image folder. Nova will recognize that it's there and use that instead of the system default.</p>

<h2>Multiple Manifests</h2>

<p>Nova 1.2 introduced the multiple manifest feature which allows admins to create different views of the characters on the sim. If there is only one manifest for the sim (the default), the manifest's header content will be shown followed by the normal manifest. If there are several manifests available, Nova will show a listing of the manifests with links to visit the other manifests.</p>

<h2>The Manifest</h2>

<p>Once the page has loaded, there are controls at the top of the page to control exactly what you see. The first line will show the item indicated. The following are the actions that will happen with each click:</p>

<ul>
	<li><strong>All Characters</strong> &ndash; shows all playing characters and all non-playing characters</li>
	<li><strong>Playing Characters</strong> &ndash; shows all playing characters</li>
	<li><strong>Non-Playing Characters</strong> &ndash; shows all non-playing characters</li>
	<li><strong>Open Positions</strong> &ndash; shows all positions that have 1 or more open slots</li>
	<li><strong>Inactive Characters</strong> &ndash; shows all characters who are inactive, such as former characters</li>
</ul>

<p>The second line of the small navigation at the top is a toggle control. Click on the item once will toggle that item to be shown (if it's hidden). Clicking it again will hide it (or vice versa if the reverse is true). There are two toggle links: non-playing characters and open positions.</p>

<p>Manifest defaults are controlled through the Site Settings page.</p>

<p>The manifest is grouped by departments in the order they are set in the Department Management page. Within each department are that department's positions in the order they are set in the Position Management page. For each position, if there is a character in that position, they're displayed on the line. If there isn't a character in that role, it will display a link to apply for the position. In order for a position to appear with a link to apply, that position needs to have at least 1 open slot. The number of open slots can be changed from the Position Management page.</p>

<p>One new feature in Nova is sub departments, or departments within departments. If there is a sub department as part of a department, it will display the heading for the sub department along with all its positions at the bottom of the list of a department's positions. Sub departments and their positions work the same way as normal departments and their positions, and all of them can be edited from the Department Management and Position Management pages.</p>

<p>Rank images are stored in <samp>application/assets/common/[YOUR GENRE]/ranks</samp> and are displayed from the database based on the ID that's put in to the database for each character's rank field. You can change someone's rank through the Character Management page. Ranks can be changed through the Rank Management page.</p>

<p>Nova uses the same generic images in place of combadges. Clicking on the image will take a user to that character's personal biography. Playing characters have a blue badge, NPCs have a gray badge, players on LOA have a red badge, and players on ELOA have an orange badge. Like all other images in Nova, the combadge images can be changed for a specific skin by simply placing the image you want (with the same name and extension) in your skin's image folder. Nova will use the skin's version instead of the system version. In addition, combadge images also have an added layer. If you want to change the combadge image for the entire system, you can do so without touching the core image files by placing the new image(s) you want in the <samp>application/assets/common/[YOUR GENRE]/images</samp> folder. For combadge images, Nova will look first in the skin, then in the genre images folder, then in the system defaults.</p>