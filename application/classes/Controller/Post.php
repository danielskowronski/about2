<?php defined('SYSPATH') or die('No direct script access.');

// Simple blog controller
// The application lacks many features, such as authentication or comments
class Controller_Post extends Controller
{
	private function _redirect_to_home()
	{
		$this->redirect('post/list');
	}
	
	public function action_list()
	{
		$view = View::factory('post/list');
		$view->posts = ORM::factory('Post')->find_all();
		
		$this->response->body($view);
	}
	
	public function action_delete()
	{
		// id is our parameter specified in the route table
		// see bootstrap.php for reference
		$id = $this->request->param('id');
		ORM::factory('Post', $id)->delete();
		
		$this->_redirect_to_home();
	}
	
	public function action_edit()
	{
		$id = $this->request->param('id');
		$post = ORM::factory('Post', $id);
		
		if($this->request->method() == 'POST')
		{
			// Copy data from the form to the model and save to database
			$post->values($_POST);
			$post->save();
			
			$this->_redirect_to_home();
			return;
		}
		
		$view = View::factory('post/edit');
		$view->post = $post;
		
		$this->response->body($view);
	}

} // End Welcome
