<p>
	<?php echo __('Poniżej znajdują się użytkownicy należący do tej grupy.
	Aby ich odłączyć wybierz opcję "Opuść". Dodanie użytkownika do listy można przeprowadzić z poziomu edycji profilu użytkownika'); ?>
</p>
<table>
	<thead>
	<tr>
		<th><?php echo __('ID'); ?></th>
		<th><?php echo __('Login'); ?></th>
		<th><?php echo __('Nazwa użytkownika'); ?></th>
		<th><?php echo __('Opcje'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php
	
	if(isset($users))
		foreach($users as $uz)
			echo '
			<tr>
				<td class="no"><a href="'.url::site('user/admin/profile/'.$uz->id).'">'.$uz->id.'</a></td>
				<td><a href="'.url::site('user/admin/profile/'.$uz->id).'">'.$uz->username.'</a></td>
				<td><a href="'.url::site('user/admin/profile/'.$uz->id).'">'.$uz->full_name.'</a></td>
				<td class="delete_button"><a href="'.url::site('group/admin/leaveG/'.$group_id.'='.$uz->id).'">'.__('Opuść').'</a></td>
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
			echo '<a href="'.url::site('group/admin/manage/'.($group_id).'='.($page_number-1)).'" id="arrow">&larr;</a>';
		}
		
		// right arrow - next page
		if($page_number < $page_total) 
		{
			echo '<a href="'.url::site('group/admin/manage/'.($group_id).'='.($page_number+1)).'" id="arrow">&rarr;</a>';
		}	
	}
?>
</p>
