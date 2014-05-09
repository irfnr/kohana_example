<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-25 01:45:20 --- EMERGENCY: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 235 ] in /opt/lampp/htdocs/kohana_example/modules/orm/classes/Kohana/ORM.php:1668
2014-04-25 01:45:20 --- DEBUG: #0 /opt/lampp/htdocs/kohana_example/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_PDO->list_columns('users')
#1 /opt/lampp/htdocs/kohana_example/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#2 /opt/lampp/htdocs/kohana_example/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#3 /opt/lampp/htdocs/kohana_example/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#4 /opt/lampp/htdocs/kohana_example/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#5 /opt/lampp/htdocs/kohana_example/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#6 /opt/lampp/htdocs/kohana_example/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('asdas', 'asdasd', false)
#7 /opt/lampp/htdocs/kohana_example/application/classes/Controller/User.php(66): Kohana_Auth->login('asdas', 'asdasd', false)
#8 /opt/lampp/htdocs/kohana_example/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/kohana_example/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /opt/lampp/htdocs/kohana_example/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/kohana_example/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/kohana_example/index.php(121): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/kohana_example/modules/orm/classes/Kohana/ORM.php:1668
2014-04-25 01:46:19 --- EMERGENCY: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 235 ] in /opt/lampp/htdocs/kohana_example/modules/orm/classes/Kohana/ORM.php:1668
2014-04-25 01:46:19 --- DEBUG: #0 /opt/lampp/htdocs/kohana_example/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_PDO->list_columns('users')
#1 /opt/lampp/htdocs/kohana_example/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#2 /opt/lampp/htdocs/kohana_example/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#3 /opt/lampp/htdocs/kohana_example/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#4 /opt/lampp/htdocs/kohana_example/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#5 /opt/lampp/htdocs/kohana_example/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#6 /opt/lampp/htdocs/kohana_example/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('asdas', 'asdasd', false)
#7 /opt/lampp/htdocs/kohana_example/application/classes/Controller/User.php(66): Kohana_Auth->login('asdas', 'asdasd', false)
#8 /opt/lampp/htdocs/kohana_example/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/kohana_example/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /opt/lampp/htdocs/kohana_example/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/kohana_example/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/kohana_example/index.php(122): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/kohana_example/modules/orm/classes/Kohana/ORM.php:1668
2014-04-25 01:46:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-04-25 01:46:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-25 01:48:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-04-25 01:48:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-25 01:51:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-04-25 01:51:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-25 01:51:31 --- EMERGENCY: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 235 ] in /opt/lampp/htdocs/kohana_example/modules/orm/classes/Kohana/ORM.php:1668
2014-04-25 01:51:31 --- DEBUG: #0 /opt/lampp/htdocs/kohana_example/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_PDO->list_columns('users')
#1 /opt/lampp/htdocs/kohana_example/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#2 /opt/lampp/htdocs/kohana_example/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#3 /opt/lampp/htdocs/kohana_example/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#4 /opt/lampp/htdocs/kohana_example/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#5 /opt/lampp/htdocs/kohana_example/application/classes/Controller/User.php(31): Kohana_ORM::factory('user')
#6 /opt/lampp/htdocs/kohana_example/system/classes/Kohana/Controller.php(84): Controller_User->action_create()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/kohana_example/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /opt/lampp/htdocs/kohana_example/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/kohana_example/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/kohana_example/index.php(122): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/kohana_example/modules/orm/classes/Kohana/ORM.php:1668
2014-04-25 01:52:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_user::create_user() ~ APPPATH/classes/Controller/User.php [ 31 ] in file:line
2014-04-25 01:52:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-25 01:54:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-04-25 01:54:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-25 01:56:16 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/User.php [ 71 ] in file:line
2014-04-25 01:56:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-25 01:57:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/User.php [ 86 ] in file:line
2014-04-25 01:57:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-25 02:02:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'html' not found ~ APPPATH/views/template.php [ 5 ] in file:line
2014-04-25 02:02:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-25 02:16:03 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method HTML::stylesheet() ~ APPPATH/views/template.php [ 5 ] in file:line
2014-04-25 02:16:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line