<?php

/*
 * user.php
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
 
 class Controller_User_User extends Controller_Main {
	 
	 
	 function prepare_menu(&$menu)
	 {
		 $menu[0][0] = __('Użytkownik');
		 $menu[0][1] = '';
		 $menu[0][2] = __('Mój Profil');
		 $menu[0][3] = 'user/user/index';
		 $menu[0][4] = __('Edytuj dane');
		 $menu[0][5] = 'user/user/edit';
		 $menu[0][6] = __('Usuń konto');
		 $menu[0][7] = 'user/user/delete';	
		 $menu[1][0] =  __('Panel');
		 $menu[1][1] =  '';
		 $menu[1][2] =  __('Wyloguj');
		 $menu[1][3] =  'user/user/logout';
	 }
	 
	 
	 /*
	  * 
	  * USER
	  * 
	  */ 
	  
	  public function action_login() 
	   {
		   if(!empty($_POST['username']))
		   {
			   	Auth::instance()->login($_POST['username'],$_POST['password']);
				$this->request->redirect('index.php/user/user/index');
			}
			else
			{
				 $view = View::factory('user/login');
				 $this->response->body($view->render());
			}
    	}

    public function action_logout() {
        
        Auth::instance()->logout();
        $this->request->redirect('index.php/user/user/login');
    }
	 
	 
	 
	 public function action_index()
	 {
		 if(!(Auth::instance()->logged_in()))
			$this->request->redirect('index.php/user/user/login');
	 
			  
			 // get information about user
			 $muser = new Model_User;
			 $userd = Auth::instance()->get_user();
			 $groups = $muser->getUserRoles($userd->id);
			 
			 $content = __("<h1> :user - profil</h1>",array(':user' => $userd->username));
			 $level[0]['description'] = __("Panel użytkownika");
			 $level[0]['path'] ='user/user/index';
			 $level[1]['description'] = __("Profil użytkownika :user",array(':user' => $userd->full_name));
			 $level[1]['path'] ='user/user/index';	
			 
			 $this->prepare_menu($menu);
			 $menu[0][3] = '';
			 
			 // send information about user to view
			 $content = $content.View::factory('user/user_profile')
				->set('user',$userd)
				->set('groups',$groups)
				->render();
				
			 $view = View::factory('admin/panel');
				$view->set('content',$content);
				$view->set('level',$level);
				$view->set('menu',$menu);
			 $this->response->body($view->render());
	 }
	 
	
	 public function action_delete()
	 {
		 if(!(Auth::instance()->logged_in()))
			$this->request->redirect('index.php/user/user/login');
			 
			  
			 // get information about user
			 $userd = Auth::instance()->get_user();
			 
			 $content = __("<h1> :user - profil</h1>",array(':user' => $userd->username));
			 $level[0]['description'] = __("Panel użytkownika");
			 $level[0]['path'] ='user/user/index';	
			 $level[1]['path'] ='user/user/index';
			 $level[1]['description'] = __("Profil użytkownika :user",array(':user' => $userd->full_name));
			 $level[2]['path'] ='user/user/delete';	
			 $level[2]['description'] = __("Usuń użytkownika");
			 	 
			 $this->prepare_menu($menu);
			 
			 $menu[0][7] = '';
			 
			 $content = $content.View::factory('user/user_confirm_delete')
						->set('user',$userd)
						->render();
						
			 $view = View::factory('admin/panel');
				$view->set('content',$content);
				$view->set('level',$level);
				$view->set('menu',$menu);
			 $this->response->body($view->render());

	}
	
	 public function action_deleteConfirmed()
	 {
		 if(!(Auth::instance()->logged_in()))
			$this->request->redirect('index.php/user/user/login');
			  
			 // get information about user
			 $muser = new Model_User;
			 $userd = Auth::instance()->get_user();
			 
			 $content = __("<h1>Użytkownik usunięty</h1>");
			 $level[0]['description'] = __("Panel użytkownika");
			 $level[0]['path'] ='user/user/index';	
			 $level[1]['description'] = __("Usunięto użytkownika");
			 $level[1]['path'] ='user/user/index';	
			 
			 
			 $this->prepare_menu($menu);
			 
			 $menu[0][3] = '';
			 $menu[0][5] = '';
			 $menu[0][7] = '';
			 $menu[1][3] = '';
			 
			 $id = $userd->id;
			 
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
		  if(!(Auth::instance()->logged_in()))
			$this->request->redirect('index.php/user/user/login');
		
			 
			 $level[0]['description'] = __("Panel użytkownika");
			 $level[0]['path'] ='user/user/index';	
			 
			$muser = new Model_User;
			$userd = Auth::instance()->get_user();
			$groups = $muser->getUserRoles($userd->id);
			$all_groups = $muser->getRoles();
			 
			$content = __("<h1>Edycja danych użytkownika</h1>");
			$level[1]['description'] = __("Edytuj dane użytkownika :user",array(':user' => $userd->full_name));
			$level[1]['path'] ='user/user/edit/'.$userd->id;
			 				 
			 
			 $this->prepare_menu($menu);
			 
			 $menu[0][5] = '';
			 
			 // send information about user to view
			$content = $content.View::factory('user/user_edit')
				->set('user',$userd)
				->set('groups',$groups)
				->set('all_groups',$all_groups)
				->set('languages',$this->languages)
				->render();
				
			 $view = View::factory('admin/panel');
				$view->set('content',$content);
				$view->set('level',$level);
				$view->set('menu',$menu);
			 $this->response->body($view->render());
			 
		 
	 }
	 
	 public function action_register()
	 {
			/*
			 *
			 * DISABLED
			 *   
			 */ 
			
			return;
		  /*if(!(Auth::instance()->logged_in()))
			$this->request->redirect('index.php/user/user/login');*/
		
			 $level[0]['description'] = __("Rejestracja");
			 $level[0]['path'] ='user/user/register';	
			 
			 
			$content = __("<h1>Rejestracja nowego użytkownika</h1>"); 				 
			 
			 // send information about user to view
			$content = $content.View::factory('user/register')
					->set('languages',$this->languages)
					->render();
			
			 $view = View::factory('admin/panel');
				$view->set('content',$content);
				$view->set('level',$level);
			 $this->response->body($view->render());
		 
	 }
	 
	 public function action_save()
	 { 
		   if(!(Auth::instance()->logged_in()))
			$this->request->redirect('index.php/user/user/login');
			  
			 // get information about user
			 $muser = new Model_User;
			 $id = Auth::instance()->get_user()->id;
			 
			 $level[0]['description'] = __("Panel użytkownika");
			 $level[0]['path'] ='user/user/index';	
			 $level[1]['description'] = __("Zapis danych użytkownika");
			 $level[1]['path'] ='user/user/index';	
			 
			 
			 $this->prepare_menu($menu);
			              
			 //get information received from form
			 $username = Auth::instance()->get_user()->username;
			 $external_id = Auth::instance()->get_user()->external_id;
			 $full_name = HTML::chars(Arr::get($_POST, 'full_name'));
			 $email = HTML::chars(Arr::get($_POST, 'email'));
			 $signature = HTML::chars(Arr::get($_POST,'signature'));
			 $password = HTML::chars(Arr::get($_POST,'password'));
			 $password2 = HTML::chars(Arr::get($_POST,'password2'));
			 $lang = HTML::chars(Arr::get($_POST,'lang'));
			 
			if($password != $password2)
				$errors[__('Hasło')] = __('Podane hasła są różne.');
			if(!valid::email($email))
				$errors[__('Adres email')] = __('Nieprawidłowy adres email.');
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
			 $id = Auth::instance()->get_user()->id;
			 
			 $level[0]['description'] = __("Panel użytkownika");
			 $level[0]['path'] ='user/user/index';	
			 $level[1]['description'] = __("Usuwanie awatara");
			 $level[1]['path'] ='user/user/index';	
			 
			 $this->prepare_menu($menu);
			 
			 $muser->removeUserAvatar($id);
			 
			 $content = __("<h1>Awatar użytkownika usunięty</h1>");
			 $content = $content.View::factory('user/edited')->render();
			 
			 $view = View::factory('admin/panel');
				$view->set('content',$content);
				$view->set('level',$level);
				$view->set('menu',$menu);
			 $this->response->body($view->render());
			 
	 }
	
	 public function action_registered()
	 { 
			/*
			 *
			 * DISABLED
			 *   
			 */ 
			return;
			
			 
			 // get information about user
			 $muser = new Model_User;
			 $id = 0;
			 
			 $level[0]['description'] = __("Panel użytkownika");
			 $level[0]['path'] ='user/user/index';	
			 $level[1]['description'] = __("Zapis danych użytkownika");
			 $level[1]['path'] ='user/user/index';	
			 
			              
			 //get information received from form
			 $username = HTML::chars(Arr::get($_POST, 'username'));
			 $full_name = HTML::chars(Arr::get($_POST, 'full_name'));
			 $email = HTML::chars(Arr::get($_POST, 'email'));
			 $password = HTML::chars(Arr::get($_POST,'password'));
			 $password2 = HTML::chars(Arr::get($_POST,'password2'));
			 $lang = HTML::chars(Arr::get($_POST,'lang'));
			 
			if($password != $password2)
				$errors[__('Hasło')] = __('Podane hasła są różne.');
			if(!valid::email($email))
				$errors[__('Adres email')] = __('Nieprawidłowy adres email.');
			if(!valid::max_length($full_name,255))
				$errors[__('Nazwa użytkownika')] = __('Nazwa użytkownika powinna mieć max. 255 znaków.');
			if((!(valid::max_length($password,50) && valid::min_length($password,5))) && (!empty($password)))
				$errors[__('Hasło')] = __('Hasło musi mieć od 5 do 50 znaków.');
			if(($muser->isUserEmail($email) != $id) && $muser->isUserEmail($email) > 0)
				$errors[__('Adres email')] = __('Ten adres już został użyty.');	
        
			if((!isset($errors)) || empty($errors))
			{
			 
			 // create or save profile
			 $muser->setUserProfile($id,$username,$email,$full_name,'','',$lang);
			 $us = $muser->getUserByUsername($username);
			 
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
			 $this->response->body($view->render());
			 
	 }

	
	

 }
	
 
?>

