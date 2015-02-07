<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Topmenu extends Controller
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
		$view = View::factory('topmenu/list');
		$view->topmenus = ORM::factory('Topmenu')->find_all();
		
		$this->response->body($view);
	}
	
	public function action_delete()
	{
		$id = $this->request->param('id');
		ORM::factory('Topmenu', $id)->delete();
		
		$this->redirect('topmenu/list');
	}
	
	public function action_edit()
	{
		$id = $this->request->param('id');
		$topmenu = ORM::factory('Topmenu', $id);
		
		if($this->request->method() == 'POST')
		{
			$topmenu->values($_POST);
			$topmenu->save();
			
			$this->redirect('topmenu/list');
		}
		
		$view = View::factory('topmenu/edit');
		$view->topmenu = $topmenu;
		
		$this->response->body($view);
	}
}