<?php

class Controller_Nova1_Tour extends Controller_Base
{
	private $imagepath;
	
	public function before()
	{
		parent::before();
		
		$this->imagepath = Uri::base(false).'app/views/design/images/nova1/';
		
		$this->template->title.= 'Nova 1 - ';
	}
	
	public function action_index()
	{
		$this->_view = 'components/nova1/tour/index';
		$this->template->title.= 'Take a Tour';
		
		return;
	}
	
	public function action_characters()
	{
		$this->_view = 'components/nova1/tour/characters';
		$this->template->title.= 'Nova Tour: Characters';
		
		return;
	}
	
	public function action_forms()
	{
		$this->_view = 'components/nova1/tour/forms';
		$this->template->title.= 'Nova Tour: Dynamic Forms';
		
		return;
	}
	
	public function action_genres()
	{
		$this->_view = 'components/nova1/tour/genres';
		$this->template->title.= 'Nova Tour: Genres';
		
		return;
	}
	
	public function action_internationalization()
	{
		$this->_view = 'components/nova1/tour/internationalization';
		$this->template->title.= 'Nova Tour: Internationalization';
		
		return;
	}
	
	public function action_littlethings()
	{
		$this->_view = 'components/nova1/tour/little_things';
		$this->template->title.= 'Nova Tour: It\'s the Little Things';
		
		return;
	}
	
	public function action_seamless()
	{
		$this->_view = 'components/nova1/tour/seamless';
		$this->template->title.= 'Nova Tour: Seamless Substitution';
		
		return;
	}
	
	public function action_wiki()
	{
		$this->_view = 'components/nova1/tour/wiki';
		$this->template->title.= 'Nova Tour: Thresher';
		
		return;
	}
	
	public function action_writing()
	{
		$this->_view = 'components/nova1/tour/writing';
		$this->template->title.= 'Nova Tour: Writing';
		
		return;
	}
}
