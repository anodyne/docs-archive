<h1><?php echo $header;?></h1>

<p>For RPGs that use a vessel or some type of location and want the ability to give players an idea of the layout, Nova comes with a built-in tour feature. Using the features on this page, you can administer the listing in a few easy steps, whether you&rsquo;re adding to it, taking away from it, or just updating it.</p>

<h4>Permissions</h4>

<p>In order to manage tour items, you need to have <kbd>manage/tour</kbd> permissions.</p>

<h2>Adding a Tour Item</h2>

<p>To add a tour item to Nova, simply click on the <strong>Add Tour Item</strong> link near the top of the page. You will be redirected to a page with two tabs: info and images. In the info tab, fill out all of the fields. When you've completed the fields in the info tab, click on the image tab and select your images from a list of uploaded images (if you have any) or use the text field to manually put the name of the image in the field. Once you're done, click <strong>Submit</strong> and Nova will create the tour item. Once the tour item has been created, you can view it from the <?php echo anchor('nova/pages/sim/tour', 'Tour');?> page.</p>

<h2>Editing a Tour Item</h2>

<p>To edit a tour item in Nova, simply click on the <a href="#" class='tip' tooltip='<?php echo img($images['edit']);?>'>edit icon</a> to the right of the tour item information. You will be redirected to a page with two tabs: info and images. In the info tab, update all of the fields you want. When you've finished updating the fields in the info tab, click on the images tab and select your image from a list of uploaded images (if you have any) or use the text field to manually put the name of the image in the field. Once you're done, click <strong>Submit</strong> and Nova will update the tour item.</p>

<h2>Deleting a Tour Item</h2>

<p>To delete a tour item from Nova, simply click on the <a href="#" class='tip' tooltip='<?php echo img($images['delete']);?>'>delete icon</a> to the right of the tour item information. A modal window will appear and ask you to confirm you want to delete the tour item. If you do, click <strong>Submit</strong> and Nova will delete the tour item. If you don't want to delete the item, you can click anywhere outside of the modal window, click the X or hit the Escape key to abort the delete process.</p>