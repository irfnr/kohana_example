
2014-06-22 12:11:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_user::get_websites() ~ APPPATH\classes\Auth\blog.php [ 51 ] in file:line
2014-06-22 12:11:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-22 12:15:00 --- CRITICAL: ErrorException [ 1 ]: Class 'AutoModeler_ORM' not found ~ APPPATH\classes\model\user.php [ 3 ] in file:line
2014-06-22 12:15:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-22 12:53:19 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::load() ~ APPPATH\classes\model\user.php [ 30 ] in file:line
2014-06-22 12:53:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-22 12:53:33 --- CRITICAL: ErrorException [ 1 ]: Class 'AutoModeler_ORM' not found ~ APPPATH\classes\model\user.php [ 3 ] in file:line
2014-06-22 12:53:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-22 12:54:37 --- CRITICAL: ErrorException [ 1 ]: Class 'AutoModeler_ORM_Core' not found ~ APPPATH\classes\automodeler\orm.php [ 11 ] in file:line
2014-06-22 12:54:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-22 12:56:51 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'users.username' in 'field list' [ SELECT `users`.`id`, `users`.`username`, `users`.`password`, `users`.`created`, `users`.`modified` FROM `users` WHERE `users`.`username` = 'irfanr.cuelogic@gmail.com' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\Query.php:251
2014-06-22 12:56:51 --- DEBUG: #0 D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `users`....', false, Array)
#1 D:\xampp\htdocs\kohana_example\modules\automodeler\classes\automodeler\core.php(118): Kohana_Database_Query->execute(NULL)
#2 D:\xampp\htdocs\kohana_example\modules\automodeler\classes\automodeler\orm\core.php(184): AutoModeler_Core->load(Object(Database_Query_Builder_Select), 1)
#3 D:\xampp\htdocs\kohana_example\application\classes\model\user.php(30): AutoModeler_ORM_Core->load(Object(Database_Query_Builder_Select))
#4 D:\xampp\htdocs\kohana_example\application\classes\Auth\blog.php(47): Model_User->__construct('irfanr.cuelogic...')
#5 D:\xampp\htdocs\kohana_example\modules\auth\classes\Kohana\Auth.php(92): Auth_Blog->_login('irfanr.cuelogic...', 'cuelogic', true)
#6 D:\xampp\htdocs\kohana_example\application\classes\controller\User.php(29): Kohana_Auth->login('irfanr.cuelogic...', 'cuelogic', true)
#7 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana_example\index.php(122): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\Query.php:251
2014-06-22 12:57:10 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'users.modified' in 'field list' [ SELECT `users`.`id`, `users`.`username`, `users`.`password`, `users`.`created`, `users`.`modified` FROM `users` WHERE `users`.`username` = 'irfanr.cuelogic@gmail.com' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\Query.php:251
2014-06-22 12:57:10 --- DEBUG: #0 D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `users`....', false, Array)
#1 D:\xampp\htdocs\kohana_example\modules\automodeler\classes\automodeler\core.php(118): Kohana_Database_Query->execute(NULL)
#2 D:\xampp\htdocs\kohana_example\modules\automodeler\classes\automodeler\orm\core.php(184): AutoModeler_Core->load(Object(Database_Query_Builder_Select), 1)
#3 D:\xampp\htdocs\kohana_example\application\classes\model\user.php(30): AutoModeler_ORM_Core->load(Object(Database_Query_Builder_Select))
#4 D:\xampp\htdocs\kohana_example\application\classes\Auth\blog.php(47): Model_User->__construct('irfanr.cuelogic...')
#5 D:\xampp\htdocs\kohana_example\modules\auth\classes\Kohana\Auth.php(92): Auth_Blog->_login('irfanr.cuelogic...', 'cuelogic', true)
#6 D:\xampp\htdocs\kohana_example\application\classes\controller\User.php(29): Kohana_Auth->login('irfanr.cuelogic...', 'cuelogic', true)
#7 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana_example\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana_example\index.php(122): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana_example\modules\database\classes\Kohana\Database\Query.php:251
2014-06-22 12:57:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::get_websites() ~ APPPATH\classes\Auth\blog.php [ 51 ] in file:line
2014-06-22 12:57:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-22 12:58:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::get_websites() ~ APPPATH\classes\Auth\blog.php [ 51 ] in file:line
2014-06-22 12:58:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-22 13:06:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN), expecting function (T_FUNCTION) ~ APPPATH\classes\Auth\blog.php [ 30 ] in file:line
2014-06-22 13:06:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-22 13:06:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\model\user.php [ 31 ] in file:line
2014-06-22 13:06:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-22 13:07:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\model\user.php [ 31 ] in file:line
2014-06-22 13:07:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-22 13:20:07 --- ERROR: Field last_logged_in does not exist in Model_User! in D:\xampp\htdocs\kohana_example\modules\automodeler\classes\automodeler\orm\core.php:97
2014-06-22 13:24:52 --- ERROR: Field last_logged_in does not exist in Model_User! in D:\xampp\htdocs\kohana_example\modules\automodeler\classes\automodeler\orm\core.php:97
2014-06-22 13:24:57 --- ERROR: Field last_logged_in does not exist in Model_User! in D:\xampp\htdocs\kohana_example\modules\automodeler\classes\automodeler\orm\core.php:97
2014-06-22 13:44:35 --- ERROR: Field last_logged_in does not exist in Model_User! in D:\xampp\htdocs\kohana_example\modules\automodeler\classes\automodeler\orm\core.php:97
2014-06-22 13:45:13 --- ERROR: Field last_logged_in does not exist in Model_User! in D:\xampp\htdocs\kohana_example\modules\automodeler\classes\automodeler\orm\core.php:97