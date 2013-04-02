<p>
	<?php echo __('Wybierz jeden z komentarzy i usuń go przyciskiem po prawej stronie.'); ?>
</p>
<table>
	<thead>
	<tr>
		<th><?php echo __('ID'); ?></th>
		<th><?php echo __('Treść'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Użytkownik'); ?></th>
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
				<td class="delete_button"><p id="critical"><a href="'.url::site('comment/admin/deleteL/'.$uz->id).'">'.__('Usuń').'</a></p></td>
			</tr>';	
	?>
	</tbody>
</table>		
