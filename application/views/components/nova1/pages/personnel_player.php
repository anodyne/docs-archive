<h1><?php echo $header;?></h1>

<p>Player bios is a new feature in Nova that breaks player information into its own page. Because Nova allows a single player to be associated with more than one character, it was necessary to do something like this so as to not print the same information on every character bio. The player bio was the result. The player bio is broken into 6 tabs that give a variety of information about the player.</p>

<h2>Basic Info</h2>

<p>The basic info tab gives the most basic information about the player. Information included in the tab is real name, date of birth (if provided), their location (if provided), email address, any instant messenger handles they might have provided, their timezone, any interests they may have provided and a brief biography if they chose to complete it.</p>

<p>Beneath the player's timezone is a calcuation of the time difference between your timezone and theirs. This is determined based on the individual user's timezone setting which can be changed in their account settings. After changing this setting, you must log out and log back in to see the changes.</p>

<h2>Character Info</h2>

<p>The character info tab gives an overview of the characters associated with the player. The list will show all active characters and how long they've been active for. In addition, there are also sections for NPCs and inactive characters. This view allows a user to get a quick overview of all the characters that have been played by the player. Clicking on the character name will take the user to that character's bio page.</p>

<h2>Rank History</h2>

<p>The rank history tab gives an overview of each character's promotion and demotion history. These values are calculated based on the rank order. If a character's previous rank has a higher order than their current one, they've been demoted. If a character's previous rank has a lower order than their current one, they've been promoted. All information about promotions and demotions are tracked in their own database table.</p>

<h2>Stats</h2>

<p>The stats tab provides a variety of statistics about the player including: how long ago they joined, their last login, their last post, the total number of mission posts and their averages for as long as they've been on the RPG and their total number of personal logs plus their averages for as long as they've been on the RPG.</p>

<h2>Posting Info</h2>

<p>The posting info tab provides a glance at the last posts that player has done. This will take into account every character associated with the player and display all their mission posts and all their personal logs. Links are available for each section to go to another page which will show all posts/logs for that player broken down by character.</p>

<h2>Awards</h2>

<p>The awards tab will give a user an overview of all awards won by the player. This will taken into account every character associated with the player and display all their awards, be it in character, out of character, or both. A link is available to go to another page which will show all awards for that player.</p>