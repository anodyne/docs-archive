<h1><?php echo $header;?></h1>

<p>So we've already talked about how to use seamless substitution to replace a view file to embed a YouTube video right in our page. Now, we're going to expand on that concept and replace an entire page to do different things with the page. How are we going to do that? By overriding the controller. It sounds scary, but it really isn't.</p>

<p>Before we get started it should be mentioned that we're going to talk about some things in here that could be foreign to most people, but they're actually pretty easy to pick up.</p>

<h3>Models</h3>

<p>The first thing we haven't really talked about before is <strong>models</strong>. Put simply, a model is just a way of interacting with the database. Think of a model like a hammer and the nail as a database. Sure, we can use the nail without a hammer, but it takes a lot more time. Once we start using a hammer, things go a lot quicker and easier. Before you know it, you're building a bunch of things pretty quickly.</p>

<h2>Prepping the Files</h2>

<p>When we replaced the view file, we only had to deal with one file. In this example, we're going to deal with a view file and a controller file. Since we're already familiar with view files from the last tutorial, we'll start there. To get started with this tutorial, we're going to copy the main index page from <samp>application/views/_base/main/pages</samp> into our base override directory located at <samp>application/views/_base_override/main/pages</samp> just like we did in the last tutorial.</p>

<p>Next, we're going to open up our main controller base file which is located at <samp>application/controllers/base/main_base.php</samp>. What you'll see will most likely look like Greek to you, but we're only going to be pulling a small portion of this code. What we want to copy is the <dfn>index</dfn> method.</p>

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

<p>Copy the entire <dfn>index</dfn> method and paste it in to the <samp>application/controllers/main.php</samp> file right below where the comment says <em>/** your methods here **/</em>. Save the file and make sure it's been uploaded to the server. You shouldn't see any difference right now, but that's the point. We'll edit the files next.</p>