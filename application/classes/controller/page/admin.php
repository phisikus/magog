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
require("application/classes/controller/page/guard/websocket.php");

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

    /*
     * "Guard" functionality is used to inform about parallel editing of same article/news.
     *  Browser can use either websocket client or AJAX to update it's status and get list of users editing article.
     */

    // Random hash for "guard" websocket function
    protected function rand_hash($len = 10)
    {
        $str = '';
        for ($i = 0; $i < $len; $i++) {
            $str = $str . chr(rand(40, 120));
        }
        $hash = crypt($str, "rand_hash");
        return $hash;
    }

    // send "hash" to browser for "guard" function communication
    public function action_getGuardHash()
    {
        $tab['uname'] = Auth::instance()->get_user()->username;
        $tab['hash'] = $this->rand_hash();

        $group = $_POST['group'];
        $ws = new WebSocketController($group);
        $ws->register($tab['uname'], $tab['hash']);

        $this->response->headers('Content-Type', 'application/json');
        $this->response->body(json_encode($tab));
    }

    // if websocket is not available for user, this action is used as proxy
    public function action_sendGuardUpdate()
    {
        $user = $_POST['uname'];
        $hash = $_POST['hash'];
        $group = $_POST['group'];

        $ws = new WebSocketController($group);
        $list = $ws->get_update($user, $hash);

        $this->response->headers('Content-Type', 'application/json');
        $this->response->body($list);
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


        $view = View::factory('admin/panel');

        // send information about user to view
        if ($id != 0) {
            $content = $content . View::factory('page/edit')
                ->set('page', $page)->render();

            // Guard functionality test
            $ws = new SimpleWebSocketClient();
            if ($ws->isOpen) {
                $otherMenu = View::factory('page/guard')->render();
                $view->set('articleId', $page->id);
                $view->set('userName', Auth::instance()->get_user()->username);
                $view->set('websocket', 1);
                $view->set('otherMenu', $otherMenu);
            }

        } else
            $content = $content . View::factory('page/edit')->render();


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


        if ($createDraft > 0) {
            // Find article, create draft from previous content
            // save new information to draft version of article
            // redirect to draft without changing base article
            if ($id > 0) {
                $page = $mpage->getPage($id);
                $draft = $page->createDraft();
                $mpage->setPage($draft->id, __('Szkic') . ': ' . $title, $content, $author_id, 0, $comments, $news, $categories);
                $this->request->redirect('index.php/page/admin/edit/' . $draft->id);
            }
        } else {
            //save article
            $mpage->setPage($id, $title, $content, $author_id, $public, $comments, $news, $categories);
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


    public function action_listJson()
    {
        $mpage = new Model_Page;
        $muser = new Model_User;

        // get search keyword
        $search = Arr::get($_POST, 'search');
        $page = Arr::get($_POST, 'page');
        $page_size = Arr::get($_POST, 'page_size');

        if (empty($page_size)) $page_size = 10000;
        if (empty($page)) $page = 1;

        $search = HTML::chars($search);
        $page = HTML::chars($page);
        $page_size = HTML::chars($page_size);

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

        $i = 0;
        $pagesTO = array();
        foreach ($pages as $p) {
            $pagesTO[$i]["id"] = $p->id;
            $pagesTO[$i]["title"] = $p->title;
            $pagesTO[$i]["short_title"] = $p->short_title;
            $pagesTO[$i]["date"] = date('d-m-Y, G:i', $p->date);
            $pagesTO[$i]["author_id"] = $p->author_id;
            $pagesTO[$i]["author_name"] = $muser->getUser($p->author_id)->username;
            $i++;
        }

        $output["pages"] = $pagesTO;
        $output["page_number"] = $page;
        $output["page_total"] = $page_total;
        $this->response->headers('Content-Type','application/json');
        $this->response->headers('Access-Control-Allow-Origin','*');
        $this->response->headers('Access-Control-Allow-Headers','x-http-method-override');
        $this->response->headers('Access-Control-Allow-Methods','GET, HEAD');
        $this->response->body(json_encode($output));
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

