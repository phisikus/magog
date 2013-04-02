<p>
	<?php echo __('Wybierz grupę z listy aby obejrzeć szczegółowe dane badź przeprowadzić inne opracje.'); ?>
</p>
<table>
	<thead>
	<tr>
		<th><?php echo __('ID'); ?></th>
		<th><?php echo __('Nazwa'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php
	
	if(isset($groups))
		foreach($groups as $uz)
			echo '
			<tr>
				<td class="no"><a href="'.url::site('group/admin/profile/'.$uz->id).'">'.$uz->id.'</a></td>
				<td><a href="'.url::site('group/admin/profile/'.$uz->id).'">'.$uz->name.'</a></td>
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
			echo '<a href="'.url::site('group/admin/list/'.($page_number-1)).'" id="arrow">&larr;</a>';
		}
		
		// right arrow - next page
		if($page_number < $page_total) 
		{
			echo '<a href="'.url::site('group/admin/list/'.($page_number+1)).'" id="arrow">&rarr;</a>';
		}	
	}
?>
</p>
