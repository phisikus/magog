<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-13 10:30:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/page was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-13 10:30:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/page was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-13 10:32:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/red_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-13 10:32:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/red_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-13 10:32:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/controller/admin.php [ 34 ]
2012-07-13 10:32:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/controller/admin.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-13 10:33:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/controller/admin.php [ 34 ]
2012-07-13 10:33:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/controller/admin.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-13 10:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-13 10:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-13 10:50:04 --- ERROR: ErrorException [ 8 ]: Undefined offset: 7 ~ APPPATH/classes/controller/user.php [ 549 ]
2012-07-13 10:50:04 --- STRACE: ErrorException [ 8 ]: Undefined offset: 7 ~ APPPATH/classes/controller/user.php [ 549 ]
--
#0 /var/www/magog/application/classes/controller/user.php(549): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/magog/...', 549, Array)
#1 [internal function]: Controller_User->action_user_profile()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-13 10:50:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/classes/controller/user.php [ 565 ]
2012-07-13 10:50:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/classes/controller/user.php [ 565 ]
--
#0 /var/www/magog/application/classes/controller/user.php(565): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 565, Array)
#1 [internal function]: Controller_User->action_user_profile()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-13 10:50:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/classes/controller/user.php [ 565 ]
2012-07-13 10:50:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/classes/controller/user.php [ 565 ]
--
#0 /var/www/magog/application/classes/controller/user.php(565): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 565, Array)
#1 [internal function]: Controller_User->action_user_profile()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-13 10:50:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/admin/panel.php [ 35 ]
2012-07-13 10:50:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/admin/panel.php [ 35 ]
--
#0 /var/www/magog/application/views/admin/panel.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 35, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/user.php(566): Kohana_View->render()
#4 [internal function]: Controller_User->action_user_profile()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-13 10:51:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/admin/panel.php [ 37 ]
2012-07-13 10:51:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/admin/panel.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-13 10:53:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-13 10:53:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-13 10:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-13 10:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-13 10:55:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/user_profiel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-13 10:55:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/user_profiel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}