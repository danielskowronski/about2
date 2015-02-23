<?php defined('SYSPATH') or die('No direct script access.');

class Helper_Lang extends Controller
{
	static function checkLang()
	{
		//langsel //raw cookie, becouse javascript wouldn't be able to modify them - this is sad ;-;
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); //$this->request->accept_lang();//ret of that "smart" function is like: array(4) { ["pl-PL"]=> float(1) ["pl"]=> float(0.8) ["en-US"]=> float(0.6) ["en"]=> float(0.4) }

		if ( ($lang != "en") && ($lang != "pl") ) { $lang="en"; $langsel_offer = true; } else { $langsel_offer = false; }
		if ( isset($_COOKIE['langsel']) ) { $lang=$_COOKIE['langsel']; $langsel_offer=false; }

		return array('lang'=>$lang, 'offer'=>$langsel_offer);
	}
}