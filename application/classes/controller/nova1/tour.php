<?php

class Tour extends Controller {
	
	public $title;
	private $viewpath;
	private $imagepath;
	
	function __construct()
	{
		parent::Controller();
		
		// set the variables
		$this->title		= ' :: Nova User Guide';
		$this->viewpath		= 'modules/nova/pages/tour/';
		$this->imagepath 	= base_url() . APPFOLDER .'/views/modules/nova/images/';
	}
	
	public function index()
	{
		$data['header'] = 'Take a Tour';
		$data['sub'] = NULL;
		
		$data['images'] = array(
			'translate' => array(
				'src' => $this->imagepath .'tour/locale.png',
				'alt' => 'internationalization',
				'class' => 'tour-icon'),
			'forms' => array(
				'src' => $this->imagepath .'tour/ui-text-field.png',
				'alt' => 'dynamic forms',
				'class' => 'tour-icon'),
			'characters' => array(
				'src' => $this->imagepath .'tour/users.png',
				'alt' => 'characters',
				'class' => 'tour-icon'),
			'writing' => array(
				'src' => $this->imagepath .'tour/notebook--pencil.png',
				'alt' => 'writing',
				'class' => 'tour-icon'),
			'substitute' => array(
				'src' => $this->imagepath .'tour/arrow-circle-double-135.png',
				'alt' => 'seamless substitution',
				'class' => 'tour-icon'),
			'smiley' => array(
				'src' => $this->imagepath .'tour/smiley.png',
				'alt' => 'smiley face',
				'class' => 'tour-icon'),
			'wiki' => array(
				'src' => $this->imagepath .'tour/application-text.png',
				'alt' => 'wiki page',
				'class' => 'tour-icon'),
			'changes' => array(
				'src' => $this->imagepath .'tour/clipboard-list.png',
				'alt' => 'clipboard',
				'class' => 'tour-icon'),
			'genre' => array(
				'src' => $this->imagepath .'tour/direction.png',
				'alt' => 'genre',
				'class' => 'tour-icon'),
		);
		
		$view = $this->viewpath .'main';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function characters()
	{
		$data['header'] = 'Nova Tour: Characters';
		$data['sub'] = NULL;
		
		$data['image'] = array(
			'src' => $this->imagepath .'tour/characters.png',
			'alt' => 'characters'
		);
		
		$view = $this->viewpath .'characters';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function forms()
	{
		$data['header'] = 'Nova Tour: Dynamic Forms';
		$data['sub'] = NULL;
		
		$data['image'] = array(
			'src' => $this->imagepath .'tour/forms.png',
			'alt' => 'dynamic forms'
		);
		
		$view = $this->viewpath .'forms';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function genres()
	{
		$data['header'] = 'Nova Tour: Genres';
		$data['sub'] = NULL;
		
		$data['image'] = array(
			'src' => $this->imagepath .'tour/genres.jpg',
			'alt' => 'genres'
		);
		
		$view = $this->viewpath .'genres';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function internationalization()
	{
		$data['header'] = 'Nova Tour: Internationalization';
		$data['sub'] = NULL;
		
		$data['image'] = array(
			'src' => $this->imagepath .'tour/internationalization.png',
			'alt' => 'internationalization'
		);
		
		$view = $this->viewpath .'internationalization';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function littlethings()
	{
		$data['header'] = "Nova Tour: It's the Little Things";
		$data['sub'] = NULL;
		
		$data['images'] = array(
			'view' => array(
				'src' => $this->imagepath .'image-view.png',
				'alt' => 'view image'),
			'magnifier' => array(
				'src' => $this->imagepath .'magnifier.png',
				'alt' => ''),
		);
		
		$view = $this->viewpath .'little_things';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		CI::Library('template')->write_view('javascript', 'modules/nova/js/tour_js');
		
		CI::Library('template')->render();
	}
	
	public function seamless()
	{
		$data['header'] = 'Nova Tour: Seamless Substitution';
		$data['sub'] = NULL;
		
		$data['image'] = array(
			'src' => $this->imagepath .'tour/seamless.jpg',
			'alt' => 'seamless substitution'
		);
		
		$view = $this->viewpath .'seamless';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function wiki()
	{
		$data['header'] = 'Nova Tour: Thresher';
		$data['sub'] = NULL;
		
		$data['image'] = array(
			'src' => $this->imagepath .'tour/wiki.png',
			'alt' => 'wiki'
		);
		
		$view = $this->viewpath .'wiki';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function writing()
	{
		$data['header'] = 'Nova Tour: Writing';
		$data['sub'] = NULL;
		
		$data['image'] = array(
			'src' => $this->imagepath .'tour/writing.png',
			'alt' => 'writing'
		);
		
		$view = $this->viewpath .'writing';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
}

/* End of file tour.php */
/* Location: ./application/modules/nova/controllers/tour.php */