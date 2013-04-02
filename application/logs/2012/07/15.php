<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-15 10:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-15 10:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 10:54:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/user/register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-15 10:54:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/user/register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 10:57:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/classes/controller/user/user.php [ 250 ]
2012-07-15 10:57:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/classes/controller/user/user.php [ 250 ]
--
#0 /var/www/magog/application/classes/controller/user/user.php(250): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 250, Array)
#1 [internal function]: Controller_User_User->action_register()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-15 11:00:51 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/user/user.php [ 255 ]
2012-07-15 11:00:51 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/user/user.php [ 255 ]
--
#0 /var/www/magog/application/classes/controller/user/user.php(255): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/magog/...', 255, Array)
#1 [internal function]: Controller_User_User->action_save()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-15 11:04:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'Opuść' (T_STRING), expecting ')' ~ APPPATH/i18n/en.php [ 76 ]
2012-07-15 11:04:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'Opuść' (T_STRING), expecting ')' ~ APPPATH/i18n/en.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-15 11:05:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: signature ~ APPPATH/classes/controller/user/user.php [ 418 ]
2012-07-15 11:05:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: signature ~ APPPATH/classes/controller/user/user.php [ 418 ]
--
#0 /var/www/magog/application/classes/controller/user/user.php(418): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 418, Array)
#1 [internal function]: Controller_User_User->action_registered()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-15 11:05:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/user/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-15 11:05:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/user/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 11:19:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/admin/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-15 11:19:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/admin/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 14:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-15 14:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 14:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-15 14:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 14:07:30 --- ERROR: ErrorException [ 1 ]: Call to undefined function prepare_menu() ~ APPPATH/classes/controller/page/admin.php [ 64 ]
2012-07-15 14:07:30 --- STRACE: ErrorException [ 1 ]: Call to undefined function prepare_menu() ~ APPPATH/classes/controller/page/admin.php [ 64 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-15 14:07:37 --- ERROR: ErrorException [ 1 ]: Call to undefined function prepare_menu() ~ APPPATH/classes/controller/page/admin.php [ 64 ]
2012-07-15 14:07:37 --- STRACE: ErrorException [ 1 ]: Call to undefined function prepare_menu() ~ APPPATH/classes/controller/page/admin.php [ 64 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-15 14:07:46 --- ERROR: ErrorException [ 1 ]: Call to undefined function prepare_menu() ~ APPPATH/classes/controller/page/admin.php [ 64 ]
2012-07-15 14:07:46 --- STRACE: ErrorException [ 1 ]: Call to undefined function prepare_menu() ~ APPPATH/classes/controller/page/admin.php [ 64 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-15 14:08:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/admin/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-15 14:08:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/admin/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 14:34:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/admin/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-15 14:34:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/admin/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 14:34:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ APPPATH/classes/model/page.php [ 51 ]
2012-07-15 14:34:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ APPPATH/classes/model/page.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-15 14:35:16 --- ERROR: View_Exception [ 0 ]: The requested view page/edit could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-15 14:35:16 --- STRACE: View_Exception [ 0 ]: The requested view page/edit could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/magog/system/classes/kohana/view.php(137): Kohana_View->set_filename('page/edit')
#1 /var/www/magog/system/classes/kohana/view.php(30): Kohana_View->__construct('page/edit', NULL)
#2 /var/www/magog/application/classes/controller/page/admin.php(133): Kohana_View::factory('page/edit')
#3 [internal function]: Controller_Page_Admin->action_edit()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page_Admin))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-15 14:45:29 --- ERROR: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 55 ]
2012-07-15 14:45:29 --- STRACE: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 55 ]
--
#0 /var/www/magog/application/views/admin/panel.php(55): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/magog/...', 55, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/page/admin.php(141): Kohana_View->render()
#4 [internal function]: Controller_Page_Admin->action_edit()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page_Admin))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-15 14:48:48 --- ERROR: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 55 ]
2012-07-15 14:48:48 --- STRACE: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 55 ]
--
#0 /var/www/magog/application/views/admin/panel.php(55): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/magog/...', 55, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/page/admin.php(141): Kohana_View->render()
#4 [internal function]: Controller_Page_Admin->action_edit()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page_Admin))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-15 14:48:52 --- ERROR: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 55 ]
2012-07-15 14:48:52 --- STRACE: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 55 ]
--
#0 /var/www/magog/application/views/admin/panel.php(55): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/magog/...', 55, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/page/admin.php(141): Kohana_View->render()
#4 [internal function]: Controller_Page_Admin->action_edit()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page_Admin))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-15 14:49:11 --- ERROR: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 55 ]
2012-07-15 14:49:11 --- STRACE: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 55 ]
--
#0 /var/www/magog/application/views/admin/panel.php(55): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/magog/...', 55, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/page/admin.php(141): Kohana_View->render()
#4 [internal function]: Controller_Page_Admin->action_edit()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page_Admin))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-15 14:49:40 --- ERROR: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 55 ]
2012-07-15 14:49:40 --- STRACE: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 55 ]
--
#0 /var/www/magog/application/views/admin/panel.php(55): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/magog/...', 55, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/page/admin.php(141): Kohana_View->render()
#4 [internal function]: Controller_Page_Admin->action_edit()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page_Admin))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-15 14:50:53 --- ERROR: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 55 ]
2012-07-15 14:50:53 --- STRACE: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 55 ]
--
#0 /var/www/magog/application/views/admin/panel.php(55): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/magog/...', 55, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/page/admin.php(141): Kohana_View->render()
#4 [internal function]: Controller_Page_Admin->action_edit()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page_Admin))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-15 14:50:54 --- ERROR: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 55 ]
2012-07-15 14:50:54 --- STRACE: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 55 ]
--
#0 /var/www/magog/application/views/admin/panel.php(55): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/magog/...', 55, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/page/admin.php(141): Kohana_View->render()
#4 [internal function]: Controller_Page_Admin->action_edit()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page_Admin))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-15 14:50:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/admin/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-15 14:50:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/admin/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 14:50:59 --- ERROR: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 55 ]
2012-07-15 14:50:59 --- STRACE: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 55 ]
--
#0 /var/www/magog/application/views/admin/panel.php(55): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/magog/...', 55, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/page/admin.php(141): Kohana_View->render()
#4 [internal function]: Controller_Page_Admin->action_edit()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page_Admin))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-15 17:12:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '.', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/views/admin/panel.php [ 40 ]
2012-07-15 17:12:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '.', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/views/admin/panel.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-15 17:14:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: page/admin/lists/image_list.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 17:14:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: page/admin/lists/image_list.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 18:07:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/admin/save was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-15 18:07:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/admin/save was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 18:55:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$id' (T_VARIABLE) ~ APPPATH/classes/controller/page/admin.php [ 166 ]
2012-07-15 18:55:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$id' (T_VARIABLE) ~ APPPATH/classes/controller/page/admin.php [ 166 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-15 19:02:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/classes/controller/page/admin.php [ 190 ]
2012-07-15 19:02:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/classes/controller/page/admin.php [ 190 ]
--
#0 /var/www/magog/application/classes/controller/page/admin.php(190): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 190, Array)
#1 [internal function]: Controller_Page_Admin->action_save()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-15 19:02:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/admin/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-15 19:02:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/admin/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 19:13:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/admin/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-15 19:13:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/admin/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}