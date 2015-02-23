<?php defined('SYSPATH') or die('No direct script access.');

class Helper_Auth extends Controller
{
	static function checkAuth($that) /* not this */
	{
		if ( ! Auth::instance()->logged_in() )
		{
			$that->redirect('auth/login');
		}
	}
}