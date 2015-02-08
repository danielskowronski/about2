<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

	'driver'       => 'File',
	'hash_method'  => 'sha256',
	'hash_key'     => 'bvcb23bc8g437qx74x43xc354cx67cx2167x2x6c97',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		'admin' => 'b83aa21809b17ae0a2dc3cc44a7a56d395aa0c43816e3f8d54a226b7701db99c', //admin => admin
	),

);
