<p>
	<?php echo __('Wybierz użytkownika z listy aby obejrzeć jego profil bądź przeprowadzić inne operacje.'); ?>
</p>
<table>
	<thead>
	<tr>
		<th colspan="4" id="search">
			<form action="<?php echo url::site('user/admin/list'); ?>" method="GET">			
				<?php echo __('Szukaj'); ?> : <input type="text" name="search" <?php if(isset($search)) echo 'value="'.$search.'"'; ?> /> 
			</form>
		</th>
	</tr>

	<tr>
		<th><?php echo __('ID'); ?></th>
		<th><?php echo __('Login'); ?></th>
		<th><?php echo __('Nazwa użytkownika'); ?></th>
		<th><?php echo __('Adres email'); ?></th>
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
				<td><a href="'.url::site('user/admin/profile/'.$uz->id).'">'.$uz->email.'</a></td>
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
			echo '<a href="'.url::site('user/admin/list/'.($page_number-1)).(!empty($search) ? '?search='.$search : '').'" id="arrow">&larr;</a>';
		}
		
		// right arrow - next page
		if($page_number < $page_total) 
		{
			echo '<a href="'.url::site('user/admin/list/'.($page_number+1)).(!empty($search) ? '?search='.$search : '').'" id="arrow">&rarr;</a>';
		}	
	}
?>
</p>
