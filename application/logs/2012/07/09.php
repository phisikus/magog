<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-09 07:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-09 07:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 08:57:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH/classes/controller/user.php [ 399 ]
2012-07-09 08:57:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH/classes/controller/user.php [ 399 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 09:00:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '&&' (T_BOOLEAN_AND), expecting ',' or ')' ~ APPPATH/classes/controller/user.php [ 397 ]
2012-07-09 09:00:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '&&' (T_BOOLEAN_AND), expecting ',' or ')' ~ APPPATH/classes/controller/user.php [ 397 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 09:13:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'APPPATH' (T_STRING) ~ APPPATH/classes/controller/user.php [ 402 ]
2012-07-09 09:13:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'APPPATH' (T_STRING) ~ APPPATH/classes/controller/user.php [ 402 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 09:13:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$APPPATH' (T_VARIABLE) ~ APPPATH/classes/controller/user.php [ 402 ]
2012-07-09 09:13:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$APPPATH' (T_VARIABLE) ~ APPPATH/classes/controller/user.php [ 402 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 09:25:46 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/user.php [ 397 ]
2012-07-09 09:25:46 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/user.php [ 397 ]
--
#0 /var/www/magog/application/classes/controller/user.php(397): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/magog/...', 397, Array)
#1 [internal function]: Controller_User->action_admin_save()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-09 09:30:47 --- ERROR: Kohana_Exception [ 0 ]: Directory APPPATH/views/images/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2012-07-09 09:30:47 --- STRACE: Kohana_Exception [ 0 ]: Directory APPPATH/views/images/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /var/www/magog/application/classes/controller/user.php(412): Kohana_Upload::save(Array, NULL, '/var/www/magog/...')
#1 [internal function]: Controller_User->action_admin_save()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-09 09:48:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: tmp ~ APPPATH/classes/controller/user.php [ 416 ]
2012-07-09 09:48:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: tmp ~ APPPATH/classes/controller/user.php [ 416 ]
--
#0 /var/www/magog/application/classes/controller/user.php(416): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 416, Array)
#1 [internal function]: Controller_User->action_admin_save()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-09 09:48:12 --- ERROR: ErrorException [ 2 ]: unlink() expects parameter 1 to be a valid path, array given ~ APPPATH/classes/controller/user.php [ 422 ]
2012-07-09 09:48:12 --- STRACE: ErrorException [ 2 ]: unlink() expects parameter 1 to be a valid path, array given ~ APPPATH/classes/controller/user.php [ 422 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink() expect...', '/var/www/magog/...', 422, Array)
#1 /var/www/magog/application/classes/controller/user.php(422): unlink(Array)
#2 [internal function]: Controller_User->action_admin_save()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-09 09:48:26 --- ERROR: ErrorException [ 8 ]: Undefined index: tmp_filename ~ APPPATH/classes/controller/user.php [ 422 ]
2012-07-09 09:48:26 --- STRACE: ErrorException [ 8 ]: Undefined index: tmp_filename ~ APPPATH/classes/controller/user.php [ 422 ]
--
#0 /var/www/magog/application/classes/controller/user.php(422): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/magog/...', 422, Array)
#1 [internal function]: Controller_User->action_admin_save()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-09 09:48:36 --- ERROR: ErrorException [ 8 ]: Undefined index: filename_tmp ~ APPPATH/classes/controller/user.php [ 422 ]
2012-07-09 09:48:36 --- STRACE: ErrorException [ 8 ]: Undefined index: filename_tmp ~ APPPATH/classes/controller/user.php [ 422 ]
--
#0 /var/www/magog/application/classes/controller/user.php(422): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/magog/...', 422, Array)
#1 [internal function]: Controller_User->action_admin_save()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-09 09:49:34 --- ERROR: ErrorException [ 2 ]: unlink(/tmp/phplBHqiR): Nie ma takiego pliku ani katalogu ~ APPPATH/classes/controller/user.php [ 422 ]
2012-07-09 09:49:34 --- STRACE: ErrorException [ 2 ]: unlink(/tmp/phplBHqiR): Nie ma takiego pliku ani katalogu ~ APPPATH/classes/controller/user.php [ 422 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink(/tmp/php...', '/var/www/magog/...', 422, Array)
#1 /var/www/magog/application/classes/controller/user.php(422): unlink('/tmp/phplBHqiR')
#2 [internal function]: Controller_User->action_admin_save()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-09 09:49:47 --- ERROR: ErrorException [ 2 ]: unlink(/tmp/phpzZUoRx): Nie ma takiego pliku ani katalogu ~ APPPATH/classes/controller/user.php [ 422 ]
2012-07-09 09:49:47 --- STRACE: ErrorException [ 2 ]: unlink(/tmp/phpzZUoRx): Nie ma takiego pliku ani katalogu ~ APPPATH/classes/controller/user.php [ 422 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink(/tmp/php...', '/var/www/magog/...', 422, Array)
#1 /var/www/magog/application/classes/controller/user.php(422): unlink('/tmp/phpzZUoRx')
#2 [internal function]: Controller_User->action_admin_save()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-09 09:52:48 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: APPPATH/views/images/4ffa8dd0c6464adrIP1.pdf ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-07-09 09:52:48 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: APPPATH/views/images/4ffa8dd0c6464adrIP1.pdf ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/magog/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/magog/...')
#1 /var/www/magog/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/magog/...')
#2 /var/www/magog/application/classes/controller/user.php(416): Kohana_Image::factory('/var/www/magog/...')
#3 [internal function]: Controller_User->action_admin_save()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 09:56:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: FILES ~ APPPATH/classes/controller/user.php [ 397 ]
2012-07-09 09:56:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: FILES ~ APPPATH/classes/controller/user.php [ 397 ]
--
#0 /var/www/magog/application/classes/controller/user.php(397): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 397, Array)
#1 [internal function]: Controller_User->action_admin_save()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-09 09:59:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'empty' (T_EMPTY), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/classes/controller/user.php [ 397 ]
2012-07-09 09:59:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'empty' (T_EMPTY), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/classes/controller/user.php [ 397 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 10:00:13 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: /var/www/magog ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-07-09 10:00:13 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: /var/www/magog ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/magog/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct(false)
#1 /var/www/magog/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct(false)
#2 /var/www/magog/application/classes/controller/user.php(416): Kohana_Image::factory(false)
#3 [internal function]: Controller_User->action_admin_save()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 10:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-09 10:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 10:06:40 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: APPPATH/views/images/4ffa9110cb84dgallery-75813516-500x500.jpg ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-07-09 10:06:40 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: APPPATH/views/images/4ffa9110cb84dgallery-75813516-500x500.jpg ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/magog/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/magog/...')
#1 /var/www/magog/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/magog/...')
#2 /var/www/magog/application/classes/controller/user.php(416): Kohana_Image::factory('/var/www/magog/...')
#3 [internal function]: Controller_User->action_admin_save()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 10:06:46 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: APPPATH/views/images/4ffa9116636b0gallery-75813516-500x500.jpg ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-07-09 10:06:46 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: APPPATH/views/images/4ffa9116636b0gallery-75813516-500x500.jpg ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/magog/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/magog/...')
#1 /var/www/magog/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/magog/...')
#2 /var/www/magog/application/classes/controller/user.php(416): Kohana_Image::factory('/var/www/magog/...')
#3 [internal function]: Controller_User->action_admin_save()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 10:54:49 --- ERROR: ErrorException [ 1 ]: Call to undefined function removeUserAvatar() ~ APPPATH/classes/model/user.php [ 213 ]
2012-07-09 10:54:49 --- STRACE: ErrorException [ 1 ]: Call to undefined function removeUserAvatar() ~ APPPATH/classes/model/user.php [ 213 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 10:55:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/model/user.php [ 213 ]
2012-07-09 10:55:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/model/user.php [ 213 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 11:07:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-09 11:07:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 11:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL skins/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-09 11:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL skins/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 14:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-09 14:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 14:46:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-09 14:46:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 14:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-09 14:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 14:47:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-09 14:47:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 14:47:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-09 14:47:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 14:47:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-09 14:47:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 14:47:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-09 14:47:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 14:48:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-09 14:48:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 14:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-09 14:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 14:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-09 14:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 14:48:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-09 14:48:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 14:48:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-09 14:48:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 14:48:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/group was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-09 14:48:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/group was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 14:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/group/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-09 14:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/group/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 14:49:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-09 14:49:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 15:00:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ugroup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-09 15:00:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ugroup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 15:00:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_Roles_user' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-07-09 15:00:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_Roles_user' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 15:00:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_Roles_user' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-07-09 15:00:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_Roles_user' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 15:00:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_Roles_users' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-07-09 15:00:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_Roles_users' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 15:00:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_Role_users' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-07-09 15:00:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_Role_users' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 15:18:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-09 15:18:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 15:19:49 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/orm/classes/kohana/orm.php [ 1361 ]
2012-07-09 15:19:49 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/orm/classes/kohana/orm.php [ 1361 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1361): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/magog/...', 1361, Array)
#1 /var/www/magog/application/classes/model/user.php(239): Kohana_ORM->has(Object(Model_Role))
#2 /var/www/magog/application/classes/controller/user.php(157): Model_User->hasUserRole('55', 1)
#3 [internal function]: Controller_User->action_admin_profile()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 15:19:54 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/orm/classes/kohana/orm.php [ 1361 ]
2012-07-09 15:19:54 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/orm/classes/kohana/orm.php [ 1361 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1361): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/magog/...', 1361, Array)
#1 /var/www/magog/application/classes/model/user.php(239): Kohana_ORM->has(Object(Model_Role))
#2 /var/www/magog/application/classes/controller/user.php(157): Model_User->hasUserRole('2', 1)
#3 [internal function]: Controller_User->action_admin_profile()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 15:20:05 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/orm/classes/kohana/orm.php [ 1361 ]
2012-07-09 15:20:05 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/orm/classes/kohana/orm.php [ 1361 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1361): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/magog/...', 1361, Array)
#1 /var/www/magog/application/classes/model/user.php(239): Kohana_ORM->has(Object(Model_Role))
#2 /var/www/magog/application/classes/controller/user.php(157): Model_User->hasUserRole('2', 1)
#3 [internal function]: Controller_User->action_admin_profile()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 15:20:24 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/orm/classes/kohana/orm.php [ 1361 ]
2012-07-09 15:20:24 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/orm/classes/kohana/orm.php [ 1361 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1361): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/magog/...', 1361, Array)
#1 /var/www/magog/application/classes/model/user.php(239): Kohana_ORM->has(Object(Model_Role))
#2 /var/www/magog/application/classes/controller/user.php(157): Model_User->hasUserRole('55', 1)
#3 [internal function]: Controller_User->action_admin_profile()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 15:21:03 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/orm/classes/kohana/orm.php [ 1361 ]
2012-07-09 15:21:03 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/orm/classes/kohana/orm.php [ 1361 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1361): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/magog/...', 1361, Array)
#1 /var/www/magog/application/classes/model/user.php(239): Kohana_ORM->has(Object(Model_Role))
#2 /var/www/magog/application/classes/controller/user.php(157): Model_User->hasUserRole('55', 1)
#3 [internal function]: Controller_User->action_admin_profile()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 15:22:28 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/orm/classes/kohana/orm.php [ 1361 ]
2012-07-09 15:22:28 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/orm/classes/kohana/orm.php [ 1361 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1361): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/magog/...', 1361, Array)
#1 /var/www/magog/application/classes/model/user.php(239): Kohana_ORM->has(Object(Model_Role))
#2 /var/www/magog/application/classes/controller/user.php(157): Model_User->hasUserRole('55', 1)
#3 [internal function]: Controller_User->action_admin_profile()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 15:23:01 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/orm/classes/kohana/orm.php [ 1361 ]
2012-07-09 15:23:01 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/orm/classes/kohana/orm.php [ 1361 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1361): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/magog/...', 1361, Array)
#1 /var/www/magog/application/classes/model/user.php(239): Kohana_ORM->has(Object(Model_Role))
#2 /var/www/magog/application/classes/controller/user.php(157): Model_User->hasUserRole(2, 1)
#3 [internal function]: Controller_User->action_admin_profile()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 15:23:01 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/orm/classes/kohana/orm.php [ 1361 ]
2012-07-09 15:23:01 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/orm/classes/kohana/orm.php [ 1361 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1361): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/magog/...', 1361, Array)
#1 /var/www/magog/application/classes/model/user.php(239): Kohana_ORM->has(Object(Model_Role))
#2 /var/www/magog/application/classes/controller/user.php(157): Model_User->hasUserRole(2, 1)
#3 [internal function]: Controller_User->action_admin_profile()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 15:23:02 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/orm/classes/kohana/orm.php [ 1361 ]
2012-07-09 15:23:02 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/orm/classes/kohana/orm.php [ 1361 ]
--
#0 /var/www/magog/modules/orm/classes/kohana/orm.php(1361): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/magog/...', 1361, Array)
#1 /var/www/magog/application/classes/model/user.php(239): Kohana_ORM->has(Object(Model_Role))
#2 /var/www/magog/application/classes/controller/user.php(157): Model_User->hasUserRole(2, 1)
#3 [internal function]: Controller_User->action_admin_profile()
#4 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/magog/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 15:38:13 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting function (T_FUNCTION) ~ APPPATH/classes/model/user.php [ 247 ]
2012-07-09 15:38:13 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting function (T_FUNCTION) ~ APPPATH/classes/model/user.php [ 247 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 15:39:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Role::select_list() ~ APPPATH/classes/model/user.php [ 246 ]
2012-07-09 15:39:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Role::select_list() ~ APPPATH/classes/model/user.php [ 246 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 15:49:49 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Role as array ~ APPPATH/classes/model/user.php [ 247 ]
2012-07-09 15:49:49 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Role as array ~ APPPATH/classes/model/user.php [ 247 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 15:49:56 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Role as array ~ APPPATH/classes/model/user.php [ 247 ]
2012-07-09 15:49:56 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Role as array ~ APPPATH/classes/model/user.php [ 247 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 15:50:26 --- ERROR: Kohana_Exception [ 0 ]: The admin property does not exist in the Model_Role class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-09 15:50:26 --- STRACE: Kohana_Exception [ 0 ]: The admin property does not exist in the Model_Role class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/user.php(247): Kohana_ORM->__get('admin')
#1 /var/www/magog/application/classes/controller/user.php(157): Model_User->getUserRoles(2)
#2 [internal function]: Controller_User->action_admin_profile()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-09 15:50:32 --- ERROR: Kohana_Exception [ 0 ]: The get property does not exist in the Model_Role class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-09 15:50:32 --- STRACE: Kohana_Exception [ 0 ]: The get property does not exist in the Model_Role class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/magog/application/classes/model/user.php(247): Kohana_ORM->__get('get')
#1 /var/www/magog/application/classes/controller/user.php(157): Model_User->getUserRoles(2)
#2 [internal function]: Controller_User->action_admin_profile()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-09 15:50:47 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/model/user.php [ 247 ]
2012-07-09 15:50:47 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/model/user.php [ 247 ]
--
#0 /var/www/magog/application/classes/model/user.php(247): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/magog/...', 247, Array)
#1 /var/www/magog/application/classes/controller/user.php(157): Model_User->getUserRoles(2)
#2 [internal function]: Controller_User->action_admin_profile()
#3 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/magog/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-09 15:51:31 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/user.php [ 157 ]
2012-07-09 15:51:31 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/user.php [ 157 ]
--
#0 /var/www/magog/application/classes/controller/user.php(157): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/magog/...', 157, Array)
#1 [internal function]: Controller_User->action_admin_profile()
#2 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/magog/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-09 16:04:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: uz ~ APPPATH/views/user/profile.php [ 35 ]
2012-07-09 16:04:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: uz ~ APPPATH/views/user/profile.php [ 35 ]
--
#0 /var/www/magog/application/views/user/profile.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/magog/...', 35, Array)
#1 /var/www/magog/system/classes/kohana/view.php(61): include('/var/www/magog/...')
#2 /var/www/magog/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/magog/...', Array)
#3 /var/www/magog/application/classes/controller/user.php(181): Kohana_View->render()
#4 [internal function]: Controller_User->action_admin_profile()
#5 /var/www/magog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/magog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-09 18:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-09 18:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 19:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-09 19:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 19:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/admin_profile/2,2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-09 19:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/admin_profile/2,2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-09 19:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/admin_profile/2.2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-09 19:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/admin_profile/2.2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-09 19:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/admin_profile/2.2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-09 19:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/admin_profile/2.2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-09 19:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/admin_profile/2/2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-09 19:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/admin_profile/2/2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/magog/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-09 19:02:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-09 19:02:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 19:09:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_profile/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-09 19:09:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_profile/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 19:30:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/user/edit.php [ 47 ]
2012-07-09 19:30:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/user/edit.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 19:31:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/user/edit.php [ 46 ]
2012-07-09 19:31:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/user/edit.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 19:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_leave/1=2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-09 19:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_leave/1=2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 19:34:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_profile/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-09 19:34:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_profile/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 19:34:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_leave/2=2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-09 19:34:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_leave/2=2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 19:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_profile/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-09 19:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_profile/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 20:40:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_join/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-09 20:40:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_join/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 21:08:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_profile/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-09 21:08:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_profile/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 21:08:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_edit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-09 21:08:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_edit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 21:08:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-09 21:08:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 21:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_join/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-09 21:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_join/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 21:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_join/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-09 21:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/admin_join/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/magog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/magog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/magog/index.php(109): Kohana_Request->execute()
#3 {main}