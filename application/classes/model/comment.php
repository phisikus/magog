<?php

/*
 * comment.php
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
 
class Model_Comment extends ORM {
	
	 protected $_table_columns = array(
        'id' => array('type' => 'int', 'is_nullable' => false),
        'author_id' => array('type' => 'int', 'is_nullable' => false),
        'author_username' => array('type' => 'string', 'is_nullable' => false),
        'parent_page' => array('type' => 'int', 'is_nullable' => false),
        'parent_comment' => array('type' => 'int', 'is_nullable' => true),
        'content' => array('type' => 'string', 'is_nullable' => true),
        'date' => array('type' => 'int', 'is_nullable' => false)
    );
    
   public $_table_name = 'comments';
   protected $_belongs_to = array('page' => array('foreign_key' => 'parent_page'));
   
 public function getAllComments($page_size,$page_number)
   {
	   if($page_number == 0)
			return ceil(ORM::factory('comment')->count_all()/$page_size);
		else
		{
			$offset = $page_size*($page_number-1);
			return ORM::factory('comment')->limit($page_size)->offset($offset)->order_by('date','desc')->find_all();
		};
   }
   
    
   public function getAllCommentsSimpleSearch($page_size,$page_number,$se)
   {
		  $se = strToLower($se);
		  
		  if($page_number == 0)
		  {
			  $result = ORM::factory('comment')
			  ->where('author_username','like','%'.$se.'%')->order_by('date','desc')->find_all();
			  if(count($result) == 0)
			  {
				$result = ORM::factory('comment')->where('content','like','%'.$se.'%')->find_all();
			  }
			  return ceil(count($result)/$page_size);
		  } else
		  {
			  $offset = $page_size*($page_number-1);
			  $result = ORM::factory('comment')->where('author_username','like','%'.$se.'%')
						->limit($page_size)->offset($offset)->
						order_by('date','desc')->find_all();
			  if(count($result) == 0)
			  {
				$result = ORM::factory('comment')->where('content','like','%'.$se.'%')
							->limit($page_size)->offset($offset)
							->order_by('date','desc')->find_all();
			  }
			  return $result;
		  };
		
   }

   
   public function getCommentsOfPage($page_size,$page_number,$page_no)
   {
	   if($page_number == 0)
			return ceil(ORM::factory('comment')->where('parent_page','=',$page_no)->count_all()/$page_size);
		else
		{
			$offset = $page_size*($page_number-1);
			return ORM::factory('comment')->
			where('parent_page','=',$page_no)->limit($page_size)
			->offset($offset)->order_by('date','desc')->find_all();
		};
   }
   
   public function getAllCommentsOfPage($page_no)
   {
	   return ORM::factory('comment')->where('parent_page','=',$page_no)->find_all();
   }
   
   public function getComment($id)
   {
	   if($id != 0)
			return ORM::factory('comment')->where('id','=',$id)->find();
   }
 
   
   public function setComment($parent_page, $parent_comment, $author_id, $author_username, $content)
   {
	   $comment = ORM::factory('comment');
	   $comment->parent_page = $parent_page;
	   $comment->parent_comment = $parent_comment;	   	
	   $comment->author_id = $author_id;
	   $comment->author_username = $author_username;
	   $comment->content = $content;
	   $comment->date = time();
	   $comment->save();
			
   }
   
   public function deleteComment($id)
   {
	   $page = ORM::factory('comment')->where('id','=',$id)->find();
	   $page->delete();
   }
   
  
  
}

?>

