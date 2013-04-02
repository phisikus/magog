<p id="critical">
	<?php echo __('Czy na pewno chcesz usunąć ten artykuł?'); ?><br />
	<a href="<?php if(isset($page)) echo url::site('page/admin/deleteConfirmed/'.$page->id); ?>"><?php echo __('Tak'); ?></a>
	<a href="<?php  echo url::site('page/admin/edit/'.$page->id); ?>" id="yes"><?php echo __('Nie'); ?></a><br />
	
</p>
