<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php @printf($title); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="<?php echo URL::base(); ?>application/views/index/default/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
  <div id="banner">
    <h1><?php @printf($title); ?></h1>
  </div>
  <div id="navcontainer">
	  <form action="<?php echo url::site('show/news/1=0=0'); ?>" METHOD="GET">
		<input name="search">
		<input type="submit" value="<?php echo __('Szukaj'); ?>" />
      </form>

    <ul id="navlist">
      <li><a href="">HOMEPAGE</a></li>      
    </ul>
    
  </div>
  <div id="sidebar">
    <div class="navlist">
	<?php
	
	if(is_array($menus))
	{
		
		foreach($menus as $tab)
		{
			 $last_level = 0;
			 $first = true;
			 echo '<ul class="menu-list">';
			 foreach($tab as $tb)
			 {
				 
				 
					
				 if($tb[1] > $last_level)
					echo '<ul>
					';
				if($tb[1] < $last_level)	
					echo '</ul>
					';
			
				if($first)
				{
					echo '<li id="listItem_'.$tb[0]->id.'"><a href="'.$tb[0]->link.'"><b>'.$tb[0]->text.'</b></a>
					';
					$first = false;
				} else	
					echo '<li id="listItem_'.$tb[0]->id.'"><a href="'.$tb[0]->link.'">'.$tb[0]->text.'</a>
					</li>
					';
			
					
				 $last_level = $tb[1];
				 
			 }
			 while(($last_level--) > 0)
				echo '</ul>
				';
			 echo '</ul>';
		 }
		
	} 
	
	echo '<ul class="menu-list">';
	$last_year = 0;
	
	$months = array(__('styczeń'),__('luty'),__('marzec'),
					__('kwiecień'),__('maj'),__('czerwiec'),
					__('lipiec'),__('sierpień'),__('wrzesień'),
					__('październik'),__('listopad'),__('grudzień'));

	foreach($archives as $arc)
	{
		if($arc->year != $last_year)
		{
			if($last_year == 0) echo '<li><b>'.$arc->year.'</b></li><ul>';
			if($last_year != 0) echo '</ul><li><b>'.$arc->year.'</b></li><ul>';
		}
		echo '<li><a href="'.url::site('show/news/1='.$arc->month.'='.$arc->year).'">';
		echo $months[$arc->month-1].' ('.$arc->how.')</a></li>';
		
		$last_year = $arc->year;
		
	}
	if($last_year != 0) echo '</ul>';
	echo '</ul>';
	  
      ?>
      </ul>
    </div>
  </div>
  <div id="content">
   <?php @print($content); ?>
  </div>
  <div id="container-foot">
    <div id="footer">
      <p>Copyright</p>
    </div>
  </div>
</div>
</body>
</html>
