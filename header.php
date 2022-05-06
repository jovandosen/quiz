<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="<?php bloginfo('name'); ?>">
        <meta name="description" content="<?php bloginfo('description'); ?>">  
        <title><?php wp_title(''); echo ' | ';  bloginfo( 'name' ); ?></title>
        <?php wp_head(); ?>
    </head>
    <body>
        <?php
            wp_nav_menu(array(
                'theme_location'    => 'main-menu',
                'depth'             => 0,
                'container'         => 'div',
                'container_class'   => 'quiz-main-menu-box',
                'container_id'      => 'quiz-main-menu-fragments',
                'menu_class'        => 'quiz-main-menu-style'
            ));
        ?>