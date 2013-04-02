<p></p>
<table>
	<?php	
			echo '
					<form enctype="multipart/form-data" action="'.url::site('group/admin/save'.(isset($group) ? '/'.$group->id : '')).'" method="POST">
					<tr><td class="col">'.__('ID').'</td><td>'.(isset($group) ? $group->id : '-').'</td></tr>
					<tr><td class="col">'.__('Nazwa').'</td><td><input type="text" name="name" value="'.(isset($group) ? $group->name : '').'" /></td></tr>
					<tr><td class="col">'.__('Opis').'</td><td><textarea name="description" rows="2" cols="50">'.(isset($group) ? $group->description : '').'</textarea></td></tr>
					<tr><td class="col"></td><td><input type="submit" value="'.__('OK').'"></td></tr>		
					</form>
				 ';
		
	?>
</table>		
