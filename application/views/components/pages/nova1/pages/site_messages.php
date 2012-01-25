<h1><?php echo $header;?></h1>

<p>Nova stores many of the messages found throughout the system in the database to allow admins to quickly and easily update their site's messages without having to wade into PHP or HTML code. The Nova database is also set up in such a way to allow for additional messages and headers to be created and used throughout user-created pages or even, using seamless substitution, on core pages.</p>

<p>The Site Messages page is broken up into 3 tabs: Page Titles, Messages and Others. Page Titles are used for both the title in the browser window as well as at the top of each page. Messages are longer string of texts that are usually introductory type messages. Everything else, like the join disclaimer, dynamic acceptance/rejection emails, etc. fall into the Others category.</p>

<h3>Permissions</h3>

<p>In order to manage rank catalogues, a user needs to have <kbd>site/messages</kbd> permissions.</p>

<h2>Adding a Message</h2>

<p>You can add a new message by clicking on the Add New Message link at the top of the page. A Facebox window will open with 3 fields: label, key and content. All three fields must be filled in to create a message. The label is the page label the message will be given when viewing all messages. You should be descriptive with what the message does or where it's found. The key is a single word that is used by Nova to identify the message. The key should be short and straightforward. Spaces should be replaced by underscores (_). The content is the actual message. Once you have filled all 3 fields in, click Submit and your message will be created. (You cannot create a protected message as protected messages cannot be edited.)</p>

<h2>Editing a Message</h2>

<p>Nova displays all messages in the database in a simple list that gives the description, the message key and the first 25 words of the message. Links to the right let an admin edit or delete the message. Clicking on the edit icon</a> will open the message details in a Facebox window and you'll be presented with a short form to update the message information. Clicking Submit after you're done editing will save the changes. All changes take effect immediately.</p>

<h2>Deleting a Message</h2>

<p>You can delete any site message listed in the Messages page by clicking on the delete icon</a> to the right of the abbreviated message text. You will be prompted to verify that you want to delete that message. If you click submit, the message will be deleted from the database and cannot be recovered. Use caution when deleting site messages. If you delete the wrong one, Nova will throw errors if you haven't edited view files properly.</p>

<h2>Using Your Own Messages</h2>

<p>You can use site messages you create by putting a single line of code into your view files. If you want to reference your site message, all you need to know is the key. Nova has a built in model method that will go out to the database and fetch the message. You can use your own message in your views by using the following code:</p>

<pre>$data['message'] = $this->messages_model->get_message('your_message_key');</pre>

<p class="alert alert-info">If you are planning on using the message more than once in your controller, you should assign the message to a variable and use that variable throughout your code to reduce the number of calls to the database.</p>