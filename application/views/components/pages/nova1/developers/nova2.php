<h1><?php echo $header;?></h1>

<p>Nova represents a huge step forward for Anodyne and RPG management as a whole, but at Anodyne, we're not content rest on our laurels, so we're taking Nova to the next level with a major architectural change that'll pave the way for significant future development more than our current foundation could.</p>

<h2>The Goals</h2>

<p>One of the major goals of Nova 2 is to change as little as possible. It's a strange concept to be sure though since we're making major architectural changes. Despite that, we want Nova 2 to feel as much like Nova 1 as possible with the added benefits and tools that Nova 2 will bring. Having said that, there are a few areas we'll focus on during Nova 2 development to make Nova even better.</p>

<h3>The Core Model</h3>

<p>Anyone who's waded into the sea of Nova's models knows it can be a daunting task and frustrating at times too. The API isn't consistent and there are a lot of model methods that almost nearly mirror what other methods do. The way the models are set up now, it can be a lot of work to build code that interacts with the database. We want to make it easier for developers (and ourselves) to interact with the database, so we're developing a core model that'll end up eliminating 95% of the models that exist in Nova 1.</p>

<p>So how does this new core model work? Take the following Nova 1 example:</p>

<pre>$awards = $this->awards->get_all_awards();</pre>

<p>This is pretty straightforward, but there are tons of these kinds of methods. There's one for ranks, one for positions, one for just about every model method. It's messy. Plus, given this syntax, you have no idea what default parameters it's using. (In case you were curious, this method pulls awards with a display flag of yes by default.) That's a problem because not all of these methods pull the same things by default. See, confusing. So in Nova 2, we add a little more code to our call, but make it so much easier to understand.</p>

<pre>$args = array
(
	'where'		=> array('award_display' => 'y'),
	'orderby'	=> array('award_order', 'asc')
);
$awards = $this->mCore->get_all('awards', $args);</pre>

<p>Now, we see right away that this is getting all awards that have the yes display flag and we're ordering them in ascending order. This exposure of the parameters gives developers ultimate control because they can easily set whatever they want. These examples can get more complex too without much more code.</p>

<pre>$args = array
(
	'join'		=> array(array('awards', 'awards.award_id', 'awards_received.awardrec_award', '')),
	'where'		=> array('awardrec_user' => $id),
);
$awards = $this->mCore->get_all('awards', $args);</pre>

<p>Now we're doing a join on a completely different table just by adding a line of code. Because of Kohana's robust query builder, all kinds of queries can be built just by changing the arguments array that's passed to the method.  Plus, in addition to get_all, Nova 2 also includes methods for get, add, update, delete and count_all. These core model methods mean that 95% of the existing model methods can go away. Plus, the API is the same across database tables.</p>

<h4>Prefixes</h4>

<p>You may have noticed the syntax here is <strong>$this->mCore</strong>. This is necessary since we load the core model well ahead of the controller methods. We're also making it easier to see what's a model by appending a lowercase m to the start of every model. When you see mSettings, you know it's the settings model right away.</p>

<h3>Controllers &amp; Constructors</h3>

<p>Take Nova 1 as an example. The Main controller looks a little something like this:</p>

