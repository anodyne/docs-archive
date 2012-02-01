<h1><?php echo $header;?></h1>

<p>Inevitably, players will need to take breaks from the game from time to time. For just those instances, Nova includes a status change page where users can notify the game masters that they are taking a leave of absence or extended leave of absence. There is no request/approval workflow, but Nova will send emails out to anyone with the game master flag to notify them that a player has taken an LOA. In addition, the image next to their name on the manifest will show either the LOA or ELOA badge.</p>

<p>The change your status, you simply set your status, give a duration and reason for the game masters then click submit. Your status will be changed immediately and if system email is turned on, an email will be sent to the game masters with the details of the notification.</p>

<h3>Permissions</h3>

<p>In order to request an LOA, you need to have <kbd>user/account</kbd> permissions with either access level 1 or 2. There are no differences between level 1 and level 2 access. You can only request an LOA for yourself, admins wishing to change someone's LOA status should use the admin tab of the <?php echo Html::anchor('nova1/pages/user/account', 'User Account');?> page.</p>