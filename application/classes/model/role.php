<?php
/*
 * role.php
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


class Model_Role extends Model_Auth_Role
{

    protected $_table_columns = array(
        'id' => array('type' => 'int', 'is_nullable' => false),
        'name' => array('type' => 'string', 'is_nullable' => false),
        'description' => array('type' => 'string', 'is_nullable' => false),
    );
    protected $has_and_belongs_to_many = array('users');
    public $_table_name = 'roles';


    public function getRole($id)
    {
        return ORM::factory('role')->where('id', '=', $id)->find();
    }

    public function getAllRoles($page_size, $page_number)
    {
        if ($page_number == 0)
            return ceil(ORM::factory('role')->count_all() / $page_size);
        else {
            $offset = $page_size * ($page_number - 1);
            return ORM::factory('role')->limit($page_size)->offset($offset)->find_all();
        }
    }

    public function hasUserRole($id, $idr)
    {
        if ($id != 0) {
            $userz = ORM::factory('user')->where('id', '=', $id)->find();
            return $userz->has('roles', $idr);
        }

    }

    public function getUserRoles($id)
    {
        if ($id != 0) {
            $userz = ORM::factory('user')->where('id', '=', $id)->find();
            return $userz->roles->find_all();
        }
    }

    public function setRoleProfile($id, $name, $description)
    {
        if ($id != 0) $rolez = ORM::factory('role')->where('id', '=', $id)->find();
        else $rolez = ORM::factory('role');
        $rolez->name = $name;
        $rolez->description = $description;
        $rolez->save();
    }

    public function deleteRole($id)
    {
        if ($id != 0) {
            $role = ORM::factory('role')->where('id', '=', $id)->find();
            $role->delete();
        }
    }

    public function getRoleUsers($idr, $page_size, $page_number)
    {
        if ($page_number == 0)
            return ceil(ORM::factory('role')->where('id', '=', $idr)->find()->users->count_all() / $page_size);
        else {
            $offset = $page_size * ($page_number - 1);
            return ORM::factory('role')->where('id', '=', $idr)->find()->users->limit($page_size)->offset($offset)->find_all();
        };

    }

}