<pre>class Main_base extends Controller {

	/* set the variables */
	var $options;
	var $skin;
	var $rank;
	var $timezone;
	var $dst;

	function Main_base()
	{
		parent::Controller();
		
		/* load the system model */
		$this->load->model('system_model', 'sys');
		$installed = $this->sys->check_install_status();
		
		if ($installed === FALSE)
		{ /* check whether the system is installed */
			redirect('install/index', 'refresh');
		}
		
		/* load the session library */
		$this->load->library('session');
		
		/* load the models */
		$this->load->model('characters_model', 'char');
		$this->load->model('users_model', 'user');
		
		/* check to see if they are logged in */
		$this->auth->is_logged_in();
		
		/* an array of the global we want to retrieve */
		$settings_array = array(
			'skin_main',
			'display_rank',
			'timezone',
			'daylight_savings',
			'sim_name',
			'date_format',
			'show_news',
			'use_sample_post',
			'default_email_name',
			'default_email_address',
			'email_subject',
			'system_email'
		);
		
		/* grab the settings */
		$this->options = $this->settings->get_settings($settings_array);
		
		/* set the variables */
		$this->skin = $this->options['skin_main'];
		$this->rank = $this->options['display_rank'];
		$this->timezone = $this->options['timezone'];
		$this->dst = (bool) $this->options['daylight_savings'];
		
		if ($this->auth->is_logged_in() === TRUE)
		{ /* if there's a session, set the variables appropriately */
			$this->skin = $this->session->userdata('skin_main');
			$this->rank = $this->session->userdata('display_rank');
			$this->timezone = $this->session->userdata('timezone');
			$this->dst = (bool) $this->session->userdata('dst');
		}
		
		/* set and load the language file needed */
		$this->lang->load('app', $this->session->userdata('language'));
		
		/* set the template */
		$this->template->set_master_template($this->skin . '/template_main.php');
		
		/* write the common elements to the template */
		$this->template->write('nav_main', $this->menu->build('main', 'main'), TRUE);
		$this->template->write('nav_sub', $this->menu->build('sub', 'main'), TRUE);
		$this->template->write('title', $this->options['sim_name'] . ' :: ');
		
		if ($this->auth->is_logged_in() === TRUE)
		{
			/* create the user panels */
			$this->template->write('panel_1', $this->user_panel->panel_1(), TRUE);
			$this->template->write('panel_2', $this->user_panel->panel_2(), TRUE);
			$this->template->write('panel_3', $this->user_panel->panel_3(), TRUE);
			$this->template->write('panel_workflow', $this->user_panel->panel_workflow(), TRUE);
		}
	}

	function index()
	{
		// code
	}
}</pre>

<p>Pretty straightforward, but there's a lot of code there, some of which we can absolutely do without, or at the very least offload to a different section of the code. So what does the controller look like in Nova 2?</p>

<pre>class Main_Base_Controller extends Base_Controller
{
	public function __construct()
	{
		parent::__construct();
 
		// pull these additional setting keys that'll be available in every method
		$this->settingsArray[] = 'skin_main';
 
		// pull the settings and put them into the options variable
		$this->options = $this->mSettings->get_settings($this->settingsArray);
 
		// set the variables
		$this->skin = ($this->auth->is_logged_in()) ? $this->session->get('skin_main') : $this->options['skin_main'];
		$this->rank = ($this->auth->is_logged_in()) ? $this->session->get('rank') : $this->options['rank'];
		$this->timezone = ($this->auth->is_logged_in()) ? $this->session->get('timezone') : $this->options['timezone'];
		$this->dst = ($this->auth->is_logged_in()) ? $this->session->get('dst') : $this->options['daylight_savings'];
 
		// set the template
		$this->template = new View($this->skin .'/template_main');
	}
 
	public function index()
	{
		// pull in the additional setting items we need for this method
		$args = array('where' => array('setting_key' => 'show_news'));
		$this->options['show_news'] = $this->mCore->get('settings', $args, 'setting_value');
		
		// more code...
	}
}</pre>

<p>Now, we've offloaded all the settings that are pulled for each controller into a base controller so they're always there. Next, we've added the items specific to the entire controller to our handy settings array. Then, in our method, if we need additional settings, we can easily get them using our new core model.</p>

<h3>View Files</h3>

<p>The way Nova works now, we only pass the items <em>we</em> want to the view files. That means that if a developer wants to do something with another piece of data, they have to extend the controller as well as the view file. It's just another step that a developer shouldn't have to take. Because of that, we're going to begin passing the entire data set to the view files so that a developer will be able to use all the information coming out of the database for whatever they want.</p>

<p>In addition, passing a complete object will significantly clean up the code in the controller making it easier to maintain and understand.</p>