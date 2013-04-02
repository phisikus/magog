<p></p>
<table>
	<?php	
			echo '
					<form enctype="multipart/form-data" action="'.url::site('user/user/save').'" method="POST">
					<tr><td class="col">'.__('ID').'</td><td>'.(isset($user) ? $user->id : '-').'</td></tr>
					<tr><td class="col">'.__('Login').'</td><td>'.$user->username .'</td></tr>
					<tr><td class="col">'.__('Nazwa użytkownika').'</td><td><input type="text" name="full_name" value="'.(isset($user) ? $user->full_name : '').'" /></td></tr>
					<tr><td class="col">'.__('Adres email').'</td><td><input type="text" name="email" value="'.(isset($user) ? $user->email : '').'" /></td></tr>
					<tr><td class="col">'.__('Podpis').'</td><td><input type="text" name="signature" value="'.(isset($user) ? $user->signature : '').'" /></td></tr>
					<tr><td class="col">'.__('Język').'</td>
					<td>
					<select name="lang">
					';
						foreach($languages as $lang)
						{
							echo '<option name="'.$lang.'" ';
							
							if(isset($user) && ($user->lang == $lang))
								echo ' selected="selected" ';
								
							echo '>'.$lang.'</option>';
						}	

					echo'
					</select>
					</td>
					</tr>
					<tr><td class="col">';
					if(isset($user)) echo __('Nowe hasło (zostaw puste jeśli nie chcesz zmieniać)');
								else echo __('Hasło');					
					echo '</td><td><input type="password" name="password" value="" /></td></tr>
					<tr><td class="col">';
					if(isset($user)) echo __('Powtórz nowe hasło');
								else echo __('Powtórz hasło');
								
					echo '</td><td><input type="password" name="password2" value="" /></td></tr>
					<tr><td class="col">'.__('Awatar').'</td><td>';
						echo ((!empty($user->avatar) && isset($user)) ? '<img src="'.URL::base().'application/views/images/'.$user->avatar.
						'" alt="Avatar" /><p id="critical"><a href="'.url::site('user/user/delete_avatar/').'">'.__('Usuń awatar').'</a></p>'
						 : '<input type="file" name="avatar" value="1000000" />');
					echo '</td></tr>
					<tr><td class="col"></td><td><input type="submit" value="'.__('OK').'"></td></tr>		
					</form>
				 ';
		
	?>
</table>		

<?php 
	if(isset($groups))
	{
		echo '<h2>'.__('Grupy użytkownika').'</h2>

		<table>
			<thead>
			<tr>
				<th>'.__('ID').'</th>
				<th>'.__('Nazwa grupy').'</th>
			</tr>
			</thead>
			<tbody>
			';
			
			if(isset($groups))
			{
				foreach($groups as $gr)
					echo '
					<tr>
						<td>'.$gr->id.'</td>
						<td>'.$gr->name.'</td>
					</tr>';	
			}
			
			if(count($groups) == 0) echo '<tr><td colspan="2">'.__('Brak').'</td></tr>';
			echo '
			
			</tbody>
		</table>	';	
	}
?>
