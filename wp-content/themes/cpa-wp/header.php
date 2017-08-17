<!DOCTYPE html>
<!--[if IE 7]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en-US" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cebu Port Authority</title>

    <!-- Bootstrap -->
    <link href="styles/main.css?v=1.0.4" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?php wp_head(); ?>
</head>
<body class="cbp-spmenu-push">
<div id="page-wrapper">
<nav class="mobile-nav cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
        <div class="container-fluid menu-close">
            <button type="button" class="close-menu">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar icon-bar-1"></span>
                <span class="icon-bar icon-bar-2"></span>
                <span class="icon-bar icon-bar-3"></span>
            </button>
        </div>
        <div class="menu-holder">
            <?php
                wp_nav_menu( array(
                    'menu'              => 'Main Menu',
                    'theme_location'    => 'main-menu',
                    'container'         => false,
                    'menu_class'        => 'nav navbar-nav-menu')
                );
            ?>
        </div>
    </nav>
<nav class="navbar navbar-default navbar-home">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="menu-holder afterclear">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" id="showRightPush">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="<?php the_field('logo', 'option'); ?>" alt="">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-main-menu afterclear">
                <?php
                    wp_nav_menu( array(
                        'menu'              => 'Main Menu',
                        'theme_location'    => 'main-menu',
                        'container'         => false,
                        'menu_class'        => 'nav navbar-nav navbar-nav-menu navbar-right')
                    );
                ?>
            </div><!-- /.navbar-collapse -->
        </div>
    </div><!-- /.container-fluid -->
</nav>
