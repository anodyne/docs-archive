<h1><?php echo $header;?></h1>

<p>Pages are at the heart of Thresher, so managing the creation and editing of pages is an incredibly easy and straightforward process.</p>

<p class="important"><strong>Note:</strong> More information about configuring Thresher can be found in the <?php echo Html::anchor('nova1/tutorials/config/nova', 'Configuring Nova');?> page.</p>

<h3>Permissions</h3>

<p>In order to create or edit pages in Thresher, a user needs to have <kbd>wiki/page</kbd> permissions.</p>

<h2>Creating a Wiki Page</h2>

<p>You can create a new wiki page by using the link in the sub navigation menu. You'll be shown fields for a page title, summary, content, categories and options for whether comments should be open or closed. The title, summary and comments fields are straightforward and should <strong>always</strong> be filled out.</p>

<p>The content text area is different from other text areas in the system as it is a rich text editor field. Using a simple plugin, Thresher will allows users to write their wiki pages using either HTML, BBCode, Markdown or Textile markups. Clicking one of the icons in the toolbar will create the appropriate tags in the text area and put the cursor inside the tags. You can use any amount of HTML you want in your wiki page content. The toolbar over the text area will allow you to add header elements, paragraph elements, bold, italics, underline, bulleted and numbered lists, images and links.</p>

<p class="important"><strong>Note:</strong> If you are using the HTML parse type, you can preview your work by clicking on the green checkmark icon. The other parse types don't support previews in Thresher yet.</p> 

<p>In order to select a category, you simply need to click the checkbox or the text of the item you want to add. To remove a category from the list, uncheck the checkbox. In addition, hovering over the question mark will display the category's description (if there is one).</p>

<p>When you are done creating your page, click <strong>Submit</strong> and the page will be added to Thresher's database.</p>

<h2>Editing a Wiki Page</h2>

<p>Editing a wiki page is similar to creating a page. You will see the same fields plus a field for leaving comments about what change you're making or why you made the change you did. If you're changing a page, you should always leave a comment so others can see the change you made or why you made it.</p> 

<p>Once you have finished making your changes, you can click <strong>Submit</strong> to complete the process. When you edit a wiki page, a new draft is made to preserve the changes made to it previously.</p>