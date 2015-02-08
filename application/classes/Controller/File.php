<?php defined('SYSPATH') or die('No direct script access.');

class Controller_File extends Controller
{
	public function checkAuth()
	{
		if ( ! Auth::instance()->logged_in())
		{
			$this->redirect('auth/login');
			return;
		}
	}
	
	public function action_list()
	{
		$this->checkAuth();
		$view = View::factory('file/list');
		$view->files = ORM::factory('File')->find_all();
		
		$this->response->body($view);
	}
	
	public function action_delete()
	{
		$id = $this->request->param('id');
		ORM::factory('File', $id)->delete();
		
		$this->redirect('fileadm/list');
	}

	public function action_show()
	{
		$url= $this->request->param('url');
		$file = ORM::factory('File', array('url'=>$url));
		
		$view = View::factory('file/show');
		$view->file = $file;
		$this->response->headers('Content-type',$file->contentType);
		$this->response->body($view);
	}
	
	public function action_edit()
	{
		$id = $this->request->param('id');
		$file = ORM::factory('File', $id);
		$file->values(array("body"=>NULL));
		
		if($this->request->method() == 'POST')
		{
			//recode into something nicer
			$tmpFile=$_FILES['body']['tmp_name'];
			$fp   = fopen($tmpFile, 'r');
			$body = fread($fp, filesize($tmpFile));
			fclose($fp);unlink($tmpFile);
 
			$file->values($_POST);
			$file->values(array("body"=>$body));
			$file->values(array("contentType"=>$_FILES['body']['type']));
			$file->save();
			
			$this->redirect('fileadm/list');
		}
		
		$view = View::factory('file/edit');
		$view->file = $file;
		
		$this->response->body($view);
	}
}