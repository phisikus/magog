<p></p>
<table>
	<?php	
		if(isset($comment))
		{
			echo '
					<tr><td class="col">'.__('ID').'</td><td>'.$comment->id.'</td></tr>
					<tr><td class="col">'.__('Autor').'</td>
					<td><a href="'.url::site('user/admin/profile/'.$comment->author_id).'">'.$comment->author_username.'</a></td></tr>
					<tr><td class="col">'.__('Strona').'</td>
					<td><a href="'.url::site('show/page/'.$comment->parent_page).'">'.$parent_page.'</a></td></tr>
					<tr><td class="col">'.__('Data').'</td><td>'.date('d-m-Y, G:i',$comment->date).'</td></tr>
					<tr><td class="col">'.__('Treść').'</td><td><p>'.$comment->content.'</p></td></tr>
				 ';
		}	
	?>
</table>

