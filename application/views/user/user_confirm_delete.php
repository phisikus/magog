<p id="critical">
	<?php echo __('Czy na pewno chcesz usunąć swoje konto?'); ?><br />
	<a href="<?php if(isset($user)) echo url::site('user/user/deleteConfirmed/'); ?>"><?php echo __('Tak'); ?></a>
	<a href="<?php  echo url::site('user/user/index/'); ?>" id="yes"><?php echo __('Nie'); ?></a><br />
	
</p>
