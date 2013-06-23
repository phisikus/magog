<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <title><?php @printf($title); ?></title>
    <link rel="stylesheet" href="<?php echo URL::base(); ?>application/views/index/one/css/normalize.css"/>
    <link rel="stylesheet" href="<?php echo URL::base(); ?>application/views/index/one/css/foundation.css"/>
    <link href='http://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo URL::base(); ?>application/views/index/one/css/style.css"/>
    <script src="<?php echo URL::base(); ?>application/views/index/one/js/vendor/custom.modernizr.js"></script>
</head>
<body>
<div class="row">
    <div class="large-12 columns" id="header">
        <nav class="top-bar">
            <ul class="title-area">
                <!-- Title Area -->
                <li class="name">
                    <h1><a href="<?php echo URL::base(); ?>"><?php @printf($title); ?></a></h1>
                </li>
            </ul>

            <section class="top-bar-section">
                <!-- Left Nav Section -->

                    <?
                    if (is_array($menus)) {
                        foreach ($menus as $tab) {
                            $last_level = 0;
                            $first = true;
                            echo '<ul class="left">';
                            foreach ($tab as $tb) {
                                if ($tb[1] > $last_level)
                                    echo '<ul class="dropdown">
					';
                                if ($tb[1] < $last_level)
                                    echo '</ul>
					';
                                if ($first) {
                                    echo '<li id="listItem_' . $tb[0]->id . '" class="active has-dropdown"><a href="' . $tb[0]->link . '"><b>' . $tb[0]->text . '</b></a>
					';
                                    $first = false;
                                } else
                                    echo '<li id="listItem_' . $tb[0]->id . '" class="has-dropdown"><a href="' . $tb[0]->link . '">' . $tb[0]->text . '</a>
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
                <!--<ul class="left">
                    <li class="divider"></li>
                    <li class="active has-dropdown">
                        <a href="#">Menu1</a>
                        <ul class="dropdown">
                            <li><a href="">OKv</a></li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#">Menu2</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Menu3</a></li>
                    <li class="divider"></li>

                </ul>-->

                <!-- Right Nav Section -->
                <ul class="right">
                    <li class="has-form">
                        <form>
                            <div class="row collapse">
                                <div class="small-8 columns">
                                    <input type="text">
                                </div>
                                <div class="small-4 columns">
                                    <a href="#" class="button">Search</a>
                                </div>
                            </div>
                        </form>
                    </li>
                    <li class="divider show-for-small"></li>
                </ul>
            </section>
        </nav>

    </div>
</div>

<div class="row">
    <div class="large-12 columns" id="logo">
        <section>
            <img src="<?php echo URL::base(); ?>application/views/index/one/img/logo.jpg" alt="logo">
        </section>
    </div>
</div>

<div class="row">
    <div class="large-12 columns" id="articles">
        <section>

            <?php @print($content); ?>
        </section>
    </div>
</div>

<div class="row" >
    <div class="large-12 columns" id="footer">
        Footer
    </div>
</div>


<script>
    document.write('<script src=<?php echo URL::base(); ?>application/views/index/one/js/vendor/' +
        ('__proto__' in {} ? 'zepto' : 'jquery') +
        '.js><\/script>')
</script>
<script src="<?php echo URL::base(); ?>application/views/index/one/js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>

</body>
</html>
