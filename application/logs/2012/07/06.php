<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-06 09:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_profile/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-06 09:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_profile/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 09:02:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-06 09:02:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 09:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-06 09:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 09:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-06 09:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 09:45:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_profile/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-06 09:45:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_profile/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 09:47:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting function (T_FUNCTION) ~ APPPATH/classes/controller/user.php [ 152 ]
2012-07-06 09:47:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting function (T_FUNCTION) ~ APPPATH/classes/controller/user.php [ 152 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 09:47:34 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_User::action_admin_profile() ~ APPPATH/classes/controller/user.php [ 118 ]
2012-07-06 09:47:34 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_User::action_admin_profile() ~ APPPATH/classes/controller/user.php [ 118 ]
--
#0 /var/www/magog/application/classes/controller/user.php(118): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/magog/...', 118, Array)
#1 [internal function]: Controller_User->action_admin_profile()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-06 09:47:42 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_User::action_admin_profile() ~ APPPATH/classes/controller/user.php [ 118 ]
2012-07-06 09:47:42 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_User::action_admin_profile() ~ APPPATH/classes/controller/user.php [ 118 ]
--
#0 /var/www/magog/application/classes/controller/user.php(118): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/magog/...', 118, Array)
#1 [internal function]: Controller_User->action_admin_profile()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-06 09:47:44 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_User::action_admin_profile() ~ APPPATH/classes/controller/user.php [ 118 ]
2012-07-06 09:47:44 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_User::action_admin_profile() ~ APPPATH/classes/controller/user.php [ 118 ]
--
#0 /var/www/magog/application/classes/controller/user.php(118): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/magog/...', 118, Array)
#1 [internal function]: Controller_User->action_admin_profile()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-06 09:48:42 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_User::action_admin_profile() ~ APPPATH/classes/controller/user.php [ 118 ]
2012-07-06 09:48:42 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_User::action_admin_profile() ~ APPPATH/classes/controller/user.php [ 118 ]
--
#0 /var/www/magog/application/classes/controller/user.php(118): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/magog/...', 118, Array)
#1 [internal function]: Controller_User->action_admin_profile()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-06 09:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/admin_profile/1/2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-06 09:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/admin_profile/1/2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-06 09:52:18 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_User::action_admin_profile() ~ APPPATH/classes/controller/user.php [ 118 ]
2012-07-06 09:52:18 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_User::action_admin_profile() ~ APPPATH/classes/controller/user.php [ 118 ]
--
#0 /var/www/magog/application/classes/controller/user.php(118): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/magog/...', 118, Array)
#1 [internal function]: Controller_User->action_admin_profile()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-06 09:52:21 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_User::action_admin_profile() ~ APPPATH/classes/controller/user.php [ 118 ]
2012-07-06 09:52:21 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_User::action_admin_profile() ~ APPPATH/classes/controller/user.php [ 118 ]
--
#0 /var/www/magog/application/classes/controller/user.php(118): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/magog/...', 118, Array)
#1 [internal function]: Controller_User->action_admin_profile()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-06 09:55:16 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_User::action_admin_profile() ~ APPPATH/classes/controller/user.php [ 118 ]
2012-07-06 09:55:16 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_User::action_admin_profile() ~ APPPATH/classes/controller/user.php [ 118 ]
--
#0 /var/www/magog/application/classes/controller/user.php(118): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/magog/...', 118, Array)
#1 [internal function]: Controller_User->action_admin_profile()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-06 09:58:07 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_User::action_admin_profile() ~ APPPATH/classes/controller/user.php [ 118 ]
2012-07-06 09:58:07 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_User::action_admin_profile() ~ APPPATH/classes/controller/user.php [ 118 ]
--
#0 /var/www/magog/application/classes/controller/user.php(118): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/magog/...', 118, Array)
#1 [internal function]: Controller_User->action_admin_profile()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-06 09:58:10 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_User::action_admin_profile() ~ APPPATH/classes/controller/user.php [ 118 ]
2012-07-06 09:58:10 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_User::action_admin_profile() ~ APPPATH/classes/controller/user.php [ 118 ]
--
#0 /var/www/magog/application/classes/controller/user.php(118): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/magog/...', 118, Array)
#1 [internal function]: Controller_User->action_admin_profile()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-06 09:58:11 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_User::action_admin_profile() ~ APPPATH/classes/controller/user.php [ 118 ]
2012-07-06 09:58:11 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_User::action_admin_profile() ~ APPPATH/classes/controller/user.php [ 118 ]
--
#0 /var/www/magog/application/classes/controller/user.php(118): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/magog/...', 118, Array)
#1 [internal function]: Controller_User->action_admin_profile()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-06 09:58:13 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_User::action_admin_profile() ~ APPPATH/classes/controller/user.php [ 118 ]
2012-07-06 09:58:13 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_User::action_admin_profile() ~ APPPATH/classes/controller/user.php [ 118 ]
--
#0 /var/www/magog/application/classes/controller/user.php(118): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/magog/...', 118, Array)
#1 [internal function]: Controller_User->action_admin_profile()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-06 09:58:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/admin_profile/12/12 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-06 09:58:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/admin_profile/12/12 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-06 09:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/admin_profile/12/12 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-06 09:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/admin_profile/12/12 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-06 09:59:06 --- ERROR: ErrorException [ 1 ]: Call to undefined function length() ~ APPPATH/classes/controller/user.php [ 120 ]
2012-07-06 09:59:06 --- STRACE: ErrorException [ 1 ]: Call to undefined function length() ~ APPPATH/classes/controller/user.php [ 120 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 09:59:38 --- ERROR: ErrorException [ 1 ]: Call to undefined function is_number() ~ APPPATH/classes/controller/user.php [ 120 ]
2012-07-06 09:59:38 --- STRACE: ErrorException [ 1 ]: Call to undefined function is_number() ~ APPPATH/classes/controller/user.php [ 120 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 09:59:40 --- ERROR: ErrorException [ 1 ]: Call to undefined function is_number() ~ APPPATH/classes/controller/user.php [ 120 ]
2012-07-06 09:59:40 --- STRACE: ErrorException [ 1 ]: Call to undefined function is_number() ~ APPPATH/classes/controller/user.php [ 120 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 10:07:33 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH/classes/controller/user.php [ 121 ]
2012-07-06 10:07:33 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH/classes/controller/user.php [ 121 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 10:09:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-06 10:09:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 10:18:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/user.php [ 143 ]
2012-07-06 10:18:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/user.php [ 143 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 10:18:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/user.php [ 144 ]
2012-07-06 10:18:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/user.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 10:19:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: uzytkownik ~ APPPATH/classes/controller/user.php [ 143 ]
2012-07-06 10:19:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: uzytkownik ~ APPPATH/classes/controller/user.php [ 143 ]
--
#0 /var/www/magog/application/classes/controller/user.php(143): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 143, Array)
#1 [internal function]: Controller_User->action_admin_profile()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-06 10:27:24 --- ERROR: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in /var/www/magog/application/classes/model/user.php on line 55 and defined ~ MODPATH/orm/classes/kohana/orm.php [ 1685 ]
2012-07-06 10:27:24 --- STRACE: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in /var/www/magog/application/classes/model/user.php on line 55 and defined ~ MODPATH/orm/classes/kohana/orm.php [ 1685 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1685): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/magog/...', 1685, Array)
#1 /var/www/magog/application/classes/model/user.php(55): Kohana_ORM->where('id', '2')
#2 /var/www/magog/application/classes/controller/user.php(141): Model_User->getUser('2')
#3 [internal function]: Controller_User->action_admin_profile()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-06 10:27:31 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= '2'' at line 1 [ SELECT `user`.* FROM `users` AS `user` WHERE `id` -= '2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-06 10:27:31 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= '2'' at line 1 [ SELECT `user`.* FROM `users` AS `user` WHERE `id` -= '2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', 'Model_User', Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/magog/application/classes/model/user.php(55): Kohana_ORM->find_all()
#4 /var/www/magog/application/classes/controller/user.php(141): Model_User->getUser('2')
#5 [internal function]: Controller_User->action_admin_profile()
#6 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/magog/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-06 10:27:38 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= '1'' at line 1 [ SELECT `user`.* FROM `users` AS `user` WHERE `id` -= '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-06 10:27:38 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= '1'' at line 1 [ SELECT `user`.* FROM `users` AS `user` WHERE `id` -= '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', 'Model_User', Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/magog/application/classes/model/user.php(55): Kohana_ORM->find_all()
#4 /var/www/magog/application/classes/controller/user.php(141): Model_User->getUser('1')
#5 [internal function]: Controller_User->action_admin_profile()
#6 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/magog/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-06 10:27:44 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH/classes/controller/user.php [ 142 ]
2012-07-06 10:27:44 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH/classes/controller/user.php [ 142 ]
--
#0 /var/www/magog/application/classes/controller/user.php(142): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/magog/...', 142, Array)
#1 [internal function]: Controller_User->action_admin_profile()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-06 10:27:46 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH/classes/controller/user.php [ 142 ]
2012-07-06 10:27:46 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH/classes/controller/user.php [ 142 ]
--
#0 /var/www/magog/application/classes/controller/user.php(142): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/magog/...', 142, Array)
#1 [internal function]: Controller_User->action_admin_profile()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-06 10:27:56 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH/classes/controller/user.php [ 142 ]
2012-07-06 10:27:56 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH/classes/controller/user.php [ 142 ]
--
#0 /var/www/magog/application/classes/controller/user.php(142): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/magog/...', 142, Array)
#1 [internal function]: Controller_User->action_admin_profile()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-06 10:38:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_edit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-06 10:38:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_edit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 10:51:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_edit/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-06 10:51:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_edit/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 10:51:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-06 10:51:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 10:57:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ''' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/views/user/profile.php [ 13 ]
2012-07-06 10:57:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ''' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/views/user/profile.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 11:17:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-06 11:17:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 13:39:10 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_User::$input ~ APPPATH/classes/controller/user.php [ 106 ]
2012-07-06 13:39:10 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_User::$input ~ APPPATH/classes/controller/user.php [ 106 ]
--
#0 /var/www/magog/application/classes/controller/user.php(106): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/magog/...', 106, Array)
#1 [internal function]: Controller_User->action_admin_list()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-06 13:42:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: uzytkownicy ~ APPPATH/classes/controller/user.php [ 111 ]
2012-07-06 13:42:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: uzytkownicy ~ APPPATH/classes/controller/user.php [ 111 ]
--
#0 /var/www/magog/application/classes/controller/user.php(111): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 111, Array)
#1 [internal function]: Controller_User->action_admin_list()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-06 13:54:02 --- ERROR: ErrorException [ 1 ]: Class 'XSS' not found ~ APPPATH/classes/controller/user.php [ 109 ]
2012-07-06 13:54:02 --- STRACE: ErrorException [ 1 ]: Class 'XSS' not found ~ APPPATH/classes/controller/user.php [ 109 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 13:54:51 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'xss' at 'MODPATH/xss' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2012-07-06 13:54:51 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'xss' at 'MODPATH/xss' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /var/www/magog/application/bootstrap.php(112): Kohana_Core::modules(Array)
#1 /var/www/magog/index.php(102): require('/var/www/magog/...')
#2 {main}
2012-07-06 13:55:52 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'security' at 'MODPATH/security' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2012-07-06 13:55:52 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'security' at 'MODPATH/security' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /var/www/magog/application/bootstrap.php(112): Kohana_Core::modules(Array)
#1 /var/www/magog/index.php(102): require('/var/www/magog/...')
#2 {main}
2012-07-06 13:55:53 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'security' at 'MODPATH/security' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2012-07-06 13:55:53 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'security' at 'MODPATH/security' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /var/www/magog/application/bootstrap.php(112): Kohana_Core::modules(Array)
#1 /var/www/magog/index.php(102): require('/var/www/magog/...')
#2 {main}
2012-07-06 13:55:58 --- ERROR: ErrorException [ 1 ]: Call to undefined method Security::xss_clean() ~ APPPATH/classes/controller/user.php [ 109 ]
2012-07-06 13:55:58 --- STRACE: ErrorException [ 1 ]: Call to undefined method Security::xss_clean() ~ APPPATH/classes/controller/user.php [ 109 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 13:57:57 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'security' at 'SYSPATH//classes/security' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2012-07-06 13:57:57 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'security' at 'SYSPATH//classes/security' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /var/www/magog/application/bootstrap.php(112): Kohana_Core::modules(Array)
#1 /var/www/magog/index.php(102): require('/var/www/magog/...')
#2 {main}
2012-07-06 13:58:04 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'security' at 'SYSPATH/classes/security' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2012-07-06 13:58:04 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'security' at 'SYSPATH/classes/security' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /var/www/magog/application/bootstrap.php(112): Kohana_Core::modules(Array)
#1 /var/www/magog/index.php(102): require('/var/www/magog/...')
#2 {main}
2012-07-06 13:58:10 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'security' at 'SYSPATH/classes/security.php' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2012-07-06 13:58:10 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'security' at 'SYSPATH/classes/security.php' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /var/www/magog/application/bootstrap.php(112): Kohana_Core::modules(Array)
#1 /var/www/magog/index.php(102): require('/var/www/magog/...')
#2 {main}
2012-07-06 13:58:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method Security::xss_clean() ~ APPPATH/classes/controller/user.php [ 109 ]
2012-07-06 13:58:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method Security::xss_clean() ~ APPPATH/classes/controller/user.php [ 109 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 13:58:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Security::xss_clean() ~ APPPATH/classes/controller/user.php [ 109 ]
2012-07-06 13:58:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Security::xss_clean() ~ APPPATH/classes/controller/user.php [ 109 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 13:58:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method Security::xss_clean() ~ APPPATH/classes/controller/user.php [ 109 ]
2012-07-06 13:58:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method Security::xss_clean() ~ APPPATH/classes/controller/user.php [ 109 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 13:58:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method Security::xss_clean() ~ APPPATH/classes/controller/user.php [ 109 ]
2012-07-06 13:58:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method Security::xss_clean() ~ APPPATH/classes/controller/user.php [ 109 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 13:58:58 --- ERROR: ErrorException [ 1 ]: Call to undefined method Security::xss_clean() ~ APPPATH/classes/controller/user.php [ 109 ]
2012-07-06 13:58:58 --- STRACE: ErrorException [ 1 ]: Call to undefined method Security::xss_clean() ~ APPPATH/classes/controller/user.php [ 109 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 13:59:00 --- ERROR: ErrorException [ 1 ]: Call to undefined method Security::xss_clean() ~ APPPATH/classes/controller/user.php [ 109 ]
2012-07-06 13:59:00 --- STRACE: ErrorException [ 1 ]: Call to undefined method Security::xss_clean() ~ APPPATH/classes/controller/user.php [ 109 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 14:06:09 --- ERROR: ErrorException [ 1 ]: Call to undefined method Security::xss_clean() ~ APPPATH/classes/controller/user.php [ 109 ]
2012-07-06 14:06:09 --- STRACE: ErrorException [ 1 ]: Call to undefined method Security::xss_clean() ~ APPPATH/classes/controller/user.php [ 109 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 14:11:08 --- ERROR: ErrorException [ 1 ]: Call to undefined method Security::xss_clean() ~ APPPATH/classes/controller/user.php [ 109 ]
2012-07-06 14:11:08 --- STRACE: ErrorException [ 1 ]: Call to undefined method Security::xss_clean() ~ APPPATH/classes/controller/user.php [ 109 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 14:16:40 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'pagination' at 'MODPATH/pagination' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2012-07-06 14:16:40 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'pagination' at 'MODPATH/pagination' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /var/www/magog/application/bootstrap.php(112): Kohana_Core::modules(Array)
#1 /var/www/magog/index.php(102): require('/var/www/magog/...')
#2 {main}
2012-07-06 14:51:14 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'pagination' at 'MODPATH/pagination' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2012-07-06 14:51:14 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'pagination' at 'MODPATH/pagination' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /var/www/magog/application/bootstrap.php(112): Kohana_Core::modules(Array)
#1 /var/www/magog/index.php(102): require('/var/www/magog/...')
#2 {main}
2012-07-06 15:07:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_total ~ APPPATH/classes/controller/user.php [ 125 ]
2012-07-06 15:07:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_total ~ APPPATH/classes/controller/user.php [ 125 ]
--
#0 /var/www/magog/application/classes/controller/user.php(125): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 125, Array)
#1 [internal function]: Controller_User->action_admin_list()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-06 15:23:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-06 15:23:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 15:23:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-06 15:23:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 15:24:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_list1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-06 15:24:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_list1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 15:25:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_list1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-06 15:25:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_list1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 15:31:47 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Model_User::getAllUsers(), called in /var/www/magog/application/classes/controller/user.php on line 120 and defined ~ APPPATH/classes/model/user.php [ 60 ]
2012-07-06 15:31:47 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Model_User::getAllUsers(), called in /var/www/magog/application/classes/controller/user.php on line 120 and defined ~ APPPATH/classes/model/user.php [ 60 ]
--
#0 /var/www/magog/application/classes/model/user.php(60): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/magog/...', 60, Array)
#1 /var/www/magog/application/classes/controller/user.php(120): Model_User->getAllUsers('12')
#2 [internal function]: Controller_User->action_admin_list()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-06 15:32:55 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Model_User::getAllUsers(), called in /var/www/magog/application/classes/controller/user.php on line 120 and defined ~ APPPATH/classes/model/user.php [ 60 ]
2012-07-06 15:32:55 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Model_User::getAllUsers(), called in /var/www/magog/application/classes/controller/user.php on line 120 and defined ~ APPPATH/classes/model/user.php [ 60 ]
--
#0 /var/www/magog/application/classes/model/user.php(60): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/magog/...', 60, Array)
#1 /var/www/magog/application/classes/controller/user.php(120): Model_User->getAllUsers('12')
#2 [internal function]: Controller_User->action_admin_list()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-06 15:35:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(', expecting '&' or variable (T_VARIABLE) ~ APPPATH/classes/model/user.php [ 81 ]
2012-07-06 15:35:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(', expecting '&' or variable (T_VARIABLE) ~ APPPATH/classes/model/user.php [ 81 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 15:36:02 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Model_User::getAllUsers(), called in /var/www/magog/application/classes/controller/user.php on line 120 and defined ~ APPPATH/classes/model/user.php [ 60 ]
2012-07-06 15:36:02 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Model_User::getAllUsers(), called in /var/www/magog/application/classes/controller/user.php on line 120 and defined ~ APPPATH/classes/model/user.php [ 60 ]
--
#0 /var/www/magog/application/classes/model/user.php(60): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/magog/...', 60, Array)
#1 /var/www/magog/application/classes/controller/user.php(120): Model_User->getAllUsers('12')
#2 [internal function]: Controller_User->action_admin_list()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-06 15:36:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_total ~ APPPATH/classes/controller/user.php [ 125 ]
2012-07-06 15:36:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_total ~ APPPATH/classes/controller/user.php [ 125 ]
--
#0 /var/www/magog/application/classes/controller/user.php(125): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 125, Array)
#1 [internal function]: Controller_User->action_admin_list()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-06 15:38:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_total ~ APPPATH/classes/controller/user.php [ 130 ]
2012-07-06 15:38:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_total ~ APPPATH/classes/controller/user.php [ 130 ]
--
#0 /var/www/magog/application/classes/controller/user.php(130): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 130, Array)
#1 [internal function]: Controller_User->action_admin_list()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-06 15:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/admin_list/1.3 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-06 15:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/admin_list/1.3 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-06 15:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/admin_list/1,2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-06 15:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/admin_list/1,2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-06 15:47:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/admin_list/1/qwdqwd ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-06 15:47:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/admin_list/1/qwdqwd ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-06 15:51:12 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/controller/user.php [ 133 ]
2012-07-06 15:51:12 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/controller/user.php [ 133 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 16:06:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-06 16:06:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 16:06:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-06 16:06:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 16:08:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-06 16:08:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 17:29:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/admin_list/1,2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-06 17:29:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/admin_list/1,2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-06 17:29:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/admin_list/1.3 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-06 17:29:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/admin_list/1.3 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-06 17:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-06 17:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 18:05:53 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/user/list.php [ 22 ]
2012-07-06 18:05:53 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/user/list.php [ 22 ]
--
#0 /var/www/magog/application/views/user/list.php(22): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/magog/...', 22, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/user.php(133): Kohana_View->render()
#4 [internal function]: Controller_User->action_admin_list()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 18:12:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-06 18:12:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 18:14:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_delete/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-06 18:14:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_delete/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 18:21:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting function (T_FUNCTION) ~ APPPATH/classes/model/user.php [ 175 ]
2012-07-06 18:21:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting function (T_FUNCTION) ~ APPPATH/classes/model/user.php [ 175 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 18:48:13 --- ERROR: View_Exception [ 0 ]: The requested view user/confirm_delete could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-06 18:48:13 --- STRACE: View_Exception [ 0 ]: The requested view user/confirm_delete could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/magog/system/classes/kohana/view.php(137): Kohana_View->set_filename('user/confirm_de...')
#1 /var/www/magog/system/classes/kohana/view.php(30): Kohana_View->__construct('user/confirm_de...', NULL)
#2 /var/www/magog/application/classes/controller/user.php(223): Kohana_View::factory('user/confirm_de...')
#3 [internal function]: Controller_User->action_admin_delete()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-06 18:48:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_total ~ APPPATH/views/user/confirm_delete.php [ 35 ]
2012-07-06 18:48:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_total ~ APPPATH/views/user/confirm_delete.php [ 35 ]
--
#0 /var/www/magog/application/views/user/confirm_delete.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 35, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/user.php(223): Kohana_View->render()
#4 [internal function]: Controller_User->action_admin_delete()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 19:24:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_deleteConfirmed/6 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-06 19:24:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_deleteConfirmed/6 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 20:01:33 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_ORM::remove(), called in /var/www/magog/application/classes/model/user.php on line 177 and defined ~ MODPATH/orm/classes/kohana/orm.php [ 1434 ]
2012-07-06 20:01:33 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_ORM::remove(), called in /var/www/magog/application/classes/model/user.php on line 177 and defined ~ MODPATH/orm/classes/kohana/orm.php [ 1434 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1434): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/magog/...', 1434, Array)
#1 /var/www/magog/application/classes/model/user.php(177): Kohana_ORM->remove()
#2 /var/www/magog/application/classes/controller/user.php(262): Model_User->deleteUser('6')
#3 [internal function]: Controller_User->action_admin_deleteConfirmed()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-06 20:01:56 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 20:01:56 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(178): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(262): Model_User->deleteUser('6')
#4 [internal function]: Controller_User->action_admin_deleteConfirmed()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 20:02:28 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete user model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-07-06 20:02:28 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete user model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /var/www/magog/application/classes/model/user.php(177): Kohana_ORM->delete()
#1 /var/www/magog/application/classes/controller/user.php(262): Model_User->deleteUser('6')
#2 [internal function]: Controller_User->action_admin_deleteConfirmed()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-06 20:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/ad was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-06 20:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/ad was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 20:03:14 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 20:03:14 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(178): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(262): Model_User->deleteUser('3')
#4 [internal function]: Controller_User->action_admin_deleteConfirmed()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 20:03:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-06 20:03:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 20:04:03 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete user model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-07-06 20:04:03 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete user model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /var/www/magog/application/classes/model/user.php(177): Kohana_ORM->delete()
#1 /var/www/magog/application/classes/controller/user.php(262): Model_User->deleteUser('2')
#2 [internal function]: Controller_User->action_admin_deleteConfirmed()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-06 20:11:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-06 20:11:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 20:16:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-06 20:16:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 21:05:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$tresc' (T_VARIABLE) ~ APPPATH/classes/controller/user.php [ 374 ]
2012-07-06 21:05:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$tresc' (T_VARIABLE) ~ APPPATH/classes/controller/user.php [ 374 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 21:06:25 --- ERROR: ErrorException [ 1 ]: Call to undefined function setUserExternalProfile() ~ APPPATH/classes/controller/user.php [ 371 ]
2012-07-06 21:06:25 --- STRACE: ErrorException [ 1 ]: Call to undefined function setUserExternalProfile() ~ APPPATH/classes/controller/user.php [ 371 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 21:07:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: signature ~ APPPATH/classes/controller/user.php [ 369 ]
2012-07-06 21:07:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: signature ~ APPPATH/classes/controller/user.php [ 369 ]
--
#0 /var/www/magog/application/classes/controller/user.php(369): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 369, Array)
#1 [internal function]: Controller_User->action_admin_save()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-06 21:07:36 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:07:36 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(156): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserExternalProfile(0, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', 'Fajny podpis2', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:08:22 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:08:22 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(156): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserExternalProfile(0, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', 'Fajny podpis2', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:09:16 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:09:16 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(156): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserExternalProfile(0, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', 'Fajny podpis2', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:09:37 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:09:37 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(156): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserExternalProfile(0, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', 'Fajny podpis2', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:10:44 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:10:44 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', 'Fajny podpis', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:11:53 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:11:53 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', 'Fajny podpis', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:13:31 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:13:31 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1261): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->update(NULL)
#2 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(1, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', 'Fajny podpis', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:13:35 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:13:35 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1261): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->update(NULL)
#2 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(1, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', 'Fajny podpis', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:13:43 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:13:43 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'phisikus', 'phisikus2@o2.pl', 'Marcin Biernack...', 'Fajny podpis', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:13:50 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:13:50 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'phisikusw', 'phisikuws@o2.pl', 'Marcin Biernack...', 'Fajny podpis', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:14:03 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:14:03 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'kasia', 'kasia@wp.pl', 'KAsia Nowaczy7k', 'p[fekwekfpokwoe...', '')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:18:04 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:18:04 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'kasia', 'kasia@wp.pl', 'KAsia Nowaczy7k', 'p[fekwekfpokwoe...', '')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:19:58 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:19:58 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'sv', 'sdvsdvs', 'sdvsdv', 'dvsdvsdv', 'w')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:21:41 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:21:41 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'sv', 'sdvsdvs', 'sdvsdv', 'dvsdvsdv', 'w')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:21:47 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:21:47 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, '333', '44', '44', '55', '55')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:23:18 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:23:18 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', 'Fajny podpis', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:26:20 --- ERROR: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1250 ]
2012-07-06 21:26:20 --- STRACE: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1250 ]
--
#0 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->update()
#1 /var/www/magog/application/classes/controller/user.php(371): Model_User->setUserProfile(2, 'kurwa', 'mac', 'noja', '23', '22')
#2 [internal function]: Controller_User->action_admin_save()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-06 21:26:56 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:26:56 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1261): Kohana_ORM->check(NULL)
#1 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->update()
#2 /var/www/magog/application/classes/controller/user.php(371): Model_User->setUserProfile(2, 'kurwa', 'mac', 'noja', '23', '22')
#3 [internal function]: Controller_User->action_admin_save()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-06 21:28:49 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:28:49 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(371): Model_User->setUserProfile(2, 'kurwa', 'mac', 'noja', '23', '22')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:28:54 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:28:54 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(371): Model_User->setUserProfile(2, 'kurwa', 'mac', 'noja', '23', '22')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:30:33 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::where() ~ APPPATH/classes/model/user.php [ 136 ]
2012-07-06 21:30:33 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::where() ~ APPPATH/classes/model/user.php [ 136 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 21:31:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',', expecting '{' ~ APPPATH/classes/model/user.php [ 28 ]
2012-07-06 21:31:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',', expecting '{' ~ APPPATH/classes/model/user.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 21:32:30 --- ERROR: ErrorException [ 1 ]: Model_User cannot implement ORM - it is not an interface ~ APPPATH/classes/model/user.php [ 28 ]
2012-07-06 21:32:30 --- STRACE: ErrorException [ 1 ]: Model_User cannot implement ORM - it is not an interface ~ APPPATH/classes/model/user.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 21:39:41 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:39:41 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(371): Model_User->setUserProfile(2, 'kurwa', 'mac', 'noja', '23', '22')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:41:44 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:41:44 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(371): Model_User->setUserProfile(2, 'kurwa', 'mac', 'noja', '23', '22')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:41:53 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:41:53 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(371): Model_User->setUserProfile(2, 'kurwa', 'mac', 'noja', '23', '22')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:41:57 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:41:57 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(371): Model_User->setUserProfile(2, 'kurwa', 'mac', 'noja', '23', '22')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:49:27 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/kohana/auth.php [ 153 ]
2012-07-06 21:49:27 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/kohana/auth.php [ 153 ]
--
#0 [internal function]: Kohana_Auth->hash('wefjwoiefjoiwej...')
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1110): call_user_func_array(Array, Array)
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(655): Kohana_ORM->run_filter('password', 'wefjwoiefjoiwej...')
#3 /var/www/magog/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('password', 'wefjwoiefjoiwej...')
#4 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->__set('password', 'wefjwoiefjoiwej...')
#5 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', '', '')
#6 [internal function]: Controller_User->action_admin_save()
#7 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/magog/index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-06 21:54:05 --- ERROR: Kohana_Exception [ 0 ]: The _config property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-06 21:54:05 --- STRACE: Kohana_Exception [ 0 ]: The _config property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->__get('_config')
#1 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', '', '')
#2 [internal function]: Controller_User->action_admin_save()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-06 21:55:37 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:55:37 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'phisikusw', 'phisikus@o2.pl', 'Marcin Biernack...', '', '0')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:55:50 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:55:50 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'phisikusw', 'phisikus@o2.pl', 'Marcin Biernack...', '', '0')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:55:55 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:55:55 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'phisikusw', 'phisikus@o2.pl', 'Marcin Biernack...', '', '0')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:55:59 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:55:59 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'phisikusw', 'phisikus@o2.pl', 'Marcin Biernack...', '4', '0')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:56:03 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:56:03 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', '4', '0')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:56:06 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:56:06 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'phisikus', 'phisikus@o2.pl3', 'Marcin Biernack...', '4', '0')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:56:09 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:56:09 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'phisikus3', 'phisikus@o2.pl3', 'Marcin Biernack...', '4', '0')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:56:12 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:56:12 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'phisikus3', 'phisikus@o2.pl3', 'Marcin Biernack...', '4', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:56:18 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:56:18 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'phisikus3', 'phisikus@o2.pl3', 'Marcin Biernack...', '2', '3')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:56:29 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:56:29 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'erg', 'erg', 'reg', 'erg', 'erg')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:56:33 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:56:33 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'erg', 'erg', 'reg', 'erg', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:56:36 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:56:36 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'erg', 'erg', 'reg', 'erg', '2')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:56:51 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:56:51 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'erg', 'erg5', 'reg5', 'erg5', '4')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:57:23 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:57:23 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', 'Takiego wa??a', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:57:38 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:57:38 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', 'Takiego wa??a', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-06 21:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 21:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL skins/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-06 21:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL skins/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 21:57:52 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:57:52 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'ef', 'few', 'ef', 'wef', '44')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 21:58:01 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 21:58:01 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', 'Takiego wa??a', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 22:03:33 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 22:03:33 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'rg', 'erg', 'rg', '', '')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 22:03:37 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 22:03:37 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'rg', 'erg', 'rg', 'erg', '2')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 22:03:40 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 22:03:40 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'rg', 'erg', 'rg', 'erg', '2')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 22:03:46 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 22:03:46 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'rg', 'erg', 'rg', 'erg', '2')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 22:03:59 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 22:03:59 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'rg', 'erg', 'rg', 'erg', '2')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 22:04:23 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 22:04:23 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, '5y', '54y', '54y', '54y', '44')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 22:04:26 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 22:04:26 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, '5y', '54y', '54y', '54y', '44')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 22:05:51 --- ERROR: Kohana_Exception [ 0 ]: The confirm_password property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-07-06 22:05:51 --- STRACE: Kohana_Exception [ 0 ]: The confirm_password property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('confirm_passwor...', '69c095ee558b740...')
#1 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->__set('confirm_passwor...', '69c095ee558b740...')
#2 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, '3', '3', '3', '3', '3')
#3 [internal function]: Controller_User->action_admin_save()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-06 22:29:50 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/kohana/auth.php [ 153 ]
2012-07-06 22:29:50 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/kohana/auth.php [ 153 ]
--
#0 [internal function]: Kohana_Auth->hash('123456789')
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1110): call_user_func_array(Array, Array)
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(655): Kohana_ORM->run_filter('password', '123456789')
#3 /var/www/magog/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('password', '123456789')
#4 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->__set('password', '123456789')
#5 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', 'Sygnaturka', '1')
#6 [internal function]: Controller_User->action_admin_save()
#7 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/magog/index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-06 22:30:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/model/user.php [ 139 ]
2012-07-06 22:30:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/model/user.php [ 139 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 22:30:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/model/user.php [ 139 ]
2012-07-06 22:30:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/model/user.php [ 139 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 22:31:12 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Auth::$config ~ APPPATH/classes/model/user.php [ 139 ]
2012-07-06 22:31:12 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Auth::$config ~ APPPATH/classes/model/user.php [ 139 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 22:31:22 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/kohana/auth.php [ 153 ]
2012-07-06 22:31:22 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/kohana/auth.php [ 153 ]
--
#0 [internal function]: Kohana_Auth->hash('123456789')
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1110): call_user_func_array(Array, Array)
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(655): Kohana_ORM->run_filter('password', '123456789')
#3 /var/www/magog/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('password', '123456789')
#4 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->__set('password', '123456789')
#5 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', 'Sygnaturka', '1')
#6 [internal function]: Controller_User->action_admin_save()
#7 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/magog/index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-06 22:31:44 --- ERROR: Kohana_Exception [ 0 ]: The confirm_password property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-07-06 22:31:44 --- STRACE: Kohana_Exception [ 0 ]: The confirm_password property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('confirm_passwor...', 'f19a97af6b7e654...')
#1 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->__set('confirm_passwor...', 'f19a97af6b7e654...')
#2 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', 'Sygnaturka', '1')
#3 [internal function]: Controller_User->action_admin_save()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-06 22:32:00 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 22:32:00 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', 'Sygnaturka', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 22:32:12 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 22:32:12 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'f4r', '45y', '34t', '56u', '7')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 22:33:55 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 22:33:55 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'dfb', 'dfb', 'dfb', 'dfb', 'dfb')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 22:34:00 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 22:34:00 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'dfb', 'dfb', 'dfb', 'dfb', 'dfb')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 22:34:05 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 22:34:05 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'dfb', 'dfb', 'dfb', 'dfb', 'dfb')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 22:34:07 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 22:34:07 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'dfb', 'dfb', 'dfb', 'dfb', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 22:34:11 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 22:34:11 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'dfb', 'dfb', 'dfb', '1', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 22:34:15 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 22:34:15 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'wefwefwefwef', 'dfb', 'dfbwefwef', '1', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 22:34:19 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 22:34:19 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'wefwefwefwef', 'dfb@', 'dfbwefwef', '1', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 22:35:08 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 22:35:08 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'tgtrr', 'we@ewr.eu', 'rttrtr', 'we', '3')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 22:35:15 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 22:35:15 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'tgtrr', 'we@ewr.pl', 'rttrtr', 'we', '3')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 22:35:20 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 22:35:20 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'tgtrrdwd', 'we@ewr.pl', 'rttrtr wdwd', 'we', '3')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 22:35:22 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 22:35:22 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'tgtrrdwd', 'we@ewr.pl', 'rttrtr wdwd', 'wed', '3')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 22:37:27 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 22:37:27 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'qwdqwd', 'qwdqwd@wp.pl', 'qwdqwd', 'efwefwef', '2')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 22:37:49 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-06 22:37:49 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'qwdqwd', 'qwdqwd@wp.pl', 'qwdqwd', 'efwefwef', '2')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-06 22:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL skins/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-06 22:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL skins/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-06 22:40:56 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'uniq_external_id' [ INSERT INTO `users` (`username`, `email`, `full_name`, `external_id`, `signature`, `password`) VALUES ('zosia', 'zosia@z.pl', 'Zofia Nowak', '', 'dd', 'b92e1af67281cf4b63ba1cf83afb5d104b4f115590badd9a7e2afba6869d29cb') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-06 22:40:56 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'uniq_external_id' [ INSERT INTO `users` (`username`, `email`, `full_name`, `external_id`, `signature`, `password`) VALUES ('zosia', 'zosia@z.pl', 'Zofia Nowak', '', 'dd', 'b92e1af67281cf4b63ba1cf83afb5d104b4f115590badd9a7e2afba6869d29cb') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#4 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'zosia', 'zosia@z.pl', 'Zofia Nowak', 'dd', '')
#5 [internal function]: Controller_User->action_admin_save()
#6 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/magog/index.php(109): Kohana_Request->execute()
#10 {main}