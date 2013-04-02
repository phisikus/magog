<?php

/*
 * admin.php
 * 
 * Copyright 2012 Marcin Biernacki <phisikus@o2.pl>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */

 defined('SYSPATH') or die('No direct script access.');
 require("application/classes/controller/main.php");
 
 class Controller_Skins_Admin extends Controller_Main {
	 
	 
	 public function action_index()
	 {
		 if(!(Auth::instance()->logged_in('admin')) )
			$this->request->redirect('index.php/admin/login');
			
		 $content = __("<h1>Zarządzanie szablonami</h1>
					<p>W tym panelu możesz wybrać szablon, który domyślnie będzie używany do wyświetlania zawartości.</p>"); 
		 
 		 $level[0]['description'] = __("Zarządzanie szablonami");
		 $level[0]['path'] ='skins/admin';	
		 
		 $menu[0][0] =  __('Szablony');
		 $menu[0][1] = '';
		 $menu[0][2] =  __('Lista szablonów');
		 
		 if( Auth::instance()->logged_in('admin') )
			$menu[0][3] = 'skins/admin/list'; else $menu[0][3] = '';
						
		 $menu[1][0] =  __('Panel');
		 $menu[1][1] =  '';
		 $menu[1][2] =  __('Profil');
		 $menu[1][3] = 'user/user/index';
		 $menu[1][4] =  __('Wyloguj');
		 $menu[1][5] =  'admin/logout';
		 
		 	
		 $view = View::factory('admin/panel');
			$view->set('content',$content);
			$view->set('menu',$menu);
			$view->set('level',$level);
		 $this->response->body($view->render());
	 }
	 
	 public function action_list()
	 {
		  if(!(Auth::instance()->logged_in('admin')) )
			$this->request->redirect('index.php/admin/login');
			
		 $content = __("<h1>Zarządzanie szablonami</h1>");
		 
 		 $level[0]['description'] = __("Zarządzanie szablonami");
		 $level[0]['path'] ='skins/admin';	
		 
		 $menu[0][0] =  __('Szablony');
		 $menu[0][1] = '';
		 $menu[0][2] =  __('Lista szablonów');
		 $menu[0][3] = '';
		 $menu[1][0] =  __('Panel');
		 $menu[1][1] =  '';
		 $menu[1][2] =  __('Profil');
		 $menu[1][3] = 'user/user/index';
		 $menu[1][4] =  __('Wyloguj');
		 $menu[1][5] =  'admin/logout';
		 
		 // get names of files in directory
		 if ($handle = opendir(getcwd().'/application/views/index')) 
		 {
			 $i = 0;
				 while (false !== ($entry = readdir($handle))) {
				if ($entry != "." && $entry != "..") {
						$templates[$i] = $entry;
						$i++;
					}
				}
		
			closedir($handle);	
		
		 }
		 
		 // get name of selected skin
		 $skin = new Model_Config;
		 $def_skin = $skin->getDefaultTemplate();
		 
		 //$skin->setDefaultTemplate('default');
		 
			 $content = $content.View::factory('admin/template_list')
				->set('templates',$templates)
				->set('def_skin',$def_skin)
				->render();
				
			 $view = View::factory('admin/panel');
				$view->set('content',$content);
				$view->set('level',$level);
				$view->set('menu',$menu);
			 $this->response->body($view->render());
		 
		 
	 }
	 
	 public function action_set()
	 {
		 $skin = new Model_Config;
		 $skin->setDefaultTemplate(HTML::chars($this->request->param('id')));
		 $this->request->redirect('index.php/skins/admin/list');
	 }
	 
 };
	
 
?>

