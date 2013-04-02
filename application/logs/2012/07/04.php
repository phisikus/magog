<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-04 08:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL magog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 08:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL magog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 10:19:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL magog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 10:19:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL magog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 10:19:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting function (T_FUNCTION) ~ APPPATH/classes/controller/user.php [ 33 ]
2012-07-04 10:19:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting function (T_FUNCTION) ~ APPPATH/classes/controller/user.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-04 10:19:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: rendered ~ APPPATH/classes/controller/user.php [ 31 ]
2012-07-04 10:19:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: rendered ~ APPPATH/classes/controller/user.php [ 31 ]
--
#0 /var/www/magog/application/classes/controller/user.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 31, Array)
#1 [internal function]: Controller_User->action_index()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 10:23:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 10:23:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 10:23:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/indexef was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-04 10:23:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/indexef was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 10:25:15 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/user.php [ 32 ]
2012-07-04 10:25:15 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/user.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-04 10:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL magog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 10:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL magog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 10:39:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/classes/controller/user.php [ 32 ]
2012-07-04 10:39:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/classes/controller/user.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-04 10:46:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: zawartosc ~ APPPATH/classes/controller/user.php [ 32 ]
2012-07-04 10:46:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: zawartosc ~ APPPATH/classes/controller/user.php [ 32 ]
--
#0 /var/www/magog/application/classes/controller/user.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 32, Array)
#1 [internal function]: Controller_User->action_index()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:04:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1/user/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 14:04:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1/user/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/indexvg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-04 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/indexvg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 14:04:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 14:04:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 14:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 14:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 14:13:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: level ~ APPPATH/views/user/index.php [ 15 ]
2012-07-04 14:13:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: level ~ APPPATH/views/user/index.php [ 15 ]
--
#0 /var/www/magog/application/views/user/index.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 15, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/user.php(42): Kohana_View->render()
#4 [internal function]: Controller_User->action_index()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-04 14:15:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 14:15:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 15:47:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-04 15:47:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 15:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 15:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 15:49:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 15:49:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 15:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 15:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 15:52:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 15:52:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 15:52:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 15:52:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 15:52:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 15:52:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 15:52:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 15:52:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 15:52:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 15:52:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 15:52:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 15:52:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 15:52:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 15:52:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 15:52:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 15:52:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 15:53:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 15:53:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 15:53:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 15:53:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 15:53:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 15:53:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 15:53:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 15:53:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 15:53:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 15:53:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 15:53:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 15:53:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 15:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 15:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 15:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 15:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 15:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-04 15:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 15:54:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-04 15:54:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 15:54:02 --- ERROR: View_Exception [ 0 ]: The requested view user/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-04 15:54:02 --- STRACE: View_Exception [ 0 ]: The requested view user/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/magog/system/classes/kohana/view.php(137): Kohana_View->set_filename('user/index')
#1 /var/www/magog/system/classes/kohana/view.php(30): Kohana_View->__construct('user/index', NULL)
#2 /var/www/magog/application/classes/controller/user.php(41): Kohana_View::factory('user/index')
#3 [internal function]: Controller_User->action_admin()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-04 15:54:40 --- ERROR: View_Exception [ 0 ]: The requested view user/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-04 15:54:40 --- STRACE: View_Exception [ 0 ]: The requested view user/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/magog/system/classes/kohana/view.php(137): Kohana_View->set_filename('user/index')
#1 /var/www/magog/system/classes/kohana/view.php(30): Kohana_View->__construct('user/index', NULL)
#2 /var/www/magog/application/classes/controller/user.php(41): Kohana_View::factory('user/index')
#3 [internal function]: Controller_User->action_admin()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-04 15:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/adminwef was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-04 15:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/adminwef was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}