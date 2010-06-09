<h1><?php echo $header;?></h1>

<p>Sometimes a character does something in the game that deserves recognition and sometimes a player does something out of the game that deserves some praise. We've built awards into Nova for just those reasons. Besides admins being able to just add awards to character though, other players can nominate characters for awards. All these award nominations will be held in a queue until they've been approved by the game master.</p>

<p>To nominate a character for an award (playing character or NPC), select the award from the dropdown list. After an award has been selected, Nova will display the award's description so you know you have the right one and will then populate the character menu with the proper options. If you select an award with a category of in character, all playing and non-playing characters will be available. For the both and out of character options, only playing characters can be selected. Fill-in your reason for nominating the character and click <strong>Submit</strong>. The admins will receive an email notifying them of the nomination and will be able to approve/reject the nomination from the control panel.</p>

<h2>Approving/Rejecting Award Nominations</h2>

<p>With users who have level 2 <kbd>user/nominate</kbd> privileges, the page will be split into 2 tabs: <strong>Nominate</strong> and <strong>Nomination Queue</strong>. The latter will display all pending award nominations for you to take action on. From this tab you can approve or reject any nomination that was sent in by a member of the crew.</p>

<h3>Approving</h3>

<p>To approve an award nomination, simply click on the <a href="#" class='tip' tooltip='<?php echo img($images['approve']);?>'>approve award nomination icon</a> to the right of the character name and award. A modal window will pop-up asking you if you're sure you want to approve the award. After clicking <strong>Submit</strong>, Nova will make the necessary changes and the award will appear in the player/character bio.</p>

<h3>Rejecting</h3>

<p>To reject an award nomination, simply click on the <a href="#" class='tip' tooltip='<?php echo img($images['reject']);?>'>reject award nomination icon</a> to the right of the character name and award. A modal window will pop-up asking you if you're sure you want to reject the award. After clicking <strong>Submit</strong>, Nova will make the necessary changes to the database. Nova will keep a copy of the nomination for the award nomination report, but the award will not appear anywhere on the site.</p>

<h2>Permissions</h2>

<p>In order to nominate someone for an award, you need to have <kbd>user/nominate</kbd> permissions at level 1 or higher. You can only nominate people for yourself from your main character. In order to approve/reject award nominations, you need to have level 2 permissions.</p>