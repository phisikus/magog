<!DOCTYPE html>
<html>
<head>
		<title>::magog::</title>
        <meta content="text/html; charset=UTF-8" http-equiv="content-type" />
		<link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
        <link rel="Stylesheet" type="text/css" href="<?php echo URL::base(); ?>application/views/css/style.css" />
</head>
  <body>
	<section id="main">
	<header> 
		<hgroup class="naglowek"> 
			<h1><span>m</span>agog</h1> 
		</hgroup>
	</header>
			<article>
				<section>
					<form action="<?php echo URL::site(); ?>admin/login" method="POST">
						<?php echo __('Login'); ?> <input type="text" name="username">
						<?php echo __('Hasło'); ?><input type="password" name="password">
						<input type="submit" value="<?php echo __('Zaloguj'); ?>">
					</form>
				</section>
			</article>
        <footer id="stopka">
					<?php
					@print($footer);
					?>
		</footer>     
     </section>
    </body>
</html>
