<h1><?php echo $header;?></h1>

<p>The Chain of Command page is used to display the in character chain of command (and sometimes out of character as well). The ordering is controlled through the Chain of Command Management page. By default, Nova displays the character name, their position below their name, their rank, and a link to their character bio page.</p>

<p>One change in Nova is that, now, non-playing characters can hold positions within the chain of command.</p>

<p class="important"><strong>Note:</strong> Any active characters not assigned to a player will not be displayed on the chain of command.</p>

<p>Rank images are stored in <samp>application/assets/common/[YOUR GENRE]/ranks</samp> and are displayed from the database based on the ID that&rsquo;s put in to the database for each character&rsquo;s rank field. You can change someone&rsquo;s rank through the Character Management page. Ranks can be changed through the Rank Management page.</p>

<p>Nova uses the same generic images in place of combadges. Clicking on the image will take a user to that character&rsquo;s personal biography. Playing characters have a blue badge, NPCs have a gray badge, players on LOA have a red badge, and players on ELOA have an orange badge. Like all other images in Nova, the combadge images can be changed for a specific skin by simply placing the image you want (with the same name and extension) in your skin&rsquo;s image folder. Nova will use the skin&rsquo;s version instead of the system version. In addition, combadge images also have an added layer. If you want to change the combadge image for the entire system, you can do so without touching the core image files by placing the new image(s) you want in the <samp>application/assets/common/[YOUR GENRE]/images</samp> folder. For combadge images, Nova will look first in the skin, then in the genre images folder, then in the system defaults.</p>

<br />
<p class="related"><strong>See Also</strong>: <?php echo anchor('nova/pages/manage/coc', 'Chain of Command Management');?></p>