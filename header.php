<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container">
            <h1><?php bloginfo('name'); ?></h1>

            <span><?php bloginfo('description'); ?></span>
        </div>
</header>
<nav class="main-nav">
    <div class="container">

    <?php
    /*
    Below is the code for placing a menu.
    The name, i.e. 'primary' is the name
    as set in the functions.php page

    The menu will initially be generated
    as an unordered list
    */
    ?>
        <?php wp_nav_menu([
            'theme_location'    =>  'primary'
        ]); ?>

    </div>
</nav>