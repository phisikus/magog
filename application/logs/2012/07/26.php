<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-26 20:07:42 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/database/classes/kohana/database.php [ 500 ]
2012-07-26 20:07:42 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/database/classes/kohana/database.php [ 500 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database.php(500): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/magog/...', 500, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 /var/www/magog/modules/database/classes/kohana/database/query/builder/select.php(352): array_map(Array, Array)
#3 /var/www/magog/modules/database/classes/kohana/database/query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 /var/www/magog/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#5 /var/www/magog/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#6 /var/www/magog/application/classes/model/page.php(206): Kohana_ORM->find_all()
#7 /var/www/magog/application/classes/controller/show.php(55): Model_Page->getArchiveMenu('default')
#8 [internal function]: Controller_Show->action_page()
#9 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#10 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/magog/index.php(109): Kohana_Request->execute()
#13 {main}
2012-07-26 20:07:58 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'MONTH(FROM_UNIXTIME(p.date)) as month' in 'field list' [ SELECT `MONTH(FROM_UNIXTIME(p`.`date)) as month` AS `date`, `page`.* FROM `pages` AS `page` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-26 20:07:58 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'MONTH(FROM_UNIXTIME(p.date)) as month' in 'field list' [ SELECT `MONTH(FROM_UNIXTIME(p`.`date)) as month` AS `date`, `page`.* FROM `pages` AS `page` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `MONTH(F...', 'Model_Page', Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/magog/application/classes/model/page.php(206): Kohana_ORM->find_all()
#4 /var/www/magog/application/classes/controller/show.php(55): Model_Page->getArchiveMenu('default')
#5 [internal function]: Controller_Show->action_page()
#6 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#7 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/magog/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-26 20:08:30 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/database/classes/kohana/database.php [ 500 ]
2012-07-26 20:08:30 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/database/classes/kohana/database.php [ 500 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database.php(500): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/magog/...', 500, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 /var/www/magog/modules/database/classes/kohana/database/query/builder/select.php(352): array_map(Array, Array)
#3 /var/www/magog/modules/database/classes/kohana/database/query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 /var/www/magog/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#5 /var/www/magog/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#6 /var/www/magog/application/classes/model/page.php(206): Kohana_ORM->find_all()
#7 /var/www/magog/application/classes/controller/show.php(55): Model_Page->getArchiveMenu('default')
#8 [internal function]: Controller_Show->action_page()
#9 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#10 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/magog/index.php(109): Kohana_Request->execute()
#13 {main}
2012-07-26 20:08:45 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'MONTH(FROM_UNIXTIME(p.date))' in 'field list' [ SELECT `MONTH(FROM_UNIXTIME(p`.`date))` AS `month`, `page`.* FROM `pages` AS `page` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-26 20:08:45 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'MONTH(FROM_UNIXTIME(p.date))' in 'field list' [ SELECT `MONTH(FROM_UNIXTIME(p`.`date))` AS `month`, `page`.* FROM `pages` AS `page` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `MONTH(F...', 'Model_Page', Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/magog/application/classes/model/page.php(206): Kohana_ORM->find_all()
#4 /var/www/magog/application/classes/controller/show.php(55): Model_Page->getArchiveMenu('default')
#5 [internal function]: Controller_Show->action_page()
#6 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#7 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/magog/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-26 20:08:52 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'MONTH(FROM_UNIXTIME(date))' in 'field list' [ SELECT `MONTH(FROM_UNIXTIME(date))` AS `month`, `page`.* FROM `pages` AS `page` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-26 20:08:52 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'MONTH(FROM_UNIXTIME(date))' in 'field list' [ SELECT `MONTH(FROM_UNIXTIME(date))` AS `month`, `page`.* FROM `pages` AS `page` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `MONTH(F...', 'Model_Page', Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/magog/application/classes/model/page.php(206): Kohana_ORM->find_all()
#4 /var/www/magog/application/classes/controller/show.php(55): Model_Page->getArchiveMenu('default')
#5 [internal function]: Controller_Show->action_page()
#6 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#7 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/magog/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-26 20:08:53 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'MONTH(FROM_UNIXTIME(date))' in 'field list' [ SELECT `MONTH(FROM_UNIXTIME(date))` AS `month`, `page`.* FROM `pages` AS `page` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-26 20:08:53 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'MONTH(FROM_UNIXTIME(date))' in 'field list' [ SELECT `MONTH(FROM_UNIXTIME(date))` AS `month`, `page`.* FROM `pages` AS `page` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `MONTH(F...', 'Model_Page', Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/magog/application/classes/model/page.php(206): Kohana_ORM->find_all()
#4 /var/www/magog/application/classes/controller/show.php(55): Model_Page->getArchiveMenu('default')
#5 [internal function]: Controller_Show->action_page()
#6 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#7 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/magog/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-26 20:08:53 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'MONTH(FROM_UNIXTIME(date))' in 'field list' [ SELECT `MONTH(FROM_UNIXTIME(date))` AS `month`, `page`.* FROM `pages` AS `page` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-26 20:08:53 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'MONTH(FROM_UNIXTIME(date))' in 'field list' [ SELECT `MONTH(FROM_UNIXTIME(date))` AS `month`, `page`.* FROM `pages` AS `page` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `MONTH(F...', 'Model_Page', Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/magog/application/classes/model/page.php(206): Kohana_ORM->find_all()
#4 /var/www/magog/application/classes/controller/show.php(55): Model_Page->getArchiveMenu('default')
#5 [internal function]: Controller_Show->action_page()
#6 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#7 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/magog/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-26 20:08:53 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'MONTH(FROM_UNIXTIME(date))' in 'field list' [ SELECT `MONTH(FROM_UNIXTIME(date))` AS `month`, `page`.* FROM `pages` AS `page` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-26 20:08:53 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'MONTH(FROM_UNIXTIME(date))' in 'field list' [ SELECT `MONTH(FROM_UNIXTIME(date))` AS `month`, `page`.* FROM `pages` AS `page` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `MONTH(F...', 'Model_Page', Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/magog/application/classes/model/page.php(206): Kohana_ORM->find_all()
#4 /var/www/magog/application/classes/controller/show.php(55): Model_Page->getArchiveMenu('default')
#5 [internal function]: Controller_Show->action_page()
#6 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#7 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/magog/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-26 20:11:52 --- ERROR: Kohana_Exception [ 0 ]: The year property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-26 20:11:52 --- STRACE: Kohana_Exception [ 0 ]: The year property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/page.php(210): Kohana_ORM->__get('year')
#1 /var/www/magog/application/classes/controller/show.php(55): Model_Page->getArchiveMenu('default')
#2 [internal function]: Controller_Show->action_page()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-26 20:12:20 --- ERROR: Kohana_Exception [ 0 ]: The jer property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-26 20:12:20 --- STRACE: Kohana_Exception [ 0 ]: The jer property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/page.php(210): Kohana_ORM->__get('jer')
#1 /var/www/magog/application/classes/controller/show.php(55): Model_Page->getArchiveMenu('default')
#2 [internal function]: Controller_Show->action_page()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-26 20:12:21 --- ERROR: Kohana_Exception [ 0 ]: The jer property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-26 20:12:21 --- STRACE: Kohana_Exception [ 0 ]: The jer property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/page.php(210): Kohana_ORM->__get('jer')
#1 /var/www/magog/application/classes/controller/show.php(55): Model_Page->getArchiveMenu('default')
#2 [internal function]: Controller_Show->action_page()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-26 20:12:29 --- ERROR: Kohana_Exception [ 0 ]: The month property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-26 20:12:29 --- STRACE: Kohana_Exception [ 0 ]: The month property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/page.php(210): Kohana_ORM->__get('month')
#1 /var/www/magog/application/classes/controller/show.php(55): Model_Page->getArchiveMenu('default')
#2 [internal function]: Controller_Show->action_page()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-26 20:12:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/model/page.php [ 207 ]
2012-07-26 20:12:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/model/page.php [ 207 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-26 20:12:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/model/page.php [ 207 ]
2012-07-26 20:12:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/model/page.php [ 207 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-26 20:13:29 --- ERROR: Kohana_Exception [ 0 ]: The YEAR property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-26 20:13:29 --- STRACE: Kohana_Exception [ 0 ]: The YEAR property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/page.php(211): Kohana_ORM->__get('YEAR')
#1 /var/www/magog/application/classes/controller/show.php(55): Model_Page->getArchiveMenu('default')
#2 [internal function]: Controller_Show->action_page()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-26 20:13:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/model/page.php [ 210 ]
2012-07-26 20:13:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/model/page.php [ 210 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-26 20:15:31 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'MONTH' at line 1 [ SELECT MONTH(FROM_UNIXTIME(date)) AS `month`, YEAR(FROM_UNIXTIME(date)) AS `year`, `page`.* FROM `pages` AS `page` GROUP BY `year`, `month` ORDER BY `year` MONTH ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-26 20:15:31 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'MONTH' at line 1 [ SELECT MONTH(FROM_UNIXTIME(date)) AS `month`, YEAR(FROM_UNIXTIME(date)) AS `year`, `page`.* FROM `pages` AS `page` GROUP BY `year`, `month` ORDER BY `year` MONTH ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT MONTH(FR...', 'Model_Page', Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/magog/application/classes/model/page.php(211): Kohana_ORM->find_all()
#4 /var/www/magog/application/classes/controller/show.php(55): Model_Page->getArchiveMenu('default')
#5 [internal function]: Controller_Show->action_page()
#6 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#7 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/magog/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-26 20:17:32 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Page::getArchiveMenu() ~ APPPATH/classes/controller/show.php [ 55 ]
2012-07-26 20:17:32 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Page::getArchiveMenu() ~ APPPATH/classes/controller/show.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-26 20:24:54 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/index/default/index.php [ 72 ]
2012-07-26 20:24:54 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/index/default/index.php [ 72 ]
--
#0 /var/www/magog/application/views/index/default/index.php(72): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/magog/...', 72, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/show.php(80): Kohana_View->render()
#4 [internal function]: Controller_Show->action_page()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-26 20:25:20 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/index/default/index.php [ 72 ]
2012-07-26 20:25:20 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/index/default/index.php [ 72 ]
--
#0 /var/www/magog/application/views/index/default/index.php(72): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/magog/...', 72, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/show.php(80): Kohana_View->render()
#4 [internal function]: Controller_Show->action_page()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-26 20:25:26 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/index/default/index.php [ 72 ]
2012-07-26 20:25:26 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/index/default/index.php [ 72 ]
--
#0 /var/www/magog/application/views/index/default/index.php(72): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/magog/...', 72, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/show.php(80): Kohana_View->render()
#4 [internal function]: Controller_Show->action_page()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-26 20:32:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '0' (T_LNUMBER) ~ APPPATH/views/index/default/index.php [ 80 ]
2012-07-26 20:32:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '0' (T_LNUMBER) ~ APPPATH/views/index/default/index.php [ 80 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-26 20:52:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: all_pages ~ APPPATH/views/menu/admin.php [ 87 ]
2012-07-26 20:52:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: all_pages ~ APPPATH/views/menu/admin.php [ 87 ]
--
#0 /var/www/magog/application/views/menu/admin.php(87): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 87, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/menu/admin.php(77): Kohana_View->render()
#4 [internal function]: Controller_Menu_Admin->action_index()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Menu_Admin))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-26 21:56:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/classes/controller/menu/admin.php [ 123 ]
2012-07-26 21:56:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/classes/controller/menu/admin.php [ 123 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-26 21:58:21 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`baza`.`menu`, CONSTRAINT `menu_submenus` FOREIGN KEY (`parent_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE) [ UPDATE `menu` SET `parent_id` = '/magog/index.php/show/page1', `enabled` = 1, `visible` = 1 WHERE `id` = '9' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-26 21:58:21 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`baza`.`menu`, CONSTRAINT `menu_submenus` FOREIGN KEY (`parent_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE) [ UPDATE `menu` SET `parent_id` = '/magog/index.php/show/page1', `enabled` = 1, `visible` = 1 WHERE `id` = '9' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `menu` S...', false, Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1287): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->update(NULL)
#3 /var/www/magog/application/classes/model/menu.php(93): Kohana_ORM->save()
#4 /var/www/magog/application/classes/controller/menu/admin.php(130): Model_Menu->saveMenuEntry('9', 'Fartuchy', 'http://fartuchy...', '/magog/index.ph...', 1, 1)
#5 [internal function]: Controller_Menu_Admin->action_save()
#6 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Menu_Admin))
#7 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/magog/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-26 21:59:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL show/page1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-26 21:59:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL show/page1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}