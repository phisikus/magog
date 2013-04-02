<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-07 10:55:47 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 10:55:47 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1261): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->update(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile('9', 'phisikus', 'phisikus', 'Marcin Biernack...', 'Sygnaturak', '234')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 10:56:04 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 10:56:04 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, '', '', '', '', '')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 10:58:36 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'uniq_external_id' [ INSERT INTO `users` (`username`, `email`, `full_name`, `external_id`, `signature`, `password`) VALUES ('qwe', 'qwe@wp.pl', '', '', '', 'b92e1af67281cf4b63ba1cf83afb5d104b4f115590badd9a7e2afba6869d29cb') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-07 10:58:36 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'uniq_external_id' [ INSERT INTO `users` (`username`, `email`, `full_name`, `external_id`, `signature`, `password`) VALUES ('qwe', 'qwe@wp.pl', '', '', '', 'b92e1af67281cf4b63ba1cf83afb5d104b4f115590badd9a7e2afba6869d29cb') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#4 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'qwe', 'qwe@wp.pl', '', '', '')
#5 [internal function]: Controller_User->action_admin_save()
#6 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/magog/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-07 10:58:41 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'uniq_external_id' [ INSERT INTO `users` (`username`, `email`, `full_name`, `external_id`, `signature`, `password`) VALUES ('qwe2', 'qwe@wp.pl', '', '', '', 'b92e1af67281cf4b63ba1cf83afb5d104b4f115590badd9a7e2afba6869d29cb') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-07 10:58:41 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'uniq_external_id' [ INSERT INTO `users` (`username`, `email`, `full_name`, `external_id`, `signature`, `password`) VALUES ('qwe2', 'qwe@wp.pl', '', '', '', 'b92e1af67281cf4b63ba1cf83afb5d104b4f115590badd9a7e2afba6869d29cb') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#4 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'qwe2', 'qwe@wp.pl', '', '', '')
#5 [internal function]: Controller_User->action_admin_save()
#6 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/magog/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-07 10:58:46 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'uniq_external_id' [ INSERT INTO `users` (`username`, `email`, `full_name`, `external_id`, `signature`, `password`) VALUES ('qwe2', 'qw3e@wp.pl', '', '', '', 'b92e1af67281cf4b63ba1cf83afb5d104b4f115590badd9a7e2afba6869d29cb') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-07 10:58:46 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'uniq_external_id' [ INSERT INTO `users` (`username`, `email`, `full_name`, `external_id`, `signature`, `password`) VALUES ('qwe2', 'qw3e@wp.pl', '', '', '', 'b92e1af67281cf4b63ba1cf83afb5d104b4f115590badd9a7e2afba6869d29cb') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#4 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'qwe2', 'qw3e@wp.pl', '', '', '')
#5 [internal function]: Controller_User->action_admin_save()
#6 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/magog/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-07 11:03:09 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'uniq_external_id' [ INSERT INTO `users` (`username`, `email`, `full_name`, `external_id`, `signature`, `password`) VALUES ('zosia', 'phisikus@o2.pl', '', '', '', 'b92e1af67281cf4b63ba1cf83afb5d104b4f115590badd9a7e2afba6869d29cb') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-07 11:03:09 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'uniq_external_id' [ INSERT INTO `users` (`username`, `email`, `full_name`, `external_id`, `signature`, `password`) VALUES ('zosia', 'phisikus@o2.pl', '', '', '', 'b92e1af67281cf4b63ba1cf83afb5d104b4f115590badd9a7e2afba6869d29cb') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#4 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'zosia', 'phisikus@o2.pl', '', '', '')
#5 [internal function]: Controller_User->action_admin_save()
#6 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/magog/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-07 11:03:17 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'uniq_external_id' [ INSERT INTO `users` (`username`, `email`, `full_name`, `external_id`, `signature`, `password`) VALUES ('zosia', 'phisikus@o2.pl', '', '', 'podpis', 'b92e1af67281cf4b63ba1cf83afb5d104b4f115590badd9a7e2afba6869d29cb') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-07 11:03:17 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'uniq_external_id' [ INSERT INTO `users` (`username`, `email`, `full_name`, `external_id`, `signature`, `password`) VALUES ('zosia', 'phisikus@o2.pl', '', '', 'podpis', 'b92e1af67281cf4b63ba1cf83afb5d104b4f115590badd9a7e2afba6869d29cb') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#4 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'zosia', 'phisikus@o2.pl', '', 'podpis', '')
#5 [internal function]: Controller_User->action_admin_save()
#6 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/magog/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-07 11:05:56 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'uniq_external_id' [ INSERT INTO `users` (`username`, `email`, `full_name`, `external_id`, `signature`, `password`) VALUES ('kasia', 'k@k.pl', '', '', '', 'b92e1af67281cf4b63ba1cf83afb5d104b4f115590badd9a7e2afba6869d29cb') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-07 11:05:56 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'uniq_external_id' [ INSERT INTO `users` (`username`, `email`, `full_name`, `external_id`, `signature`, `password`) VALUES ('kasia', 'k@k.pl', '', '', '', 'b92e1af67281cf4b63ba1cf83afb5d104b4f115590badd9a7e2afba6869d29cb') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#4 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'kasia', 'k@k.pl', '', '', '')
#5 [internal function]: Controller_User->action_admin_save()
#6 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/magog/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-07 11:07:45 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'uniq_external_id' [ INSERT INTO `users` (`username`, `email`, `full_name`, `external_id`, `signature`, `password`) VALUES ('phj', 'qwd@qwd.pl', '', '', '', 'b92e1af67281cf4b63ba1cf83afb5d104b4f115590badd9a7e2afba6869d29cb') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-07 11:07:45 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'uniq_external_id' [ INSERT INTO `users` (`username`, `email`, `full_name`, `external_id`, `signature`, `password`) VALUES ('phj', 'qwd@qwd.pl', '', '', '', 'b92e1af67281cf4b63ba1cf83afb5d104b4f115590badd9a7e2afba6869d29cb') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#4 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'phj', 'qwd@qwd.pl', '', '', '')
#5 [internal function]: Controller_User->action_admin_save()
#6 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/magog/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-07 11:10:38 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '' for key 'uniq_external_id' [ INSERT INTO `users` (`username`, `email`, `full_name`, `external_id`, `signature`, `password`) VALUES ('tyh', 'rth23r@ef.pl', '', '', '', 'b92e1af67281cf4b63ba1cf83afb5d104b4f115590badd9a7e2afba6869d29cb') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-07 11:10:38 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '' for key 'uniq_external_id' [ INSERT INTO `users` (`username`, `email`, `full_name`, `external_id`, `signature`, `password`) VALUES ('tyh', 'rth23r@ef.pl', '', '', '', 'b92e1af67281cf4b63ba1cf83afb5d104b4f115590badd9a7e2afba6869d29cb') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#4 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'tyh', 'rth23r@ef.pl', '', '', '')
#5 [internal function]: Controller_User->action_admin_save()
#6 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/magog/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-07 11:11:48 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '' for key 'uniq_external_id' [ INSERT INTO `users` (`username`, `email`, `full_name`, `external_id`, `signature`, `password`) VALUES ('rwgerg', 'ergerg@w.pl', '', '', '', 'b92e1af67281cf4b63ba1cf83afb5d104b4f115590badd9a7e2afba6869d29cb') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-07 11:11:48 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '' for key 'uniq_external_id' [ INSERT INTO `users` (`username`, `email`, `full_name`, `external_id`, `signature`, `password`) VALUES ('rwgerg', 'ergerg@w.pl', '', '', '', 'b92e1af67281cf4b63ba1cf83afb5d104b4f115590badd9a7e2afba6869d29cb') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/magog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#4 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'rwgerg', 'ergerg@w.pl', '', '', '')
#5 [internal function]: Controller_User->action_admin_save()
#6 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/magog/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-07 11:15:03 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 11:15:03 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'erg', 'phisikus@o2.pl', '', '', '')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 11:15:08 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 11:15:08 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'ergef', 'phisikus@o2.pl', '', '', '')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 11:15:12 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 11:15:12 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(145): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'ergef', 'phisikus@o2.pl', '', '', '2')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 11:19:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL skins/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-07 11:19:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL skins/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-07 11:19:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-07 11:19:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-07 11:31:54 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 11:31:54 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(144): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(370): Model_User->setUserProfile(0, 'phisikus', 'phisikus@o2.pl', '', '', '')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 11:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-07 11:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-07 11:49:05 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 11:49:05 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1261): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->update(NULL)
#2 /var/www/magog/application/classes/model/user.php(146): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(371): Model_User->setUserProfile('5', '', '', '', '', '')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 11:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-07 11:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-07 11:55:27 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 11:55:27 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(154): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(377): Model_User->setUserPassword(0, 'qwdqwdqwdqwdqwd...')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 11:55:32 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 11:55:32 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(146): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(374): Model_User->setUserProfile(0, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', 'Sygnaturka', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 11:55:40 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 11:55:40 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(146): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(374): Model_User->setUserProfile(0, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', 'Sygnaturka', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 11:56:26 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 11:56:26 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(146): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(374): Model_User->setUserProfile(0, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', 'Sygnaturka', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 11:56:38 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 11:56:38 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(146): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(374): Model_User->setUserProfile(0, 'phisikus', 'phisik2us@o2.pl', 'Marcin Biernack...', 'Sygnaturka', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 11:57:14 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 11:57:14 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(146): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(374): Model_User->setUserProfile(0, 'phisikus2', 'phisik2us@o2.pl', 'Marcin Biernack...', 'Sygnaturka', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 11:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-07 11:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-07 11:59:49 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete user model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-07-07 11:59:49 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete user model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /var/www/magog/application/classes/model/user.php(167): Kohana_ORM->delete()
#1 /var/www/magog/application/classes/controller/user.php(266): Model_User->deleteUser('7')
#2 [internal function]: Controller_User->action_admin_deleteConfirmed()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-07 12:01:54 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 12:01:54 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(154): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(379): Model_User->setUserPassword(0, 'Marcin Biernack...')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 12:02:00 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 12:02:00 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(146): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(376): Model_User->setUserProfile(0, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', 'Sygnaturka', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 12:02:16 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 12:02:16 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(154): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(379): Model_User->setUserPassword(0, 'Marcin Biernack...')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 12:02:22 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 12:02:22 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(146): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(376): Model_User->setUserProfile(0, 'phisikus2', 'phisikus2@o2.pl', 'Marcin Biernack...', 'Sygnaturka', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 12:02:29 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 12:02:29 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(146): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(376): Model_User->setUserProfile(0, 'phisikus2', 'phisikus2@o2.pl', 'Marcin Biernack...', 'Sygnaturka', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 12:03:06 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 12:03:06 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(154): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(379): Model_User->setUserPassword(0, 'Marcin Biernack...')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 12:03:33 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 12:03:33 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(154): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(379): Model_User->setUserPassword(0, 'MarcinBiernacki')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 12:22:14 --- ERROR: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH/classes/controller/user.php [ 369 ]
2012-07-07 12:22:14 --- STRACE: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH/classes/controller/user.php [ 369 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-07 12:23:06 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'validation' at 'MODPATH/validaton' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2012-07-07 12:23:06 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'validation' at 'MODPATH/validaton' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /var/www/magog/application/bootstrap.php(112): Kohana_Core::modules(Array)
#1 /var/www/magog/index.php(102): require('/var/www/magog/...')
#2 {main}
2012-07-07 12:24:00 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 12:24:00 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(146): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(390): Model_User->setUserProfile(0, 'wef', '', '', '', '')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 12:24:33 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 12:24:33 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(146): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(390): Model_User->setUserProfile(0, 'wef', 'wef', 'wsef', 'wefwefwef', '3')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 12:25:33 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 12:25:33 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(146): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(390): Model_User->setUserProfile(0, 'wef', 'wef', 'wsef', 'wefwefwef', '3')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 12:25:51 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 12:25:51 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(154): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(394): Model_User->setUserPassword(0, 'qwd')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 12:26:06 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 12:26:06 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(146): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(390): Model_User->setUserProfile(0, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', 'sygnaturka', '2')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 12:26:18 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 12:26:18 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(146): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(390): Model_User->setUserProfile(0, 'ph', '', '', '', '')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 12:26:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/classes/controller/user.php [ 397 ]
2012-07-07 12:26:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/classes/controller/user.php [ 397 ]
--
#0 /var/www/magog/application/classes/controller/user.php(397): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 397, Array)
#1 [internal function]: Controller_User->action_admin_save()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-07 12:27:01 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 12:27:01 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(146): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(390): Model_User->setUserProfile(0, 'phisikus', 'phisikus@o2.pl', '', '', '')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 12:27:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: s_result ~ APPPATH/views/user/edited.php [ 7 ]
2012-07-07 12:27:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: s_result ~ APPPATH/views/user/edited.php [ 7 ]
--
#0 /var/www/magog/application/views/user/edited.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 7, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/user.php(397): Kohana_View->render()
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 12:27:35 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 12:27:35 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(146): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(390): Model_User->setUserProfile(0, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', '', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 12:31:29 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/user.php [ 380 ]
2012-07-07 12:31:29 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/user.php [ 380 ]
--
#0 /var/www/magog/application/classes/controller/user.php(380): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/magog/...', 380, Array)
#1 [internal function]: Controller_User->action_admin_save()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-07 12:46:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/controller/user.php [ 390 ]
2012-07-07 12:46:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/controller/user.php [ 390 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-07 12:56:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-07 12:56:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/admin_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-07 12:57:00 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 12:57:00 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(154): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(399): Model_User->setUserPassword(0, 'MarcinBiernacki')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 12:57:05 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 12:57:05 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(146): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(395): Model_User->setUserProfile(0, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', 'Sygnaturka', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 12:58:34 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 12:58:34 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(154): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(399): Model_User->setUserPassword(0, 'haslo')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 12:58:40 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 12:58:40 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(146): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(395): Model_User->setUserProfile(0, 'Katarzyna', 'Kachna@wp.pl', '', '', '2')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 12:58:43 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 12:58:43 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(146): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(395): Model_User->setUserProfile(0, 'Katarzyna', 'Kachna@wp.pl', 'gggg', '', '2')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 12:58:48 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 12:58:48 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(146): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(395): Model_User->setUserProfile(0, 'Katarzyna', 'Kachna@wp.pl', 'gggg', 'wefwef', '2')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 12:58:51 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 12:58:51 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(146): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(395): Model_User->setUserProfile(0, 'Katarzyna', 'Kachna@wp.pl', 'gggg', 'wefwef', '2')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 12:59:17 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 12:59:17 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(154): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(399): Model_User->setUserPassword(0, 'wefpwfk')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 12:59:40 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 12:59:40 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(154): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(399): Model_User->setUserPassword(0, 'gggggg')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 12:59:53 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 12:59:53 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(154): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(399): Model_User->setUserPassword(0, 'rrrrrrrr')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 13:00:04 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 13:00:04 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(154): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(399): Model_User->setUserPassword(0, '123456789')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 13:00:18 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 13:00:18 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(154): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(399): Model_User->setUserPassword(0, 'wefwefwefwefwef')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 13:00:20 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 13:00:20 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(146): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(395): Model_User->setUserProfile(0, 'kasiulek', 'kachna@wp.pl', 'Kasia', 'Sygnef', '345')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 13:02:43 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 13:02:43 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(154): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(399): Model_User->setUserPassword(0, 'mojehaslo')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 13:05:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/model/user.php [ 62 ]
2012-07-07 13:05:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/model/user.php [ 62 ]
--
#0 /var/www/magog/application/classes/model/user.php(62): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 62, Array)
#1 /var/www/magog/application/classes/controller/user.php(399): Model_User->getUserID('tomek')
#2 [internal function]: Controller_User->action_admin_save()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-07 13:06:03 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 13:06:03 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(152): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(395): Model_User->setUserProfile(0, 'tomek', 'tomek@kazadi.pl', '', '', '0')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 13:06:43 --- ERROR: ErrorException [ 8 ]: Object of class Model_User could not be converted to int ~ APPPATH/classes/model/user.php [ 157 ]
2012-07-07 13:06:43 --- STRACE: ErrorException [ 8 ]: Object of class Model_User could not be converted to int ~ APPPATH/classes/model/user.php [ 157 ]
--
#0 /var/www/magog/application/classes/model/user.php(157): Kohana_Core::error_handler(8, 'Object of class...', '/var/www/magog/...', 157, Array)
#1 /var/www/magog/application/classes/controller/user.php(399): Model_User->setUserPassword(Object(Model_User), 'hyase??ko')
#2 [internal function]: Controller_User->action_admin_save()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-07 13:07:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/model/user.php [ 62 ]
2012-07-07 13:07:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/model/user.php [ 62 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-07 13:07:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(', expecting variable (T_VARIABLE) or '$' ~ APPPATH/classes/model/user.php [ 62 ]
2012-07-07 13:07:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(', expecting variable (T_VARIABLE) or '$' ~ APPPATH/classes/model/user.php [ 62 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-07 13:08:22 --- ERROR: ErrorException [ 1 ]: Call to undefined function getUserByUsername() ~ APPPATH/classes/controller/user.php [ 400 ]
2012-07-07 13:08:22 --- STRACE: ErrorException [ 1 ]: Call to undefined function getUserByUsername() ~ APPPATH/classes/controller/user.php [ 400 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-07 13:08:39 --- ERROR: ErrorException [ 8 ]: Object of class Model_User could not be converted to int ~ APPPATH/classes/model/user.php [ 157 ]
2012-07-07 13:08:39 --- STRACE: ErrorException [ 8 ]: Object of class Model_User could not be converted to int ~ APPPATH/classes/model/user.php [ 157 ]
--
#0 /var/www/magog/application/classes/model/user.php(157): Kohana_Core::error_handler(8, 'Object of class...', '/var/www/magog/...', 157, Array)
#1 /var/www/magog/application/classes/controller/user.php(401): Model_User->setUserPassword(Object(Model_User), 'weokmfpowefpokw...')
#2 [internal function]: Controller_User->action_admin_save()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-07 14:46:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting function (T_FUNCTION) ~ APPPATH/classes/model/user.php [ 132 ]
2012-07-07 14:46:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting function (T_FUNCTION) ~ APPPATH/classes/model/user.php [ 132 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-07 14:47:16 --- ERROR: ErrorException [ 1 ]: Call to undefined function isUserExternalID() ~ APPPATH/classes/controller/user.php [ 388 ]
2012-07-07 14:47:16 --- STRACE: ErrorException [ 1 ]: Call to undefined function isUserExternalID() ~ APPPATH/classes/controller/user.php [ 388 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-07 14:49:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$errors' (T_VARIABLE) ~ APPPATH/classes/controller/user.php [ 389 ]
2012-07-07 14:49:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$errors' (T_VARIABLE) ~ APPPATH/classes/controller/user.php [ 389 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-07 14:50:09 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 14:50:09 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/magog/application/classes/model/user.php(157): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(395): Model_User->setUserProfile(0, 'phisikus', 'phisikus@o2.pl', 'Marcin Biernack...', '', '')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 14:55:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/model/user.php [ 139 ]
2012-07-07 14:55:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/model/user.php [ 139 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-07 14:56:17 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH/classes/model/user.php [ 132 ]
2012-07-07 14:56:17 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH/classes/model/user.php [ 132 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-07 15:00:06 --- ERROR: ErrorException [ 1 ]: Call to undefined function isUserExternalID() ~ APPPATH/classes/controller/user.php [ 394 ]
2012-07-07 15:00:06 --- STRACE: ErrorException [ 1 ]: Call to undefined function isUserExternalID() ~ APPPATH/classes/controller/user.php [ 394 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-07 15:08:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-07 15:08:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-07 15:30:38 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 15:30:38 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1261): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->update(NULL)
#2 /var/www/magog/application/classes/model/user.php(169): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(403): Model_User->setUserProfile('63', 'TORA', 'maksymwrobel@gm...', '', '', '0')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 15:30:45 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 15:30:45 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1261): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->update(NULL)
#2 /var/www/magog/application/classes/model/user.php(169): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(403): Model_User->setUserProfile('63', 'TORA', 'maksymwrobel@gm...', '', '', '0')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 15:30:50 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 15:30:50 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1261): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->update(NULL)
#2 /var/www/magog/application/classes/model/user.php(169): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(403): Model_User->setUserProfile('63', 'TORA', 'maksymwrobel@gm...', '', '', '0')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 15:30:56 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 15:30:56 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1261): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->update(NULL)
#2 /var/www/magog/application/classes/model/user.php(169): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(403): Model_User->setUserProfile('63', 'TORA', 'maksymwrobel@gm...', '', '', '1')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 15:30:59 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 15:30:59 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1261): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->update(NULL)
#2 /var/www/magog/application/classes/model/user.php(169): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(403): Model_User->setUserProfile('63', 'TORA', 'maksymwrobel@gm...', '', '', '123')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 15:31:24 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 15:31:24 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1261): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->update(NULL)
#2 /var/www/magog/application/classes/model/user.php(169): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(403): Model_User->setUserProfile('63', 'Tora', 'maksymwrobel@gm...', '', '', '123')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 15:31:46 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 15:31:46 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1261): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->update(NULL)
#2 /var/www/magog/application/classes/model/user.php(169): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(403): Model_User->setUserProfile('2', 'szarasfora', 'klub@weimaraner...', '', '', '0')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 15:32:54 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-07-07 15:32:54 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1261): Kohana_ORM->check(NULL)
#1 /var/www/magog/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->update(NULL)
#2 /var/www/magog/application/classes/model/user.php(169): Kohana_ORM->save()
#3 /var/www/magog/application/classes/controller/user.php(403): Model_User->setUserProfile('57', 'alicja2', 'phisikus@annihi...', '', '', '0')
#4 [internal function]: Controller_User->action_admin_save()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-07 15:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-07 15:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-07 15:47:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-07 15:47:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-07 16:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-07 16:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}