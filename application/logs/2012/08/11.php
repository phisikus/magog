<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-11 11:52:25 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/index/default/pages.php [ 3 ]
2012-08-11 11:52:25 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/index/default/pages.php [ 3 ]
--
#0 /var/www/magog/application/views/index/default/pages.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/magog/...', 3, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/show.php(117): Kohana_View->render()
#4 [internal function]: Controller_Show->action_news()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-11 11:52:39 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/index/default/pages.php [ 3 ]
2012-08-11 11:52:39 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/index/default/pages.php [ 3 ]
--
#0 /var/www/magog/application/views/index/default/pages.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/magog/...', 3, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/show.php(117): Kohana_View->render()
#4 [internal function]: Controller_Show->action_news()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Show))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}