<h1><?php echo $header;?></h1>

<p>For systems that were upgraded from SMS to Nova, we've built a small feature that will display content from the components that aren't upgraded as part of the process. By default, that includes the database entries and the deck listing. From these pages, you can view the database entries or the full deck listing as a means of quick copying and pasting between the archive and Nova. The items on these pages are <dfn>read-only</dfn> and cannot be edited or deleted.</p>

<h3>Developer Notes</h3>

<p>The archive controller and model are both fully extensible, so you can add your own methods for pulling additional information or creating another view, but the archive section is not internationalized as it's only intended to be used as a reference to update your Nova site with the information from the SMS tables.</p>