<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-17 08:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/show/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-17 08:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/show/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 08:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/delete/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-17 08:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/delete/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 08:48:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_total ~ APPPATH/views/comment/list.php [ 39 ]
2012-07-17 08:48:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_total ~ APPPATH/views/comment/list.php [ 39 ]
--
#0 /var/www/magog/application/views/comment/list.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 39, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/comment/admin.php(115): Kohana_View->render()
#4 [internal function]: Controller_Comment_Admin->action_list()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-17 08:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/show/3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-17 08:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/show/3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 09:06:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: parent_page ~ APPPATH/views/comment/profile.php [ 11 ]
2012-07-17 09:06:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: parent_page ~ APPPATH/views/comment/profile.php [ 11 ]
--
#0 /var/www/magog/application/views/comment/profile.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 11, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/comment/admin.php(160): Kohana_View->render()
#4 [internal function]: Controller_Comment_Admin->action_show()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-17 09:06:58 --- ERROR: Kohana_Exception [ 0 ]: The description property does not exist in the Model_Comment class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-17 09:06:58 --- STRACE: Kohana_Exception [ 0 ]: The description property does not exist in the Model_Comment class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/views/comment/profile.php(13): Kohana_ORM->__get('description')
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/comment/admin.php(161): Kohana_View->render()
#4 [internal function]: Controller_Comment_Admin->action_show()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-17 09:25:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/delete/4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-17 09:25:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/delete/4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 10:14:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: pg ~ APPPATH/views/comment/page_list.php [ 32 ]
2012-07-17 10:14:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: pg ~ APPPATH/views/comment/page_list.php [ 32 ]
--
#0 /var/www/magog/application/views/comment/page_list.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 32, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/comment/admin.php(242): Kohana_View->render()
#4 [internal function]: Controller_Comment_Admin->action_page_list()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-17 10:15:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: nofcomments ~ APPPATH/classes/controller/comment/admin.php [ 241 ]
2012-07-17 10:15:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: nofcomments ~ APPPATH/classes/controller/comment/admin.php [ 241 ]
--
#0 /var/www/magog/application/classes/controller/comment/admin.php(241): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 241, Array)
#1 [internal function]: Controller_Comment_Admin->action_page_list()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-17 10:17:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: nofcomments ~ APPPATH/classes/controller/comment/admin.php [ 241 ]
2012-07-17 10:17:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: nofcomments ~ APPPATH/classes/controller/comment/admin.php [ 241 ]
--
#0 /var/www/magog/application/classes/controller/comment/admin.php(241): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 241, Array)
#1 [internal function]: Controller_Comment_Admin->action_page_list()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-17 10:17:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: nofcomments ~ APPPATH/classes/controller/comment/admin.php [ 241 ]
2012-07-17 10:17:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: nofcomments ~ APPPATH/classes/controller/comment/admin.php [ 241 ]
--
#0 /var/www/magog/application/classes/controller/comment/admin.php(241): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 241, Array)
#1 [internal function]: Controller_Comment_Admin->action_page_list()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-17 10:34:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comments/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-17 10:34:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comments/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 11:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comments/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-17 11:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comments/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 11:30:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comments/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-17 11:30:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comments/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 11:30:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comments/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-17 11:30:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comments/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 11:30:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comments/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-17 11:30:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comments/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 11:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comments/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-17 11:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comments/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 11:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comment/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-17 11:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comment/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comments/admin/page_comment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comments/admin/page_comment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 11:31:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comments/admin/bla was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 11:31:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comments/admin/bla was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 11:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comment/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-17 11:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comment/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 11:31:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comments/admin/page_comment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 11:31:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comments/admin/page_comment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 11:31:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comment/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-17 11:31:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comment/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 11:32:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comment/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-17 11:32:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comment/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 11:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comment/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-17 11:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comment/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 11:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comment/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-17 11:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comment/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 11:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comments/admin/page_comment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 11:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comments/admin/page_comment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 11:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comments/admin/page_comments was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 11:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comments/admin/page_comments was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 11:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comments/admin/page_comments was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 11:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comments/admin/page_comments was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 11:34:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comment/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-17 11:34:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comment/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 11:35:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/taki/22 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-17 11:35:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/taki/22 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 11:35:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/page/22 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-17 11:35:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/page/22 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 11:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comment/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-17 11:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comment/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 11:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comment/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-17 11:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comment/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 11:36:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comment/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-17 11:36:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/admin/page_comment/21 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 11:44:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH/classes/controller/comment/admin.php [ 287 ]
2012-07-17 11:44:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH/classes/controller/comment/admin.php [ 287 ]
--
#0 /var/www/magog/application/classes/controller/comment/admin.php(287): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 287, Array)
#1 [internal function]: Controller_Comment_Admin->action_page_comment()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-17 11:44:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/comment/page_comments.php [ 2 ]
2012-07-17 11:44:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/comment/page_comments.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-17 11:45:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(' ~ APPPATH/views/comment/page_comments.php [ 46 ]
2012-07-17 11:45:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(' ~ APPPATH/views/comment/page_comments.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-17 11:45:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH/views/comment/page_comments.php [ 2 ]
2012-07-17 11:45:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH/views/comment/page_comments.php [ 2 ]
--
#0 /var/www/magog/application/views/comment/page_comments.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 2, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/comment/admin.php(292): Kohana_View->render()
#4 [internal function]: Controller_Comment_Admin->action_page_comment()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-17 11:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/edit/21 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-17 11:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/edit/21 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 12:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/save was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-17 12:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/save was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 12:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/save/21 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-17 12:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/save/21 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 12:07:54 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete comment model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-07-17 12:07:54 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete comment model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /var/www/magog/application/classes/model/comment.php(121): Kohana_ORM->delete()
#1 /var/www/magog/application/classes/controller/comment/admin.php(142): Model_Comment->deleteComment('1')
#2 [internal function]: Controller_Comment_Admin->action_deleteL()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-17 12:11:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/comment/admin.php [ 293 ]
2012-07-17 12:11:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/comment/admin.php [ 293 ]
--
#0 /var/www/magog/application/classes/controller/comment/admin.php(293): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 293, Array)
#1 [internal function]: Controller_Comment_Admin->action_page_comment()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-17 12:17:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'Opuść' (T_STRING), expecting ')' ~ APPPATH/i18n/en.php [ 94 ]
2012-07-17 12:17:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'Opuść' (T_STRING), expecting ')' ~ APPPATH/i18n/en.php [ 94 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-17 12:21:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH/i18n/en.php [ 80 ]
2012-07-17 12:21:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH/i18n/en.php [ 80 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-17 12:35:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/page_comments/21=2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-17 12:35:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/page_comments/21=2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 12:35:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/page_comments/21=1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-17 12:35:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/page_comments/21=1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 12:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/page_comments/21=1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-17 12:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/page_comments/21=1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 12:35:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/comment/admin.php [ 295 ]
2012-07-17 12:35:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/comment/admin.php [ 295 ]
--
#0 /var/www/magog/application/classes/controller/comment/admin.php(295): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 295, Array)
#1 [internal function]: Controller_Comment_Admin->action_page_comment()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-17 12:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/view/21 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 12:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/view/21 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 13:54:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 13:54:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:16:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:16:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:17:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:17:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:17:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:17:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:17:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:17:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:17:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:17:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:17:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:17:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:17:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:17:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:17:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:17:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:19:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:19:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:19:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:19:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:20:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:20:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:20:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:20:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:20:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:20:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:20:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:20:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:20:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/page was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:20:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/page was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:20:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:20:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:21:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:21:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:21:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:21:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:21:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:21:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:22:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:22:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:22:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:22:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:22:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:22:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:24:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:24:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:25:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:25:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:25:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:25:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:25:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:25:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:25:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:25:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:25:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:25:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:25:58 --- ERROR: ErrorException [ 1 ]: Class 'Template_Controller' not found ~ APPPATH/classes/controller/menu/admin.php [ 28 ]
2012-07-17 16:25:58 --- STRACE: ErrorException [ 1 ]: Class 'Template_Controller' not found ~ APPPATH/classes/controller/menu/admin.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-17 16:26:03 --- ERROR: ErrorException [ 1 ]: Class 'Template_Controller' not found ~ APPPATH/classes/controller/menu/admin.php [ 28 ]
2012-07-17 16:26:03 --- STRACE: ErrorException [ 1 ]: Class 'Template_Controller' not found ~ APPPATH/classes/controller/menu/admin.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-17 16:26:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:26:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:26:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:26:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:28:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-17 16:28:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 16:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/lol was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-17 16:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/lol was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:31:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:31:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:31:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL view/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:31:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL view/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:34:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL view/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:34:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL view/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:34:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL view/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:34:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL view/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:34:28 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'baza' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2012-07-17 16:34:28 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'baza' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/mysql.php(75): Kohana_Database_MySQL->_select_db('baza')
#1 /var/www/magog/modules/database/classes/kohana/database/mysql.php(432): Kohana_Database_MySQL->connect()
#2 /var/www/magog/modules/database/classes/kohana/database.php(473): Kohana_Database_MySQL->escape('wef')
#3 /var/www/magog/modules/database/classes/kohana/database/query/builder.php(116): Kohana_Database->quote('wef')
#4 /var/www/magog/modules/database/classes/kohana/database/query/builder/select.php(370): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#5 /var/www/magog/modules/database/classes/kohana/database/query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#6 /var/www/magog/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#7 /var/www/magog/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#8 /var/www/magog/modules/orm/classes/kohana/auth/orm.php(76): Kohana_ORM->find()
#9 /var/www/magog/modules/auth/classes/kohana/auth.php(90): Kohana_Auth_ORM->_login('wef', 'wef', false)
#10 /var/www/magog/application/classes/controller/admin.php(87): Kohana_Auth->login('wef', 'wef')
#11 [internal function]: Controller_Admin->action_login()
#12 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#13 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/magog/index.php(109): Kohana_Request->execute()
#16 {main}
2012-07-17 16:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wef was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wef was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wef was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wef was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wef was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wef was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:48:38 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Main' not found ~ APPPATH/classes/controller/admin.php [ 28 ]
2012-07-17 16:48:38 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Main' not found ~ APPPATH/classes/controller/admin.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-17 16:49:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'defined' (T_STRING) ~ APPPATH/classes/controller/admin.php [ 28 ]
2012-07-17 16:49:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'defined' (T_STRING) ~ APPPATH/classes/controller/admin.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-17 16:52:01 --- ERROR: ErrorException [ 2 ]: include(lol): failed to open stream: Nie ma takiego pliku ani katalogu ~ APPPATH/classes/controller/admin.php [ 30 ]
2012-07-17 16:52:01 --- STRACE: ErrorException [ 2 ]: include(lol): failed to open stream: Nie ma takiego pliku ani katalogu ~ APPPATH/classes/controller/admin.php [ 30 ]
--
#0 /var/www/magog/application/classes/controller/admin.php(30): Kohana_Core::error_handler(2, 'include(lol): f...', '/var/www/magog/...', 30, Array)
#1 /var/www/magog/application/classes/controller/admin.php(30): include()
#2 /var/www/magog/system/classes/kohana/core.php(496): require('/var/www/magog/...')
#3 [internal function]: Kohana_Core::auto_load('controller_admi...')
#4 [internal function]: spl_autoload_call('controller_admi...')
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(85): class_exists('controller_admi...')
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-17 16:52:18 --- ERROR: ErrorException [ 2 ]: include(./application/controller/classes/main.php): failed to open stream: Nie ma takiego pliku ani katalogu ~ APPPATH/classes/controller/admin.php [ 30 ]
2012-07-17 16:52:18 --- STRACE: ErrorException [ 2 ]: include(./application/controller/classes/main.php): failed to open stream: Nie ma takiego pliku ani katalogu ~ APPPATH/classes/controller/admin.php [ 30 ]
--
#0 /var/www/magog/application/classes/controller/admin.php(30): Kohana_Core::error_handler(2, 'include(./appli...', '/var/www/magog/...', 30, Array)
#1 /var/www/magog/application/classes/controller/admin.php(30): include()
#2 /var/www/magog/system/classes/kohana/core.php(496): require('/var/www/magog/...')
#3 [internal function]: Kohana_Core::auto_load('controller_admi...')
#4 [internal function]: spl_autoload_call('controller_admi...')
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(85): class_exists('controller_admi...')
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-17 16:52:26 --- ERROR: ErrorException [ 2 ]: include(./application/controller/classes/main.php): failed to open stream: Nie ma takiego pliku ani katalogu ~ APPPATH/classes/controller/admin.php [ 30 ]
2012-07-17 16:52:26 --- STRACE: ErrorException [ 2 ]: include(./application/controller/classes/main.php): failed to open stream: Nie ma takiego pliku ani katalogu ~ APPPATH/classes/controller/admin.php [ 30 ]
--
#0 /var/www/magog/application/classes/controller/admin.php(30): Kohana_Core::error_handler(2, 'include(./appli...', '/var/www/magog/...', 30, Array)
#1 /var/www/magog/application/classes/controller/admin.php(30): include()
#2 /var/www/magog/system/classes/kohana/core.php(496): require('/var/www/magog/...')
#3 [internal function]: Kohana_Core::auto_load('controller_admi...')
#4 [internal function]: spl_autoload_call('controller_admi...')
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(85): class_exists('controller_admi...')
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-17 16:52:49 --- ERROR: ErrorException [ 2 ]: include(./application/controller/classes/main.php): failed to open stream: Nie ma takiego pliku ani katalogu ~ APPPATH/classes/controller/admin.php [ 30 ]
2012-07-17 16:52:49 --- STRACE: ErrorException [ 2 ]: include(./application/controller/classes/main.php): failed to open stream: Nie ma takiego pliku ani katalogu ~ APPPATH/classes/controller/admin.php [ 30 ]
--
#0 /var/www/magog/application/classes/controller/admin.php(30): Kohana_Core::error_handler(2, 'include(./appli...', '/var/www/magog/...', 30, Array)
#1 /var/www/magog/application/classes/controller/admin.php(30): include()
#2 /var/www/magog/system/classes/kohana/core.php(496): require('/var/www/magog/...')
#3 [internal function]: Kohana_Core::auto_load('controller_admi...')
#4 [internal function]: spl_autoload_call('controller_admi...')
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(85): class_exists('controller_admi...')
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-17 16:52:55 --- ERROR: ErrorException [ 2 ]: include(application/controller/classes/main.php): failed to open stream: Nie ma takiego pliku ani katalogu ~ APPPATH/classes/controller/admin.php [ 30 ]
2012-07-17 16:52:55 --- STRACE: ErrorException [ 2 ]: include(application/controller/classes/main.php): failed to open stream: Nie ma takiego pliku ani katalogu ~ APPPATH/classes/controller/admin.php [ 30 ]
--
#0 /var/www/magog/application/classes/controller/admin.php(30): Kohana_Core::error_handler(2, 'include(applica...', '/var/www/magog/...', 30, Array)
#1 /var/www/magog/application/classes/controller/admin.php(30): include()
#2 /var/www/magog/system/classes/kohana/core.php(496): require('/var/www/magog/...')
#3 [internal function]: Kohana_Core::auto_load('controller_admi...')
#4 [internal function]: spl_autoload_call('controller_admi...')
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(85): class_exists('controller_admi...')
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-17 16:53:12 --- ERROR: ErrorException [ 2 ]: include(/application/controller/classes/main.php): failed to open stream: Nie ma takiego pliku ani katalogu ~ APPPATH/classes/controller/admin.php [ 30 ]
2012-07-17 16:53:12 --- STRACE: ErrorException [ 2 ]: include(/application/controller/classes/main.php): failed to open stream: Nie ma takiego pliku ani katalogu ~ APPPATH/classes/controller/admin.php [ 30 ]
--
#0 /var/www/magog/application/classes/controller/admin.php(30): Kohana_Core::error_handler(2, 'include(/applic...', '/var/www/magog/...', 30, Array)
#1 /var/www/magog/application/classes/controller/admin.php(30): include()
#2 /var/www/magog/system/classes/kohana/core.php(496): require('/var/www/magog/...')
#3 [internal function]: Kohana_Core::auto_load('controller_admi...')
#4 [internal function]: spl_autoload_call('controller_admi...')
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(85): class_exists('controller_admi...')
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-17 16:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 16:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 16:59:15 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/admin.php [ 83 ]
2012-07-17 16:59:15 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/admin.php [ 83 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-17 16:59:28 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/admin.php [ 83 ]
2012-07-17 16:59:28 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/admin.php [ 83 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-17 16:59:33 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/admin.php [ 83 ]
2012-07-17 16:59:33 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/admin.php [ 83 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-17 16:59:40 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/admin.php [ 83 ]
2012-07-17 16:59:40 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/admin.php [ 83 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-17 17:15:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 17:15:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 17:15:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/page_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 17:15:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/page_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 17:15:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 17:15:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 17:15:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 17:15:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 17:16:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/user/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 17:16:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/user/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 17:16:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/user/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 17:16:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/user/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 17:16:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/user/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 17:16:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/user/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 17:16:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/user/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 17:16:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/user/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 17:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 17:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 17:16:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 17:16:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 17:17:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 17:17:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 17:40:08 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/index/default/index.php [ 37 ]
2012-07-17 17:40:08 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/index/default/index.php [ 37 ]
--
#0 /var/www/magog/application/views/index/default/index.php(37): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/magog/...', 37, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/show.php(34): Kohana_View->render()
#4 [internal function]: Controller_Show->action_index()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-17 17:41:00 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/index/default/index.php [ 37 ]
2012-07-17 17:41:00 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/index/default/index.php [ 37 ]
--
#0 /var/www/magog/application/views/index/default/index.php(37): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/magog/...', 37, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/show.php(33): Kohana_View->render()
#4 [internal function]: Controller_Show->action_index()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-17 17:41:02 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/index/default/index.php [ 37 ]
2012-07-17 17:41:02 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/index/default/index.php [ 37 ]
--
#0 /var/www/magog/application/views/index/default/index.php(37): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/magog/...', 37, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/show.php(33): Kohana_View->render()
#4 [internal function]: Controller_Show->action_index()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-17 17:41:13 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/index/default/index.php [ 37 ]
2012-07-17 17:41:13 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/index/default/index.php [ 37 ]
--
#0 /var/www/magog/application/views/index/default/index.php(37): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/magog/...', 37, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/show.php(33): Kohana_View->render()
#4 [internal function]: Controller_Show->action_index()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-17 17:41:41 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/index/default/index.php [ 37 ]
2012-07-17 17:41:41 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/index/default/index.php [ 37 ]
--
#0 /var/www/magog/application/views/index/default/index.php(37): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/magog/...', 37, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/show.php(33): Kohana_View->render()
#4 [internal function]: Controller_Show->action_index()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-17 17:43:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 17:43:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 17:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-17 17:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 17:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: page/admin/edit/lists/image_list.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-17 17:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: page/admin/edit/lists/image_list.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}