<p></p>
<table>
	<?php	
		if(isset($group))
		{
			echo '
					<tr><td class="col">'.__('ID').'</td><td>'.$group->id.'</td></tr>
					<tr><td class="col">'.__('Nazwa').'</td><td>'.$group->name.'</td></tr>
					<tr><td class="col">'.__('Opis').'</td><td>'.$group->description.'</td></tr>
					<tr><td class="col">'.__('Liczba członków').'</td><td>'.$nr.'</td></tr>
				 ';
		}	
	?>
</table>

