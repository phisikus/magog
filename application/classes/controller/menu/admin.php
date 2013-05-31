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

class Controller_Menu_Admin extends Controller_Main
{

    function prepare_menu(&$menu)
    {
        $menu[0][0] = __('Panel');
        $menu[0][1] = '';
        $menu[0][2] = __('Profil');
        $menu[0][3] = 'user/user/index';
        $menu[0][4] = __('Wyloguj');
        $menu[0][5] = 'admin/logout';
    }

    public function before()
    {
        parent::before();
        if (!(Auth::instance()->logged_in('admin')))
            $this->request->redirect('index.php/admin/login');
    }

    public function action_index()
    {
        $content = __("<h1>Konfiguracja menu</h1>");

        $level[0]['description'] = __("Zarządzanie menu");
        $level[0]['path'] = 'menu/admin';

        $this->prepare_menu($menu);

        $mmenu = new Model_Menu;
        $menus = $mmenu->getAllMenus();
        $am = $mmenu->getAllMenuEntrys();

        $mpage = new Model_Page;
        $ap = $mpage->getAllArticlesId();


        if (is_numeric($this->request->param('id'))) {
            $entry = $mmenu->getMenuEntry($this->request->param('id'));

            $content = $content . View::factory('menu/admin')
                ->set('menus', $menus)
                ->set('all_menus', $am)
                ->set('all_pages', $ap)
                ->set('entry', $entry)
                ->render();
        } else
            $content = $content . View::factory('menu/admin')
                ->set('menus', $menus)
                ->set('all_menus', $am)
                ->set('all_pages', $ap)
                ->render();

        $view = View::factory('admin/panel');
        $view->set('content', $content);
        $view->set('level', $level);
        $view->set('menu', $menu);
        $this->response->body($view->render());

    }

    public function action_order()
    {
        $this->response->headers('Content-Type', 'application/json');
        $menus = json_decode($this->request->body());

        $mmenu = new Model_Menu();
        $mmenu->updateMenuStructure($menus,null);

        $response["status"] = "ok";
        $this->response->body(json_encode($response));

    }

    public function action_delete()
    {
        $mmenu = new Model_Menu;
        $mmenu->deleteMenuOrEntry($this->request->param('id'));
        $this->request->redirect('index.php/menu/admin');
    }

    public function action_save()
    {
        $mmenu = new Model_Menu;
        $id = $this->request->param('id');

        if (Arr::get($_POST, 'page_selected') != '*') {
            if (Arr::get($_POST, 'page_selected') == 0)
                $url = url::site('show/news') . '/1=0=0';
            else
                $url = url::site('show/page') . '/' . HTML::chars(Arr::get($_POST, 'page_selected'));
        } else
            $url = HTML::chars(Arr::get($_POST, 'link'));


        $mmenu->saveMenuEntry($id, HTML::chars(Arr::get($_POST, 'text')),
            $url,
            HTML::chars(Arr::get($_POST, 'parent_id')),
            1, 1);
        $this->request->redirect('index.php/menu/admin');

    }


}


?>

