<h1><?php echo $header;?></h1>

<p>In the last tutorial, we talked about models and building a simple model method to get all the ranks in the database that are set to display. In the end, we told our model method to return the query object so we can use it in our controller. That's what we're going to do now; we're going to tell our controller to pull the information from the database, assign it to a variable, do some sanity checking, and finally put everything into an array that we can pass to our view (we could pass an object, but Nova tends to pass arrays).</p>

<p>So to review, our controller method currently looks like this:</p>

<pre>function ranks()
{
	// figure out where the view file should be coming from
	$view_loc = view_location('main_ranks', $this->skin, 'main');
	
	$data['header'] = 'My Ranks';
	$data['message'] = "This is the page where I'm going to see all my rank images!";
	
	// write the data to the template
	$this->template->write('title', 'Ranks');
	$this->template->write_view('content', $view_loc, $data);

	// render the template
	$this->template->render();
}</pre>

<p>Let's start by loading the model. Because of needing to maintain backwards compatability with PHP4, CodeIgniter doesn't support magically loading models when they're used. Some day though. In the meantime, we'll need to load our model. To load the model, put the following line at the top of the method (all inside the brackets):</p>

<pre>$this->load->model('ranks_model');</pre>

<p>This makes any method of our ranks model available to us by using <var>$this->ranks_model->method_name()</var>. Let's simplify even a little further:</p>

<pre>$this->load->model('ranks_model', 'ranks');</pre>

<p>Now, we can access our ranks model by using <var>$this->ranks->method_name()</var> instead. It's just a tad simpler. Please refer to the documentation about models to read about the systemwide model naming scheme. If you cross paths with another model, it will cause issues on your page.</p>

<p>Now that we've loaded our model, we can assign our method to a variable, like so:</p>

<pre>$ranks = $this->ranks->get_rank_list();</pre>

<p>As soon as the server gets to that point, it triggers the model to run and assign the result of the query to an object in the variable <var>$ranks</var>. From here, we can do some sanity checking and then loop through the object and get what we need. First, we're going to make sure there's actually something in the object.</p>

<pre>if ($ranks->num_rows() > 0)
{

}</pre>

<p>The <var>num_rows()</var> method is built in to CodeIgniter and will give you the number of rows returned in the query. We just want to make sure there's at least one. If there is, it'll execute whatever code we put in between those braces. Now, between those braces, let's loop through the object.</p>

<pre>foreach ($ranks->result() as $rank)
{

}</pre>

<p>Now, we're taking the results from the ranks object and assigning them to a variable called rank for the duration of the loop. We'll be able to access everything in the object as <var>$rank->field_name</var>. So, let's start building an array to hold all our information that we're going to pass on to the view. Inside the foreach loop braces, let's start assigning things to the array.</p>

<pre>$data['ranks'][$rank->rank_id]['name'] = $rank->rank_name;
$data['ranks'][$rank->rank_id]['image'] = $rank->rank_image;</pre>

<p>You'll remember that we pass a variable to the view called <var>$data</var>. Well, we're using the same variable, just creating a new array off that variable. In this case, we're creating an array called ranks. The ranks array is multi-dimensional, meaning it has more than 1 level.  You'll also see after the $rank-> is the field name that matches the field we're pulling from the database. In the end, our array is going to look a little like this:</p>

<pre>Array (
	[1] => Array(
		[name] => Admiral
		[image] => r-a4
	),
	[2] => Array(
		[name] => Vice Admiral
		[image] => r-a3
	)
)</pre>

<p>Of course, this array works, but we want to make sure we're pulling all the information so we can see a full image and not just a path. To do that, we need to add another line of code up at the top of our method:</p>

<pre>$extension = $this->ranks->get_rank_extension($this->rank);</pre>

<p>What we've done here is assign the rank set's image extension to a variable that we'll be able to re-use throughout our method. The parameter we're passing to the method is a controller-wide (and systemwide) variable that determine the current rank set that's being used. This model method will grab the extension for us to use. Back down in our foreach loop, we're going to take our array another level deeper. Change the image item to look like this:</p>

<pre>$data['ranks'][$rank->rank_id]['image'] = array(
	'src' => rank_location($this->rank, $rank->rank_image, $extension),
	'alt' => $rank->rank_name
);</pre>

<p>Now, our array looks a little like this (the path name will vary based on your server setup):</p>

<pre>Array (
	[1] => Array(
		[name] => Admiral
		[image] => Array (
			[src] => ./application/assets/common/ds9/ranks/default/r-a4.png,
			[alt] => Admiral
		)
	),
	[2] => Array(
		[name] => Vice Admiral
		[image] => Array (
			[src] => ./application/assets/common/ds9/ranks/default/r-a3.png,
			[alt] => Vice Admiral
		)
	)
)</pre>

<p>The array will continue as long as it has data to keep putting in there. Now, all we have to do is pass the <var>$data</var> variable to the view and then loop through that variable in the view and we'll have a full list of ranks coming from the database.</p>

<p>To recap, our controller method should now look like this:</p>

<pre>function ranks()
{
	// load the model
	$this->load->model('ranks_model', 'ranks');
	
	// grab the ranks from the db
	$ranks = $this->ranks->get_rank_list();
	
	// grab the extension
	$extension = $this->ranks->get_rank_extension($this->rank);
	
	// make sure there's something in the object
	if ($ranks->num_rows() > 0)
	{
		// assign the items to an array for the view
		foreach ($ranks->result() as $rank)
		{
			$data['ranks'][$rank->rank_id]['name'] = $rank->rank_name;
			$data['ranks'][$rank->rank_id]['image'] = array(
				'src' => rank_location($this->rank, $rank->rank_image, $extension),
				'alt' => $rank->rank_name
			);
		}
	}
	
	// figure out where the view file should be coming from
	$view_loc = view_location('main_ranks', $this->skin, 'main');
	
	$data['header'] = 'My Ranks';
	$data['message'] = "This is the page where I'm going to see all my rank images!";
	
	// write the data to the template
	$this->template->write('title', 'Ranks');
	$this->template->write_view('content', $view_loc, $data);

	// render the template
	$this->template->render();
}</pre>

<p>In our next tutorial, we'll look at what happens on the view side of things to get these to print out in a nice list.</p>

<br />
<p>
	<?php echo anchor('nova/tutorials/extending/3', '&#171; Previous Tutorial');?>
	&nbsp; &middot; &nbsp;
	<?php echo anchor('nova/tutorials/extending/5', 'Next Tutorial &#187;');?>
</p>