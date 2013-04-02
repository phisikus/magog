<p>
	<?php echo __('Poniżej znajdują się ustawienia dotyczące ogólnej pracy portalu.'); ?>
</p>
<table>
	<tbody>
				<?php echo '<form action="'.url::site('config/save').'" method="POST"> '; ?>
	<tr>
		<td class="col"><?php echo __('Tytuł witryny'); ?></td>
		<td><input name="title" value="<?php @print($title); ?>" /></td>
	</tr>
	<tr>
				
				<td class="col"><?php echo __('Strona główna'); ?></td>
				<td>
							<?php
							
							echo '
							<select name="homepage">
							<option value="0">'.__('{{Strona z newsami}}').'</option>';
							
							foreach($pages as $page)
							{
								echo '<option value="'.$page->id.'" ';
								
								if(isset($homepage) && (($page->short_title == $homepage) || ($page->id == $homepage)) )
									echo ' selected="selected" ';
									
								echo '>'.$page->title.'</option>';
							}	
								echo '</select>

								</td>
								</tr>
								<tr><td class="col"></td><td><input type="submit" value="'.__('OK').'"></td></tr>
								</form>
								';
							?>
						
					
				</td>				
	</tr>	

	<?php
	
		echo '
			';	

	?>
	</tbody>
</table>		
