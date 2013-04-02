<p></p>
<table>
	<?php	
		if(isset($user))
		{
			if(!empty($user->avatar))
				echo '<img src="'.URL::base().'application/views/images/'.$user->avatar.'" alt="'.__('Awatar').'">';
			echo '
					<tr><td class="col">'.__('ID').'</td><td>'.$user->id.'</td></tr>
					<tr><td class="col">'.__('Login').'</td><td>'.$user->username.'</td></tr>
					<tr><td class="col">'.__('Nazwa użytkownika').'</td><td>'.(empty($user->full_name) ? '-' : $user->full_name).'</td></tr>
					<tr><td class="col">'.__('Adres email').'</td><td>'.$user->email.'</td></tr>
					<tr><td class="col">'.__('Podpis').'</td><td>'.(empty($user->signature) ? __('Brak') : '<i>'.$user->signature.'</i>').'</td></tr>
					<tr><td class="col">'.__('Język').'</td><td>'.$user->lang.'</td></tr>
					<tr><td class="col">'.__('Ostatnie logowanie').'</td><td>'.(empty($user->last_login) ? __('Nigdy') : date('d-m-Y',$user->last_login)).'</td></tr>
					<tr><td class="col">'.__('Konto powiązane zewnętrznie').'</td><td>'.(empty($user->external_id) ? __('Nie') : __('Tak').', '.__('ID').': '.$user->external_id).'</td></tr>
				 ';
		}	
	?>
</table>			

<h2><?php echo __('Grupy użytkownika'); ?></h2>

<table>
	<thead>
	<tr>
		<th><?php echo __('ID'); ?></th>
		<th><?php echo __('Nazwa grupy'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php
	
	if(isset($groups))
	{
		foreach($groups as $gr)
			echo '
			<tr>
				<td><a href="'.url::site('group/admin/profile/'.$gr->id).'">'.$gr->id.'</a></td>
				<td><a href="'.url::site('group/admin/profile/'.$gr->id).'">'.$gr->name.'</a></td>
			</tr>';	
	}
	if(count($groups) == 0) echo '<tr><td colspan="2">'.__('Brak').'</td></tr>';
	
	?>
	</tbody>
</table>	
