<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-21 11:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL show/page/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-21 11:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL show/page/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-21 11:50:30 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/index/default/pages.php [ 5 ]
2012-07-21 11:50:30 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/index/default/pages.php [ 5 ]
--
#0 /var/www/magog/application/views/index/default/pages.php(5): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/magog/...', 5, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/show.php(51): Kohana_View->render()
#4 [internal function]: Controller_Show->action_page()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-21 11:50:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/classes/controller/show.php [ 51 ]
2012-07-21 11:50:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/classes/controller/show.php [ 51 ]
--
#0 /var/www/magog/application/classes/controller/show.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 51, Array)
#1 [internal function]: Controller_Show->action_page()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-21 13:11:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH/views/index/default/index.php [ 22 ]
2012-07-21 13:11:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH/views/index/default/index.php [ 22 ]
--
#0 /var/www/magog/application/views/index/default/index.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 22, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/show.php(59): Kohana_View->render()
#4 [internal function]: Controller_Show->action_page()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}