<?php

/*
 * menu.php
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

class Model_Menu extends ORM {

	 protected $_table_columns = array(
        'id' => array('type' => 'int', 'is_nullable' => false),
        'text' => array('type' => 'string', 'is_nullable' => true),
		'parent_id' => array('type' => 'int', 'is_nullable' => true),
		'link' => array('type' => 'string', 'is_nullable' => true),
		'enabled' => array('type' => 'int', 'is_nullable' => false),
		'visible' => array('type' => 'int', 'is_nullable' => false)
    );

   public $_table_name = 'menu';
   public $_has_many = array('entrys' => array('model' => 'menu','foreign_key' => 'parent_id'));

   public function createMenu($name)
   {
	   $menu = ORM::factory('menu');
	   $menu->text = $name;
	   $menu->link = '';
	   $menu->enabled = 1;
	   $menu->visible = 1;
	   $menu->save();

	   return $menu->id;
   }

   public function deleteMenuOrEntry($id)
   {
	   $menu = ORM::factory('menu')
			->where('id','=',$id)
			->find();

	   $menu->delete();
   }

   public function addMenuEntry($id,$text,$link)
   {
	   $menu_parent = ORM::factory('menu')->where('id','=',$id)->find();

	   $menu = ORM::factory('menu');
	   $menu->text = $text;
	   $menu->parent_id = $id;
	   $menu->link = $link;
	   $menu->enabled = 1;
	   $menu->visible = 1;
	   $menu->save();

	   return $menu->id;
   }

   public function saveMenuEntry($id,$text,$link,$parent_id,$enabled,$visible)
   {
	   if($id == 0)
			$menu = ORM::factory('menu');
		else
			$menu = ORM::factory('menu')->where('id','=',$id)->find();

	   $menu->text = $text;

	   if(!empty($parent_id))
		$menu->parent_id = $parent_id;

	   $menu->link = $link;
	   $menu->enabled = $enabled;
	   $menu->visible = $visible;
	   $menu->save();

   }

   public function setEnablance($id,$val)
   {
	   	   $menu = ORM::factory('menu')->where('id','=',$id)->find();
	   	   $menu->enable = $val;
	   	   $menu->save();
   }

   public function setVisibility($id,$val)
   {
	   	   $menu = ORM::factory('menu')->where('id','=',$id)->find();
	   	   $menu->visible = $val;
	   	   $menu->save();
   }


   public function hasSubmenu($id)
   {
	   return (ORM::factory('menu')
				->where('parent_id','=',$id)
				->count_all() > 0 ? true : false);
   }

   public function getMenuEntry($id)
   {
	   return ORM::factory('menu')->where('id','=',$id)->find();

   }

   public function getMenuByName($name)
   {
	   return ORM::factory('menu')->where('text','=',$name)->find();

   }



   public function getMenuList()
   {
		return ORM::factory('menu')->where('parent_id','=', NULL)->find_all();
   }

   public function getMenu($id,&$no,$level,&$tab)
   {
	   $menu = ORM::factory('menu')->where('id','=',$id)->find();
	   $submenu = $menu->entrys->order_by('id','asc')->find_all();

	   $tab[$no] = array($menu,$level);

	      foreach($submenu as $sm)
		   {
			   $this->getMenu($sm->id,++$no,$level+1,$tab);
		   }
   }

   public function getAllMenus()
   {
	   $res = ORM::factory('menu')->where('parent_id','=', NULL)->find_all();
	   $i = 0;
	   $result = '';
	   foreach($res as $re)
	   {
		   $j = 0;
			$this->getMenu($re->id,$j,0,$result[$i++]);
	   }

	   return $result;
   }

   public function getAllMenuEntrys()
   {
	  return ORM::factory('menu')->find_all();
   }

   public function swapMenuEntry($id1,$id2)
   {
	      $menu1 = ORM::factory('menu')->where('id','=',$id1)->find();
	      $menu2 = ORM::factory('menu')->where('id','=',$id2)->find();

	      // Swap two elements position
	      list($menu1->link, $menu2->link) = array($menu2->link, $menu1->link);
	      list($menu1->text, $menu2->text) = array($menu2->text, $menu1->text);
	      list($menu1->enabled, $menu2->enabled) = array($menu2->enabled, $menu1->enabled);
	      list($menu1->visible, $menu2->visible) = array($menu2->visible, $menu1->visible);

	      $menu1->save();
	      $menu2->save();
   }

   public function setHigher($id)
   {
	   $menu_higher = ORM::factory('menu')->where('id','<',$id)->order_by('id','desc')->find();
	   if(!empty($menu_higher->id))
			$this->swapMenuEntry($id,$menu_higher->id);
   }

   public function setLower($id)
   {
	   $menu_lower = ORM::factory('menu')->where('id','>',$id)->order_by('id','asc')->find();
	   if(!empty($menu_lower->id))
			$this->swapMenuEntry($id,$menu_lower->id);
   }

   public function setRight($id)
   {
	   $menu_right = ORM::factory('menu')->where('id','<',$id)->order_by('id','desc')->find();
	   if(!empty($menu_right->id))
	   {
		   $menu = ORM::factory('menu')->where('id','=',$id)->find();
		   $menu->parent_id = $menu_right->id;
		   $menu->save();
	   }
   }

   public function setLeft($id)
   {
	   $menu = ORM::factory('menu')->where('id','=',$id)->find();
	   $menu_left = ORM::factory('menu')->where('id','=',$menu->parent_id)->order_by('id','desc')->find();
	   if(!empty($menu_left->id))
	   {
		   $menu->parent_id = $menu_left->parent_id;
		   $menu->save();
	   }
   }



}

?>

