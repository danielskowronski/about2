<?php defined('SYSPATH') or die('No direct script access.');

class Controller_File extends Controller
{
	public function action_list()
	{
		Helper_Auth::checkAuth($this);

		$view = View::factory('file/list');
		$view->files = ORM::factory('File')->find_all();
		
		$this->response->body($view);
	}
	
	public function action_delete()
	{
		Helper_Auth::checkAuth($this);

		$id = $this->request->param('id');
		ORM::factory('File', $id)->delete();
		
		$this->redirect('fileadm/list');
	}

	public function action_show()
	{
		$url= $this->request->param('url');
		$file = ORM::factory('File', array('url'=>$url));
		
		if ($file->title==null){
			$lng  = Helper_Lang::checkLang(); 
			$view = View::factory('page/show');
			$page = ORM::factory('Page', array('url'=>'_error404', 'lang'=>$lng['lang']) );
			//fixme: it's hack
			$view->langsel_offer = $lng['offer'];
			$view->page = $page;
			$view->section_header = ORM::factory('Region', array('region'=>'header', 'lang'=>$lng['lang']))->body;
			$view->section_footer = ORM::factory('Region', array('region'=>'footer', 'lang'=>$lng['lang']))->body;
			$view->top_menus      = ORM::factory('Topmenu')->where('lang', '=', $lng['lang'])->find_all();
			$view->page_name      = ORM::factory('Config', array('name' => 'page_name'))->value;
			$this->response->body($view);
			//set error response 404
		}
		else{
			$view = View::factory('file/show');
			$view->file = $file;
			$this->response->headers('Content-type',$file->contentType);
		}
		
		$this->response->body($view);
	}
	
	public function action_edit()
	{
		Helper_Auth::checkAuth($this);

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