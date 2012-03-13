<h1><?php echo $header;?></h1>

<p>Some basic extending stuff is all well and good, but in most cases, you want to do more complex stuff than just changing a view file. What if you wanted to change the default behavior of an existing page? The concepts are the same, but in practice, it's a little trickier than just adding a file to a folder. So let's cook up a scenario and dive in to extend Nova!</p>

<h2>The Scenario</h2>

<p>Let's say we want to display a different welcome message based on whether the user is logged in to the site or not. The process isn't that difficult and once you do it once, you'll be on your way.</p>

<h2>The Steps</h2>

<p>Since Nova gets its welcome message from the database, we can create a new message to be used for users who are logged in. To do this, we need to log in to the system and create a new message from the Messages &amp; Titles page. You can create a new message by clicking on the Add New Message link. In the modal window that pops up, put in the following information:</p>

<pre>Message Label: Alternate Welcome Message
Message Key: welcome_alt
Type: Page Titles
Content: Welcome back to Nova! Make sure you check your private messages for any new messages.</pre>

<p>Once you've hit submit, the message will be created in the database and you'll be able to use it. Now that that part is finished, let's go to work changing the behavior of the page.</p>

<h3>Extending the Main Controller</h3>

<p>To start, we're going to need to open two files: <code>application/controllers/main.php</code> and <code>application/controllers/base/main_base.php</code>. Let's focus on the base controller for right now.</p>

<p>The way extending a controller works is that you're essentially laying a new method over top of the existing one. That means Nova only understands the new method and not the old one, but if you were rename or remove your method, it'll be able to see the old method and use that. We're going to cover up the old method. To do this, we need to copy the entire <dfn>index</dfn> method.</p>

<p class="alert alert-info"><strong>Note:</strong> In object oriented programming like Nova, a method is how a function inside a class is described.</p>

<p>In <code>application/controllers/base/main_base.php</code>, copy the entire <dfn>index</dfn> function. This includes everthing from the word <strong>function</strong> all the way to the curly brace before the next word function.</p>

<pre>function index()
{
	/* load the models */
	$this->load->model('news_model', 'news');
	
	/* run any model or lib methods */
	$news = $this->news->get_news_items(5, $this->session->userdata('userid'));
	
	if ($news->num_rows() > 0 && $this->options['show_news'] == 'y')
	{
		$i = 1;
		$datestring = $this->options['date_format']; /* set the datestring */
		
		foreach ($news->result() as $row)
		{ /* populate the news item data */
			$date = gmt_to_local($row->news_date, $this->timezone, $this->dst);
			
			$data['news'][$i]['id'] = $row->news_id;
			$data['news'][$i]['title'] = $row->news_title;
			$data['news'][$i]['content'] = $row->news_content;
			$data['news'][$i]['date'] = mdate($datestring, $date);
			$data['news'][$i]['category'] = $row->newscat_name;
			$data['news'][$i]['author'] = $this->char->get_character_name($row->news_author_character, TRUE);
			
			++$i;
		}
	}
	
	/* header and welcome message */
	$data['header'] = $this->msgs->get_message('welcome_head');
	$data['msg_welcome'] = $this->msgs->get_message('welcome_msg');
	
	/* labels */
	$data['label'] = array(
		'news' => ucwords(lang('status_latest') .' '. lang('global_news')),
		'posted' => ucfirst(lang('actions_posted') .' '. lang('labels_on')),
		'by' => lang('labels_by'),
		'in' => lang('labels_in'),
	);
	
	/* figure out where the view files should be coming from */
	$view_loc = view_location('main_index', $this->skin, 'main');
	$js_loc = js_location('main_index_js', $this->skin, 'main');
	
	/* write the data to the template */
	$this->template->write('title', ucfirst(lang('labels_main')));
	$this->template->write_view('content', $view_loc, $data);
	$this->template->write_view('javascript', $js_loc);
	
	/* render the template */
	$this->template->render();
}</pre>

<p>Next, we need to paste what we've copied into <code>application/controllers/main.php</code> after the comment that says <strong>/** your methods here **/</strong>. If we saved the main.php file right now and uploaded it, we wouldn't notice any differences, but in a few minutes, we'll see a bunch of differences.</p>

<h3>The Auth Library</h3>

<p>Nova's Auth library is a great tool with a lot of useful methods, one of which is checking whether or not someone is logged in. This situation is precisely one of those situations where we can use the Auth library.</p>

<h3>The Logic</h3>

<p>We need to start by removing the <var>$data['msg_welcome']</var> line. This is where we're going to do all of our work. Hit enter a few times to give yourself a place to code. Next, let's create the basis of our if/else logic.</p>

<pre>if ()
{
    # code...
}
else
{
    # some more code...
}</pre>

<p>This is the basic foundation we're going to build on. If the condition we give it is true, it'll execute the code inside the braces, otherwise, it'll execute whatever we put in the else statement. So let's start by giving it a condition to test.</p>

