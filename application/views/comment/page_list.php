<p>
	<?php echo __('Wybierz artykuł z listy aby aby obejrzeć powiązane z nim komentarze.'); ?>
</p>
<table>
	<thead>
	<tr>
		<th colspan="5" id="search">
			<form action="<?php echo url::site('comment/admin/page_list'); ?>" method="GET">			
				<?php echo __('Szukaj'); ?> : <input type="text" name="search" <?php if(isset($search)) echo 'value="'.$search.'"'; ?> /> 
			</form>
		</th>
	</tr>

	<tr>
		<th><?php echo __('ID'); ?></th>
		<th><?php echo __('Tytuł'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Liczba komentarzy'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php
	
	if(isset($pages))
		foreach($pages as $uz)
			echo '
			<tr>
				<td class="no"><a href="'.url::site('comment/admin/page_comment/'.$uz->id).'">'.$uz->id.'</a></td>
				<td><a href="'.url::site('comment/admin/page_comment/'.$uz->id).'">'.$uz->title.'</a></td>
				<td><a href="'.url::site('comment/admin/page_comment/'.$uz->id).'">'.date('d-m-Y',$uz->date).'</a></td>
				<td><a href="'.url::site('comment/admin/page_comment/'.$uz->id).'">'.(isset($nofcomments) ? $nofcomments[$uz->id] : '').'</a></td>
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
			echo '<a href="'.url::site('comment/admin/page_list/'.($page_number-1)).(!empty($search) ? '?search='.$search : '').'" id="arrow">&larr;</a>';
		}
		
		// right arrow - next page
		if($page_number < $page_total) 
		{
			echo '<a href="'.url::site('comment/admin/page_list/'.($page_number+1)).(!empty($search) ? '?search='.$search : '').'" id="arrow">&rarr;</a>';
		}	
	}
?>
</p>
