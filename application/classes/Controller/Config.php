<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Config extends Controller
{
	public function before()
	{
		Helper_Auth::checkAuth($this);
	}
	
	public function action_list()
	{
		$view = View::factory('config/list');
		$view->configs = ORM::factory('Config')->find_all();
		
		$this->response->body($view);
	}
	
	public function action_edit()
	{
		$name = $this->request->param('name');
		$config = ORM::factory('Config', $name);

		if($this->request->method() == 'POST')
		{
			$config->values($_POST);
			$config->save();
			
			$this->redirect('config/list');
		}
		
		$view = View::factory('config/edit');
		$view->config = $config;
		
		$this->response->body($view);
	}
}