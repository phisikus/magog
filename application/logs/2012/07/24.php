<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-24 11:08:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL config/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-24 11:08:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL config/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-24 11:08:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL config/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-24 11:08:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL config/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-24 11:09:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL config/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-24 11:09:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL config/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-24 11:17:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH/classes/controller/config.php [ 48 ]
2012-07-24 11:17:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH/classes/controller/config.php [ 48 ]
--
#0 /var/www/magog/application/classes/controller/config.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 48, Array)
#1 [internal function]: Controller_Config->action_admin()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Config))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-24 11:20:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/controller/config.php [ 50 ]
2012-07-24 11:20:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/controller/config.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-24 11:56:20 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-24 11:56:20 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/magog/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /var/www/magog/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /var/www/magog/application/classes/controller/config.php(60): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Config->action_admin()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Config))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-24 11:56:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH/classes/controller/config.php [ 62 ]
2012-07-24 11:56:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH/classes/controller/config.php [ 62 ]
--
#0 /var/www/magog/application/classes/controller/config.php(62): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 62, Array)
#1 [internal function]: Controller_Config->action_admin()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Config))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-24 11:56:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH/classes/controller/config.php [ 64 ]
2012-07-24 11:56:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH/classes/controller/config.php [ 64 ]
--
#0 /var/www/magog/application/classes/controller/config.php(64): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 64, Array)
#1 [internal function]: Controller_Config->action_admin()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Config))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-24 12:37:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/views/admin/config.php [ 9 ]
2012-07-24 12:37:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/views/admin/config.php [ 9 ]
--
#0 /var/www/magog/application/views/admin/config.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 9, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/config.php(65): Kohana_View->render()
#4 [internal function]: Controller_Config->action_admin()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Config))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-24 13:07:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/'.url::site('config/save').' ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-24 13:07:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/'.url::site('config/save').' ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 13:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/'.url::site('config/save').' ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-24 13:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/'.url::site('config/save').' ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 13:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/'.url::site('config/save').' ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-24 13:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/'.url::site('config/save').' ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 13:07:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL config/save was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-24 13:07:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL config/save was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-24 13:27:58 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Config::saveConfig() ~ APPPATH/classes/controller/config.php [ 79 ]
2012-07-24 13:27:58 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Config::saveConfig() ~ APPPATH/classes/controller/config.php [ 79 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-24 13:38:11 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/controller/config.php [ 70 ]
2012-07-24 13:38:11 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/controller/config.php [ 70 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}