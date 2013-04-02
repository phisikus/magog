<p>
	<?php echo __('Wybierz artykuł z listy aby edytować jego treść bądź przeprowadzić inne operacje.'); ?>
</p>
<table>
	<thead>
	<tr>
		<th colspan="5" id="search">
			<form action="<?php echo url::site('page/admin/list'); ?>" method="GET">			
				<?php echo __('Szukaj'); ?> : <input type="text" name="search" <?php if(isset($search)) echo 'value="'.$search.'"'; ?> /> 
			</form>
		</th>
	</tr>

	<tr>
		<th><?php echo __('ID'); ?></th>
		<th><?php echo __('Tytuł'); ?></th>
		<th><?php echo __('Tytuł skrócony'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Autor'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php
	
	if(isset($pages))
		foreach($pages as $uz)
			echo '
			<tr>
				<td class="no"><a href="'.url::site('page/admin/edit/'.$uz->id).'">'.$uz->id.'</a></td>
				<td><a href="'.url::site('page/admin/edit/'.$uz->id).'">'.$uz->title.'</a></td>
				<td><a href="'.url::site('page/admin/edit/'.$uz->id).'">'.$uz->short_title.'</a></td>
				<td><a href="'.url::site('page/admin/edit/'.$uz->id).'">'.date('d-m-Y, G:i',$uz->date).'</a></td>
				<td><a href="'.url::site('user/admin/profile/'.$uz->author_id).'">'.(isset($author) ? $author[$uz->id] : '').'</a></td>
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
			echo '<a href="'.url::site('page/admin/list/'.($page_number-1)).(!empty($search) ? '?search='.$search : '').'" id="arrow">&larr;</a>';
		}
		
		// right arrow - next page
		if($page_number < $page_total) 
		{
			echo '<a href="'.url::site('page/admin/list/'.($page_number+1)).(!empty($search) ? '?search='.$search : '').'" id="arrow">&rarr;</a>';
		}	
	}
?>
</p>
