<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/dist/styles/main.css' ?>">
    <?php
    // Link - https://developer.wordpress.org/reference/functions/wp_head/
    // Plugins and WordPress core use this function to insert crucial elements into your documents
    // Always put wp_head() just before the closing tag of your theme 
    wp_head();
    ?>
</head>

<header>
    <a href="http://christineyim.com/idm250-ccy29/" class="logo">
            <img src="http://christineyim.com/idm250-ccy29/wp-content/uploads/2022/01/cy_logo.svg" alt="Christine Logo" class="logo">
        </a>
</header>

<body <?php body_class(); ?>>

    <?php
    //Registered this menu in functions.php
    wp_nav_menu(['theme_location' => 'primary_menu']); 
    
    // $menu_items = idm_render_menu('primary_menu');

    // if ( $menu_items ) {
    //     foreach ($menu_items as $key => $row) {
    //         echo "<a href='$row->url' >$row->title </a>";
    //     }
    // }

    ?>