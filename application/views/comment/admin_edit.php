<p></p>
<table>
	<?php	
			echo '
					<form enctype="multipart/form-data" action="'.url::site('comment/admin/save'.(isset($page) ? '/'.$page->id : '')).'" method="POST">
					<tr><td class="col">'.__('Strona').'</td><td>'.(isset($page) ? $page->title : '-').'</td></tr>
					<tr><td class="col">'.__('Treść').'</td><td><textarea name="content" rows="2" cols="50"></textarea></td></tr>
					<tr><td class="col"></td><td><input type="submit" value="'.__('OK').'"></td></tr>		
					</form>
				 ';
		
	?>
</table>		
