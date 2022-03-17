<?php

// Check Server HP Version
if (version_compare('7.4', phpversion(), '<')) {
    // die('You must be using PHP 7.4 or greater.');
}




//Check WP Version
if (version_compare($GLOBALS['wp_version'], '5.4.2', '<')) {
    // die('WP theme only works in WordPress 5.4.2 or later. Please upgrade your WP site');
}




function include_styles()
{

    wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');

    //Example of including an external link
    // wp_enqueue_style('google-fonts', '//URL to the font//');

    //Example of including a style local to your theme root
    wp_enqueue_style(
        'idm250-css',
        get_template_directory_uri() . '/dist/styles/main.css'
    );
}

//When WP performs this action, call our function
add_action('wp_enqueue_scripts', 'include_styles');




//Include any scripts into the site the proper way
function include_js_files() 
{
    wp_enqueue_script(
        'idm250-js', 
        get_template_directory_uri() . '/dist/scripts/main.js', 
        [], 
        false, 
        true
    );
}

//When WP performs this action, call our function
add_action('wp_enqueue_scripts', 'include_js_files');




// Register custom navigation for website
function register_theme_navigation()
{
    register_nav_menus([
        'primary_menu' => 'Primary Menu',
        'footer_menu' => 'Footer Menu',
    ]);
}

add_action('after_setup_theme', 'register_theme_navigation');


//Render Custom Menu
// function idm_render_main_menu($menu_name)
// {
//     if (!$menu_name) {
//         return;
//     }
//     // return an array of menu locations that are registered
//     $locations = get_nav_menu_locations();
//     $menu = wp_get_nav_menu_object($locations[$menu_name]);
//     $menu_items = wp_get_nav_menu_items($menu->term_id, ['order' => 'DESC']);
//     return $menu_items;
// }


/*
 * Enable support for Post Thumbnails on posts and pages.
 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
*/
function add_post_thumbnails_support()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'add_post_thumbnails_support');
