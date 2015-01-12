<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-09 08:47:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'where' (T_STRING) ~ APPPATH\classes\Controller\Base.php [ 27 ] in file:line
2015-01-09 08:47:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 08:48:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'where' (T_STRING) ~ APPPATH\classes\Controller\Base.php [ 27 ] in file:line
2015-01-09 08:48:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 08:50:28 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_maintext' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-01-09 08:50:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 08:53:34 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_maintext' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-01-09 08:53:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 08:53:36 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_maintext' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-01-09 08:53:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 08:54:01 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_maintext' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-01-09 08:54:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 08:55:09 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant root - assumed 'root' ~ APPPATH\config\database.php [ 23 ] in C:\OpenServer\domains\localhost\site\kohana\application\config\database.php:23
2015-01-09 08:55:09 --- DEBUG: #0 C:\OpenServer\domains\localhost\site\kohana\application\config\database.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\OpenServer\d...', 23, Array)
#1 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Core.php(829): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Config\File\Reader.php(49): Kohana_Core::load('C:\OpenServer\d...')
#3 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Config.php(130): Kohana_Config_File_Reader->load('database')
#4 C:\OpenServer\domains\localhost\site\kohana\modules\database\classes\Kohana\Database.php(65): Kohana_Config->load('database')
#5 C:\OpenServer\domains\localhost\site\kohana\modules\orm\classes\Kohana\ORM.php(320): Kohana_Database::instance(NULL)
#6 C:\OpenServer\domains\localhost\site\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\OpenServer\domains\localhost\site\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 C:\OpenServer\domains\localhost\site\kohana\application\classes\Controller\Base.php(26): Kohana_ORM::factory('maintext')
#9 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Controller.php(84): Controller_Base->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#12 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\localhost\site\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\OpenServer\domains\localhost\site\kohana\application\config\database.php:23
2015-01-09 08:55:26 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\Base.php [ 27 ] in file:line
2015-01-09 08:55:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 08:56:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\v_base.php [ 22 ] in C:\OpenServer\domains\localhost\site\kohana\application\views\v_base.php:22
2015-01-09 08:56:04 --- DEBUG: #0 C:\OpenServer\domains\localhost\site\kohana\application\views\v_base.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 22, Array)
#1 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#7 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\site\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\site\kohana\application\views\v_base.php:22
2015-01-09 09:11:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\v_base.php [ 22 ] in C:\OpenServer\domains\localhost\site\kohana\application\views\v_base.php:22
2015-01-09 09:11:46 --- DEBUG: #0 C:\OpenServer\domains\localhost\site\kohana\application\views\v_base.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 22, Array)
#1 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Otzyvy))
#7 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\site\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\site\kohana\application\views\v_base.php:22
2015-01-09 09:28:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ')' ~ APPPATH\views\templates\v_otzyvy.php [ 9 ] in file:line
2015-01-09 09:28:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 09:28:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ')' ~ APPPATH\views\templates\v_otzyvy.php [ 9 ] in file:line
2015-01-09 09:28:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 09:29:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\templates\v_otzyvy.php [ 9 ] in file:line
2015-01-09 09:29:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 09:29:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\templates\v_otzyvy.php [ 9 ] in file:line
2015-01-09 09:29:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 09:30:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\templates\v_otzyvy.php [ 9 ] in file:line
2015-01-09 09:30:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 09:30:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\templates\v_otzyvy.php [ 9 ] in file:line
2015-01-09 09:30:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 09:30:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\templates\v_otzyvy.php [ 9 ] in file:line
2015-01-09 09:30:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 09:57:23 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: script ~ SYSPATH\classes\Kohana\View.php [ 179 ] in C:\OpenServer\domains\localhost\site\kohana\application\classes\Controller\Otzyvy.php:9
2015-01-09 09:57:23 --- DEBUG: #0 C:\OpenServer\domains\localhost\site\kohana\application\classes\Controller\Otzyvy.php(9): Kohana_View->__get('script')
#1 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Controller.php(69): Controller_Otzyvy->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Otzyvy))
#4 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\site\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\site\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\site\kohana\application\classes\Controller\Otzyvy.php:9
2015-01-09 10:21:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$otz' (T_VARIABLE) ~ APPPATH\classes\Controller\Otzyvy.php [ 17 ] in file:line
2015-01-09 10:21:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 10:22:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\Otzyvy.php [ 17 ] in file:line
2015-01-09 10:22:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 10:23:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\Controller\Otzyvy.php [ 21 ] in file:line
2015-01-09 10:23:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 10:23:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\Controller\Otzyvy.php [ 21 ] in file:line
2015-01-09 10:23:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 10:23:43 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_otzyv' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-01-09 10:23:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 10:28:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''='' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH\classes\Controller\Otzyvy.php [ 27 ] in file:line
2015-01-09 10:28:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 10:28:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\Otzyvy.php [ 30 ] in file:line
2015-01-09 10:28:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 10:28:55 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\Otzyvy.php [ 29 ] in file:line
2015-01-09 10:28:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line