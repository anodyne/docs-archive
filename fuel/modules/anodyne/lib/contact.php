<?php
/**
 * Contact Modal for the Anodyne sites.
 */

// Pull in the composer autoloader
require 'vendor/autoload.php';

if (isset($_POST['submit']))
{
	// Set the variables
	$name 		= trim($_POST['name']);
	$email		= trim($_POST['email']);
	$content	= trim($_POST['message']);
	$subject	= trim($_POST['subject']);
	
	if (empty($subject))
	{
		// Create a new transport
		$transport = Swift_MailTransport::newInstance();
	
		// Create a new mailer with the transport
		$mailer = Swift_Mailer::newInstance($transport);
	
		// Create a new message
		$message = Swift_Message::newInstance()
			->setSubject('Anodyne Site Contact')
			->setFrom(array($email => $name))
			->setTo(array('admin@anodyne-productions.com'))
			->setBody($content);
	
		// Send the message
		$mailer->send($message);
	}
}

?><script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/additional-methods.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		
		var v = $('#contactform').validate({
			errorElement: 'p',
			errorClass: 'help-inline',
			highlight: function(element, errorClass) {
				$(element).parent().parent().addClass('error');
			},
			unhighlight: function(element, errorClass) {
				$(element).parent().parent().removeClass('error');
			},
			errorPlacement: function(error, element) {
				error.insertAfter(element);
			},
			rules: {
				name: "required",
				email: {
					required: true,
					email: true
				},
				message: {
					required: true,
					minWords: 5
				}
			},
			messages: {
				name: "Oops, you forget your name",
				email: {
					required: "Uh-oh, you didn't give us your email address",
					email: "Hey now, no funny business. Try again and make sure you're giving a real email address this time"
				},
				message: {
					required: "Danger, Will Robinson, you didn't tell us anything",
					minWords: "Now why would you try to send us a message that's less than 5 words long?"
				}
			}
		});
	});
</script>
<div id="contactModal" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3>Get In Touch</h3>
	</div>
	
	<form method="post" action="index.php" id="contactform">
		<div class="modal-body">
			<fieldset class="control-group">
				<label class="control-label">Your Name</label>
				<div class="controls">
					<input type="text" name="name" placeholder="Your Name" class="span4">
				</div>
			</fieldset>
			
			<fieldset class="control-group">
				<label class="control-label">Your Email Address</label>
				<div class="controls">
					<input type="email" name="email" placeholder="Your Email Address" class="span4">
				</div>
			</fieldset>
			
			<fieldset class="control-group">
				<label class="control-label">Message</label>
				<div class="controls">
					<textarea name="message" rows="8" placeholder="Your Message" class="span5"></textarea>
					<input type="text" name="subject" style="background:none;border:none;box-shadow:0 0 0 transparent, inset 0 0 0 transparent, inset 0 0 0 transparent">
				</div>
			</fieldset>
		</div>
		
		<div class="modal-footer">
			<button type="submit" name="submit" class="btn" id="submit">Submit</button>
		</div>
	</form>
</div>