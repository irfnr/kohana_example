<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-10 00:29:52 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_sub_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-10 00:29:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 00:31:56 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_sub_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-10 00:31:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 00:34:20 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_sub_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-10 00:34:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 00:35:33 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_sub_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-10 00:35:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 00:35:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_sub_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-10 00:35:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 00:36:20 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_sub_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-10 00:36:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 00:36:21 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_sub_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-10 00:36:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 00:36:22 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_sub_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-10 00:36:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 00:36:22 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_sub_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-10 00:36:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 00:36:22 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_sub_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-10 00:36:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 00:36:22 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_sub_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-10 00:36:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 00:36:23 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_sub_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-10 00:36:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 00:37:50 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_sub_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-10 00:37:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 00:37:57 --- CRITICAL: Database_Exception [ 1146 ]: Table 'demo.subusers' doesn't exist [ SHOW FULL COLUMNS FROM `subusers` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\MySQL.php:359
2014-05-10 00:37:57 --- DEBUG: #0 D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('subusers')
#2 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 D:\xampp\htdocs\kohana_example\application\classes\Controller\User.php(89): Kohana_ORM::factory('subuser')
#7 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Controller.php(84): Controller_User->action_sub_users()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana_example\index.php(122): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\MySQL.php:359
2014-05-10 00:38:53 --- CRITICAL: Database_Exception [ 1146 ]: Table 'demo.subusers' doesn't exist [ SHOW FULL COLUMNS FROM `subusers` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\MySQL.php:359
2014-05-10 00:38:53 --- DEBUG: #0 D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('subusers')
#2 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 D:\xampp\htdocs\kohana_example\application\classes\Controller\User.php(89): Kohana_ORM::factory('subuser')
#7 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Controller.php(84): Controller_User->action_sub_users()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana_example\index.php(122): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\MySQL.php:359
2014-05-10 00:38:57 --- CRITICAL: Database_Exception [ 1146 ]: Table 'demo.subusers' doesn't exist [ SHOW FULL COLUMNS FROM `subusers` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\MySQL.php:359
2014-05-10 00:38:57 --- DEBUG: #0 D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('subusers')
#2 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 D:\xampp\htdocs\kohana_example\application\classes\Controller\User.php(89): Kohana_ORM::factory('subuser')
#7 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Controller.php(84): Controller_User->action_sub_users()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana_example\index.php(122): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\MySQL.php:359
2014-05-10 00:39:01 --- CRITICAL: Database_Exception [ 1146 ]: Table 'demo.subusers' doesn't exist [ SHOW FULL COLUMNS FROM `subusers` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\MySQL.php:359
2014-05-10 00:39:01 --- DEBUG: #0 D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('subusers')
#2 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 D:\xampp\htdocs\kohana_example\application\classes\Controller\User.php(89): Kohana_ORM::factory('subuser')
#7 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Controller.php(84): Controller_User->action_sub_users()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana_example\index.php(122): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\MySQL.php:359
2014-05-10 01:02:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\subuser.php [ 20 ] in file:line
2014-05-10 01:02:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 01:08:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\Controller\User.php [ 90 ] in file:line
2014-05-10 01:08:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 01:12:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\Controller\User.php [ 16 ] in file:line
2014-05-10 01:12:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 01:16:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ MODPATH\auth\classes\Kohana\Auth.php [ 167 ] in file:line
2014-05-10 01:16:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 01:18:17 --- CRITICAL: ErrorException [ 1 ]: Class 'Session_Auth_user' not found ~ SYSPATH\classes\Kohana\Session.php [ 54 ] in file:line
2014-05-10 01:18:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 01:21:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Session_Auth_user' not found ~ SYSPATH\classes\Kohana\Session.php [ 54 ] in file:line
2014-05-10 01:21:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 01:22:33 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_user as array ~ APPPATH\classes\Controller\User.php [ 18 ] in file:line
2014-05-10 01:22:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 01:23:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\User.php [ 18 ] in file:line
2014-05-10 01:23:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 01:23:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\User.php [ 18 ] in file:line
2014-05-10 01:23:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 01:28:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '''' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH\classes\Controller\User.php [ 93 ] in file:line
2014-05-10 01:28:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 02:15:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '''' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Controller\User.php [ 103 ] in file:line
2014-05-10 02:15:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 02:21:09 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_subuser::create_user() ~ APPPATH\classes\Controller\User.php [ 99 ] in file:line
2014-05-10 02:21:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-10 02:22:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_subuser::create_subuser() ~ APPPATH\classes\Controller\User.php [ 99 ] in file:line
2014-05-10 02:22:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line