<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller
{

	private $lang, $langsel_offer;

	public function before()
	{
		//langsel //raw cookiec, becouse javascript wouldn't be able to modify them - this is sad ;-;
		global $lang, $langsel_offer;
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); //$this->request->accept_lang();//ret of that "smart" function is like: array(4) { ["pl-PL"]=> float(1) ["pl"]=> float(0.8) ["en-US"]=> float(0.6) ["en"]=> float(0.4) }

		if ( ($lang != "en") && ($lang != "pl") ) { $lang="en"; $langsel_offer = true; } else { $langsel_offer = false; }
		if ( isset($_COOKIE['langsel']) ) { $lang=$_COOKIE['langsel']; $langsel_offer=false; }
	}
	public function after()
	{
		
	}
	

	public function action_show()
	{
		$id = $this->request->param('id');
		$url= $this->request->param('url');

		global $lang, $langsel_offer;

		if (!isset($id))
			$page = ORM::factory('Page', array('url'=>$url, 'lang'=>$lang));
		else
			$page = ORM::factory('Page', array('id'=>$id,   'lang'=>$lang));
		
		if ((!$page->published) || ($page===null))
		{
			$page = ORM::factory('Page', array('url'=>'_error404', 'lang'=>$lang));
			//throw HTTP_Exception::factory(404, 'File not found!');
			$this->request->status = 404; //seems not to work
		}

		$view = View::factory('page/show');
		$view->langsel_offer = $langsel_offer;
		$view->page = $page;
		$view->section_header = ORM::factory('Region', array('region'=>'header', 'lang'=>$lang))->body;
		$view->section_footer = ORM::factory('Region', array('region'=>'footer', 'lang'=>$lang))->body;
		$view->top_menus      = ORM::factory('Topmenu')->where('lang', '=', $lang)->find_all();
		$view->page_name      = ORM::factory('Config', array('name' => 'page_name'))->value;
		$this->response->body($view);
	}
	
	public function action_list()
	{
		$view = View::factory('page/list');
		$view->pages = ORM::factory('Page')->find_all();
		
		$this->response->body($view);
	}
	
	public function action_delete()
	{
		$id = $this->request->param('id');
		ORM::factory('Page', $id)->delete();
		
		$this->redirect('page/list');
	}
	
	public function action_edit()
	{
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