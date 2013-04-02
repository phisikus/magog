<p></p>
<table>
	<?php	
			echo '
					<form enctype="multipart/form-data" action="'.url::site('user/user/registered'.(isset($user) ? '/'.$user->id : '')).'" method="POST">
					<tr><td class="col">'.__('Login').'</td><td><input type="text" name="username" /></td></tr>
					<tr><td class="col">'.__('Nazwa użytkownika').'</td><td><input type="text" name="full_name" /></td></tr>
					<tr><td class="col">'.__('Adres email').'</td><td><input type="text" name="email" /></td></tr>
					<tr><td class="col">'.__('Język').'</td>
					<td>
					<select name="lang">
					';
					foreach($languages as $lang)
						echo '<option name="'.$lang.'">'.$lang.'</option>';
						
					echo'
					</select>
					</td>
					</tr>
					<tr><td class="col">';
					echo  __('Hasło');					
					echo '</td><td><input type="password" name="password" value="" /></td></tr>
					<tr><td class="col">';
					echo __('Powtórz hasło');			
					echo '</td><td><input type="password" name="password2" value="" /></td></tr>
					<tr><td class="col"></td><td><input type="submit" value="'.__('OK').'"></td></tr>		
					</form>
				 ';
		
	?>
</table>		
