<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller
{
	public function before()
	{
		
	}
	
	public function action_show()
	{
		$lng = Helper_Lang::checkLang();
		
		$id = $this->request->param('id');
		$url= $this->request->param('url');

		if (!isset($id))
			$page = ORM::factory('Page', array('url'=>$url, 'lang'=>$lng['lang']));
		else
			$page = ORM::factory('Page', array('id'=>$id,   'lang'=>$lng['lang']));
		
		if ((!$page->published) || ($page===null))
		{
			throw HTTP_Exception::factory(404, 'File not found!');
			$this->request->status = 404; //seems not to work
		}

		$view = View::factory('page/show');
		$view->langsel_offer = $lng['offer'];
		$view->page = $page;
		$view->section_header = ORM::factory('Region', array('region'=>'header', 'lang'=>$lng['lang']))->body;
		$view->section_footer = ORM::factory('Region', array('region'=>'footer', 'lang'=>$lng['lang']))->body;
		$view->top_menus      = ORM::factory('Topmenu')->where('lang', '=', $lng['lang'])->find_all();
		$view->page_name      = ORM::factory('Config', array('name' => 'page_name'))->value;
		$this->response->body($view);
	}
	
	public function action_list()
	{
		Helper_Auth::checkAuth($this);

		$view = View::factory('page/list');
		$view->pages = ORM::factory('Page')->find_all();
		
		$this->response->body($view);
	}
	
	public function action_delete()
	{
		Helper_Auth::checkAuth($this);

		$id = $this->request->param('id');
		ORM::factory('Page', $id)->find()->delete();
		
		$this->redirect('page/list');
	}
	
	public function action_edit()
	{
		Helper_Auth::checkAuth($this);

		$id = $this->request->param('id');
		$page = ORM::factory('Page', $id);

		if($this->request->method() == 'POST')
		{
			$page->values($_POST);
			$page->save();
			
			$this->redirect('page/list');
		}
		
		$view = View::factory('page/edit');
		$view->page = $page;
		
		$this->response->body($view);
	}
}