<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller
{
	public function before()
	{
		/*if ( ! Auth::instance()->logged_in())
		{
			$this->redirect('auth/login');
			return;
		}*/
	}
	public function action_index()
	{
		if (Auth::instance()->logged_in())
		{
			$view = View::factory('auth/index');
		}
		else
		{
			$this->redirect('auth/login');
			return;
		}
		
		$this->response->body($view);
	}
	public function action_login()
	{
		//user login form and actual login

		$view = View::factory('auth/login');
		$view->login_failed = false;

		if($this->request->method() == 'POST')
		{
			$post = $this->request->post();
			$success = Auth::instance()->login($post['login'], $post['passwd']);
			

			if ($success)
			{
				$this->redirect('auth/index');
				return;
			}
			else
			{
				$view->login_failed = true;
			}
	
		}

		$this->response->body($view);
	}
	public function action_logout()
	{
		//user logout
		Auth::instance()->logout();
		$this->redirect('auth/login');
		return;
	}
	public function action_hash()
	{
		//generate hash for password

		$view = View::factory('auth/hash');
		$view->login_failed = false;

		if($this->request->method() == 'POST')
		{
			$post = $this->request->post();
			$hash = Auth::instance()->hash($post['passwd']);
			
			$view->hash = $hash;
		}
		else
		{
			$view->hash = NULL;
		}

		$this->response->body($view);
	}

} 