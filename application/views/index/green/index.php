<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <title><?php @printf($title); ?></title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Galdeano' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo URL::base(); ?>application/views/index/green/css/normalize.css">
    <link rel="stylesheet" href="<?php echo URL::base(); ?>application/views/index/green/css/foundation.css">
    <link rel="stylesheet" href="<?php echo URL::base(); ?>application/views/index/green/css/style.css">
    <script src="<?php echo URL::base(); ?>application/views/index/green/js/vendor/custom.modernizr.js"></script>
    <script src="<?php echo URL::base(); ?>application/views/index/green/js/menu.js"></script>
</head>
<body>
<!-- Very Top Header -->
<div class="row">
    <div class="large-12 columns" id="HeadBar">
        <div><a href="<?php echo URL::base(); ?>">Homepage</a> | <a href="">Empty Link</a></div>
        <div><a href="maito:email@change.in.template">change@this.email</a></div>
    </div>
</div>

<!-- Header -->
<div class="row">
    <div class="large-12 columns" id="TopLogo">
        <div id="Logo" class="large-5 columns">
            <h1><?php @printf($title); ?></h1>

            <p>Subtitle</p>
        </div>
    </div>
</div>

<!-- End Header and Nav -->

<div class="row">
    <div class="large-12 columns" id="smallBar">
    </div>
</div>

<div class="row" id="Main">

    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="large-8 push-2 columns">
        <?php @print($content); ?>

    </div>


    <!-- Nav Sidebar -->
    <!-- This is source ordered to be pulled to the left on larger screens -->
    <div class="large-2 pull-8 columns" id="sideBar">

        <ul class="side-nav" id="menuLewe">
            <li><h4>Menu</h4></li>

            <?
            if (is_array($menus)) {

                foreach ($menus as $tab) {
                    $last_level = 0;
                    $first = true;
                    echo '<ul class="menu-list">';
                    foreach ($tab as $tb) {


                        if ($tb[1] > $last_level)
                            echo '<ul>
					';
                        if ($tb[1] < $last_level)
                            echo '</ul>
					';

                        if ($first) {
                            echo '<li id="listItem_' . $tb[0]->id . '"><a href="' . $tb[0]->link . '"><b>' . $tb[0]->text . '</b></a>
					';
                            $first = false;
                        } else
                            echo '<li id="listItem_' . $tb[0]->id . '"><a href="' . $tb[0]->link . '">' . $tb[0]->text . '</a>
					</li>
					';


                        $last_level = $tb[1];

                    }
                    while (($last_level--) > 0)
                        echo '</ul>
				';
                    echo '</ul>';
                }

            }

            ?>

        </ul>
        <div class="panel">
            <h5>Contact</h5>

            <p>Jon Doe<br>
                phone no.: 555-555-555 <br>
                addr.: Street 1<br>

                00-000, City<br>
            </p>
            <a href="mailto:email@email">email@email</a>
        </div>

    </div>


    <div class="panelPrawy large-2 columns" id="menuPrawe">
        <h5>Contact</h5>

        <p>Jon Doe<br>
            phone no.: 555-555-555 <br>
            addr.: Street 1<br>

            00-000, City<br>
        </p>
        <a href="mailto:email@email">email@email</a>
    </div>

</div>


<!-- Footer -->

<footer class="row" id="footer">
    <div class="large-12 columns">
        <ul class="inline-list" id="FooterList">
            <li><span>Category</span>
                <ul>
                    <li>
                        <a href="#">Link</a>
                    </li>
                    <li>
                        <a href="#">Link</a>
                    </li>
                    <li>
                        <a href="#">Link</a>
                    </li>
                    <li>
                        <a href="#">Link</a>
                    </li>
                </ul>
            </li>
            <li><span>Category</span>
                <ul>
                    <li>
                        <a href="#">Link</a>
                    </li>
                    <li>
                        <a href="#">Link</a>
                    </li>
                    <li>
                        <a href="#">Link</a>
                    </li>
                    <li>
                        <a href="#">Link</a>
                    </li>
                </ul>
            </li>
            <li><span>Category</span>
                <ul>
                    <li>
                        <a href="#">Link</a>
                    </li>
                    <li>
                        <a href="#">Link</a>
                    </li>
                    <li>
                        <a href="#">Link</a>
                    </li>
                    <li>
                        <a href="#">Link</a>
                    </li>
                </ul>
            </li>
            <li><span>Category</span>
                <ul>
                    <li>
                        <a href="#">Link</a>
                    </li>
                    <li>
                        <a href="#">Link</a>
                    </li>
                    <li>
                        <a href="#">Link</a>
                    </li>
                    <li>
                        <a href="#">Link</a>
                    </li>
                </ul>
            </li>


        </ul>

    </div>
</footer>

<script>
    document.write('<script src=<?php echo URL::base(); ?>application/views/index/default/js/vendor/' +
            ('__proto__' in {} ? 'zepto' : 'jquery') +
            '.js><\/script>')
</script>
<script src="<?php echo URL::base(); ?>application/views/index/default/js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
