<?php

function appStyles()
{
    wp_enqueue_style('quiz-app-main-style', get_template_directory_uri() . '/assets/css/app.css', false, uniqid(), 'all');
}

add_action('wp_enqueue_scripts', 'appStyles');

function appScripts()
{
    wp_enqueue_script('quiz-app-main-script', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), uniqid(), true);
}

add_action('wp_enqueue_scripts', 'appScripts');

function adminScripts()
{
    wp_enqueue_script('quiz-app-main-admin-script', get_template_directory_uri() . '/assets/js/admin.js', array('jquery'), uniqid(), true);
}

add_action('admin_enqueue_scripts', 'adminScripts');

function adminStyles()
{
    wp_enqueue_style('quiz-app-main-admin-style', get_template_directory_uri() . '/assets/css/admin.css', false, uniqid(), 'all');
}

add_action('admin_enqueue_scripts', 'adminStyles');