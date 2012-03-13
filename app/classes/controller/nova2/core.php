<?php

class Controller_Nova2_Core extends Controller_Base
{	
	public function before()
	{
		parent::before();
		
		$this->template->title.= 'Nova 2 - ';
	}
	
	public function action_index()
	{
		$this->_view = 'components/nova2/developers/core/index';
		$this->template->title.= 'Nova Core';
		
		return;
	}
	
	public function action_helpers($id = '')
	{
		switch ($id)
		{
			default:
				$item = $this->request->param('id');
				
				if (empty($item))
				{
					$item = 'index';
				}
				
				$title = ucfirst($item);
				$helper = false;
				$view = 'helper_'.$item;
			break;
		}
		
		$this->_view = 'components/nova2/developers/core/'.$view;
		$this->_data->header = $title;
		$this->_data->helper = $helper;
		$this->template->title.= $title.' Helper';
		
		return;
	}
	
	public function action_libraries($id = '')
	{
		switch ($id)
		{
			default:
				$item = $id;
				
				if (empty($item))
				{
					$item = 'index';
				}
				
				switch ($item)
				{
					case 'userpanel':
						$title = 'User Panel';
					break;
					
					default:
						$title = ucfirst($item);
					break;
				}
				
				$library = false;
				$view = 'lib_'.$item;
			break;
		}
		
		$this->_view = 'components/nova2/developers/core/'.$view;
		$this->_data->header = $title;
		$this->_data->library = $library;
		$this->template->title.= $title.' Library';
		
		return;
	}
	
	public function action_models($id = '')
	{
		// set the default view
		$view = 'model';
		
		switch ($id)
		{
			case 'access':
				$title = 'Access';
				$model = Format::forge(file_get_contents(APPPATH.'assets/nova2/models/access.yaml'), 'yaml')->to_array();
			break;
			
			case 'docking':
				$title = 'Docking';
				$model = Format::forge(file_get_contents(APPPATH.'assets/nova2/models/docking.yaml'), 'yaml')->to_array();
			break;
			
			case 'system':
				$title = 'System';
				$model = Format::forge(file_get_contents(APPPATH.'assets/nova2/models/system.yaml'), 'yaml')->to_array();
			break;
			
			case 'tour':
				$title = 'Tour';
				$model = Format::forge(file_get_contents(APPPATH.'assets/nova2/models/tour.yaml'), 'yaml')->to_array();
			break;
			
			case 'users':
				$title = 'Users';
				$model = Format::forge(file_get_contents(APPPATH.'assets/nova2/models/users.yaml'), 'yaml')->to_array();
			break;
			
			case 'wiki':
				$title = 'Wiki';
				$model = Format::forge(file_get_contents(APPPATH.'assets/nova2/models/wiki.yaml'), 'yaml')->to_array();
			break;
			
			default:
				$item = $id;
				
				if (empty($item))
				{
					$item = 'index';
				}
				
				switch ($item)
				{
					case 'privmsgs':
						$title = 'Private Messages';
					break;
					
					case 'personallogs':
						$title = 'Personal Logs';
					break;
					
					case 'depts':
						$title = 'Departments';
					break;
					
					default:
						$title = ucfirst($item);
					break;
				}
				
				$model = false;
				$view = 'model_'.$item;
			break;
		}
		
		$this->_view = 'components/nova2/developers/core/'.$view;
		$this->_data->header = $title;
		$this->_data->model = $model;
		$this->template->title.= $title.' Model';
		
		return;
	}
}