<pre>if ($this->auth->is_logged_in())</pre>

<p>The Auth library is auto-loaded by the system so it's always available so we don't need to worry about loading the library. The <dfn>auth</dfn> part tells us we're dealing with the Auth library and <var>is_logged_in()</var> is our method that we're calling. This will check to if the current user is logged in and return <dfn>TRUE</dfn> if they are or <kbd>FALSE</kbd> if they aren't.</p>

<p>Now that we have a condition for the page to check, let's tell it what to do if the condition is true.</p>

<pre>$data['msg_welcome'] = $this->msgs->get_message('welcome_alt');</pre>

<p>Notice we've supplied the <var>get_message()</var> function with the key of the message we created earlier. That tells the messages model to grab the message from the database with that key. It'll return the full text for us to use in the view file. In our else statement, we can tell the system to do something different.</p>

<pre>$data['msg_welcome'] = $this->msgs->get_message('welcome_msg');</pre>

<h3>Final Code</h3>

<p>It's not much code, but we've just managed to change Nova's welcome page to show different messages based on whether the user is logged in or not. Our final method will look like this:</p>

<pre>function index()
{
	/* load the models */
	$this->load->model('news_model', 'news');
	
	/* run any model or lib methods */
	$news = $this->news->get_news_items(5, $this->session->userdata('userid'));
	
	if ($news->num_rows() > 0 && $this->options['show_news'] == 'y')
	{
		$i = 1;
		$datestring = $this->options['date_format']; /* set the datestring */
		
		foreach ($news->result() as $row)
		{ /* populate the news item data */
			$date = gmt_to_local($row->news_date, $this->timezone, $this->dst);
			
			$data['news'][$i]['id'] = $row->news_id;
			$data['news'][$i]['title'] = $row->news_title;
			$data['news'][$i]['content'] = $row->news_content;
			$data['news'][$i]['date'] = mdate($datestring, $date);
			$data['news'][$i]['category'] = $row->newscat_name;
			$data['news'][$i]['author'] = $this->char->get_character_name($row->news_author_character, TRUE);
			
			++$i;
		}
	}
	
	/* header and welcome message */
	$data['header'] = $this->msgs->get_message('welcome_head');
	
	if ($this->auth->is_logged_in())
	{
		$data['msg_welcome'] = $this->msgs->get_message('welcome_alt');
	}
	else
	{
		$data['msg_welcome'] = $this->msgs->get_message('welcome_msg');
	}
	
	/* labels */
	$data['label'] = array(
		'news' => ucwords(lang('status_latest') .' '. lang('global_news')),
		'posted' => ucfirst(lang('actions_posted') .' '. lang('labels_on')),
		'by' => lang('labels_by'),
		'in' => lang('labels_in'),
	);
	
	/* figure out where the view files should be coming from */
	$view_loc = view_location('main_index', $this->skin, 'main');
	$js_loc = js_location('main_index_js', $this->skin, 'main');
	
	/* write the data to the template */
	$this->template->write('title', ucfirst(lang('labels_main')));
	$this->template->write_view('content', $view_loc, $data);
	$this->template->write_view('javascript', $js_loc);
	
	/* render the template */
	$this->template->render();
}</pre>

<h3>Ternary Operators</h3>

<p>We can clean up the code a little more by using ternary operators. In that instance, your block of logic would be reduced to a single line of code:</p>

<pre>$data['msg_welcome'] = ($this->auth->is_logged_in()) ? $this->msgs->get_message('welcome_alt') : $this->msgs->get_message('welcome_msg');</pre>

<h2>Other Options</h2>

<p>Using CodeIgniter's built in libraries, there are a lot of different things like this you could do. Below are a couple you can try.</p>

<pre>// show a message if the user is using Internet Explorer
$this->load->library('user_agent');

if ($this->agent->browser() == 'Internet Explorer')
{
	echo "You really shouldn't be using Internet Explorer!";
}

===============================

// show a message if the user is a system administrator
if ($this->auth->is_sysadmin($this->session->userdata('userid')))
{
	echo "You are a system administrator!";
}

===============================

// show a message if there's a specific item in the URI
if ($this->uri->segment(3) == 'foo')
{
	echo "The third URI segment is foo.";
}

===============================

// show a message if someone has a specific access level on the current page
if ($this->auth->get_access_level() == 2)
{
	echo "You have level 2 access.";
}</pre>

<p>Obviously you wouldn't just echo out sentences. Inside your logic you could do more work and take certain actions only in the event that those conditions are true. Play around with it and see what you can come up with!</p>

<br />
<p>
	<?php echo Html::anchor('nova1/tutorials/extending/5', '&#171; Previous Tutorial');?>
	&nbsp; &middot; &nbsp;
	<?php echo Html::anchor('nova1/tutorials/extending/7', 'Next Tutorial &#187;');?>
</p>