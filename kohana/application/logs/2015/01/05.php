<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-05 08:19:44 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Cookie.php:67
2015-01-05 08:19:44 --- DEBUG: #0 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 C:\OpenServer\domains\localhost\site\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Cookie.php:67
2015-01-05 09:33:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\classes\Controller\Base.php [ 9 ] in C:\OpenServer\domains\localhost\site\kohana\application\classes\Controller\Base.php:9
2015-01-05 09:33:17 --- DEBUG: #0 C:\OpenServer\domains\localhost\site\kohana\application\classes\Controller\Base.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 9, Array)
#1 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#4 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\site\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\site\kohana\application\classes\Controller\Base.php:9
2015-01-05 09:33:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH\views\v_base.php [ 5 ] in file:line
2015-01-05 09:33:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-05 09:40:27 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant templates - assumed 'templates' ~ APPPATH\classes\Controller\Base.php [ 13 ] in C:\OpenServer\domains\localhost\site\kohana\application\classes\Controller\Base.php:13
2015-01-05 09:40:27 --- DEBUG: #0 C:\OpenServer\domains\localhost\site\kohana\application\classes\Controller\Base.php(13): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\OpenServer\d...', 13, Array)
#1 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Controller.php(84): Controller_Base->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#4 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\site\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\site\kohana\application\classes\Controller\Base.php:13
2015-01-05 10:27:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\Base.php [ 16 ] in file:line
2015-01-05 10:27:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-05 10:36:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$products' (T_VARIABLE) ~ APPPATH\classes\Controller\Static.php [ 13 ] in file:line
2015-01-05 10:36:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-05 10:37:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$products' (T_VARIABLE) ~ APPPATH\classes\Controller\Static.php [ 13 ] in file:line
2015-01-05 10:37:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-05 10:37:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Static.php [ 9 ] in file:line
2015-01-05 10:37:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line