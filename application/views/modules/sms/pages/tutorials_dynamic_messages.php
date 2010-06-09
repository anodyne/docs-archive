<h1><?php echo $header;?></h1>

<p>SMS helps you run your RPG easier than you could without it. That's always been the goal and we're always looking for new ways to make managing your RPG easier and we think we've found a great way to save some time with Dynamic Activation messages.</p>

<p>John applies to your sim, and you're notified. You review the application and then have to send him a response saying whether or not he's been accepted or rejected. Of course, you sit down the write the email and even though the bulk of it is stored in the database, you always have to change a few things, like the position he applied for and (if accepted) the rank he's gonna have. And then, sometimes you just forget, so you've gotta go back and look. Dynamic Activation messages take that tedious part out by allowing admins to set wild cards in place of those items.</p>

<p>For instance, inserting the wild card #rank# into an acceptance message will replace that wild card with the text of whatever rank you've assigned them. This way, the admin doesn't have to do anything more than maybe update information about the current mission (or whatever else may be in your activation messages) and when you hit send, SMS automatically does the substitution.</p>

<h3>Available Wild Cards</h3>

<p>Wild cards exist for the following components:</p>

<ul>
	<li><strong>Rank</strong> &ndash; <dfn>#rank#</dfn> (only available in acceptance messages)</li>
	<li><strong>Position</strong> &ndash; <dfn>#position#</dfn></li>
	<li><strong>Name</strong> &ndash; <dfn>#name#</dfn></li>
	<li><strong>Ship Name</strong> &ndash; <dfn>#ship#</dfn></li>
</ul>