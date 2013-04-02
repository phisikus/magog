<p>
	<?php
	
	if ((isset($errors)) && (is_array($errors)))
		foreach ($errors as $field => $type)
			echo '<p class="error">'.__('Błąd w polu').' \'<b>' . $field . '</b>\' '.__('typu:').' <b>' . $type . '</b></p>';
	 
	 ?><br />
	
</p>
