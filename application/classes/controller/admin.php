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
 
 
 class Controller_Admin extends Controller_Main {
	
	
	 
	 public function action_index()
	 {
		 if(!(Auth::instance()->logged_in()) )
			$this->request->redirect('index.php/admin/login');
			
		 $content = __("<h1>Panel Administratora</h1>
					<p>Witaj na stronie głównej panelu administracyjnego!</p>");
		 
		 // Prepare menu and hide links to functions that are not available 
		 // because of roles restriction.
		 
		 $menu[0][0] =  __('Zarządzanie');
		 $menu[0][1] = '';
		 $menu[0][2] =  __('Artykuły');
		 
		 // Article management
		 if( Auth::instance()->logged_in('redaktor') || Auth::instance()->logged_in('admin') )
			$menu[0][3] = 'page/admin';
		 else 
			$menu[0][3] = '';
			
		 $menu[0][4] =  __('Komentarze');
		
		// Comments
		 if( Auth::instance()->logged_in('moderator') || Auth::instance()->logged_in('admin') )
			$menu[0][5] = 'comment/admin';
		 else 
			$menu[0][5] = '';
			
		 $menu[0][6] =  __('Menu');
		 
		 // Menus & widgets
		 if( Auth::instance()->logged_in('admin') )
			$menu[0][7] = 'menu/admin';
		 else 
			$menu[0][7] = '';
		 
		 $menu[0][8] =  __('Skórki');
		 
		 // Skins & templates
		 if(Auth::instance()->logged_in('admin') )
			$menu[0][9] = 'skins/admin';
		 else
			$menu[0][9] = '';
			
		 $menu[0][10] =  __('Ustawienia');
		 
		 // User management
		  if(Auth::instance()->logged_in('admin') )
			$menu[0][11] = 'config/admin';
		 else
			$menu[0][11] = '';
			
		 
		 $menu[0][12] =  __('Użytkownicy');
		 
		 // User management
		 if(Auth::instance()->logged_in('admin') )
			$menu[0][13] = 'user/admin';
		else
			$menu[0][13] = '';
			
	 	 $menu[1][0] =  __('Panel');
		 $menu[1][1] =  '';
		 $menu[1][2] =  __('Profil');
		 $menu[1][3] = 'user/user/index';
		 $menu[1][4] =  __('Wyloguj');
		 $menu[1][5] =  'admin/logout';
		 
		 // Get default view of admin panel and send information to it.
		 $view = View::factory('admin/panel');
			 $view->set('content',$content);
			 $view->set('menu',$menu);
		 $this->response->body($view->render());
	 }
	 
	 /*
	  *  Login & Logout actions
	  */ 
	   public function action_login() 
	   {

		   if(!empty($_POST['username']))
		   {
			   	Auth::instance()->login($_POST['username'],$_POST['password']);
				$this->request->redirect('index.php/admin/index');
			}
			else
			{
				 $view = View::factory('admin/login');
				 $this->response->body($view->render());
			}
    	}

    public function action_logout() {
        
        Auth::instance()->logout();
        $this->request->redirect('index.php/admin/index');
    }
	 
	 
	 
 };
	
 
?>

