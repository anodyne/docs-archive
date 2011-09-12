<h1><?php echo $header;?></h1>

<p>Static pages are all well in good, but Nova has a wealth of information stored in the database and we want to be able to pull that information out and use it on our new page, right? Absolutely. So now we have to dive in and start messing around with models. In CodeIgniter, models are the way we interact with the database. The model does the heavy lift and sends an object back to the controller method. From there, we can parse the information out and use it in our method and view.</p>

<p>We could use an existing model method for this project, but that would defeat the purpose of learning how to really extend Nova, so we're going to create a new model method and introduce you to Active Record. Much like the controllers directory has a <samp>base</samp> folder, the models folder is the same way. Like the controllers, Anodyne does all of its work in the base folder, allowing you to add or modify model methods without touching core files. The same rules that apply to controllers apply to models. So let's open up <samp>application/models/ranks_model.php</samp> in a text editor and create a new method after the constructor.</p>

<pre>function get_rank_list()
{

}</pre>

<p>The first thing we need to do is select the table where we want to pull our information from. Since we've created this in the ranks model, it makes sense that we're going to be accessing the ranks table. Generally speaking, we have a model for each table of the database. Of course, we've combined a bunch (posts and post comments, for instance, are in the same model). Also, CodeIgniter has a very useful library called Active Record which lets us build queries programmatically. This, potentially, allows Nova to be ported to use a different database platform and still work. So first up, let's grab the table. Add the following line to our method:</p>

<pre>$this->db->from('ranks_'. GENRE);</pre>

<p>Now, this is an interesting method because we have to take into account the genre we're using. Let's break this down a little further. From is, like it's SQL counterpart, simply a statement that says SELECT something FROM table. With Active Record, if we don't provide a select statement, it automatically uses *, or select everything. Our statement here is selecting everything from nova_ranks_ds9 (assuming we're using the ds9 genre). The nova_ prefix is added by Active Record automatically. If we were to run this query, it would look like <dfn>SELECT * FROM nova_ranks_ds9</dfn>. Pretty straightforward. So next line:</p>

<pre>$this->db->where('rank_display', 'y');</pre>

<p>Now, we're adding a where statement. This statement makes sure we're only pulling rank items that are set to display. This will make our query look like <dfn>SELECT * FROM nova_ranks_ds9 WHERE rank_display = 'y'</dfn>. Pretty straightforward. If we wanted to, we could add other operators by adding them right after the first parameter ('rank_display !=' or 'rank_display >', etc.). So now, out method looks like:</p>

<pre>$this->db->from('ranks_'. GENRE);
$this->db->where('rank_display', 'y');

$query = $this->db->get();

return $query;</pre>

<p>As you can see, we've added two lines, and as you guesed it, they do the actual query. We've assigned the query to a variable aptly named <var>$query</var>. Active Record will run the query and assign the object it returns to that variable. After that, we simply return the query variables so we can use it in our controller method. So in the end, our method looks like this:</p>

<pre>function get_rank_list()
{
	$this->db->from('ranks_'. GENRE);
	$this->db->where('rank_display', 'y');
	
	$query = $this->db->get();
	
	return $query;
}</pre>

<p>Next time, we're going to plug that model in to our controller and use it to pass information from the database right to our view file!</p>

<br />
<p>
	<?php echo Html::anchor('nova1/tutorials/extending/2', '&#171; Previous Tutorial');?>
	&nbsp; &middot; &nbsp;
	<?php echo Html::anchor('nova1/tutorials/extending/4', 'Next Tutorial &#187;');?>
</p>