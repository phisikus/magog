<!DOCTYPE html>
<html>
<head>
    <title>::magog::</title>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type"/>
    <link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
    <link rel="Stylesheet" type="text/css" href="<?php echo URL::base(); ?>application/views/css/style.css"/>
    <?php
    echo '
    <script type="text/javascript">  var baseUrl = \'' . URL::base() . '\'; </script>
	<script type="text/javascript" src="' . URL::base() . 'application/views/js/jquery.min.js"></script>
	<script type="text/javascript" src="' . URL::base() . 'application/views/js/jquery.nestable.js"></script>
	<script type="text/javascript" src="' . URL::base() . 'application/views/js/listings.js"></script>
	';

    if (isset($websocket)) {
        echo '<script type="text/javascript" src="' . URL::base() . 'application/views/js/guard/communication.js"></script>
        <script type="text/javascript" src="' . URL::base() . 'application/views/js/guard/question.js"></script>
        <script type="text/javascript" src="' . URL::base() . 'application/views/js/guard/list.js"></script>
        <script type="text/javascript" src="' . URL::base() . 'application/views/js/guard/setup.js"></script>
        <script type="text/javascript">
            var myGroup = ' . $articleId . ';
            var myName = \'\';
            var oldfun = window.onload;
            window.onload = function () {
                setupGuard();
            }
        </script>';
    }

    if (isset($editor))
        echo '
		<script type="text/javascript" src="' . URL::base() . 'application/views/js/tiny_mce/tiny_mce.js"></script>
			<script type="text/javascript">
			tinyMCE.init({
			// General options
			mode : "textareas",
			theme : "advanced",
			plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

			// Theme options
			theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect",
			theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote",
			theme_advanced_buttons3 : "undo,redo,|,link,unlink,anchor,image,cleanup,code,preview,|,forecolor,backcolor,|,ltr,rtl,|,fullscreen",
			theme_advanced_buttons4 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print",
			theme_advanced_buttons5 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			theme_advanced_statusbar_location : "bottom",
			theme_advanced_resizing : true,
			width: "400",

			// Drop lists for link/image/media/template dialogs
			template_external_list_url : "lists/template_list.js",
			external_link_list_url : "lists/link_list.js",
			external_image_list_url : "lists/image_list.js",
			media_external_list_url : "lists/media_list.js",
			language : "' . i18n::lang() . '",

			});
		</script>';

    ?>
</head>
<body>
<section id="main">
    <header>
        <hgroup class="naglowek">
            <h1><span>m</span>agog</h1>
        </hgroup>
        <hgroup id="descr">
            <h2><?php @print(__("System zarządzania treścią")); ?></h2>
        </hgroup>
    </header>
    <section id="where">
        <?php
        echo '<a href="' . url::site('admin/index') . '">System</a>';

        if (isset($level))
            foreach ($level as $lvl)
                echo '&rarr;<a href="' . URL::site($lvl['path']) . '">' . $lvl['description'] . '</a>';
        ?>
    </section>
    <aside>
        <?php
        if (isset($menu)) {
            echo '

			<nav>
				<ul id="menu">
					<li>';


            foreach ($menu as $mn) {
                for ($i = 0; $i < count($mn); $i += 2) {
                    if ($i == 0) {
                        echo $mn[0];
                        echo '
									 <ul>
									 ';
                    } else {
                        if (!empty($mn[$i + 1]))
                            echo '	<li><a href="' . URL::site($mn[$i + 1]) . '">' . $mn[$i] . '</a></li>
										';
                        else
                            echo '	<li><span>' . $mn[$i] . '</span></li>';
                    }
                }
                ;

                echo '</ul>
							';
            }
            ;

            echo '</li>
            ';
            if (isset($otherMenu))
                echo $otherMenu;
            echo '</ul>
			</nav>
		';
        }

        ?>
    </aside>
    <article>
        <section>
            <?php
            @print($content);
            ?>
        </section>
    </article>
    <footer id="stopka">
        <?php
        @print(__("Copyright &copy; by Marcin Biernacki 2012"));
        ?>
    </footer>
</section>
</body>
</html>
