<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>
</head>
<body>
<div class="loader">
    <div class="cont">
        <div class="line square"></div>
        <div class="line square2"></div>
        <div class="line square3"></div>
        <div class="line square4"></div>
    </div>
</div>
<header>
    <nav class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="row nav">
                <div class="col-xs-6 col-sm-6 ms">
                    <a class="logo" href="#Kontakt">ms</a>
                </div>
                <div class="col-xs-6 col-sm-6 ham">
                    <div class="nav-icon1">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </nav>
</header>

<section class="menu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 navigacia">
                <ul class="overlay_nav">
                    <?php
                    $menu = wp_get_nav_menu_items('Main menu');
                    foreach ($menu as $menu_item){ ?>
                        <li><a class="site" href="#<?php print_r($menu_item->title); ?>"><?php print_r($menu_item->title); ?></a></li>
                    <?php }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>


