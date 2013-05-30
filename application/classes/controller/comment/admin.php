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
 
 class Controller_Comment_Admin extends Controller_Main {

	
	// Prepare menu for this part of control panel
	 function prepare_menu(&$menu)
	 {
		 $menu[0][0] =  __('Komentarze');
		 $menu[0][1] = '';
		 $menu[0][2] =  __('Ostatnie komentarze');
		 $menu[0][3] = 'comment/admin/list';
		 $menu[0][4] =  __('Komentarze wpisów');
		 $menu[0][5] = 'comment/admin/page_list';
		 $menu[0][6] =  __('Nowy komentarz');
		 $menu[0][7] = 'comment/admin/edit';
		 $menu[0][8] =  __('Usuń komentarz');
		 $menu[0][9] = 'comment/admin/delete';
		 $menu[1][0] =  __('Panel');
		 $menu[1][1] =  '';
		 $menu[1][2] =  __('Profil');
		 $menu[1][3] = 'user/user/index';
		 $menu[1][4] =  __('Wyloguj');
		 $menu[1][5] =  'admin/logout';
		 
	 }
	 
	 
	 public function action_index()
	 {
		 
		 if(!(Auth::instance()->logged_in('admin') || Auth::instance()->logged_in('moderator')))
			$this->request->redirect('index.php/admin/login');
			
		 $content = __("<h1>Panel zarządzania komentarzami</h1>
					<p>Witaj w panelu moderatorskim! Tutaj można przeglądać i usuwać komentarze niezgodne z regulaminem.</p>");

 		 $level[0]['description'] = __("Zarządzanie komentarzami");
		 $level[0]['path'] ='comment/admin';	

		 $this->prepare_menu($menu);
		 
		 $menu[0][7] = '';
		 $menu[0][9] = '';
		 
		 $view = View::factory('admin/panel');
			 $view->set('content',$content);
			 $view->set('level',$level);
			 $view->set('menu',$menu);
		 $this->response->body($view->render());
		 
	 } 
	 
	 
	 public function action_list()
	 {
		  if(!(Auth::instance()->logged_in('admin') || Auth::instance()->logged_in('moderator')))
			$this->request->redirect('index.php/admin/login');
		
		 $content = __("<h1>Ostatnie komentarze</h1>");
		 
		 $level[0]['description'] = __("Zarządzanie komentarzami");
		 $level[0]['path'] ='comment/admin';	
		 $level[1]['description'] = __("Ostatnie komentarze");
		 $level[1]['path'] ='comment/admin/list';	
		  
		 $this->prepare_menu($menu);
		 
		 $menu[0][7] = '';
		 $menu[0][9] = '';

		 $mcom = new Model_Comment;
		 
		 // get search keyword
		 $search = Arr::get($_GET, 'search');
		 $search = HTML::chars($search);
		 
		 // page number
		 $page = 1;
		 $page_size = 20;
		
		 // find matching comments
		 	if(empty($search))
		 	{
				$page_total = $mcom->getAllComments($page_size,0);
				$com = $mcom->getAllComments($page_size,$page);
				$search = '';
			}
			else
			{
				$page_total = $mcom->getAllCommentsSimpleSearch($page_size,0,$search);
				$com = $mcom->getAllCommentsSimpleSearch($page_size,$page,$search);
			}
			
				
		 $content = $content.View::factory('comment/list')
					->set('comments',$com)
					->set('page_total',1)
					->render();
					
		 $view = View::factory('admin/panel');
			$view->set('content',$content);
			$view->set('level',$level);
			$view->set('menu',$menu);
		 $this->response->body($view->render());
	 }
	 
	 public function action_deleteL()
	 {
		 if(!(Auth::instance()->logged_in('admin') || Auth::instance()->logged_in('moderator')))
			$this->request->redirect('index.php/admin/login');
			
			$id = $this->request->param('id');
			$mcom = new Model_Comment;
			$mcom->deleteComment($id);
			$this->request->redirect('index.php/comment/admin/list/');			
		 
	 }
	 
	 public function action_deleteP()
	 {
		 if(!(Auth::instance()->logged_in('admin') || Auth::instance()->logged_in('moderator')))
			$this->request->redirect('index.php/admin/login');
			
			$para = explode('=',$this->request->param('id'));
			$id = $para[0];
			$page = $para[1];
			
			$mcom = new Model_Comment;
			$mcom->deleteComment($id);
			$this->request->redirect('index.php/comment/admin/page_comment/'.$page);			
		 
	 }
	 
	 public function action_show()
	 {
		  if(!(Auth::instance()->logged_in('admin') || Auth::instance()->logged_in('moderator')))
			$this->request->redirect('index.php/admin/login');
		
		 $content = __("<h1>Treść komentarza</h1>");
		 
		 $level[0]['description'] = __("Zarządzanie komentarzami");
		 $level[0]['path'] ='comment/admin';	
		 $level[1]['description'] = __("Pokaż komentarz");
		 $level[1]['path'] ='comment/admin/show/'.HTML::chars($this->request->param('id'));	
		 
		 $id = $this->request->param('id');
		  
		 $this->prepare_menu($menu);
		 
		 $menu[0][3] = '';
		 $menu[0][5] = '';
		 $menu[0][7] = '';
		 $menu[0][9] .= 'L/'.$id;

		 $mcom = new Model_Comment;
		 $com = $mcom->getComment($id);
		 
		 $mpage = new Model_Page;
		 $parent_page = $mpage->getPage($com->parent_page)->title;	 
			
				
		 $content = $content.View::factory('comment/profile')
			->set('parent_page',$parent_page)
			->set('comment',$com)
			->render();
			
		 $view = View::factory('admin/panel');
			$view->set('content',$content);
			$view->set('level',$level);
			$view->set('menu',$menu);
		 $this->response->body($view->render());
	 }
	 
	 public function action_page_list()
	 {
		  if(!(Auth::instance()->logged_in('admin') || Auth::instance()->logged_in('moderator')))
			$this->request->redirect('index.php/admin/login');
		
		 $content = __("<h1>Lista artykułów</h1>");
	
		 $level[0]['description'] = __("Zarządzanie komentarzami");
		 $level[0]['path'] ='comment/admin';	
		 $level[1]['description'] = __("Lista artykułów");
		 $level[1]['path'] ='comment/admin/page_list';	
		  
		 $this->prepare_menu($menu);
		 
		 $menu[0][7] = '';
		 $menu[0][9] = '';

		 $mpage = new Model_Page;
		 
		 // get search keyword
		 $search = Arr::get($_GET, 'search');
		 $search = HTML::chars($search);
		 
		 // page number
		 $page = 1;
		 $page_size = 20;
		
		 if(is_numeric($this->request->param('id')) && $this->request->param('id') > 0 )
			$page = $this->request->param('id');
			

		 	if(empty($search))
		 	{
				$page_total = $mpage->getAllPages($page_size,0);
				$pages = $mpage->getAllPages($page_size,$page);
				$search = '';
			}
			else
			{
				$page_total = $mpage->getAllPagesSimpleSearch($page_size,0,$search);
				$pages = $mpage->getAllPagesSimpleSearch($page_size,$page,$search);
			}
			
			$nofcomments='';
			$mcom = new Model_Comment;
			foreach($pages as $pg)
				$nofcomments[$pg->id] = $mcom->getCommentsOfPage(1,0,$pg->id);
				
		 $content = $content.View::factory('comment/page_list')
					->set('pages',$pages)
					->set('page_number',$page)
					->set('search',$search)
					->set('nofcomments',$nofcomments)
					->set('page_total',$page_total)->render();
					
		 $view = View::factory('admin/panel');
			$view->set('content',$content);
			$view->set('level',$level);
			$view->set('menu',$menu);
		 $this->response->body($view->render());
	 }
	 
	 public function action_page_comment()
	 {
		if(!(Auth::instance()->logged_in('admin') || Auth::instance()->logged_in('moderator')))
			$this->request->redirect('index.php/admin/login');
		
		 $content = __("<h1>Komentarze artykułu</h1>");
		 
		 $level[0]['description'] = __("Zarządzanie komentarzami");
		 $level[0]['path'] ='comment/admin';	
		 $level[1]['description'] = __("Lista artykułów");
		 $level[1]['path'] ='comment/admin/page_list';	 
		 $level[2]['description'] = __("Komentarze do artykułu");
		 $level[2]['path'] ='comment/admin/page_comment/'.$this->request->param('id');	
		 $paramz = explode('=',$this->request->param('id'));
		
		 if(!empty($paramz[0]))
			$id = $paramz[0];
			
		 if(empty($paramz[1]))
			$page = 1;
		 else
			$page = $paramz[1];
		  
		 $this->prepare_menu($menu);
		 
		 $menu[0][7] .= '/'.$id;
		 $menu[0][9] = '';

		 $mcom = new Model_Comment;
		 $mpage = new Model_Page;
		 $page_content = $mpage->getPage($id);
		
		 // page number
		 $page_size = 20;
		 	
		 $page_total = $mcom->getCommentsOfPage($page_size,0,$id);
		 $com = $mcom->getCommentsOfPage($page_size,$page,$id);
		 $search = '';
			
		 $content = $content.View::factory('comment/page_comments')
					->set('comments',$com)
					->set('page',$page_content)
					->set('page_number',$page)
					->set('page_total',$page_total)
					->render();
					
		 $view = View::factory('admin/panel');
			$view->set('content',$content);
			$view->set('level',$level);
			$view->set('menu',$menu);
		 $this->response->body($view->render());
		
	 }
	 
	 public function action_edit()
	 {
		 if(!(Auth::instance()->logged_in('admin') || Auth::instance()->logged_in('moderator')))
			$this->request->redirect('index.php/admin/login');

			 $level[0]['description'] = __("Zarządzanie komentarzami");
			 $level[0]['path'] ='comment/admin';	
			 $level[1]['description'] = __("Lista artykułów");
			 $level[1]['path'] ='comment/admin/page_list';	 
			 $level[2]['description'] = __("Komentarze do artykułu");
			 $level[2]['path'] ='comment/admin/page_list/'.$this->request->param('id');
			 $level[3]['description'] = __("Dodaj komentarz");
			 $level[3]['path'] ='comment/admin/edit/'.$this->request->param('id');
			 
			 $this->prepare_menu($menu);
			 $menu[0][3] = '';
			 $menu[0][5] = '';
			 $menu[0][7] = '';
			 $menu[0][9] = '';

			$mpage = new Model_Page;
			$id = $this->request->param('id');
			$page = $mpage->getPage($id);			
			
			$content = __("<h1>Dodawanie komentarza</h1>"); 
			$content = $content.View::factory('comment/admin_edit')
						->set('page',$page)
						->render();
				
			$view = View::factory('admin/panel');
				$view->set('content',$content);
				$view->set('level',$level);
				$view->set('menu',$menu);
			$this->response->body($view->render());
			 
		 
	 }
	 
	 public function action_save()
	 {
		 if(!(Auth::instance()->logged_in('admin') || Auth::instance()->logged_in('moderator')))
			$this->request->redirect('index.php/admin/login');
			
			 $id = $this->request->param('id');
			 if(is_numeric($id))
			 {
				 $content = HTML::chars(Arr::get($_POST,'content'));
				 $mcom = new Model_Comment;
				 $mcom->setComment($id,NULL,Auth::instance()->get_user()->id,
				 Auth::instance()->get_user()->username,$content);
				 
			 }
			 
			 $this->request->redirect('index.php/comment/admin/page_comment/'.$id);			
	 }
	 
	
 }
	
 
?>

