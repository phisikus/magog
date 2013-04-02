<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-16 08:54:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/admin/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-16 08:54:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/admin/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 08:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/admin/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-16 08:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/admin/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 09:08:20 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/page/admin.php [ 247 ]
2012-07-16 09:08:20 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/page/admin.php [ 247 ]
--
#0 /var/www/magog/application/classes/controller/page/admin.php(247): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/magog/...', 247, Array)
#1 [internal function]: Controller_Page_Admin->action_list()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 09:08:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: pages ~ APPPATH/classes/controller/page/admin.php [ 247 ]
2012-07-16 09:08:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: pages ~ APPPATH/classes/controller/page/admin.php [ 247 ]
--
#0 /var/www/magog/application/classes/controller/page/admin.php(247): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 247, Array)
#1 [internal function]: Controller_Page_Admin->action_list()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 09:10:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: author ~ APPPATH/views/page/list.php [ 33 ]
2012-07-16 09:10:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: author ~ APPPATH/views/page/list.php [ 33 ]
--
#0 /var/www/magog/application/views/page/list.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 33, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/page/admin.php(253): Kohana_View->render()
#4 [internal function]: Controller_Page_Admin->action_list()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page_Admin))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-16 09:11:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/admin/delete was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-16 09:11:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/admin/delete was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 09:17:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/admin/delete/7 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-16 09:17:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/admin/delete/7 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 09:18:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Page::getAllPagesSimpleSearch() ~ APPPATH/classes/controller/page/admin.php [ 236 ]
2012-07-16 09:18:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Page::getAllPagesSimpleSearch() ~ APPPATH/classes/controller/page/admin.php [ 236 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 09:21:54 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'author' in 'where clause' [ SELECT `page`.* FROM `pages` AS `page` WHERE `author` LIKE '%s%' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-16 09:21:54 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'author' in 'where clause' [ SELECT `page`.* FROM `pages` AS `page` WHERE `author` LIKE '%s%' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `page`.*...', 'Model_Page', Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/magog/application/classes/model/page.php(70): Kohana_ORM->find_all()
#4 /var/www/magog/application/classes/controller/page/admin.php(236): Model_Page->getAllPagesSimpleSearch(20, 0, 's')
#5 [internal function]: Controller_Page_Admin->action_list()
#6 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page_Admin))
#7 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/magog/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-16 09:22:26 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'author' in 'where clause' [ SELECT `page`.* FROM `pages` AS `page` WHERE `author` LIKE '%s%' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-16 09:22:26 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'author' in 'where clause' [ SELECT `page`.* FROM `pages` AS `page` WHERE `author` LIKE '%s%' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `page`.*...', 'Model_Page', Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/magog/application/classes/model/page.php(70): Kohana_ORM->find_all()
#4 /var/www/magog/application/classes/controller/page/admin.php(236): Model_Page->getAllPagesSimpleSearch(20, 0, 's')
#5 [internal function]: Controller_Page_Admin->action_list()
#6 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page_Admin))
#7 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/magog/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-16 09:23:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: author ~ APPPATH/classes/controller/page/admin.php [ 248 ]
2012-07-16 09:23:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: author ~ APPPATH/classes/controller/page/admin.php [ 248 ]
--
#0 /var/www/magog/application/classes/controller/page/admin.php(248): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 248, Array)
#1 [internal function]: Controller_Page_Admin->action_list()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 09:23:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: author ~ APPPATH/classes/controller/page/admin.php [ 248 ]
2012-07-16 09:23:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: author ~ APPPATH/classes/controller/page/admin.php [ 248 ]
--
#0 /var/www/magog/application/classes/controller/page/admin.php(248): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 248, Array)
#1 [internal function]: Controller_Page_Admin->action_list()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 09:28:30 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/page/admin.php [ 241 ]
2012-07-16 09:28:30 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/page/admin.php [ 241 ]
--
#0 /var/www/magog/application/classes/controller/page/admin.php(241): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/magog/...', 241, Array)
#1 [internal function]: Controller_Page_Admin->action_list()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 09:29:56 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/page/admin.php [ 241 ]
2012-07-16 09:29:56 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/page/admin.php [ 241 ]
--
#0 /var/www/magog/application/classes/controller/page/admin.php(241): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/magog/...', 241, Array)
#1 [internal function]: Controller_Page_Admin->action_list()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 09:34:21 --- ERROR: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/classes/model/page.php [ 68 ]
2012-07-16 09:34:21 --- STRACE: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/classes/model/page.php [ 68 ]
--
#0 /var/www/magog/application/classes/model/page.php(68): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/magog/...', 68, Array)
#1 /var/www/magog/application/classes/controller/page/admin.php(236): Model_Page->getAllPagesSimpleSearch(20, 0, 'ef')
#2 [internal function]: Controller_Page_Admin->action_list()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 09:34:36 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/page/admin.php [ 241 ]
2012-07-16 09:34:36 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/page/admin.php [ 241 ]
--
#0 /var/www/magog/application/classes/controller/page/admin.php(241): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/magog/...', 241, Array)
#1 [internal function]: Controller_Page_Admin->action_list()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 09:35:11 --- ERROR: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/classes/model/page.php [ 68 ]
2012-07-16 09:35:11 --- STRACE: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/classes/model/page.php [ 68 ]
--
#0 /var/www/magog/application/classes/model/page.php(68): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/magog/...', 68, Array)
#1 /var/www/magog/application/classes/controller/page/admin.php(236): Model_Page->getAllPagesSimpleSearch(20, 0, '16-07')
#2 [internal function]: Controller_Page_Admin->action_list()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 09:35:36 --- ERROR: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/classes/model/page.php [ 68 ]
2012-07-16 09:35:36 --- STRACE: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/classes/model/page.php [ 68 ]
--
#0 /var/www/magog/application/classes/model/page.php(68): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/magog/...', 68, Array)
#1 /var/www/magog/application/classes/controller/page/admin.php(236): Model_Page->getAllPagesSimpleSearch(20, 0, '16-07')
#2 [internal function]: Controller_Page_Admin->action_list()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 09:36:05 --- ERROR: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/classes/model/page.php [ 69 ]
2012-07-16 09:36:05 --- STRACE: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/classes/model/page.php [ 69 ]
--
#0 /var/www/magog/application/classes/model/page.php(69): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/magog/...', 69, Array)
#1 /var/www/magog/application/classes/controller/page/admin.php(236): Model_Page->getAllPagesSimpleSearch(20, 0, '16-07')
#2 [internal function]: Controller_Page_Admin->action_list()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 09:42:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/js/tiny_mce/plugins/emotions/img/smiley-kiss.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-16 09:42:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/js/tiny_mce/plugins/emotions/img/smiley-kiss.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 09:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/js/tiny_mce/plugins/emotions/img/smiley-kiss.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-16 09:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/js/tiny_mce/plugins/emotions/img/smiley-kiss.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 09:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/js/tiny_mce/plugins/emotions/img/smiley-kiss.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-16 09:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/js/tiny_mce/plugins/emotions/img/smiley-kiss.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 09:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/admin/delete/18 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-16 09:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/admin/delete/18 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 09:59:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH/i18n/en.php [ 76 ]
2012-07-16 09:59:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH/i18n/en.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 10:00:05 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete page model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-07-16 10:00:05 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete page model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /var/www/magog/application/classes/model/page.php(139): Kohana_ORM->delete()
#1 /var/www/magog/application/classes/controller/page/admin.php(325): Model_Page->deletePage('17')
#2 [internal function]: Controller_Page_Admin->action_deleteConfirmed()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 10:01:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH/i18n/en.php [ 76 ]
2012-07-16 10:01:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH/i18n/en.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 10:03:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-16 10:03:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 10:03:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-16 10:03:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 10:13:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-16 10:13:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 11:00:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-16 11:00:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 11:13:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-16 11:13:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 11:38:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-16 11:38:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 11:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-16 11:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 11:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-16 11:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 11:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-16 11:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 11:44:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting function (T_FUNCTION) ~ APPPATH/classes/model/comment.php [ 49 ]
2012-07-16 11:44:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting function (T_FUNCTION) ~ APPPATH/classes/model/comment.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 11:44:11 --- ERROR: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH/orm/classes/kohana/orm.php [ 315 ]
2012-07-16 11:44:11 --- STRACE: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH/orm/classes/kohana/orm.php [ 315 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', '/var/www/magog/...', 315, Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(315): array_merge(Array, 'page')
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#3 /var/www/magog/application/classes/controller/comment/admin.php(32): Kohana_ORM->__construct()
#4 [internal function]: Controller_Comment_Admin->action_index()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-16 11:44:33 --- ERROR: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH/orm/classes/kohana/orm.php [ 315 ]
2012-07-16 11:44:33 --- STRACE: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH/orm/classes/kohana/orm.php [ 315 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', '/var/www/magog/...', 315, Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(315): array_merge(Array, 'page')
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#3 /var/www/magog/application/classes/controller/comment/admin.php(32): Kohana_ORM->__construct()
#4 [internal function]: Controller_Comment_Admin->action_index()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-16 11:45:29 --- ERROR: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH/orm/classes/kohana/orm.php [ 315 ]
2012-07-16 11:45:29 --- STRACE: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH/orm/classes/kohana/orm.php [ 315 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', '/var/www/magog/...', 315, Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(315): array_merge(Array, 'page')
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#3 /var/www/magog/application/classes/controller/comment/admin.php(32): Kohana_ORM->__construct()
#4 [internal function]: Controller_Comment_Admin->action_index()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-16 11:45:33 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 11:45:33 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 11:45:43 --- ERROR: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-16 11:45:43 --- STRACE: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_ORM->__get('comment')
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 11:45:49 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 11:45:49 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 11:46:08 --- ERROR: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH/orm/classes/kohana/orm.php [ 315 ]
2012-07-16 11:46:08 --- STRACE: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH/orm/classes/kohana/orm.php [ 315 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', '/var/www/magog/...', 315, Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(315): array_merge(Array, 'page')
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#3 /var/www/magog/application/classes/controller/comment/admin.php(32): Kohana_ORM->__construct()
#4 [internal function]: Controller_Comment_Admin->action_index()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-16 11:47:25 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 11:47:25 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 11:47:55 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 11:47:55 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 11:47:56 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 11:47:56 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 11:48:13 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 11:48:13 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 11:48:14 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 11:48:14 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 11:48:15 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 11:48:15 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 11:49:19 --- ERROR: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-16 11:49:19 --- STRACE: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_ORM->__get('comment')
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 11:49:22 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 11:49:22 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 11:49:53 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 11:49:53 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 11:50:32 --- ERROR: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-16 11:50:32 --- STRACE: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_ORM->__get('comment')
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 11:51:02 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 11:51:02 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 11:51:06 --- ERROR: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-16 11:51:06 --- STRACE: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_ORM->__get('comment')
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 11:51:21 --- ERROR: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-16 11:51:21 --- STRACE: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_ORM->__get('comment')
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 11:51:22 --- ERROR: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-16 11:51:22 --- STRACE: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_ORM->__get('comment')
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 11:51:50 --- ERROR: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-16 11:51:50 --- STRACE: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_ORM->__get('comment')
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 11:51:51 --- ERROR: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-16 11:51:51 --- STRACE: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_ORM->__get('comment')
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 11:51:59 --- ERROR: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-16 11:51:59 --- STRACE: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_ORM->__get('comment')
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 11:52:02 --- ERROR: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 11:52:02 --- STRACE: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 11:52:10 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 11:52:10 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 11:52:41 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 11:52:41 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 11:52:42 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 11:52:42 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 11:52:42 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 11:52:42 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 11:52:43 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 11:52:43 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 11:53:01 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 11:53:01 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 11:53:08 --- ERROR: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-16 11:53:08 --- STRACE: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_ORM->__get('comment')
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 11:53:15 --- ERROR: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-16 11:53:15 --- STRACE: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_ORM->__get('comment')
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 11:55:48 --- ERROR: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-16 11:55:48 --- STRACE: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_ORM->__get('comment')
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 11:57:51 --- ERROR: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-16 11:57:51 --- STRACE: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_ORM->__get('comment')
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 11:58:15 --- ERROR: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-16 11:58:15 --- STRACE: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/comment.php(48): Kohana_ORM->__get('comment')
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 11:58:23 --- ERROR: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-16 11:58:23 --- STRACE: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_ORM->__get('comment')
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 11:58:31 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 11:58:31 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/magog/...', 47, Array)
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 11:58:38 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 11:58:38 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 11:58:43 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 11:58:43 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 11:59:00 --- ERROR: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-16 11:59:00 --- STRACE: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/comment.php(49): Kohana_ORM->__get('comment')
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 11:59:34 --- ERROR: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-16 11:59:34 --- STRACE: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/comment.php(49): Kohana_ORM->__get('comment')
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 11:59:48 --- ERROR: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-16 11:59:48 --- STRACE: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/comment.php(49): Kohana_ORM->__get('comment')
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 11:59:50 --- ERROR: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-16 11:59:50 --- STRACE: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/comment.php(49): Kohana_ORM->__get('comment')
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 11:59:56 --- ERROR: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-16 11:59:56 --- STRACE: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/comment.php(49): Kohana_ORM->__get('comment')
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 12:00:02 --- ERROR: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-16 12:00:02 --- STRACE: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/comment.php(49): Kohana_ORM->__get('comment')
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 12:00:06 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 12:00:06 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/magog/...', 47, Array)
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 12:00:15 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 12:00:15 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 12:11:09 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 12:11:09 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 12:11:10 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 12:11:10 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 12:11:35 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 49 ]
2012-07-16 12:11:35 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 12:11:36 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 49 ]
2012-07-16 12:11:36 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 12:13:38 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/model/comment.php [ 48 ]
2012-07-16 12:13:38 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/model/comment.php [ 48 ]
--
#0 /var/www/magog/application/classes/model/comment.php(48): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/magog/...', 48, Array)
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 12:13:51 --- ERROR: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-16 12:13:51 --- STRACE: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_ORM->__get('comment')
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 12:13:57 --- ERROR: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-16 12:13:57 --- STRACE: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_ORM->__get('comment')
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 12:14:07 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/model/comment.php [ 48 ]
2012-07-16 12:14:07 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/model/comment.php [ 48 ]
--
#0 /var/www/magog/application/classes/model/comment.php(48): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/magog/...', 48, Array)
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 12:14:17 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$comments ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 12:14:17 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$comments ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/magog/...', 47, Array)
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 12:14:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$comments ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 12:14:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$comments ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/magog/...', 47, Array)
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 12:14:38 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 12:14:38 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/magog/...', 47, Array)
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 12:14:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: comments ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 12:14:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: comments ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 47, Array)
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 12:14:49 --- ERROR: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-16 12:14:49 --- STRACE: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_ORM->__get('comment')
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 12:15:05 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 12:15:05 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/magog/...', 47, Array)
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 12:15:12 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 12:15:12 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 12:15:20 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 12:15:20 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/magog/...', 47, Array)
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 12:15:27 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 12:15:27 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/magog/...', 47, Array)
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 12:15:51 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'page.parent_page' in 'where clause' [ SELECT `page`.* FROM `pages` AS `page` WHERE `page`.`parent_page` IS NULL LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-16 12:15:51 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'page.parent_page' in 'where clause' [ SELECT `page`.* FROM `pages` AS `page` WHERE `page`.`parent_page` IS NULL LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `page`.*...', false, Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#3 /var/www/magog/modules/orm/classes/kohana/orm.php(578): Kohana_ORM->find()
#4 /var/www/magog/application/classes/model/comment.php(47): Kohana_ORM->__get('page')
#5 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#6 [internal function]: Controller_Comment_Admin->action_index()
#7 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#8 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/magog/index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-16 12:16:49 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 12:16:49 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 12:16:56 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 12:16:56 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/magog/...', 47, Array)
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 12:17:02 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/comment/admin.php [ 33 ]
2012-07-16 12:17:02 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/comment/admin.php [ 33 ]
--
#0 /var/www/magog/application/classes/controller/comment/admin.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/magog/...', 33, Array)
#1 [internal function]: Controller_Comment_Admin->action_index()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 12:17:10 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/controller/comment/admin.php [ 33 ]
2012-07-16 12:17:10 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/controller/comment/admin.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 12:17:15 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/controller/comment/admin.php [ 33 ]
2012-07-16 12:17:15 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/controller/comment/admin.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 12:19:04 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/model/comment.php [ 47 ]
2012-07-16 12:19:04 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/model/comment.php [ 47 ]
--
#0 /var/www/magog/application/classes/model/comment.php(47): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/magog/...', 47, Array)
#1 /var/www/magog/application/classes/controller/comment/admin.php(33): Model_Comment->getPageComment(20)
#2 [internal function]: Controller_Comment_Admin->action_index()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 13:13:21 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/comment/admin.php [ 33 ]
2012-07-16 13:13:21 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/comment/admin.php [ 33 ]
--
#0 /var/www/magog/application/classes/controller/comment/admin.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/magog/...', 33, Array)
#1 [internal function]: Controller_Comment_Admin->action_index()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 13:13:27 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/controller/comment/admin.php [ 33 ]
2012-07-16 13:13:27 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/controller/comment/admin.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 13:14:07 --- ERROR: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-16 13:14:07 --- STRACE: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/controller/comment/admin.php(33): Kohana_ORM->__get('comment')
#1 [internal function]: Controller_Comment_Admin->action_index()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 13:14:10 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/comment/admin.php [ 33 ]
2012-07-16 13:14:10 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/comment/admin.php [ 33 ]
--
#0 /var/www/magog/application/classes/controller/comment/admin.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/magog/...', 33, Array)
#1 [internal function]: Controller_Comment_Admin->action_index()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 13:14:14 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/controller/comment/admin.php [ 33 ]
2012-07-16 13:14:14 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/controller/comment/admin.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 13:14:18 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/controller/comment/admin.php [ 33 ]
2012-07-16 13:14:18 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/controller/comment/admin.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 13:14:25 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/comment/admin.php [ 33 ]
2012-07-16 13:14:25 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/comment/admin.php [ 33 ]
--
#0 /var/www/magog/application/classes/controller/comment/admin.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/magog/...', 33, Array)
#1 [internal function]: Controller_Comment_Admin->action_index()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 13:14:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/classes/controller/comment/admin.php [ 33 ]
2012-07-16 13:14:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/classes/controller/comment/admin.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 13:14:56 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 885 ]
2012-07-16 13:14:56 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 885 ]
--
#0 /var/www/magog/application/classes/controller/comment/admin.php(33): Kohana_ORM->find()
#1 [internal function]: Controller_Comment_Admin->action_index()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 13:35:29 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/controller/comment/admin.php [ 34 ]
2012-07-16 13:35:29 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/controller/comment/admin.php [ 34 ]
--
#0 /var/www/magog/application/classes/controller/comment/admin.php(34): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/magog/...', 34, Array)
#1 [internal function]: Controller_Comment_Admin->action_index()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 13:35:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/comment/admin.php [ 35 ]
2012-07-16 13:35:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/comment/admin.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 13:38:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_Comments' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-07-16 13:38:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_Comments' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 14:09:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Page::join_table() ~ APPPATH/classes/controller/comment/admin.php [ 32 ]
2012-07-16 14:09:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Page::join_table() ~ APPPATH/classes/controller/comment/admin.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 14:19:19 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/comment/admin.php [ 35 ]
2012-07-16 14:19:19 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/comment/admin.php [ 35 ]
--
#0 /var/www/magog/application/classes/controller/comment/admin.php(35): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/magog/...', 35, Array)
#1 [internal function]: Controller_Comment_Admin->action_index()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 14:19:29 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/comment/admin.php [ 35 ]
2012-07-16 14:19:29 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/comment/admin.php [ 35 ]
--
#0 /var/www/magog/application/classes/controller/comment/admin.php(35): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/magog/...', 35, Array)
#1 [internal function]: Controller_Comment_Admin->action_index()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 14:42:25 --- ERROR: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 94 ]
2012-07-16 14:42:25 --- STRACE: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 94 ]
--
#0 /var/www/magog/application/views/admin/panel.php(94): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/magog/...', 94, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/comment/admin.php(74): Kohana_View->render()
#4 [internal function]: Controller_Comment_Admin->action_index()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-16 14:43:56 --- ERROR: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 94 ]
2012-07-16 14:43:56 --- STRACE: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 94 ]
--
#0 /var/www/magog/application/views/admin/panel.php(94): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/magog/...', 94, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/comment/admin.php(74): Kohana_View->render()
#4 [internal function]: Controller_Comment_Admin->action_index()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-16 14:43:57 --- ERROR: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 94 ]
2012-07-16 14:43:57 --- STRACE: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 94 ]
--
#0 /var/www/magog/application/views/admin/panel.php(94): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/magog/...', 94, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/comment/admin.php(74): Kohana_View->render()
#4 [internal function]: Controller_Comment_Admin->action_index()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-16 14:44:22 --- ERROR: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 94 ]
2012-07-16 14:44:22 --- STRACE: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 94 ]
--
#0 /var/www/magog/application/views/admin/panel.php(94): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/magog/...', 94, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/comment/admin.php(74): Kohana_View->render()
#4 [internal function]: Controller_Comment_Admin->action_index()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-16 14:44:39 --- ERROR: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 94 ]
2012-07-16 14:44:39 --- STRACE: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 94 ]
--
#0 /var/www/magog/application/views/admin/panel.php(94): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/magog/...', 94, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/comment/admin.php(74): Kohana_View->render()
#4 [internal function]: Controller_Comment_Admin->action_index()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-16 14:44:57 --- ERROR: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 94 ]
2012-07-16 14:44:57 --- STRACE: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH/views/admin/panel.php [ 94 ]
--
#0 /var/www/magog/application/views/admin/panel.php(94): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/magog/...', 94, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/comment/admin.php(74): Kohana_View->render()
#4 [internal function]: Controller_Comment_Admin->action_index()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-16 14:45:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-16 14:45:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment/admin/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 14:49:43 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Comment::getAllPages() ~ APPPATH/classes/controller/comment/admin.php [ 104 ]
2012-07-16 14:49:43 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Comment::getAllPages() ~ APPPATH/classes/controller/comment/admin.php [ 104 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 14:55:45 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Comment::getAllComments() ~ APPPATH/classes/controller/comment/admin.php [ 101 ]
2012-07-16 14:55:45 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Comment::getAllComments() ~ APPPATH/classes/controller/comment/admin.php [ 101 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 14:59:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: komentarze ~ APPPATH/classes/controller/comment/admin.php [ 112 ]
2012-07-16 14:59:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: komentarze ~ APPPATH/classes/controller/comment/admin.php [ 112 ]
--
#0 /var/www/magog/application/classes/controller/comment/admin.php(112): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 112, Array)
#1 [internal function]: Controller_Comment_Admin->action_list()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 15:00:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: komentarze ~ APPPATH/classes/controller/comment/admin.php [ 112 ]
2012-07-16 15:00:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: komentarze ~ APPPATH/classes/controller/comment/admin.php [ 112 ]
--
#0 /var/www/magog/application/classes/controller/comment/admin.php(112): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 112, Array)
#1 [internal function]: Controller_Comment_Admin->action_list()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comment_Admin))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}