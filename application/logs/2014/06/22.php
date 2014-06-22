<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-22 01:02:08 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'minion-migrations' at 'MODPATH\minion-migrations' ~ SYSPATH\classes\Kohana\Core.php [ 579 ] in D:\xampp\htdocs\kohana_example\application\bootstrap.php:134
2014-06-22 01:02:08 --- DEBUG: #0 D:\xampp\htdocs\kohana_example\application\bootstrap.php(134): Kohana_Core::modules(Array)
#1 D:\xampp\htdocs\kohana_example\index.php(106): require('D:\xampp\htdocs...')
#2 {main} in D:\xampp\htdocs\kohana_example\application\bootstrap.php:134
2014-06-22 01:59:35 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'username' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`password` AS `password`, `user`.`created` AS `created`, `user`.`modifed` AS `modifed` FROM `users` AS `user` WHERE `username` = 'test14' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\Query.php:251
2014-06-22 01:59:35 --- DEBUG: #0 D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 D:\xampp\htdocs\kohana_example\application\classes\Controller\User.php(125): Kohana_ORM->find()
#4 D:\xampp\htdocs\kohana_example\application\classes\Controller\User.php(78): Controller_User->loginWithUserDetails()
#5 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana_example\index.php(122): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\Query.php:251
2014-06-22 02:04:48 --- CRITICAL: Database_Exception [ 1146 ]: Table 'blog.subusers' doesn't exist [ SHOW FULL COLUMNS FROM `subusers` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\MySQL.php:359
2014-06-22 02:04:48 --- DEBUG: #0 D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('subusers')
#2 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 D:\xampp\htdocs\kohana_example\application\classes\Controller\User.php(90): Kohana_ORM::factory('subuser')
#7 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Controller.php(84): Controller_User->action_sub_users()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana_example\index.php(122): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\MySQL.php:359
2014-06-22 06:19:21 --- CRITICAL: Database_Exception [ 1146 ]: Table 'blog.subusers' doesn't exist [ SHOW FULL COLUMNS FROM `subusers` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\MySQL.php:359
2014-06-22 06:19:21 --- DEBUG: #0 D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('subusers')
#2 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 D:\xampp\htdocs\kohana_example\application\classes\Controller\User.php(90): Kohana_ORM::factory('subuser')
#7 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Controller.php(84): Controller_User->action_sub_users()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana_example\index.php(122): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\MySQL.php:359
2014-06-22 06:42:52 --- CRITICAL: Database_Exception [ 1146 ]: Table 'blog.subusers' doesn't exist [ SHOW FULL COLUMNS FROM `subusers` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\MySQL.php:359
2014-06-22 06:42:52 --- DEBUG: #0 D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('subusers')
#2 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 D:\xampp\htdocs\kohana_example\application\classes\Controller\User.php(90): Kohana_ORM::factory('subuser')
#7 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Controller.php(84): Controller_User->action_sub_users()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana_example\index.php(122): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\MySQL.php:359