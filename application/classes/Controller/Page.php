<?php defined('SYSPATH') or die('No direct script access.');

// Simple blog controller
// The application lacks many features, such as authentication or comments
class Controller_Page extends Controller//_Template
{
	private function _redirect_to_home()
	{
		$this->redirect('page/list');
	}
	public function after()
	{
		
	}

	public function action_show()
	{
		$id = $this->request->param('id');
		$url= $this->request->param('url');

		if (!isset($id))
			$page = ORM::factory('Page', array('url'=>$url));
		else
			$page = ORM::factory('Page', array('id'=>$id));
		
		if (! $page->published)
throw HTTP_Exception::factory(404, 'File not found!');//throw new HTTP_Exception_404();

		$view = View::factory('page/show');
		$view->page = $page;
		$view->section_header = ORM::factory('Region', array('region'=>'header'))->body;
		$view->section_footer = ORM::factory('Region', array('region'=>'footer'))->body;
		$view->top_menus      = ORM::factory('Topmenu')->find_all();
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
		// id is our parameter specified in the route table
		// see bootstrap.php for reference
		$id = $this->request->param('id');
		ORM::factory('Page', $id)->delete();
		
		$this->_redirect_to_home();
	}
	
	public function action_edit()
	{
		$id = $this->request->param('id');
		$page = ORM::factory('Page', $id);
		
		if($this->request->method() == 'POST')
		{
			// Copy data from the form to the model and save to database
			$page->values($_POST);
			$page->save();
			
			$this->_redirect_to_home();
			return;
		}
		
		$view = View::factory('page/edit');
		$view->page = $page;
		
		$this->response->body($view);
	}

} // End Welcome
