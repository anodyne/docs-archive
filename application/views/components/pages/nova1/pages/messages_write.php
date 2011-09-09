<h1><?php echo $header;?></h1>

<p>Writing a private message is very straightforward. All you need to provide is a recipient, a subject, and your content then click submit. Once submitted, the private message will be stored in the database and a copy of it will be sent to the recipient if they have elected to receive email notifications of private messages.</p>

<p>One of the major changes to Nova&rsquo;s private message system is the ability to add multiple recipients to your message. If you only want to send your message to one person, simply select their name from the dropdown list, fill in your subject, write your message, and click submit. If you want to send your message to more than one person, select the first person&rsquo;s name from the dropdown list and then click Add Recipient to the right of the dropdown menu. Their name will appear below with a red icon to the left. Clicking on the red icon will remove their name from the message. Once someone has been selected from the list, their name will be disabled in the list and you will not be able to select them again until they have been removed from the list below the dropdown menu.</p>

<p>It is important to note that once you add a recipient to the list below, only that list will be used to send the message. If you add two names to the list and leave the third in the dropdown menu, the message will only be sent to the two in the list and the third in the menu will be ignored. Make sure you add all recipients before submitting your message! Additionally, you will not be allowed to send a private message that does not have a recipient. If you attempt to, an error will be displayed and your subject and message fields will be populated with the information from before you clicked Submit. Once you have specified at least one recipient, you will be allowed to send your private message.</p>

<p>The email they will receive (or that you will receive when you get a private message) has the author, the subject, who it was sent to and the message. You will also be given a link to login to the site and review your private messages. If someone has chosen not to receive email notifications of private messages, they will not receive the email but will see they have new messages the next time they login to Nova.</p>

<h4>Permissions</h4>

<p>In order to access all the private messaging features, a user need only have <kbd>messages/index</kbd> privileges.</p>

<h2>Replying to a Private Message</h2>

<p>Replying to a private message you&rsquo;ve received is almost identical to writing a message. You will see the same dropdown menu (this time it will be populated with the person you&rsquo;re replying to). The subject will be populated with the subject of the message you&rsquo;re replying to, prepended by the phrase RE: and there will be a box below the composition fields with the content of the message you&rsquo;re replying to. Like writing a new private message, you can choose to add multiple recipients to the message in the same way you would for a new private message.</p>

<p>You cannot reply to a message you are not the author of or a recipient of.</p>

<h2>Replying to All Recipients of a Private Message</h2>

<p>Replying to everyone involved in a private message you&rsquo;ve received is identical to replying to a message. You will see the same dropdown menu, the subject will be populated with the subject of the message you&rsquo;re replying to, prepended by the phrase RE: and there will be a box below the composition fields with the content of the message you&rsquo;re replying to. Unlike replying to a private message, the dropdown menu will not be populated with the author. Instead, there will be a list below the dropdown menu with the people who will receive the message. Every member in the list will have their name disabled in the dropdown list to prevent them from being added multiple times. You can type your message as you normally would and send the private message to everyone involved in your private message.</p>

<p>You cannot reply to all of a message you are not the author of or a recipient of.</p>

<h2>Forwarding a Private Message</h2>

<p>Forwarding a private message you&rsquo;ve received is almost identical to write a new message. You will see the same dropdown menu, the subject will be populated with the subject of the message you&rsquo;re forwarding, prepended by the phrase FWD: and the message box will be populated with the private message you&rsquo;re forwarding. Like writing a new message, you can add multiple recipients in the same way you would for writing a new private message.</p>

<p>You cannot forward a message you are not the author of or a recipient of.</p>