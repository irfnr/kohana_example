<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-09 23:48:19 --- CRITICAL: Database_Exception [  ]:  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\MySQL.php:75
2014-05-09 23:48:19 --- DEBUG: #0 D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#4 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#5 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#6 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 D:\xampp\htdocs\kohana_example\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 D:\xampp\htdocs\kohana_example\application\classes\Controller\User.php(92): Kohana_ORM::factory('user')
#9 D:\xampp\htdocs\kohana_example\application\classes\Controller\User.php(77): Controller_User->loginWithUserDetails()
#10 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#11 [internal function]: Kohana_Controller->execute()
#12 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 D:\xampp\htdocs\kohana_example\index.php(122): Kohana_Request->execute()
#16 {main} in D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\MySQL.php:75