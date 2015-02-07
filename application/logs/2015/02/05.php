<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-05 02:06:23 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function values() on a non-object ~ APPPATH/classes/Controller/Topmenu.php [ 43 ] in file:line
2015-02-05 02:06:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-05 02:08:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/classes/Controller/Page.php [ 49 ] in file:line
2015-02-05 02:08:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-05 02:08:35 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/classes/Controller/Page.php [ 49 ] in file:line
2015-02-05 02:08:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-05 02:09:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Page.php [ 49 ] in file:line
2015-02-05 02:09:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-05 02:09:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Page.php [ 49 ] in file:line
2015-02-05 02:09:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-05 02:09:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Page.php [ 49 ] in file:line
2015-02-05 02:09:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-05 02:09:21 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 991 ] in /www/dsinf.net/about2/_/application/classes/Controller/Page.php:49
2015-02-05 02:09:21 --- DEBUG: #0 /www/dsinf.net/about2/_/application/classes/Controller/Page.php(49): Kohana_ORM->find_all()
#1 /www/dsinf.net/about2/_/system/classes/Kohana/Controller.php(84): Controller_Page->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 /www/dsinf.net/about2/_/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /www/dsinf.net/about2/_/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /www/dsinf.net/about2/_/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /www/dsinf.net/about2/_/index.php(125): Kohana_Request->execute()
#7 {main} in /www/dsinf.net/about2/_/application/classes/Controller/Page.php:49
2015-02-05 02:09:22 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 991 ] in /www/dsinf.net/about2/_/application/classes/Controller/Page.php:49
2015-02-05 02:09:22 --- DEBUG: #0 /www/dsinf.net/about2/_/application/classes/Controller/Page.php(49): Kohana_ORM->find_all()
#1 /www/dsinf.net/about2/_/system/classes/Kohana/Controller.php(84): Controller_Page->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 /www/dsinf.net/about2/_/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /www/dsinf.net/about2/_/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /www/dsinf.net/about2/_/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /www/dsinf.net/about2/_/index.php(125): Kohana_Request->execute()
#7 {main} in /www/dsinf.net/about2/_/application/classes/Controller/Page.php:49
2015-02-05 02:39:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-02-05 02:39:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-05 02:40:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-02-05 02:40:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-05 02:40:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-02-05 02:40:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-05 02:46:01 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL config/list was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /www/dsinf.net/about2/_/system/classes/Kohana/Controller.php:80
2015-02-05 02:46:01 --- DEBUG: #0 /www/dsinf.net/about2/_/system/classes/Kohana/Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 /www/dsinf.net/about2/_/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Config))
#3 /www/dsinf.net/about2/_/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /www/dsinf.net/about2/_/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#5 /www/dsinf.net/about2/_/index.php(125): Kohana_Request->execute()
#6 {main} in /www/dsinf.net/about2/_/system/classes/Kohana/Controller.php:80
2015-02-05 02:48:39 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'dev_about2.configs' doesn't exist [ SHOW FULL COLUMNS FROM `configs` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /www/dsinf.net/about2/_/modules/database/classes/Kohana/Database/MySQL.php:359
2015-02-05 02:48:39 --- DEBUG: #0 /www/dsinf.net/about2/_/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('configs')
#2 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct('page_name')
#6 /www/dsinf.net/about2/_/application/classes/Controller/Page.php(48): Kohana_ORM::factory('Config', 'page_name')
#7 /www/dsinf.net/about2/_/system/classes/Kohana/Controller.php(84): Controller_Page->action_show()
#8 [internal function]: Kohana_Controller->execute()
#9 /www/dsinf.net/about2/_/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#10 /www/dsinf.net/about2/_/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /www/dsinf.net/about2/_/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /www/dsinf.net/about2/_/index.php(125): Kohana_Request->execute()
#13 {main} in /www/dsinf.net/about2/_/modules/database/classes/Kohana/Database/MySQL.php:359
2015-02-05 02:48:40 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'dev_about2.configs' doesn't exist [ SHOW FULL COLUMNS FROM `configs` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /www/dsinf.net/about2/_/modules/database/classes/Kohana/Database/MySQL.php:359
2015-02-05 02:48:40 --- DEBUG: #0 /www/dsinf.net/about2/_/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('configs')
#2 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct('page_name')
#6 /www/dsinf.net/about2/_/application/classes/Controller/Page.php(48): Kohana_ORM::factory('Config', 'page_name')
#7 /www/dsinf.net/about2/_/system/classes/Kohana/Controller.php(84): Controller_Page->action_show()
#8 [internal function]: Kohana_Controller->execute()
#9 /www/dsinf.net/about2/_/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#10 /www/dsinf.net/about2/_/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /www/dsinf.net/about2/_/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /www/dsinf.net/about2/_/index.php(125): Kohana_Request->execute()
#13 {main} in /www/dsinf.net/about2/_/modules/database/classes/Kohana/Database/MySQL.php:359
2015-02-05 02:48:41 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'dev_about2.configs' doesn't exist [ SHOW FULL COLUMNS FROM `configs` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /www/dsinf.net/about2/_/modules/database/classes/Kohana/Database/MySQL.php:359
2015-02-05 02:48:41 --- DEBUG: #0 /www/dsinf.net/about2/_/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('configs')
#2 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct('page_name')
#6 /www/dsinf.net/about2/_/application/classes/Controller/Page.php(48): Kohana_ORM::factory('Config', 'page_name')
#7 /www/dsinf.net/about2/_/system/classes/Kohana/Controller.php(84): Controller_Page->action_show()
#8 [internal function]: Kohana_Controller->execute()
#9 /www/dsinf.net/about2/_/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#10 /www/dsinf.net/about2/_/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /www/dsinf.net/about2/_/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /www/dsinf.net/about2/_/index.php(125): Kohana_Request->execute()
#13 {main} in /www/dsinf.net/about2/_/modules/database/classes/Kohana/Database/MySQL.php:359
2015-02-05 02:48:59 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'config.id' in 'where clause' [ SELECT `config`.`name` AS `name`, `config`.`value` AS `value`, `config`.`description` AS `description` FROM `config` AS `config` WHERE `config`.`id` = 'page_name' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /www/dsinf.net/about2/_/modules/database/classes/Kohana/Database/Query.php:251
2015-02-05 02:48:59 --- DEBUG: #0 /www/dsinf.net/about2/_/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `config`...', false, Array)
#1 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(271): Kohana_ORM->find()
#4 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct('page_name')
#5 /www/dsinf.net/about2/_/application/classes/Controller/Page.php(48): Kohana_ORM::factory('Config', 'page_name')
#6 /www/dsinf.net/about2/_/system/classes/Kohana/Controller.php(84): Controller_Page->action_show()
#7 [internal function]: Kohana_Controller->execute()
#8 /www/dsinf.net/about2/_/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#9 /www/dsinf.net/about2/_/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /www/dsinf.net/about2/_/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /www/dsinf.net/about2/_/index.php(125): Kohana_Request->execute()
#12 {main} in /www/dsinf.net/about2/_/modules/database/classes/Kohana/Database/Query.php:251
2015-02-05 02:49:00 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'config.id' in 'where clause' [ SELECT `config`.`name` AS `name`, `config`.`value` AS `value`, `config`.`description` AS `description` FROM `config` AS `config` WHERE `config`.`id` = 'page_name' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /www/dsinf.net/about2/_/modules/database/classes/Kohana/Database/Query.php:251
2015-02-05 02:49:00 --- DEBUG: #0 /www/dsinf.net/about2/_/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `config`...', false, Array)
#1 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(271): Kohana_ORM->find()
#4 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct('page_name')
#5 /www/dsinf.net/about2/_/application/classes/Controller/Page.php(48): Kohana_ORM::factory('Config', 'page_name')
#6 /www/dsinf.net/about2/_/system/classes/Kohana/Controller.php(84): Controller_Page->action_show()
#7 [internal function]: Kohana_Controller->execute()
#8 /www/dsinf.net/about2/_/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#9 /www/dsinf.net/about2/_/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /www/dsinf.net/about2/_/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /www/dsinf.net/about2/_/index.php(125): Kohana_Request->execute()
#12 {main} in /www/dsinf.net/about2/_/modules/database/classes/Kohana/Database/Query.php:251
2015-02-05 02:49:01 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'config.id' in 'where clause' [ SELECT `config`.`name` AS `name`, `config`.`value` AS `value`, `config`.`description` AS `description` FROM `config` AS `config` WHERE `config`.`id` = 'page_name' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /www/dsinf.net/about2/_/modules/database/classes/Kohana/Database/Query.php:251
2015-02-05 02:49:01 --- DEBUG: #0 /www/dsinf.net/about2/_/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `config`...', false, Array)
#1 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(271): Kohana_ORM->find()
#4 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct('page_name')
#5 /www/dsinf.net/about2/_/application/classes/Controller/Page.php(48): Kohana_ORM::factory('Config', 'page_name')
#6 /www/dsinf.net/about2/_/system/classes/Kohana/Controller.php(84): Controller_Page->action_show()
#7 [internal function]: Kohana_Controller->execute()
#8 /www/dsinf.net/about2/_/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#9 /www/dsinf.net/about2/_/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /www/dsinf.net/about2/_/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /www/dsinf.net/about2/_/index.php(125): Kohana_Request->execute()
#12 {main} in /www/dsinf.net/about2/_/modules/database/classes/Kohana/Database/Query.php:251
2015-02-05 02:49:01 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'config.id' in 'where clause' [ SELECT `config`.`name` AS `name`, `config`.`value` AS `value`, `config`.`description` AS `description` FROM `config` AS `config` WHERE `config`.`id` = 'page_name' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /www/dsinf.net/about2/_/modules/database/classes/Kohana/Database/Query.php:251
2015-02-05 02:49:01 --- DEBUG: #0 /www/dsinf.net/about2/_/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `config`...', false, Array)
#1 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(271): Kohana_ORM->find()
#4 /www/dsinf.net/about2/_/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct('page_name')
#5 /www/dsinf.net/about2/_/application/classes/Controller/Page.php(48): Kohana_ORM::factory('Config', 'page_name')
#6 /www/dsinf.net/about2/_/system/classes/Kohana/Controller.php(84): Controller_Page->action_show()
#7 [internal function]: Kohana_Controller->execute()
#8 /www/dsinf.net/about2/_/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#9 /www/dsinf.net/about2/_/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /www/dsinf.net/about2/_/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /www/dsinf.net/about2/_/index.php(125): Kohana_Request->execute()
#12 {main} in /www/dsinf.net/about2/_/modules/database/classes/Kohana/Database/Query.php:251