<p id="critical">
	<?php echo __('Czy na pewno chcesz usunąć tego użytkownika?'); ?><br />
	<a href="<?php if(isset($user)) echo url::site('user/admin/deleteConfirmed/'.$user->id); ?>"><?php echo __('Tak'); ?></a>
	<a href="<?php  echo url::site('user/admin/profile/'.$user->id); ?>" id="yes"><?php echo __('Nie'); ?></a><br />
	
</p>
