<?php

// Register menus
function registerAllMenus()
{
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'quiz-application')
    ));
}

add_action('init', 'registerAllMenus');