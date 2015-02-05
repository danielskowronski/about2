<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Region extends Controller
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
		$view = View::factory('region/list');
		$view->regions = ORM::factory('Region')->find_all();
		
		$this->response->body($view);
	}
	
	public function action_delete()
	{
		$id = $this->request->param('id');
		ORM::factory('Region', $id)->delete();
		
		$this->redirect('region/list');
	}
	
	public function action_edit()
	{
		$id = $this->request->param('id');
		$region = ORM::factory('Region', $id);
		
		if($this->request->method() == 'POST')
		{
			$region->values($_POST);
			$region->save();
			
			$this->redirect('region/list');
		}
		
		$view = View::factory('region/edit');
		$view->region = $region;
		
		$this->response->body($view);
	}
}