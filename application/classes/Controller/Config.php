<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Config extends Controller
{

	public function before()
	{
		if ( ! Auth::instance()->logged_in())
		{
			$this->redirect('auth/login');
			return;
		}
	}
	public function after()
	{
		
	}
	
	public function action_list()
	{
		$view = View::factory('config/list');
		$view->configs = ORM::factory('Config')->find_all();
		
		$this->response->body($view);
	}
	
	public function action_delete()
	{
		$id = $this->request->param('id');
		ORM::factory('Config', $id)->delete();
		
		$this->redirect('config/list');
	}
	
	public function action_edit()
	{
		$id = $this->request->param('id');
		$config = ORM::factory('Config', $id);
		
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