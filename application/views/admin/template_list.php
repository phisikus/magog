<p>
	<?php echo __('Wybierz domyślny szablon z listy poniżej.'); ?>
</p>
<table>
	<thead>
	<tr>
		<th><?php echo __('ID'); ?></th>	
		<th><?php echo __('Nazwa szablonu'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php
	$id = 0;
	if(isset($templates))
		foreach($templates as $uz)
		{
			$id++;
			echo '
			<tr>
				<td class="no"><a href="'.url::site('skins/admin/set/'.HTML::chars($uz)).'">'.$id.'</a></td>
				<td><a href="'.url::site('skins/admin/set/'.HTML::chars($uz)).'">'.$uz.'</a> '.(!empty($def_skin) ? ($def_skin == $uz ? '('.__('Aktywny').')' : '') : '').'</td>
			</tr>';	
		}
	?>
	</tbody>
</table>		
