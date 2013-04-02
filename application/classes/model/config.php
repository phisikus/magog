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
 
class Model_Config extends ORM {
	
	 protected $_table_columns = array(
        'id' => array('type' => 'int', 'is_nullable' => false),
        'website' => array('type' => 'string', 'is_nullable' => true),
        'module' => array('type' => 'string', 'is_nullable' => false),
        'property' => array('type' => 'string', 'is_nullable' => false),
        'value' => array('type' => 'string', 'is_nullable' => true),
    );
    
   public $_table_name = 'config';
   
   public function getDefaultTemplate()
   {
		$tmp = ORM::factory('config')->where('property','=','default')->find();
		return $tmp->value;
   }
   
   public function setDefaultTemplate($tmp)
   {
	   $template = ORM::factory('config')->where('property','=','default')->find();
	   $template->module = "template";
	   $template->property = "default";
	   $template->value = $tmp;
	   $template->save();
	   
   }
   
   public function getConfig($module,$property)
   {
	   $tmp = ORM::factory('config')->where('module','=',$module)->where('property','=',$property)->find();
	   return $tmp->value;
   }
   
   public function setConfig($module,$property,$value)
   {
	   $tmp = ORM::factory('config')->where('module','=',$module)->where('property','=',$property)->find();
	   $tmp->module = $module;
	   $tmp->property = $property;
	   $tmp->value = $value;
	   $tmp->save();
   }
  
}

?>

