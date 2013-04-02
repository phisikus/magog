<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-31 08:56:25 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'baza' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2012-07-31 08:56:25 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'baza' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/mysql.php(75): Kohana_Database_MySQL->_select_db('baza')
#1 /var/www/magog/modules/database/classes/kohana/database/mysql.php(432): Kohana_Database_MySQL->connect()
#2 /var/www/magog/modules/database/classes/kohana/database.php(473): Kohana_Database_MySQL->escape('language')
#3 /var/www/magog/modules/database/classes/kohana/database/query/builder.php(116): Kohana_Database->quote('language')
#4 /var/www/magog/modules/database/classes/kohana/database/query/builder/select.php(370): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#5 /var/www/magog/modules/database/classes/kohana/database/query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#6 /var/www/magog/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#7 /var/www/magog/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#8 /var/www/magog/application/classes/model/config.php(58): Kohana_ORM->find()
#9 /var/www/magog/application/classes/controller/main.php(22): Model_Config->getConfig('language', 'default')
#10 [internal function]: Controller_Main->before()
#11 /var/www/magog/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Show))
#12 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/magog/index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-31 08:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-31 08:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}