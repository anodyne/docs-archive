<h1><?php echo $header;?></h1>

<p>SMS 2.5 takes advantage of HTML's ability to use images as buttons instead of the system default. Because of this, skinners have far more control over the look and feel of their skin, even down to what the buttons look like. Below are some guidelines for creating your own button sets to use in your skins.</p>

<h2>Requirements</h2>

<p>The only requirement for creating your own button sets is that the final product must be a PNG file. The system uses hard-coded PNG files because of their compression as well as support for alpha-channel transparency, making them ideal for icons and buttons that fit seamlessly into any background.</p>

<p>In addition, to ensure there are no missing images, the following must be their own buttons:</p>

<ul>
	<li>Activate</li>
	<li>Add</li>
	<li>Apply</li>
	<li>Approve</li>
	<li>Create</li>
	<li>Deactivate</li>
	<li>Delete</li>
	<li>Login</li>
	<li>Nominate</li>
	<li>Post</li>
	<li>Reject</li>
	<li>Remove</li>
	<li>Reset</li>
	<li>Save</li>
	<li>Send</li>
	<li>Submit</li>
	<li>Update</li>
</ul> 

<h2>The Basics</h2>

<p>The default buttons that SMS uses are 125 pixels wide by 25 pixels tall and are created in Photoshop. You can use whatever image editor you feel most comfortable with. There is no limit on the size of buttons or fonts you use since the final product will be an image.</p>

<p>The button background can be handled in one of three ways. If you don't want any hover action, you can simply create separate buttons with the necessary text on the face. In the same vein, if you don't want any hover action, you can create the text alone as a PNG with the button face as a background element which can be defined in CSS. Finally, if you want hover action, you should create the text alone as a PNG with the various buttons faces as background elements defined through CSS. You can do a standard face, hover state, active state and visited state.</p>