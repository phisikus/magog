<?php

/*
 * page.php
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
 
class Model_Page extends ORM {
	
	 protected $_table_columns = array(
        'id' => array('type' => 'int', 'is_nullable' => false),
        'title' => array('type' => 'string', 'is_nullable' => false),
        'short_title' => array('type' => 'string', 'is_nullable' => false),
        'content' => array('type' => 'string', 'is_nullable' => false),
        'author_id' => array('type' => 'int', 'is_nullable' => false),
        'date' => array('type' => 'string', 'is_nullable' => false),
        'mod_date' => array('type' => 'string', 'is_nullable' => false),
        'public' => array('type' => 'string', 'is_nullable' => false),
        'comments' => array('type' => 'string', 'is_nullable' => false),
        'news' => array('type' => 'string', 'is_nullable' => false),
        'categories' => array('type' => 'string', 'is_nullable' => true),
        'lang' => array('type' => 'string', 'is_nullable' => true),        
    );
    
   public $_table_name = 'pages';
   protected $_has_many = array('page_comments' => array('model' => 'comment','foreign_key' => 'parent_page'));
   
   
   public function getAllPages($page_size,$page_number)
   {
	   if($page_number == 0)
			return ceil(ORM::factory('page')->count_all()/$page_size);
		else
		{
			$offset = $page_size*($page_number-1);
			return ORM::factory('page')->limit($page_size)->offset($offset)->order_by('date','desc')->find_all();
		};
   }
   
   public function getAll()
   {
	   return ORM::factory('page')->find_all();	   
   }
      
   public function getAllPagesSimpleSearch($page_size,$page_number,$se)
   {
		  $se = strToLower($se);
		  
		  if($page_number == 0)
		  {
			  $result = ORM::factory('page')->where('title','like','%'.$se.'%')
			  ->order_by('date','desc')->find_all();
			  return ceil(count($result)/$page_size);
		  } else
		  {
			  $offset = $page_size*($page_number-1);
			  $result = ORM::factory('page')->where('title','like','%'.$se.'%')
						->limit($page_size)->offset($offset)
						->order_by('date','desc')->find_all();
			  return $result;
		  };
		
   }
   
   public function getAllNewsSimpleSearch($page_size,$page_number,$month,$year,$se)
   {
		  $se = strToLower($se);
		  
		  if($page_number == 0)
		  {
			  if($month > 0)
				$result = ORM::factory('page')
					->where('news','=',1)
					->where('public','=',1)
					->where('date','>=',mktime(0,0,0,$month,1,$year))
					->where('date','<',mktime(0,0,0,$month+1,1,$year))
					->where('title','like','%'.$se.'%')
					->order_by('date','desc')
					->find_all();
			  else
				$result = ORM::factory('page')
					->where('news','=',1)
					->where('public','=',1)
					->where('title','like','%'.$se.'%')
					->order_by('date','desc')
					->find_all();
					
			  return ceil(count($result)/$page_size);
		  } else
		  {
			  $offset = $page_size*($page_number-1);
			  
			  if($month > 0)
				$result = ORM::factory('page')
					->where('news','=',1)
					->where('public','=',1)
					->where('date','>=',mktime(0,0,0,$month,1,$year))
					->where('date','<',mktime(0,0,0,$month+1,1,$year))
					->where('title','like','%'.$se.'%')
					->limit($page_size)
					->offset($offset)
					->order_by('date','desc')
					->find_all();
			  else
				$result = ORM::factory('page')
					->where('news','=',1)
					->where('public','=',1)
					->where('title','like','%'.$se.'%')
					->limit($page_size)
					->offset($offset)
					->order_by('date','desc')
					->find_all();
					
			  return $result;
		  };
		
   }
   
   public function getPage($id)
   {
	   if(is_numeric($id))
			return ORM::factory('page')->where('id','=',$id)->find();
		else
			return ORM::factory('page')->where('short_title','=',$id)->find();
   }
 
 
   
   public function setPage($id, $title, $content, $author_id, $public, $comments, $news, $categories)
   {
	   if($id == 0)
	   {
			$page = ORM::factory('page');
			$page->date = time();
			$page->mod_date = time();
		}
		else
		{
			$page = ORM::factory('page')->where('id','=',$id)->find();
			$page->mod_date = time();
		}
			
		$page->content = $content;
		$page->author_id = $author_id;
		$page->public = $public;
		$page->comments = $comments;
		$page->news = $news;
		$page->categories = $categories;
		$page->title = $title;
		$page->lang = i18n::lang();
		
		// create short title
		if( ORM::factory('page')
		->where('short_title','=',URL::title($title))
		->where('id','!=',$id)
		->count_all() > 0 )
		{
			$i = 1;
			$title_i = $title.'-'.$i;
			while(ORM::factory('page')
					->where('short_title','=',URL::title($title_i))
					->where('id','!=',$id)
					->count_all() != 0)
					{
						$title_i = $title.'-'.$i;
						$i++;						
					}
		
			$page->short_title = $title_i;	
			
		} else $page->short_title = URL::title($title);
		
		$page->save();		
			
			
   }
   
   public function deletePage($id)
   {
	   $page = ORM::factory('page')->where('id','=',$id)->find();
	   $page->delete();
   }
   
   public function getArchiveMenuList()
   {
		return ORM::factory('page')
	   ->select(array(DB::expr('MONTH(FROM_UNIXTIME(date))'),'month'))
	   ->select(array(DB::expr('YEAR(FROM_UNIXTIME(date))'),'year'))
	   ->select(array(DB::expr('COUNT(*)'),'how'))
	   ->where('news','=',1)
	   ->group_by('year','month')
	   ->order_by('year')
	   ->order_by('month')
	   ->find_all();
	 
   }
   
   public function getAllNewsId()
   {
	   return ORM::factory('page')
	   ->select(array('id','id'))
	   ->select(array('title','title'))
	   ->where('news','=',1)
	   ->find_all();
   }
   
   public function getAllArticlesId()
   {
	   return ORM::factory('page')
	   ->select(array('id','id'))
	   ->select(array('title','title'))
	   ->where('news','<>',1)
	   ->find_all();
   }
  
  
}

?>

