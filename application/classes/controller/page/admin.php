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

class Controller_Page_Admin extends Controller_Main
{

    function prepare_menu(&$menu)
    {
        $menu[0][0] = __('Artykuły');
        $menu[0][1] = '';
        $menu[0][2] = __('Lista artykułów');
        $menu[0][3] = 'page/admin/list';
        $menu[0][4] = __('Dodaj artykuł');
        $menu[0][5] = 'page/admin/edit';
        $menu[0][6] = __('Edytuj artykuł');
        $menu[0][7] = 'page/admin/edit';
        $menu[0][8] = __('Usuń artykuł');
        $menu[0][9] = 'page/admin/delete';
        $menu[1][0] = __('Panel');
        $menu[1][1] = '';
        $menu[1][2] = __('Profil');
        $menu[1][3] = 'user/user/index';
        $menu[1][4] = __('Wyloguj');
        $menu[1][5] = 'admin/logout';

    }

    public function action_index()
    {
        if (!(Auth::instance()->logged_in('admin') || Auth::instance()->logged_in('redaktor')))
            $this->request->redirect('index.php/admin/login');

        $content = __("<h1>Panel zarządzania treścią</h1>
					<p>Witaj w panelu redaktorskim! Umożliwia on edycję treści artykułów i newsów.</p>");

        $level[0]['description'] = __("Zarządzanie treścią");
        $level[0]['path'] = 'page/admin';

        $this->prepare_menu($menu);

        $menu[0][7] = '';
        $menu[0][9] = '';

        $view = View::factory('admin/panel');
        $view->set('content', $content);
        $view->set('level', $level);
        $view->set('menu', $menu);
        $this->response->body($view->render());
    }

    public function action_edit()
    {
        if (!(Auth::instance()->logged_in('admin') || Auth::instance()->logged_in('redaktor')))
            $this->request->redirect('index.php/admin/login');

        $level[0]['description'] = __("Zarządzanie treścią");
        $level[0]['path'] = 'page/admin';

        $mpage = new Model_Page;
        $id = $this->request->param('id');

        if (isset($id))
            $page = $mpage->getPage($id);
        else    $id = 0;


        if ($id != 0) {
            $content = __("<h1>Edycja artykułu</h1>");
            $level[1]['description'] = __("Edytuj artykuł :title", array(':title' => $page->short_title));
            $level[1]['path'] = 'page/admin/edit/' . $page->id;
        } else {
            $content = __("<h1>Dodawanie nowego artykułu</h1>");
            $level[1]['description'] = __("Dodaj artykuł");
            $level[1]['path'] = 'page/admin/edit';
        }


        $this->prepare_menu($menu);

        $menu[0][3] = '';
        $menu[0][5] = '';
        $menu[0][7] = '';

        if ($id == 0)
            $menu[0][9] = '';
        else
            $menu[0][9] .= '/' . $id;
        // send information about user to view
        if ($id != 0)
            $content = $content . View::factory('page/edit')
                ->set('page', $page)->render();
        else
            $content = $content . View::factory('page/edit')->render();

        $view = View::factory('admin/panel');
        $view->set('content', $content);
        $view->set('level', $level);
        $view->set('menu', $menu);
        $view->set('editor', 'editor');
        $this->response->body($view->render());


    }

    public function action_save()
    {

        if (!(Auth::instance()->logged_in('admin') || Auth::instance()->logged_in('redaktor')))
            $this->request->redirect('index.php/admin/login');

        // get information about page
        $mpage = new Model_Page;

        $author_id = Auth::instance()->get_user()->id;
        $title = HTML::chars(Arr::get($_POST, 'title'));
        $content = Arr::get($_POST, 'content');
        $public = HTML::chars(Arr::get($_POST, 'public'));
        $comments = HTML::chars(Arr::get($_POST, 'comments'));
        $news = HTML::chars(Arr::get($_POST, 'news'));
        $categories = HTML::chars(Arr::get($_POST, 'categories'));
        $createDraft = HTML::chars(Arr::get($_POST, 'createDraft'));

        if (empty($public)) $public = 0;
        if (empty($comments)) $comments = 0;
        if (empty($news)) $news = 0;
        if (empty($createDraft)) $createDraft = 0;

        if (!is_numeric($this->request->param('id')))
            $id = 0;
        else
            $id = $this->request->param('id');


        $level[0]['description'] = __("Zarządzanie treścią");
        $level[0]['path'] = 'page/admin';
        $level[1]['description'] = __("Zapis artykułu");
        $level[1]['path'] = 'page/admin';

        $this->prepare_menu($menu);

        $menu[0][3] = '';
        $menu[0][5] = '';
        $menu[0][7] = '';
        $menu[0][9] = '';

        $page = $mpage->setPage($id, $title, $content, $author_id, $public, $comments, $news, $categories);

        if ($createDraft > 0) {
            $draft = $page->createDraft();
            $this->request->redirect('index.php/page/admin/edit/' . $draft->id);
        }
        $content = __("<h1>Zapisano artykuł</h1>");
        $content = $content . View::factory('page/edited')->render();

        $view = View::factory('admin/panel');
        $view->set('content', $content);
        $view->set('level', $level);
        $view->set('menu', $menu);
        $this->response->body($view->render());


    }


    public function action_list()
    {
        if (!(Auth::instance()->logged_in('admin') || Auth::instance()->logged_in('redaktor')))
            $this->request->redirect('index.php/admin/login');

        $content = __("<h1>Lista artykułów</h1>");

        $level[0]['description'] = __("Zarządzanie treścią");
        $level[0]['path'] = 'page/admin';
        $level[1]['description'] = __("Lista artykułów");
        $level[1]['path'] = 'page/admin/list';

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

        if (is_numeric($this->request->param('id')) && $this->request->param('id') > 0)
            $page = $this->request->param('id');

        // find matching pages
        if (empty($search)) {
            $page_total = $mpage->getAllPages($page_size, 0);
            $pages = $mpage->getAllPages($page_size, $page);
            $search = '';
        } else {
            $page_total = $mpage->getAllPagesSimpleSearch($page_size, 0, $search);
            $pages = $mpage->getAllPagesSimpleSearch($page_size, $page, $search);
        }

        $author = "";
        $muser = new Model_User;
        foreach ($pages as $pg)
            $author[$pg->id] = $muser->getUser($pg->author_id)->username;

        $content = $content . View::factory('page/list')
            ->set('pages', $pages)
            ->set('page_number', $page)
            ->set('search', $search)
            ->set('author', $author)
            ->set('page_total', $page_total)->render();

        $view = View::factory('admin/panel');
        $view->set('content', $content);
        $view->set('level', $level);
        $view->set('menu', $menu);
        $this->response->body($view->render());
    }

    public function action_delete()
    {
        if (!(Auth::instance()->logged_in('admin') || Auth::instance()->logged_in('redaktor')))
            $this->request->redirect('index.php/admin/login');

        if (is_numeric($this->request->param('id'))) {

            // get information about user
            $mpage = new Model_Page;
            $page = $mpage->getPage($this->request->param('id'));

            $content = __("<h1> :title - artykuł</h1>", array(':title' => $page->title));

            $level[0]['description'] = __("Zarządzanie treścią");
            $level[0]['path'] = 'page/admin';
            $level[1]['description'] = __("Lista artykułów");
            $level[1]['path'] = 'page/admin/list';
            $level[2]['path'] = 'page/admin/edit/' . $this->request->param('id');
            $level[2]['description'] = __("Artykuł :title", array(':title' => $page->title));
            $level[3]['path'] = 'page/admin/delete/' . $this->request->param('id');
            $level[3]['description'] = __("Usuń artykuł");


            $this->prepare_menu($menu);

            $menu[0][3] = '';
            $menu[0][5] = '';
            $menu[0][7] = '';
            $menu[0][9] = '';

            // send information about user to view
            $content = $content . View::factory('page/confirm_delete')
                ->set('page', $page)
                ->render();

            $view = View::factory('admin/panel');
            $view->set('content', $content);
            $view->set('level', $level);
            $view->set('menu', $menu);
            $this->response->body($view->render());

        }
    }

    public function action_deleteConfirmed()
    {
        if (!(Auth::instance()->logged_in('admin') || Auth::instance()->logged_in('redaktor')))
            $this->request->redirect('index.php/admin/login');

        $content = __("<h1>Artykuł usunięty</h1>");
        $level[0]['description'] = __("Zarządzanie treścią");
        $level[0]['path'] = 'page/admin';
        $level[1]['description'] = __("Usunięto artykuł");
        $level[1]['path'] = 'page/admin';

        $this->prepare_menu($menu);

        $menu[0][7] = '';
        $menu[0][9] = '';


        $id = $this->request->param('id');
        if ($id != 0) {
            $mpage = new Model_Page;
            $mpage->deletePage($id);
        }


        $content = $content . View::factory('page/deleted')->render();

        $view = View::factory('admin/panel');
        $view->set('content', $content);
        $view->set('level', $level);
        $view->set('menu', $menu);
        $this->response->body($view->render());

    }

    public function action_leaveParent()
    {
        if (!(Auth::instance()->logged_in('admin') || Auth::instance()->logged_in('redaktor')))
            $this->request->redirect('index.php/admin/login');

        if (is_numeric($this->request->param('id'))) {
            // get information about user
            $mpage = new Model_Page;
            $page = $mpage->getPage($this->request->param('id'));
            $page->leaveParent();

        }
        $this->request->redirect('index.php/page/admin/edit/' . $this->request->param('id'));
    }


};


?>

