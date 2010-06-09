<h1><?php echo $header;?></h1>

<p>The Admin Control Panel is the gateway to Nova's backend features. From the ACP, you can get statistics and take action on a variety of items quickly and easily. Included in the ACP is a new panel that shows who's currently online as well as several other items and a listing of recent entries. In addition, the control panel will also notify users of new features that've been added to Nova in an update and prompt them to change their password in the event they request a new password from the system.</p>

<h2>The ACP Panel</h2>

<h3>Nova Updates</h3>

<p>When a new version of Nova is available, the system will notify all system administrators with a new section in the ACP panel. The version and brief release notes will be displayed as well as a link to the Anodyne site to download the new version. If there is a new version and the user is a system administrator, they'll see a new section in the ACP panel that will be selected by default. If there are no updates, the section will not display.</p>

<p>In addition, we've built in a severity system to updates for Nova that works as follows:</p>

<ul>
	<li><strong>Critical</strong> &ndash; these updates will generally patch security or significant bugs that have broken core functionality. These updates are recommended for immediate application for all systems.</li>
	<li><strong>Major</strong> &ndash; updates labeled as major will normally be moving from one version to another (1.0 to 2.0) or from one minor version to another (1.0 to 1.1). These updates are recommended for all systems.</li>
	<li><strong>Minor</strong> &ndash; updates labeled as minor will be used for the majority of updates as they involve incremental updates. Minor new features may be added in these updates, but generally, they will be bug fixes.</li>
</ul>

<p>If you'd prefer not to do the update, but don't want to remove update notifications altogether, you can choose to ignore the current version by clicking on the ignore link in the update notification panel. You won't be shown the notification for that particular version again, but when a new version comes out, you'll be prompted normally.</p>

<h3>My Nova</h3>

<p>Nova keeps track of all your statistics and displays them in one list so you can see your progress as a player. Included in the list of stats are total posts, total post comments, total personal logs, total personal log comments, total news items and total news item comments. This panel will be the first one shown if there are no notifications to be displayed.</p>

<h3>My Notifications</h3>

<p>Nova will notify users of saved items awaiting their input, pending items that need action taken on them and unread private messages. Each item has a link to their respective page where you'll be able to take action on the item. This panel will be the first one shown if there are notifications, otherwise, My Nova will be shown by default.</p>

<h3>Activity</h3>

<p>Users with the game master flag will be notified of player inactivity through the ACP panel with an activity section. Anyone who has not met the minimum posting timeframe requirements will be displayed in a list along with the last time they logged in. This is purely an informational item; no action can be taken from this section of the ACP Panel.</p>

<h3>Milestones</h3>

<p>If any member of the crew has reached a significant time milestone, they will be displayed in this section. The milestones section can be seen by all members of the crew. The milestones that have been built into the system are 6 months and at the start of every year. The member of the crew will stay displayed in this section for the month of their milestone then automatically be removed.</p>

<h2>Recent Entries</h2>

<p>Nova provides a quick glance at the most recent mission posts, personal logs and news items along with links to view more posts, logs and news items.</p>

<h2>What's New in Nova?</h2>

<p>After successfully completing an update to Nova, the first time users log in, they'll be greeted with a modal window explaining the new features, bug fixes and enhancements that've been made in the version of Nova. Once this dialog has displayed once, it will not display again until the system is updated again.</p>

<h2>Password Change</h2>

<p>If a player forgets their password and needs to request a new one from the system, Nova will prompt them with a modal dialog and ask them to change their password to something they can remember. A player can choose to ignore the prompt, but until they change their password, they will continually be prompted to update their password when they go to the control panel.</p>