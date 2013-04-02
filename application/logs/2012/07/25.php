<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-25 07:41:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_total ~ APPPATH/views/index/default/pages.php [ 16 ]
2012-07-25 07:41:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_total ~ APPPATH/views/index/default/pages.php [ 16 ]
--
#0 /var/www/magog/application/views/index/default/pages.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 16, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/show.php(63): Kohana_View->render()
#4 [internal function]: Controller_Show->action_page()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-25 08:13:42 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/show.php [ 88 ]
2012-07-25 08:13:42 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/show.php [ 88 ]
--
#0 /var/www/magog/application/classes/controller/show.php(88): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/magog/...', 88, Array)
#1 [internal function]: Controller_Show->action_news()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-25 08:33:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/views/index/default/pages.php [ 7 ]
2012-07-25 08:33:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/views/index/default/pages.php [ 7 ]
--
#0 /var/www/magog/application/views/index/default/pages.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 7, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/show.php(102): Kohana_View->render()
#4 [internal function]: Controller_Show->action_news()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-25 08:33:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/views/index/default/pages.php [ 7 ]
2012-07-25 08:33:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/views/index/default/pages.php [ 7 ]
--
#0 /var/www/magog/application/views/index/default/pages.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 7, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/show.php(102): Kohana_View->render()
#4 [internal function]: Controller_Show->action_news()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-25 08:33:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/views/index/default/pages.php [ 7 ]
2012-07-25 08:33:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/views/index/default/pages.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-25 09:47:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$comments' (T_VARIABLE) ~ APPPATH/classes/controller/show.php [ 60 ]
2012-07-25 09:47:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$comments' (T_VARIABLE) ~ APPPATH/classes/controller/show.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-25 09:50:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/show.php [ 59 ]
2012-07-25 09:50:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/show.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-25 09:50:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/controller/show.php [ 59 ]
2012-07-25 09:50:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/controller/show.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-25 10:26:25 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`baza`.`comments`, CONSTRAINT `comments_pages1` FOREIGN KEY (`parent_page`) REFERENCES `pages` (`id`) ON DELETE CASCADE) [ INSERT INTO `comments` (`parent_page`, `parent_comment`, `author_id`, `author_username`, `content`, `date`) VALUES ('news1', 0, '1', 'admin', '', 1343204785) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-25 10:26:25 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`baza`.`comments`, CONSTRAINT `comments_pages1` FOREIGN KEY (`parent_page`) REFERENCES `pages` (`id`) ON DELETE CASCADE) [ INSERT INTO `comments` (`parent_page`, `parent_comment`, `author_id`, `author_username`, `content`, `date`) VALUES ('news1', 0, '1', 'admin', '', 1343204785) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /var/www/magog/application/classes/model/comment.php(120): Kohana_ORM->save()
#4 /var/www/magog/application/classes/controller/show.php(63): Model_Comment->setComment('news1', 0, '1', 'admin', '')
#5 [internal function]: Controller_Show->action_page()
#6 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#7 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/magog/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-25 10:26:37 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`baza`.`comments`, CONSTRAINT `comments_pages1` FOREIGN KEY (`parent_page`) REFERENCES `pages` (`id`) ON DELETE CASCADE) [ INSERT INTO `comments` (`parent_page`, `author_id`, `author_username`, `content`, `date`) VALUES ('news1', '1', 'admin', '', 1343204797) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-25 10:26:37 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`baza`.`comments`, CONSTRAINT `comments_pages1` FOREIGN KEY (`parent_page`) REFERENCES `pages` (`id`) ON DELETE CASCADE) [ INSERT INTO `comments` (`parent_page`, `author_id`, `author_username`, `content`, `date`) VALUES ('news1', '1', 'admin', '', 1343204797) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /var/www/magog/application/classes/model/comment.php(120): Kohana_ORM->save()
#4 /var/www/magog/application/classes/controller/show.php(63): Model_Comment->setComment('news1', NULL, '1', 'admin', '')
#5 [internal function]: Controller_Show->action_page()
#6 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#7 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/magog/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-25 10:27:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting :: (T_PAAMAYIM_NEKUDOTAYIM) ~ APPPATH/classes/controller/show.php [ 60 ]
2012-07-25 10:27:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting :: (T_PAAMAYIM_NEKUDOTAYIM) ~ APPPATH/classes/controller/show.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-25 10:30:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/index/default/pages.php [ 23 ]
2012-07-25 10:30:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/index/default/pages.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-25 10:31:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'class' (T_CLASS), expecting ',' or ';' ~ APPPATH/views/index/default/pages.php [ 28 ]
2012-07-25 10:31:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'class' (T_CLASS), expecting ',' or ';' ~ APPPATH/views/index/default/pages.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-25 10:36:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/view/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-25 10:36:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/view/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-25 10:37:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/edit/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-25 10:37:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/edit/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-25 10:37:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/page/edit/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-25 10:37:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/page/edit/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-25 11:03:07 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/show.php [ 61 ]
2012-07-25 11:03:07 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/show.php [ 61 ]
--
#0 /var/www/magog/application/classes/controller/show.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/magog/...', 61, Array)
#1 [internal function]: Controller_Show->action_page()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-25 11:03:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/views/index/default/pages.php [ 21 ]
2012-07-25 11:03:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/views/index/default/pages.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}