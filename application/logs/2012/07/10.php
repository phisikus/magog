<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-10 08:29:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_profile/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-10 08:29:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_profile/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 08:37:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/group.php [ 67 ]
2012-07-10 08:37:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/group.php [ 67 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-10 08:40:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/controller/group.php [ 78 ]
2012-07-10 08:40:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/controller/group.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-10 08:43:09 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE) ~ APPPATH/classes/controller/group.php [ 81 ]
2012-07-10 08:43:09 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE) ~ APPPATH/classes/controller/group.php [ 81 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-10 08:43:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE) ~ APPPATH/classes/controller/group.php [ 81 ]
2012-07-10 08:43:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE) ~ APPPATH/classes/controller/group.php [ 81 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-10 09:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_profile/3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-10 09:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_profile/3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 10:00:50 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete user model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-07-10 10:00:50 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete user model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /var/www/magog/application/classes/model/user.php(216): Kohana_ORM->delete()
#1 /var/www/magog/application/classes/controller/user.php(271): Model_User->deleteUser('80')
#2 [internal function]: Controller_User->action_admin_deleteConfirmed()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-10 10:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_edit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-10 10:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_edit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 10:27:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_edit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-10 10:27:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_edit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 10:28:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_edit/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-10 10:28:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_edit/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 10:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_delete was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-10 10:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_delete was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 10:47:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Role::setGroupProfile() ~ APPPATH/classes/controller/group.php [ 282 ]
2012-07-10 10:47:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Role::setGroupProfile() ~ APPPATH/classes/controller/group.php [ 282 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-10 10:49:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-10 10:49:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 10:52:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ''Edytuj dane grupy :group'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/i18n/en.php [ 117 ]
2012-07-10 10:52:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ''Edytuj dane grupy :group'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/i18n/en.php [ 117 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-10 11:10:46 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete role model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-07-10 11:10:46 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete role model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /var/www/magog/application/classes/model/role.php(86): Kohana_ORM->delete()
#1 /var/www/magog/application/classes/controller/group.php(375): Model_Role->deleteRole('7')
#2 [internal function]: Controller_Group->action_admin_deleteConfirmed()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Group))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-10 11:14:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_manage/3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-10 11:14:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_manage/3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 14:04:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_manage/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-10 14:04:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_manage/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 15:21:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/model/role.php [ 93 ]
2012-07-10 15:21:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/model/role.php [ 93 ]
--
#0 /var/www/magog/application/classes/model/role.php(93): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 93, Array)
#1 /var/www/magog/application/classes/controller/group.php(413): Model_Role->getRoleUsers('11')
#2 [internal function]: Controller_Group->action_admin_manage()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Group))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-10 15:22:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_total ~ APPPATH/views/group/manage.php [ 30 ]
2012-07-10 15:22:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_total ~ APPPATH/views/group/manage.php [ 30 ]
--
#0 /var/www/magog/application/views/group/manage.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 30, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/group.php(415): Kohana_View->render()
#4 [internal function]: Controller_Group->action_admin_manage()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Group))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-10 15:27:15 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/group.php [ 416 ]
2012-07-10 15:27:15 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/group.php [ 416 ]
--
#0 /var/www/magog/application/classes/controller/group.php(416): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/magog/...', 416, Array)
#1 [internal function]: Controller_Group->action_admin_manage()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Group))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-10 15:27:23 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/group/manage.php [ 17 ]
2012-07-10 15:27:23 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/group/manage.php [ 17 ]
--
#0 /var/www/magog/application/views/group/manage.php(17): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/magog/...', 17, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/group.php(420): Kohana_View->render()
#4 [internal function]: Controller_Group->action_admin_manage()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Group))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-10 15:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_manage/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-10 15:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_manage/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 15:31:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/views/group/manage.php [ 42 ]
2012-07-10 15:31:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/views/group/manage.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-10 15:35:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'Opuść' (T_STRING), expecting ')' ~ APPPATH/i18n/en.php [ 56 ]
2012-07-10 15:35:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'Opuść' (T_STRING), expecting ')' ~ APPPATH/i18n/en.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-10 15:36:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'Opuść' (T_STRING), expecting ')' ~ APPPATH/i18n/en.php [ 56 ]
2012-07-10 15:36:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'Opuść' (T_STRING), expecting ')' ~ APPPATH/i18n/en.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-10 15:53:49 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/group.php [ 81 ]
2012-07-10 15:53:49 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/group.php [ 81 ]
--
#0 /var/www/magog/application/classes/controller/group.php(81): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/magog/...', 81, Array)
#1 [internal function]: Controller_Group->action_admin_leaveG()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Group))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-10 16:01:37 --- ERROR: ErrorException [ 2 ]: Division by zero ~ APPPATH/classes/model/role.php [ 93 ]
2012-07-10 16:01:37 --- STRACE: ErrorException [ 2 ]: Division by zero ~ APPPATH/classes/model/role.php [ 93 ]
--
#0 /var/www/magog/application/classes/model/role.php(93): Kohana_Core::error_handler(2, 'Division by zer...', '/var/www/magog/...', 93, Array)
#1 /var/www/magog/application/classes/controller/group.php(158): Model_Role->getRoleUsers('11', 0, 0)
#2 [internal function]: Controller_Group->action_admin_profile()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Group))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-10 16:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-10 16:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 17:09:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-10 17:09:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 17:13:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-10 17:13:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 17:14:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-10 17:14:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 17:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-10 17:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 17:14:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-10 17:14:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 17:18:54 --- ERROR: View_Exception [ 0 ]: The requested view admin/login could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-10 17:18:54 --- STRACE: View_Exception [ 0 ]: The requested view admin/login could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/magog/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/login')
#1 /var/www/magog/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/login', NULL)
#2 /var/www/magog/application/classes/controller/admin.php(72): Kohana_View::factory('admin/login')
#3 [internal function]: Controller_Admin->action_login()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-10 17:21:31 --- ERROR: View_Exception [ 0 ]: The requested view admin/login could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-10 17:21:31 --- STRACE: View_Exception [ 0 ]: The requested view admin/login could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/magog/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/login')
#1 /var/www/magog/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/login', NULL)
#2 /var/www/magog/application/classes/controller/admin.php(72): Kohana_View::factory('admin/login')
#3 [internal function]: Controller_Admin->action_login()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-10 17:22:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/admin/login.php [ 35 ]
2012-07-10 17:22:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/admin/login.php [ 35 ]
--
#0 /var/www/magog/application/views/admin/login.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 35, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/admin.php(73): Kohana_View->render()
#4 [internal function]: Controller_Admin->action_login()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-10 17:25:37 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/auth/classes/kohana/auth/file.php [ 43 ]
2012-07-10 17:25:37 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/auth/classes/kohana/auth/file.php [ 43 ]
--
#0 /var/www/magog/modules/auth/classes/kohana/auth/file.php(43): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/magog/...', 43, Array)
#1 /var/www/magog/modules/auth/classes/kohana/auth.php(90): Kohana_Auth_File->_login(Object(Model_User), 'd', false)
#2 /var/www/magog/application/classes/controller/admin.php(67): Kohana_Auth->login(Object(Model_User), 'd')
#3 [internal function]: Controller_Admin->action_login()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-10 17:25:52 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/auth/classes/kohana/auth/file.php [ 43 ]
2012-07-10 17:25:52 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/auth/classes/kohana/auth/file.php [ 43 ]
--
#0 /var/www/magog/modules/auth/classes/kohana/auth/file.php(43): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/magog/...', 43, Array)
#1 /var/www/magog/modules/auth/classes/kohana/auth.php(90): Kohana_Auth_File->_login(Object(Model_User), 'toor8268944', false)
#2 /var/www/magog/application/classes/controller/admin.php(67): Kohana_Auth->login(Object(Model_User), 'toor8268944')
#3 [internal function]: Controller_Admin->action_login()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-10 17:26:50 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/auth/classes/kohana/auth/file.php [ 43 ]
2012-07-10 17:26:50 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/auth/classes/kohana/auth/file.php [ 43 ]
--
#0 /var/www/magog/modules/auth/classes/kohana/auth/file.php(43): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/magog/...', 43, Array)
#1 /var/www/magog/modules/auth/classes/kohana/auth.php(90): Kohana_Auth_File->_login(Object(Model_User), 'toor8268944', false)
#2 /var/www/magog/application/classes/controller/admin.php(68): Kohana_Auth->login(Object(Model_User), 'toor8268944')
#3 [internal function]: Controller_Admin->action_login()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-10 17:26:57 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/auth/classes/kohana/auth/file.php [ 43 ]
2012-07-10 17:26:57 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/auth/classes/kohana/auth/file.php [ 43 ]
--
#0 /var/www/magog/modules/auth/classes/kohana/auth/file.php(43): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/magog/...', 43, Array)
#1 /var/www/magog/modules/auth/classes/kohana/auth.php(90): Kohana_Auth_File->_login(Object(Model_User), 'toor8268944', false)
#2 /var/www/magog/application/classes/controller/admin.php(68): Kohana_Auth->login(Object(Model_User), 'toor8268944')
#3 [internal function]: Controller_Admin->action_login()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-10 17:27:04 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/auth/classes/kohana/auth/file.php [ 43 ]
2012-07-10 17:27:04 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/auth/classes/kohana/auth/file.php [ 43 ]
--
#0 /var/www/magog/modules/auth/classes/kohana/auth/file.php(43): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/magog/...', 43, Array)
#1 /var/www/magog/modules/auth/classes/kohana/auth.php(90): Kohana_Auth_File->_login(Object(Model_User), 'toor8268944', false)
#2 /var/www/magog/application/classes/controller/admin.php(68): Kohana_Auth->login(Object(Model_User), 'toor8268944')
#3 [internal function]: Controller_Admin->action_login()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-10 17:27:22 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/auth/classes/kohana/auth/file.php [ 43 ]
2012-07-10 17:27:22 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/auth/classes/kohana/auth/file.php [ 43 ]
--
#0 /var/www/magog/modules/auth/classes/kohana/auth/file.php(43): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/magog/...', 43, Array)
#1 /var/www/magog/modules/auth/classes/kohana/auth.php(90): Kohana_Auth_File->_login(Object(Model_User), 'toor8268944', false)
#2 /var/www/magog/application/classes/controller/admin.php(68): Kohana_Auth->login(Object(Model_User), 'toor8268944')
#3 [internal function]: Controller_Admin->action_login()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-10 17:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-10 17:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 17:29:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-10 17:29:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 17:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-10 17:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 17:39:34 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Admin::hash() ~ APPPATH/classes/controller/admin.php [ 64 ]
2012-07-10 17:39:34 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Admin::hash() ~ APPPATH/classes/controller/admin.php [ 64 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-10 17:39:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM), expecting ',' or ';' ~ APPPATH/classes/controller/admin.php [ 64 ]
2012-07-10 17:39:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM), expecting ',' or ';' ~ APPPATH/classes/controller/admin.php [ 64 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-10 17:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-10 17:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 17:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-10 17:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 17:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-10 17:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 17:54:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-10 17:54:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 17:54:42 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/auth/classes/kohana/auth/file.php [ 43 ]
2012-07-10 17:54:42 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/auth/classes/kohana/auth/file.php [ 43 ]
--
#0 /var/www/magog/modules/auth/classes/kohana/auth/file.php(43): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/magog/...', 43, Array)
#1 /var/www/magog/modules/auth/classes/kohana/auth.php(90): Kohana_Auth_File->_login(Object(Model_User), 'toor8268944', false)
#2 /var/www/magog/application/classes/controller/admin.php(68): Kohana_Auth->login(Object(Model_User), 'toor8268944')
#3 [internal function]: Controller_Admin->action_login()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-10 17:54:49 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/auth/classes/kohana/auth/file.php [ 43 ]
2012-07-10 17:54:49 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/auth/classes/kohana/auth/file.php [ 43 ]
--
#0 /var/www/magog/modules/auth/classes/kohana/auth/file.php(43): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/magog/...', 43, Array)
#1 /var/www/magog/modules/auth/classes/kohana/auth.php(90): Kohana_Auth_File->_login(Object(Model_User), 'toor8268944', false)
#2 /var/www/magog/application/classes/controller/admin.php(68): Kohana_Auth->login(Object(Model_User), 'toor8268944')
#3 [internal function]: Controller_Admin->action_login()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-10 17:55:27 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/auth/classes/kohana/auth/file.php [ 43 ]
2012-07-10 17:55:27 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/auth/classes/kohana/auth/file.php [ 43 ]
--
#0 /var/www/magog/modules/auth/classes/kohana/auth/file.php(43): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/magog/...', 43, Array)
#1 /var/www/magog/modules/auth/classes/kohana/auth.php(90): Kohana_Auth_File->_login(Array, Array, false)
#2 /var/www/magog/application/classes/controller/admin.php(68): Kohana_Auth->login(Array, Array)
#3 [internal function]: Controller_Admin->action_login()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-10 17:57:16 --- ERROR: ErrorException [ 1 ]: Call to undefined function hash_password() ~ APPPATH/classes/controller/admin.php [ 68 ]
2012-07-10 17:57:16 --- STRACE: ErrorException [ 1 ]: Call to undefined function hash_password() ~ APPPATH/classes/controller/admin.php [ 68 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-10 18:05:41 --- ERROR: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/admin.php [ 76 ]
2012-07-10 18:05:41 --- STRACE: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/admin.php [ 76 ]
--
#0 /var/www/magog/application/classes/controller/admin.php(76): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/magog/...', 76, Array)
#1 [internal function]: Controller_Admin->action_login()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-10 18:10:47 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Admin::$auth ~ APPPATH/classes/controller/admin.php [ 76 ]
2012-07-10 18:10:47 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Admin::$auth ~ APPPATH/classes/controller/admin.php [ 76 ]
--
#0 /var/www/magog/application/classes/controller/admin.php(76): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/magog/...', 76, Array)
#1 [internal function]: Controller_Admin->action_login()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-10 18:16:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-10 18:16:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 18:28:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-10 18:28:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 18:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-10 18:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 21:30:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-10 21:30:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-10 21:36:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-10 21:36:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}