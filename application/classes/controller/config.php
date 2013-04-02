<?php
/*
 * config.php
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
 
class Controller_Config extends Controller_Main {
	
	 function prepare_menu(&$menu)
	 {
		 $menu[0][0] =  __('Panel');
		 $menu[0][1] =  '';
		 $menu[0][2] =  __('Profil');
		 $menu[0][3] = 'user/user/index';
		 $menu[0][4] =  __('Wyloguj');
		 $menu[0][5] =  'admin/logout';
	 }
	
	 public function before()
	 {
		 parent::before();
		 if(!(Auth::instance()->logged_in('admin')))
			$this->request->redirect('index.php/admin/login');
		
	 }
	
	public function action_admin()
    {
		$mconf = new Model_Config;
		$title = ''; $homepage = '';
		$homepage = $mconf->getConfig('page','homepage');
		$title = $mconf->getConfig('page','title');
		
		
			
		$mpage = new Model_Page;
		$pages = $mpage->getAll();
		
		$this->prepare_menu($menu);
		
		$content = __("<h1>Konfiguracja witryny</h1>");
		$level[0]['description'] = __("Konfiguracja");
		$level[0]['path'] ='config/admin';	
			
		$content .= View::factory('admin/config')
					->set('pages',$pages)
					->set('homepage',$homepage)
					->set('title',$title)
					->render();
		$view = View::factory('admin/panel');
			$view->set('content',$content);
			$view->set('menu',$menu);
			$view->set('level',$level);
		$this->response->body($view->render());
		
	}
	
	 public function action_save()
	 {
		 $mconf = new Model_Config;
		 $mconf->setConfig('page','homepage',HTML::chars(Arr::get($_POST,'homepage')));
		 $mconf->setConfig('page','title',HTML::chars(Arr::get($_POST,'title')));
	 	 $this->request->redirect('index.php/config/admin');
		 
	 }
	 
}


?>
