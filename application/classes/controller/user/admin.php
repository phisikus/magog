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
 
 class Controller_User_Admin extends Controller_Main {
	 
	 
	 function prepare_menu(&$menu)
	 {
		 $menu[0][0] = __('Użytkownicy');
		 $menu[0][1] = '';
		 $menu[0][2] = __('Lista użytkowników');
		 $menu[0][3] = 'user/admin/list';
		 $menu[0][4] = __('Dodaj użytkownika');
		 $menu[0][5] = 'user/admin/edit';
		 $menu[0][6] = __('Edytuj użytkownika');
		 $menu[0][7] = 'user/admin/edit';
		 $menu[0][8] = __('Usuń użytkownika');
		 $menu[0][9] = 'user/admin/delete';
		 
		 $menu[1][0] = __('Uprawnienia');
		 $menu[1][1] = '';
		 $menu[1][2] = __('Lista grup');
		 $menu[1][3] = 'group/admin/list';
		 $menu[1][4] = __('Dodaj grupę');
		 $menu[1][5] = 'group/admin/edit';
		 $menu[1][6] = __('Edytuj grupę');
		 $menu[1][7] = 'group/admin/edit';
		 $menu[1][8] = __('Zarządzaj grupą');
		 $menu[1][9] = 'group/admin/manage';
		 $menu[1][10] = __('Usuń grupę');
		 $menu[1][11] = 'group/admin/delete';
		 
		 $menu[2][0] =  __('Panel');
		 $menu[2][1] =  '';
		 $menu[2][2] =  __('Profil');
		 $menu[2][3] = 'user/user/index';
		 $menu[2][4] =  __('Wyloguj');
		 $menu[2][5] =  'admin/logout';
	 }
	 
	 public function before()
	 {
		 parent::before();
		 if(!(Auth::instance()->logged_in('admin')))
			$this->request->redirect('index.php/admin/login');
		
	 }
	 
	 /*
	  * 
	  * ADMIN
	  * 
	  */ 
	 
	 
	 public function action_index()
	 {
		 $content = __("<h1>Zarządzanie użytkownikami</h1>
					<p>Ten panel pozwala na tworzenie, usuwanie oraz edycje danych dotyczących 
						użytkowników. Możliwe jest również tworzenie, edycja oraz usuwanie
						grup uprawnień. W innych modułach tego systemu możliwe jest udzielanie zezwoleń
						na określone operacje grupom zdefiniowanym w tej części Panelu Administratora </p>");
						
		 $level[0]['description'] = __("Zarządzanie użytkownikami");
		 $level[0]['path'] ='user/admin';	
		 					
		 $this->prepare_menu($menu);
		 
		 $menu[0][7] = '';
		 $menu[0][9] = '';
		 $menu[1][7] = '';
		 $menu[1][9] = '';
		 $menu[1][11] = '';
		 
		 $view = View::factory('admin/panel');
			$view->set('content',$content);
			$view->set('level',$level);
			$view->set('menu',$menu);
		 $this->response->body($view->render());
	 }
	 
	 
	 public function action_list()
	 {
		 $content = __("<h1>Lista użytkowników</h1>");

		 $level[0]['description'] = __("Zarządzanie użytkownikami");
		 $level[0]['path'] ='user/admin';	
		 $level[1]['description'] = __("Lista użytkowników");
		 $level[1]['path'] ='user/admin/list';	
		  
		 $this->prepare_menu($menu);
		 
		 $menu[0][7] = '';
		 $menu[0][9] = '';
		 $menu[1][7] = '';
		 $menu[1][9] = '';
		 $menu[1][11] = '';
		 
		 // get information about all users
		 $muser = new Model_User;
		 
		 // get search keyword
		 $search = Arr::get($_GET, 'search');
		 $search = HTML::chars($search);
		 
		 // page number
		 $page = 1;
		 $page_size = 20;
		
		 if(is_numeric($this->request->param('id')) && $this->request->param('id') > 0 )
			$page = $this->request->param('id');
			
		 // find matching users
		 	if(empty($search))
		 	{
				$page_total = $muser->getAllUsers($page_size,0);
				$userz = $muser->getAllUsers($page_size,$page);
				$search = '';
			}
			else
			{
				$page_total = $muser->getAllUsersSimpleSearch($page_size,0,$search);
				$userz = $muser->getAllUsersSimpleSearch($page_size,$page,$search);
			}
				
		 $content = $content.View::factory('user/list')->set('users',$userz)
					->set('page_number',$page)
					->set('search',$search)
					->set('page_total',$page_total)->render();

		 $view = View::factory('admin/panel');
			$view->set('content',$content);
			$view->set('level',$level);
			$view->set('menu',$menu);
		 $this->response->body($view->render());
	 }
	 
	 public function action_profile()
	 {
		 if(is_numeric($this->request->param('id')))
		 {
			  
			 // get information about user
			 $muser = new Model_User;
			 $userd = $muser->getUser($this->request->param('id'));
			 $groups = $muser->getUserRoles($userd->id);
			 
			 $content = __("<h1> :user - profil</h1>",array(':user' => $userd->username));
			 $level[0]['description'] = __("Zarządzanie użytkownikami");
			 $level[0]['path'] ='user/admin';	
			 $level[1]['description'] = __("Lista użytkowników");
			 $level[1]['path'] ='user/admin/list';	
			 $level[2]['path'] ='user/admin/profile/'.$this->request->param('id');	
			 $level[2]['description'] = __("Profil użytkownika :user",array(':user' => $userd->full_name));
			 
			 $this->prepare_menu($menu);
			 
			 $menu[0][3] = '';
			 $menu[0][5] = '';
			 $menu[0][7] .= '/'.$userd->id;
			 $menu[0][9] .= '/'.$userd->id;
			 $menu[1][3] = '';
			 $menu[1][5] = '';
			 $menu[1][7] = '';
			 $menu[1][9] = '';
			 $menu[1][11] = '';
			 
			 // send information about user to view
			 $content = $content.View::factory('user/profile')
				->set('user',$userd)
				->set('groups',$groups)->render();
				
			 $view = View::factory('admin/panel');
				$view->set('content',$content);
				$view->set('level',$level);
				$view->set('menu',$menu);
			 $this->response->body($view->render());
		 
		}
	}
	
	 public function action_delete()
	 {
		 if(is_numeric($this->request->param('id')))
		 {
			  
			 // get information about user
			 $muser = new Model_User;
			 $userd = $muser->getUser($this->request->param('id'));
			 
			 $content = __("<h1> :user - profil</h1>",array(':user' => $userd->username));
			 $level[0]['description'] = __("Zarządzanie użytkownikami");
			 $level[0]['path'] ='user/admin';	
			 $level[1]['description'] = __("Lista użytkowników");
			 $level[1]['path'] ='user/admin/list';	
			 $level[2]['path'] ='user/admin/profile/'.$this->request->param('id');	
			 $level[2]['description'] = __("Profil użytkownika :user",array(':user' => $userd->full_name));
			 $level[3]['path'] ='user/admin/delete/'.$this->request->param('id');	
			 $level[3]['description'] = __("Usuń użytkownika");
			 
			 
			 $this->prepare_menu($menu);
			 
			 $menu[0][3] = '';
			 $menu[0][5] = '';
			 $menu[0][7] = '';
			 $menu[0][9] = '';
			 $menu[1][3] = '';
			 $menu[1][5] = '';
			 $menu[1][7] = '';
			 $menu[1][9] = '';
			 $menu[1][11] = '';
			 
			 // send information about user to view
			 $content = $content.View::factory('user/confirm_delete')
						->set('user',$userd)
						->render();
						
			 $view = View::factory('admin/panel');
				$view->set('content',$content);
				$view->set('level',$level);
				$view->set('menu',$menu);
			 $this->response->body($view->render());
		 
		}
	}
	
	 public function action_deleteConfirmed()
	 {

			 // get information about user
			 $muser = new Model_User;
			 $userd = $muser->getUser($this->request->param('id'));
			 
			 $content = __("<h1>Użytkownik usunięty</h1>");
			 $level[0]['description'] = __("Zarządzanie użytkownikami");
			 $level[0]['path'] ='user/admin';	
			 $level[1]['description'] = __("Usunięto użytkownika");
			 $level[1]['path'] ='user/admin';	
			 
			 
			 $this->prepare_menu($menu);
			 
			 $menu[0][7] = '';
			 $menu[0][9] = '';
			 $menu[1][7] = '';
			 $menu[1][9] = '';
			 $menu[1][11] = '';
			 
			 $id = $this->request->param('id');
			 if($id != 0)
			 {
				 $muser = new Model_User;
				 $muser->deleteUser($id);
			 }
				 
			 // send information about user to view
			 $content = $content.View::factory('user/deleted')->render();
			 
			 $view = View::factory('admin/panel');
				$view->set('content',$content);
				$view->set('level',$level);
				$view->set('menu',$menu);
			 $this->response->body($view->render());
			 
	 }
	 
	 public function action_edit()
	 {
		 
			 
			 $level[0]['description'] = __("Zarządzanie użytkownikami");
			 $level[0]['path'] ='user/admin';	
			 
			 // get user's data
			 $muser = new Model_User;
			 $id = $this->request->param('id');
			 
			 if(isset($id))
			 {
					$userd = $muser->getUser($id);
					$groups = $muser->getUserRoles($userd->id);
					$all_groups = $muser->getRoles();
					
			 } else $id = 0;
			 
			
			 if($id != 0)
			 {
				$content = __("<h1>Edycja danych użytkownika</h1>");
				$level[1]['description'] = __("Edytuj dane użytkownika :user",array(':user' => $userd->full_name));
				$level[1]['path'] ='user/admin/edit/'.$userd->id;
			 }
			 else
			 {
				$content = __("<h1>Dodawanie nowego użytkownika</h1>");
				$level[1]['description'] = __("Dodaj użytkownika");
				$level[1]['path'] ='user/admin/edit';
			 }
							 
			 
			 $this->prepare_menu($menu);
			 
			 $menu[0][3] = '';
			 $menu[0][5] = '';
			 $menu[0][7] = '';
			 $menu[0][9] = '';
			 $menu[1][3] = '';
			 $menu[1][5] = '';
			 $menu[1][7] = '';
			 $menu[1][9] = '';
			 $menu[1][11] = '';
			
			 // send information about user to view
			 if($id != 0)
				$content = $content.View::factory('user/edit')
					->set('user',$userd)
					->set('groups',$groups)
					->set('all_groups',$all_groups)
					->set('languages',$this->languages)
					->render();
			 else
				$content = $content.View::factory('user/edit')
						->set('languages',$this->languages)
						->render();
				
			 $view = View::factory('admin/panel');
				$view->set('content',$content);
				$view->set('level',$level);
				$view->set('menu',$menu);
			 $this->response->body($view->render());
			 
		 
	 }
	 
	 public function action_save()
	 {
			 
			 // get information about user
			 $muser = new Model_User;
			 $id = $this->request->param('id');
			 if(!isset($id))
				$id = 0;
			 
			 $level[0]['description'] = __("Zarządzanie użytkownikami");
			 $level[0]['path'] ='user/admin';	
			 $level[1]['description'] = __("Zapis danych użytkownika");
			 $level[1]['path'] ='user/admin';	
			 
			 
			 $this->prepare_menu($menu);
			 
			 $menu[0][7] = '';
			 $menu[0][9] = '';
			 $menu[1][7] = '';
			 $menu[1][9] = '';
			 $menu[1][11] = '';
			 
			 // validate received information
			 			 
             
			 //get information received from form
			 $username = HTML::chars(Arr::get($_POST, 'username'));
			 $full_name = HTML::chars(Arr::get($_POST, 'full_name'));
			 $external_id = HTML::chars(Arr::get($_POST, 'external_id'));
			 $email = HTML::chars(Arr::get($_POST, 'email'));
			 $signature = HTML::chars(Arr::get($_POST,'signature'));
			 $password = HTML::chars(Arr::get($_POST,'password'));
			 $password2 = HTML::chars(Arr::get($_POST,'password2'));
			 $lang = HTML::chars(Arr::get($_POST,'lang'));

			if($password != $password2)
				$errors[__('Hasło')] = __('Podane hasła są różne.');
			if(!valid::email($email))
				$errors[__('Adres email')] = __('Nieprawidłowy adres email.');
			if(!(valid::max_length($username,255) && valid::min_length($username,3)))
				$errors[__('Login')] = __('Login powinien być długości od 3 do 255 znaków.');
			if(!valid::max_length($full_name,255))
				$errors[__('Nazwa użytkownika')] = __('Nazwa użytkownika powinna mieć max. 255 znaków.');
			if(!(valid::max_length($signature,700)))
				$errors[__('Podpis')] = __('Za długa sygnaturka (max. 700 znaków).');
			if((!(valid::max_length($password,50) && valid::min_length($password,5))) && (!empty($password)))
				$errors[__('Hasło')] = __('Hasło musi mieć od 5 do 50 znaków.');
			if((!valid::numeric($external_id)) && (!empty($external_id)))
				$errors[__('Zewnętrzne ID')] = __('Nieprawidłowe ID zewnętrzne.');
			if(($muser->isUserEmail($email) != $id) && $muser->isUserEmail($email) > 0)
				$errors[__('Adres email')] = __('Ten adres już został użyty.');
			if(($muser->isUser($username) != $id) && $muser->isUser($username) > 0)
				$errors[__('Login')] = __('Użytkownik o tej nazwie istnieje w bazie.');
			if(($muser->isUserExternalID($external_id) != $id) && ($muser->isUserExternalID($external_id) != 0) && !empty($external_id))
				$errors[__('Zewnętrzne ID')] = __('Użytkownik o identycznym zewnętrznym ID już istnieje.');
			// check avatar upload
			if(!empty($_FILES['avatar']['tmp_name']) && !(Upload::valid($_FILES['avatar']) && Upload::not_empty($_FILES['avatar']) && 
			Upload::type($_FILES['avatar'], array('jpg', 'jpeg', 'png', 'gif')) && Upload::size($_FILES['avatar'],'1M')))
				$errors[__('Awatar')] = __('Awatar jest zbyt duży (>1MB) albo jest w złym formacie (innym niż jpg, png, gif)');
				
        
			if((!isset($errors)) || empty($errors))
			{
			 
			 // create or save profile
			 $muser->setUserProfile($id,$username,$email,$full_name,$signature,$external_id,$lang);
			 $us = $muser->getUserByUsername($username);
			 
			 // save avatar
			 if(!empty($_FILES['avatar']['tmp_name']))
			 {
				 $avatar_file = Upload::save($_FILES['avatar'], NULL, APPPATH.'views/images/');	
				 
				 $tmp1 = explode('/',$avatar_file);
				 $shrinked = APPPATH.'views/images/avatar-'.HTML::chars($tmp1[count($tmp1)-1]);
				 
				 Image::factory($avatar_file)
					->resize(256, 256, Image::AUTO)
					->save($shrinked);
					
				// save location in database
				$muser->setUserAvatar($us->id,'avatar-'.HTML::chars($tmp1[count($tmp1)-1]));
 
				// Delete the temporary file
				unlink($avatar_file);
			 };
			 
			 // set new password
			 if(!empty($password))
			 {
				$muser->setUserPassword($us->id,$password);
			 }
				
				$content = __("<h1>Dane użytkownika zapisane</h1>");
				$content = $content.View::factory('user/edited')->render();
			} else
			{
				$content = __("<h1>Dane użytkownika nie zostały zapisane</h1>");
				$content = $content.View::factory('user/failed_edit')->set('errors',$errors)->render();
			}					 
			 
			 $view = View::factory('admin/panel');
				$view->set('content',$content);
				$view->set('level',$level);
				$view->set('menu',$menu);
			 $this->response->body($view->render());
			 
	 }
	 
	 public function action_delete_avatar()
	 {
			 
			  
			 // get information about user
			 $muser = new Model_User;
			 $id = $this->request->param('id');
			 if(!isset($id))
				$id = 0;
			 
			 $level[0]['description'] = __("Zarządzanie użytkownikami");
			 $level[0]['path'] ='user/admin';	
			 $level[1]['description'] = __("Usuwanie awatara");
			 $level[1]['path'] ='user/admin';	
			 
			 $this->prepare_menu($menu);
			 
			 $menu[0][7] = '';
			 $menu[0][9] = '';
			 $menu[1][7] = '';
			 $menu[1][9] = '';
			 $menu[1][11] = '';
			 
			 $muser->removeUserAvatar($id);
			 
			
			 $content = __("<h1>Awatar użytkownika usunięty</h1>");
			 $content = $content.View::factory('user/edited')->render();
			 
			 $view = View::factory('admin/panel');
				$view->set('content',$content);
				$view->set('level',$level);
				$view->set('menu',$menu);
			 $this->response->body($view->render());
			 
	 }
	
	
	

 }
	
 
?>

