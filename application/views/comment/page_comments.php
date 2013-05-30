<p>
	<?php echo __('Poniżej znajdują się komentarze do artykułu " :title "',array(":title" => $page->title)); ?>
</p>
<table>
	<thead>
	<tr>
		<th><?php echo __('ID'); ?></th>
		<th><?php echo __('Treść'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Użytkownik'); ?></th>		
		<th><?php echo __('Opcje'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php
	
	if(isset($comments))
		foreach($comments as $uz)
			echo '
			<tr>
				<td class="no"><a href="'.url::site('comment/admin/show/'.$uz->id).'">'.$uz->id.'</a></td>
				<td><a href="'.url::site('comment/admin/show/'.$uz->id).'">'.text::limit_chars($uz->content,40,'...',TRUE).'</a></td>
				<td><a href="'.url::site('comment/admin/show/'.$uz->id).'">'.date('d-m-Y, G:i',$uz->date).'</a></td>
				<td><a href="'.url::site('user/admin/profile/'.$uz->author_id).'">'.$uz->author_username.'</a></td>
				<td class="delete_button"><p id="critical"><a href="'.url::site('comment/admin/deleteP/'.$uz->id.'='.$page->id).'">'.__('Usuń').'</a></p></td>
			</tr>';	
	?>
	</tbody>
</table>		
<p>
<?php
	// Show pagination elements
	if($page_total > 1)
	{
		echo __('Strona');
		echo ' ('.$page_number.' '.__('z').' '.$page_total.')'; 
		
		// left arrow - previous page
		if($page_number > 1) 
		{
			echo '<a href="'.url::site('comment/admin/page_comment/'.$page->id.'='.($page_number-1)).(!empty($search) ? '?search='.$search : '').'" id="arrow">&larr;</a>';
		}
		
		// right arrow - next page
		if($page_number < $page_total) 
		{
			echo '<a href="'.url::site('comment/admin/page_comment/'.$page->id.'='.($page_number+1)).(!empty($search) ? '?search='.$search : '').'" id="arrow">&rarr;</a>';
		}	
	}
?>
</p>
