<?php defined('SYSPATH') or die('No direct script access.');

class Model_Config extends ORM
{
	protected $_table_name = 'config';
	protected $_primary_key= 'name';
}