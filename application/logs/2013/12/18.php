<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-18 04:37:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method HTML::stylesheet() ~ APPPATH\views\template.php [ 13 ] in file:line
2013-12-18 04:37:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-18 04:39:06 --- CRITICAL: ErrorException [ 1 ]: Class 'Template_Controller' not found ~ APPPATH\classes\Controller\user.php [ 3 ] in file:line
2013-12-18 04:39:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-18 04:39:07 --- CRITICAL: ErrorException [ 1 ]: Class 'Template_Controller' not found ~ APPPATH\classes\Controller\user.php [ 3 ] in file:line
2013-12-18 04:39:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-18 04:39:07 --- CRITICAL: ErrorException [ 1 ]: Class 'Template_Controller' not found ~ APPPATH\classes\Controller\user.php [ 3 ] in file:line
2013-12-18 04:39:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-18 04:39:07 --- CRITICAL: ErrorException [ 1 ]: Class 'Template_Controller' not found ~ APPPATH\classes\Controller\user.php [ 3 ] in file:line
2013-12-18 04:39:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-18 04:39:50 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method HTML::stylesheet() ~ APPPATH\views\template.php [ 13 ] in file:line
2013-12-18 04:39:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-18 05:09:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template.php [ 8 ] in F:\wamp\www\pk\kohana-v3.3.1\application\views\template.php:8
2013-12-18 05:09:48 --- DEBUG: #0 F:\wamp\www\pk\kohana-v3.3.1\application\views\template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\wamp\www\pk\...', 8, Array)
#1 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(61): include('F:\wamp\www\pk\...')
#2 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('F:\wamp\www\pk\...', Array)
#3 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 F:\wamp\www\pk\kohana-v3.3.1\application\classes\Controller\user.php(10): Kohana_Response->body(Object(View))
#6 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 F:\wamp\www\pk\kohana-v3.3.1\index.php(118): Kohana_Request->execute()
#12 {main} in F:\wamp\www\pk\kohana-v3.3.1\application\views\template.php:8
2013-12-18 05:28:05 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\user.php [ 9 ] in file:line
2013-12-18 05:28:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-18 05:28:19 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\user.php [ 9 ] in file:line
2013-12-18 05:28:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-18 06:03:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: page_title ~ APPPATH\views\page.php [ 8 ] in F:\wamp\www\pk\kohana-v3.3.1\application\views\page.php:8
2013-12-18 06:03:31 --- DEBUG: #0 F:\wamp\www\pk\kohana-v3.3.1\application\views\page.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\wamp\www\pk\...', 8, Array)
#1 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(61): include('F:\wamp\www\pk\...')
#2 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('F:\wamp\www\pk\...', Array)
#3 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 F:\wamp\www\pk\kohana-v3.3.1\application\classes\Controller\user.php(10): Kohana_Response->body(Object(View))
#6 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 F:\wamp\www\pk\kohana-v3.3.1\index.php(118): Kohana_Request->execute()
#12 {main} in F:\wamp\www\pk\kohana-v3.3.1\application\views\page.php:8
2013-12-18 06:03:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: page_title ~ APPPATH\views\page.php [ 8 ] in F:\wamp\www\pk\kohana-v3.3.1\application\views\page.php:8
2013-12-18 06:03:32 --- DEBUG: #0 F:\wamp\www\pk\kohana-v3.3.1\application\views\page.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\wamp\www\pk\...', 8, Array)
#1 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(61): include('F:\wamp\www\pk\...')
#2 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('F:\wamp\www\pk\...', Array)
#3 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 F:\wamp\www\pk\kohana-v3.3.1\application\classes\Controller\user.php(10): Kohana_Response->body(Object(View))
#6 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 F:\wamp\www\pk\kohana-v3.3.1\index.php(118): Kohana_Request->execute()
#12 {main} in F:\wamp\www\pk\kohana-v3.3.1\application\views\page.php:8
2013-12-18 06:18:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tagline ~ APPPATH\views\template\template.php [ 22 ] in F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php:22
2013-12-18 06:18:39 --- DEBUG: #0 F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\wamp\www\pk\...', 22, Array)
#1 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(61): include('F:\wamp\www\pk\...')
#2 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('F:\wamp\www\pk\...', Array)
#3 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 F:\wamp\www\pk\kohana-v3.3.1\application\classes\Controller\demo.php(53): Kohana_Controller_Template->after()
#5 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller.php(87): Controller_Demo->after()
#6 [internal function]: Kohana_Controller->execute()
#7 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#8 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 F:\wamp\www\pk\kohana-v3.3.1\index.php(118): Kohana_Request->execute()
#11 {main} in F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php:22
2013-12-18 06:20:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tagline ~ APPPATH\views\template\template.php [ 22 ] in F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php:22
2013-12-18 06:20:34 --- DEBUG: #0 F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\wamp\www\pk\...', 22, Array)
#1 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(61): include('F:\wamp\www\pk\...')
#2 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('F:\wamp\www\pk\...', Array)
#3 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 F:\wamp\www\pk\kohana-v3.3.1\application\classes\Controller\demo.php(53): Kohana_Controller_Template->after()
#5 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller.php(87): Controller_Demo->after()
#6 [internal function]: Kohana_Controller->execute()
#7 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#8 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 F:\wamp\www\pk\kohana-v3.3.1\index.php(118): Kohana_Request->execute()
#11 {main} in F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php:22
2013-12-18 06:21:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tagline ~ APPPATH\views\template\template.php [ 26 ] in F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php:26
2013-12-18 06:21:25 --- DEBUG: #0 F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\wamp\www\pk\...', 26, Array)
#1 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(61): include('F:\wamp\www\pk\...')
#2 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('F:\wamp\www\pk\...', Array)
#3 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 F:\wamp\www\pk\kohana-v3.3.1\application\classes\Controller\demo.php(53): Kohana_Controller_Template->after()
#5 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller.php(87): Controller_Demo->after()
#6 [internal function]: Kohana_Controller->execute()
#7 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#8 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 F:\wamp\www\pk\kohana-v3.3.1\index.php(118): Kohana_Request->execute()
#11 {main} in F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php:26
2013-12-18 06:21:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tagline ~ APPPATH\views\template\template.php [ 26 ] in F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php:26
2013-12-18 06:21:26 --- DEBUG: #0 F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\wamp\www\pk\...', 26, Array)
#1 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(61): include('F:\wamp\www\pk\...')
#2 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('F:\wamp\www\pk\...', Array)
#3 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 F:\wamp\www\pk\kohana-v3.3.1\application\classes\Controller\demo.php(53): Kohana_Controller_Template->after()
#5 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller.php(87): Controller_Demo->after()
#6 [internal function]: Kohana_Controller->execute()
#7 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#8 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 F:\wamp\www\pk\kohana-v3.3.1\index.php(118): Kohana_Request->execute()
#11 {main} in F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php:26
2013-12-18 06:21:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tagline ~ APPPATH\views\template\template.php [ 26 ] in F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php:26
2013-12-18 06:21:26 --- DEBUG: #0 F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\wamp\www\pk\...', 26, Array)
#1 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(61): include('F:\wamp\www\pk\...')
#2 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('F:\wamp\www\pk\...', Array)
#3 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 F:\wamp\www\pk\kohana-v3.3.1\application\classes\Controller\demo.php(53): Kohana_Controller_Template->after()
#5 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller.php(87): Controller_Demo->after()
#6 [internal function]: Kohana_Controller->execute()
#7 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#8 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 F:\wamp\www\pk\kohana-v3.3.1\index.php(118): Kohana_Request->execute()
#11 {main} in F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php:26
2013-12-18 06:21:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tagline ~ APPPATH\views\template\template.php [ 26 ] in F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php:26
2013-12-18 06:21:27 --- DEBUG: #0 F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\wamp\www\pk\...', 26, Array)
#1 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(61): include('F:\wamp\www\pk\...')
#2 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('F:\wamp\www\pk\...', Array)
#3 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 F:\wamp\www\pk\kohana-v3.3.1\application\classes\Controller\demo.php(53): Kohana_Controller_Template->after()
#5 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller.php(87): Controller_Demo->after()
#6 [internal function]: Kohana_Controller->execute()
#7 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#8 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 F:\wamp\www\pk\kohana-v3.3.1\index.php(118): Kohana_Request->execute()
#11 {main} in F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php:26
2013-12-18 06:21:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tagline ~ APPPATH\views\template\template.php [ 26 ] in F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php:26
2013-12-18 06:21:27 --- DEBUG: #0 F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\wamp\www\pk\...', 26, Array)
#1 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(61): include('F:\wamp\www\pk\...')
#2 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('F:\wamp\www\pk\...', Array)
#3 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 F:\wamp\www\pk\kohana-v3.3.1\application\classes\Controller\demo.php(53): Kohana_Controller_Template->after()
#5 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller.php(87): Controller_Demo->after()
#6 [internal function]: Kohana_Controller->execute()
#7 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#8 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 F:\wamp\www\pk\kohana-v3.3.1\index.php(118): Kohana_Request->execute()
#11 {main} in F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php:26
2013-12-18 06:21:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tagline ~ APPPATH\views\template\template.php [ 26 ] in F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php:26
2013-12-18 06:21:27 --- DEBUG: #0 F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\wamp\www\pk\...', 26, Array)
#1 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(61): include('F:\wamp\www\pk\...')
#2 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('F:\wamp\www\pk\...', Array)
#3 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 F:\wamp\www\pk\kohana-v3.3.1\application\classes\Controller\demo.php(53): Kohana_Controller_Template->after()
#5 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller.php(87): Controller_Demo->after()
#6 [internal function]: Kohana_Controller->execute()
#7 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#8 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 F:\wamp\www\pk\kohana-v3.3.1\index.php(118): Kohana_Request->execute()
#11 {main} in F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php:26
2013-12-18 06:21:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tagline ~ APPPATH\views\template\template.php [ 26 ] in F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php:26
2013-12-18 06:21:28 --- DEBUG: #0 F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\wamp\www\pk\...', 26, Array)
#1 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(61): include('F:\wamp\www\pk\...')
#2 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('F:\wamp\www\pk\...', Array)
#3 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 F:\wamp\www\pk\kohana-v3.3.1\application\classes\Controller\demo.php(53): Kohana_Controller_Template->after()
#5 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller.php(87): Controller_Demo->after()
#6 [internal function]: Kohana_Controller->execute()
#7 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#8 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 F:\wamp\www\pk\kohana-v3.3.1\index.php(118): Kohana_Request->execute()
#11 {main} in F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php:26
2013-12-18 06:21:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tagline ~ APPPATH\views\template\template.php [ 26 ] in F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php:26
2013-12-18 06:21:28 --- DEBUG: #0 F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\wamp\www\pk\...', 26, Array)
#1 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(61): include('F:\wamp\www\pk\...')
#2 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('F:\wamp\www\pk\...', Array)
#3 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 F:\wamp\www\pk\kohana-v3.3.1\application\classes\Controller\demo.php(53): Kohana_Controller_Template->after()
#5 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller.php(87): Controller_Demo->after()
#6 [internal function]: Kohana_Controller->execute()
#7 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#8 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 F:\wamp\www\pk\kohana-v3.3.1\index.php(118): Kohana_Request->execute()
#11 {main} in F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php:26
2013-12-18 06:21:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tagline ~ APPPATH\views\template\template.php [ 26 ] in F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php:26
2013-12-18 06:21:28 --- DEBUG: #0 F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\wamp\www\pk\...', 26, Array)
#1 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(61): include('F:\wamp\www\pk\...')
#2 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('F:\wamp\www\pk\...', Array)
#3 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 F:\wamp\www\pk\kohana-v3.3.1\application\classes\Controller\demo.php(53): Kohana_Controller_Template->after()
#5 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller.php(87): Controller_Demo->after()
#6 [internal function]: Kohana_Controller->execute()
#7 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#8 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 F:\wamp\www\pk\kohana-v3.3.1\index.php(118): Kohana_Request->execute()
#11 {main} in F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php:26
2013-12-18 06:21:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tagline ~ APPPATH\views\template\template.php [ 26 ] in F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php:26
2013-12-18 06:21:28 --- DEBUG: #0 F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\wamp\www\pk\...', 26, Array)
#1 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(61): include('F:\wamp\www\pk\...')
#2 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('F:\wamp\www\pk\...', Array)
#3 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 F:\wamp\www\pk\kohana-v3.3.1\application\classes\Controller\demo.php(53): Kohana_Controller_Template->after()
#5 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller.php(87): Controller_Demo->after()
#6 [internal function]: Kohana_Controller->execute()
#7 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#8 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 F:\wamp\www\pk\kohana-v3.3.1\index.php(118): Kohana_Request->execute()
#11 {main} in F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php:26
2013-12-18 06:21:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tagline ~ APPPATH\views\template\template.php [ 26 ] in F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php:26
2013-12-18 06:21:29 --- DEBUG: #0 F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\wamp\www\pk\...', 26, Array)
#1 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(61): include('F:\wamp\www\pk\...')
#2 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('F:\wamp\www\pk\...', Array)
#3 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 F:\wamp\www\pk\kohana-v3.3.1\application\classes\Controller\demo.php(53): Kohana_Controller_Template->after()
#5 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Controller.php(87): Controller_Demo->after()
#6 [internal function]: Kohana_Controller->execute()
#7 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#8 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 F:\wamp\www\pk\kohana-v3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 F:\wamp\www\pk\kohana-v3.3.1\index.php(118): Kohana_Request->execute()
#11 {main} in F:\wamp\www\pk\kohana-v3.3.1\application\views\template\template.php:26