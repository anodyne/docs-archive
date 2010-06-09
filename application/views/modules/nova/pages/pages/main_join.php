<h1><?php echo $header;?></h1>

<p>The join form is where prospective players can apply to join your sim. The join form is very fluid and dynamic. The entire form is built out of the database, meaning you can use the user interface in the control panel to change a question, remove a question, or add as many new fields as you want. Since the join form is almost entirely dynamic, it also means that the character bio pages are also almost entirely dynamic. Using this system, you are able to create text fields, text boxes, and drop down menus*.</p>

<p>Before you can get to the actual form, you will need to agree to the disclaimer. The text of the disclaimer can be changed from the Site Messages page. You cannot disable the join disclaimer, even if you set the disclaimer to be blank.</p>

<p>Once a user has agreed to the disclaimer, they&rsquo;ll be taken to the actual join form. There are sections for player information, the character, character information, physical appearance, family, personality and traits, and history. In addition, you can specify other fields such as a sample post and the question used. (Details of creating, editing and deleting fields is covered in great depth in the control panel page.) One interesting thing to note about the join form is that the positions dropdown menu now is attached to an AJAX event that, when changed, will fetch the position description and display it below the dropdown menu. This will allow potential players to see the description without having to bounce over to another page and then back to the join form to see the descriptions. If a user selects a position from the manifest, once they&rsquo;ve agreed to the disclaimer and moved on to the join page, the position description is pre-populated with the position they selected.</p>

<p>Once the information has been input and submitted, two emails will be sent. The first will be sent to the player who just applied. It will tell them the application has been received and that the game master will begin reviewing their application soon. For reference, it will also list the email address and password they used in their application. The second email is sent any game masters and contains the full text of the application. This includes all static fields (name, position, etc.) as well as all dynamic fields.</p>

<p>The final step of the process is a new feature to Nova. Some of the basic data from the application (name, email, position, time applied, action taken on the application, and the reason the action was taken) is stored in a database table so there is always a record of applications to the sim. When a player is accepted or rejected, the table is also hit. A report is available for applications from the control panel.</p>

<p>Once the form has been submitted, a confirmation message will display.</p>

<p>When the join form is submitted, Nova will check the email address supplied against the player records in the database. If the email address does not exist, it will insert a pending player record and a pending character record. If the email address does exist, it will skip adding a player entry and just add a pending character record.</p>

<br />
<p class="fontSmall"><em>* At this stage, we are not allowing radio buttons and checkboxes to be built. Hopefully in the future, we&rsquo;ll be able to add that functionality.</em></p>