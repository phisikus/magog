<?php
/*
 * show.php
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
 
class Controller_Show extends Controller_Main {
	
    public function action_index() {
			$config = new Model_Config;
			$id = $config->getConfig('page','homepage');
			
			if(isset($id))
			{
				if(!is_numeric($id))
						$this->request->redirect('index.php/show/page/'.$id);
				elseif($id == 0)
					$this->request->redirect('index.php/show/news');
				elseif($id > 0)
					$this->request->redirect('index.php/show/page/'.$id);
			}
    }
    
    public function action_page()
    {
		$id = $this->request->param('id');
		if(!empty($id))
		{
			$mconf = new Model_Config;
			$def_skin = $mconf->getDefaultTemplate();
			$title = $mconf->getConfig('page','title');
			
			$mpage = new Model_Page;
			$page[0] = $mpage->getPage($id);
			$archives = $mpage->getArchiveMenuList();
			$page[0]->news = 0; // show news as pages
			
			$mcom = new Model_Comment;
			$com_cont = Arr::get($_POST, 'comment_content');
			if(!empty($com_cont) && $page[0]->comments == 1)
				$mcom->setComment($page[0]->id,NULL,Auth::instance()->get_user()->id,
							Auth::instance()->get_user()->username,
							HTML::chars($com_cont));
							
			$comments = $mcom->getAllCommentsOfPage($page[0]->id);
			
			$mmenu = new Model_Menu;
			$menus = $mmenu->getAllMenus();
			
		 $content = View::factory('index/'.$def_skin.'/pages')
					->set('pages',$page)
					->set('page_total',1)
					->set('comments',$comments)
					->render();
		 $view = View::factory('index/'.$def_skin.'/index')->set('title',$title);
			$view->set('content',$content);
			$view->set('menus',$menus);
			$view->set('archives',$archives);
		 $this->response->body($view->render());
		 
		}
	}
	
	public function action_news()
    {
		$id = $this->request->param('id');
		if(!empty($id))
		{
			$params = explode('=',$id);
			if(count($params) < 3) return;
			$page_size = 1;
			
			$se = HTML::chars(Arr::get($_GET, 'search'));
			if(empty($se))
				$se = '';
						
			$mconf = new Model_Config;
			$def_skin = $mconf->getDefaultTemplate();
			$title = $mconf->getConfig('page','title');
			
			$mpage = new Model_Page;
			$page_total = $mpage->getAllNewsSimpleSearch($page_size,0,$params[1],$params[2],$se);
			$page = $mpage->getAllNewsSimpleSearch($page_size,$params[0],$params[1],$params[2],$se);
			$archives = $mpage->getArchiveMenuList();

			$mmenu = new Model_Menu;
			$menus = $mmenu->getAllMenus();
			
		 $content = View::factory('index/'.$def_skin.'/pages')
					->set('pages',$page)
					->set('page_total',$page_total)
					->set('page_number',$params[0])
					->set('month',$params[1])
					->set('year',$params[2])
					->set('search',$se)
					->render();
		 $view = View::factory('index/'.$def_skin.'/index');
			$view->set('content',$content);
			$view->set('title',$title);
			$view->set('menus',$menus);
			$view->set('archives',$archives);
		 $this->response->body($view->render());
		 
		}
	}
}


?>
