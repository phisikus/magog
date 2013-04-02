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
 
 class Controller_Group_Admin extends Controller_Main {
	 
	 
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
	 
	 public function action_leave()
	 {
		$id = explode('=',$this->request->param('id'));
		
		if($id[1] != 0)
		{
			$user = ORM::factory('user')->where('id','=',$id[1])->find();
			$user->remove('roles', ORM::factory('role')->where('id','=',$id[0])->find());
			$user->save();
			$this->request->redirect('index.php/user/admin/edit/'.$user->id);
		}
		
	 }
	 
	 public function action_leaveG()
	 {
		 $id = explode('=',$this->request->param('id'));
		
		if($id[1] != 0)
		{
			$user = ORM::factory('user')->where('id','=',$id[1])->find();
			$user->remove('roles', ORM::factory('role')->where('id','=',$id[0])->find());
			$user->save();
			$this->request->redirect('index.php/group/admin/manage/'.$id[0]);
		}
		 
	 }
	 
	 
	 public function action_join()
	 {
		$id = $this->request->param('id');
		
		if(($id != 0)&&(isset($_POST['groups'])))
		{
			$user = ORM::factory('user')->where('id','=',$id)->find();
			$user->add('roles', ORM::factory('role', array('name' => HTML::chars($_POST['groups']))));
			$user->save();
			$this->request->redirect('index.php/user/admin/edit/'.$user->id);
		}
		
	 }
	 
	 public function action_list()
	 {
		 $content = __("<h1>Lista grup</h1>");
		
		 $level[0]['description'] = __("Zarządzanie użytkownikami");
		 $level[0]['path'] ='user/admin';	
		 $level[1]['description'] = __("Lista grup");
		 $level[1]['path'] ='group/admin/list';	
		  
		 $this->prepare_menu($menu);
		 
		 $menu[0][7] = '';
		 $menu[0][9] = '';
		 $menu[1][7] = '';
		 $menu[1][9] = '';
		 $menu[1][11] = '';
		 
		 
		 // get information about all roles
		 $mgroup = new Model_Role;
		 
		 // page number
		 $page = 1;
		 $page_size = 20;
		
		 if(is_numeric($this->request->param('id')) && $this->request->param('id') > 0 )
			$page = $this->request->param('id');
			
		
		 $page_total = $mgroup->getAllRoles($page_size,0);
		 $groups = $mgroup->getAllRoles($page_size,$page);
				
		 $content = $content.View::factory('group/list')
					->set('groups',$groups)
					->set('page_number',$page)
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
					 
			 $mgroup = new Model_Role;
			 $group = $mgroup->getRole($this->request->param('id'));
			 $nr_of_users = $mgroup->getRoleUsers($this->request->param('id'),1,0);
			 			 
			 $content = __("<h1> :group - profil grupy</h1>",array(':group' => $group->name));
			 $level[0]['description'] = __("Zarządzanie użytkownikami");
			 $level[0]['path'] ='user/admin';	
			 $level[1]['description'] = __("Lista grup");
			 $level[1]['path'] ='group/admin/list';	
			 $level[2]['path'] ='group/admin/profile/'.$this->request->param('id');	
			 $level[2]['description'] = __("Profil grupy :group",array(':group' => $group->name));
			 
			 $this->prepare_menu($menu);
			 
			 $menu[0][3] = '';
			 $menu[0][5] = '';
			 $menu[0][7] = '';
			 $menu[0][9] = '';
			 $menu[1][3] = '';
			 $menu[1][5] = '';
			 $menu[1][7] .= '/'.$group->id;
			 $menu[1][9] .= '/'.$group->id;
			 $menu[1][11] .= '/'.$group->id;
			 
			 // send information about user to view
			 $content = $content.View::factory('group/profile')
					->set('group',$group)
					->set('nr',$nr_of_users)
					->render();
					
			 $view = View::factory('admin/panel');
				$view->set('content',$content);
				$view->set('level',$level);
				$view->set('menu',$menu);
			 $this->response->body($view->render());
		 
		}
	 }
	 
	 public function action_edit()
	 {
		 
			 $level[0]['description'] = __("Zarządzanie użytkownikami");
			 $level[0]['path'] ='user/admin';	
			 
			 // get role's data
			 $mgroup = new Model_Role;
			 $id = $this->request->param('id');
			 
			 if(isset($id))
			 {
					$group = $mgroup->getRole($id);
					
			 } else $id = 0;
			 
			
			 if($id != 0)
			 {
				$content = __("<h1>Edycja danych grupy</h1>");
				$level[1]['description'] = __("Edytuj dane grupy :group",array(':group' => $group->name));
				$level[1]['path'] ='group/admin/edit/'.$group->id;
			 }
			 else
			 {
				$content = __("<h1>Dodawanie nowej grupy</h1>");
				$level[1]['description'] = __("Dodaj grupę");
				$level[1]['path'] ='group/admin/edit';
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
				$content = $content.View::factory('group/edit')->set('group',$group)->render();
			 else
				$content = $content.View::factory('group/edit')->render();
				
			 $view = View::factory('admin/panel');
				$view->set('content',$content);
				$view->set('level',$level);
				$view->set('menu',$menu);
			 $this->response->body($view->render());
			 
		 
	 }
	 
	 public function action_save()
	 {
			 $mgroup = new Model_Role;
			 $id = $this->request->param('id');
			 
			 if(!isset($id))
				$id = 0;
			 
			 $level[0]['description'] = __("Zarządzanie użytkownikami");
			 $level[0]['path'] ='user/admin';	
			 $level[1]['description'] = __("Zapis danych grupy");
			 $level[1]['path'] ='user/admin';	
			 
			 
			 $this->prepare_menu($menu);
			 
			 $menu[0][7] = '';
			 $menu[0][9] = '';
			 $menu[1][7] = '';
			 $menu[1][9] = '';
			 $menu[1][11] = '';
			 
			 // validate received information
			 			 
             
			 //get information received from form
			 $name = HTML::chars(Arr::get($_POST, 'name'));
			 $description = HTML::chars(Arr::get($_POST, 'description'));
			 
			if(!(valid::max_length($name,255) && valid::min_length($name,3)))
				$errors[__('Nazwa')] = __('Nazwa powinna być długości od 3 do 255 znaków.');
			if(!(valid::max_length($description,700)))
				$errors[__('Opis')] = __('Za długi opis (max. 700 znaków).');
					
        
			if((!isset($errors)) || empty($errors))
			{
			 
				$mgroup->setRoleProfile($id,$name,$description);
				$content = __("<h1>Dane grupy zapisane</h1>");
				$content = $content.View::factory('group/edited')->render();
			} else
			{
				$content = __("<h1>Dane grupy nie zostały zapisane</h1>");
				$content = $content.View::factory('group/failed_edit')->set('errors',$errors)->render();
			}					 
			 
			 $view = View::factory('admin/panel');
				$view->set('content',$content);
				$view->set('level',$level);
				$view->set('menu',$menu);
			 $this->response->body($view->render());
			 
	 }
	 
	 public function action_delete()
	 {
		 if(is_numeric($this->request->param('id')))
		 {
		
			 $mgroup = new Model_Role;
			 $group = $mgroup->getRole($this->request->param('id'));
			 
			 $content = __("<h1> :group - grupa</h1>",array(':group' => $group->name));
			 $level[0]['description'] = __("Zarządzanie użytkownikami");
			 $level[0]['path'] ='user/admin';	
			 $level[1]['description'] = __("Lista grup");
			 $level[1]['path'] ='group/admin/list';	
			 $level[2]['path'] ='group/admin/profile/'.$this->request->param('id');	
			 $level[2]['description'] = __("Profil grupy :group",array(':group' => $group->name));
			 $level[3]['path'] ='group/admin/delete/'.$this->request->param('id');	
			 $level[3]['description'] = __("Usuń grupę");
			 
			 
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
			 
			 $content = $content.View::factory('group/confirm_delete')
						->set('user',$group)
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

			 $content = __("<h1>Grupa usunięta</h1>");
			 $level[0]['description'] = __("Zarządzanie użytkownikami");
			 $level[0]['path'] ='user/admin';	
			 $level[1]['description'] = __("Usunięto grupę");
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
				 $mgroup = new Model_Role;
				 $mgroup->deleteRole($id);
			 }
				 
			 $content = $content.View::factory('group/deleted')->render();
			 $view = View::factory('admin/panel');
				$view->set('content',$content);
				$view->set('level',$level);
				$view->set('menu',$menu);
			 $this->response->body($view->render());
			 
	 }
	 
	 public function action_manage()
	 {

			  $id = explode('=',$this->request->param('id'));
			  if(!isset($id[1])) $id[1] = 1;
			  
			  if($id[0] != 0)
			  {
					
					 $mgroup = new Model_Role;
					 $group = $mgroup->getRole($id[0]);
					  
					  
					 $content = __("<h1>Zarządzaj grupą :group</h1>",array(':group' => $group->name));
					 $level[0]['description'] = __("Zarządzanie użytkownikami");
					 $level[0]['path'] ='user/admin';	
					 $level[1]['description'] = __("Zarządzanie grupami");
					 $level[1]['path'] ='group/admin/manage';	
					 
					 
					 $this->prepare_menu($menu);
					 
					 $menu[0][7] = '';
					 $menu[0][9] = '';
					 $menu[1][7] = '';
					 $menu[1][9] = '';
					 $menu[1][11] = '';
					
					 $page_size = 20;
					 $page_total = $mgroup->getRoleUsers($id[0],$page_size,0);
					 $users = $mgroup->getRoleUsers($id[0],$page_size,$id[1]);
					 
						 
					 $content = $content.View::factory('group/manage')
					 ->set('users',$users)
					 ->set('page_number',$id[1])
					 ->set('page_total',$page_total)
					 ->set('group_id',$group->id)
					 ->set('group_name',$group->name)
					 ->render();
					 
					 $view = View::factory('admin/panel');
							 $view->set('content',$content);
							 $view->set('level',$level);
							 $view->set('menu',$menu);
					 $this->response->body($view->render());
			 }
	 }
	 	 
	
 }
	
 
?>

