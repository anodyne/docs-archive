<h1><?php echo $header;?></h1>

<p>Nova provides the ultimate control for users by allowing them to upload images to the server for use in character biographies, awards, missions and tour items. This feature ensures that admins no longer have to manually manage the process, and instead, can let their players do all the legwork of getting their images on the server.</p>

<h4>Permissions</h4>

<p>In order to upload images to the server, a user needs to have <kbd>upload/index</kbd> permissions as well as one of the following:</p>

<ul>
	<li>Edit character bio permissions to upload bio images</li>
	<li>Manage awards permissions to upload award images</li>
	<li>Manage missions permissions to upload mission images</li>
	<li>Manage tour items permissions to upload tour item images</li>
</ul>

<h2>Uploading an Image</h2>

<p>The upload page will give you a dropdown menu with your options for what kind of image it is. Select the image type from the dropdown and click Browse. A standard dialog box will open and you can select your image from there. Once you have selected your image, click <strong>Upload</strong> and Nova will attempt to upload the image. After the image has been uploaded, it'll be available in a list of images on the respective pages. (If you upload a character biography image, you'll see the list in the images tab when you edit a character, etc.)</p>

<p>At this time there is no way to upload multiple images simultaneously. Attempting to upload multiple images at the same time will result in problems with your upload records.</p>

<p class="important"><strong>Note:</strong> Nova will automatically remove underscores (_), dashes (-) and equal signs (=) from the filename when uploading. This is necessary because of the way jQuery serializes its data for use in the sortable plugin that allows users to drag and drop their images in the order they want. If your image contains those characters, they'll be removed.</p>