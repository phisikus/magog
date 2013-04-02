<p></p>
<table>
	<?php	
			echo '
					<form enctype="multipart/form-data" action="'.url::site('page/admin/save'.(isset($page) ? '/'.$page->id : '')).'" method="POST">
					<tr><td class="col">'.__('Tytuł').'</td><td><input type="text" name="title" value="'.(isset($page) ? $page->title : '').'" /></td></tr>
					<tr><td class="col">'.__('Treść').'</td><td><textarea type="text" id="elm1" name="content" rows="25" cols="80" >'.(isset($page) ? $page->content : '').'</textarea></td></tr>
					<tr><td class="col">'.__('Przeznaczenie').'</td><td><input type="radio" name="news" value="1" ';
					if(isset($page->news))
					{
						if($page->news == 1)
							echo ' checked="checked"';
							
							echo '/> '.__('News').' <input type="radio" name="news" value="0" ';
							
						if($page->news == 0)
							echo ' checked="checked"';
							
					} else echo '/> '.__('News').' <input type="radio" name="news" value="0" checked="checked" ';
					
					echo '/> '.__('Artykuł').' </td></tr>
					<tr><td class="col">'.__('Publiczny').'</td><td><input type="radio" name="public" value="1" ';
					
					if(isset($page->public))
					{
						if($page->public == 1)
							echo ' checked="checked"';
							echo '/> '.__('Tak').' <input type="radio" name="public" value="0" ';
							
						if($page->public == 0)
							echo ' checked="checked"';
							
					} else echo '/> '.__('Tak').' <input type="radio" name="public" value="0" checked="checked" ';
					
					echo '/> '.__('Nie').' </td></tr>
					<tr><td class="col">'.__('Komentarze').'</td><td><input type="radio" name="comments" value="1" ';
					if(isset($page->comments))
					{
						if($page->comments == 1)
							echo ' checked="checked"';
							echo '/> '.__('Tak').' <input type="radio" name="comments" value="0" ';
							
						if($page->comments == 0)
							echo ' checked="checked"';
							
					} else echo '/> '.__('Tak').' <input type="radio" name="comments" value="0" checked="checked" ';
					
					echo '/> '.__('Nie').' </td></tr>
					<tr><td class="col">'.__('Słowa kluczowe').'</td><td><input type="text" name="categories" value="'.(isset($page) ? $page->categories : '').'" /></td></tr>
					<tr><td class="col"></td><td><input type="submit" value="'.__('Zapisz').'"></td></tr>		
					</form>
				 ';
		
	?>
</table>		
