<h1><?php echo $header;?></h1>

<p>When someone applies through Nova's application page, Nova stores information about the application to be referenced later if necessary or just provide a historical look back at the players/characters who applied for the RPG. After applying, a record is created in the applications table with some basic information. After action is taken on the application, the record is updated to reflect the action taken and if an email message is sent, a copy of the message is put into the database.</p>

<p>The list of applications are sorted by the date they were submitted beginning with the last application received. The list includes the character name, the position they applied for, the player name, email address, the date they applied and an icon representing the action taken on the application. A green icon indicates the character was accepted, a red icon indicates the character was rejected, an X icon indicates the character was deleted and a yellow icon indicates the character is still pending. Clicking on the view icon will show you the application's details.</p>

<h2>Viewing Application Details</h2>

<p>You can view an application's details by clicking on the view icon. You'll be sent to another page with a simple listing of the information captured at the time the application was submitted. The information Nova retains is:</p>

<ul>
	<li>Player name</li>
	<li>Player ID (though the ID may no longer exist)</li>
	<li>Email address</li>
	<li>Character name</li>
	<li>Character ID (though the ID may no longer exist)</li>
	<li>Position applied for (this is stored as plain text and not a position ID in the event positions are changed)</li>
	<li>The date the application was submitted</li>
	<li>The action take (accepted, rejected or deleted)</li>
	<li>The email message sent to the player (if any)</li>
</ul>

<p class="important"><strong>Note:</strong> To save space in the database, the applications table does not retain character bio information.</p>