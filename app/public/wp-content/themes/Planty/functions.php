<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){

    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Chargement du theme.css pour notre thème enfant
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme.css') );
}

// HOOK ADMIN
add_filter( 'wp_nav_menu_items', 'prefix_add_menu_item', 10, 2 );
function prefix_add_menu_item ( $items, $args ) {
    if ( is_user_logged_in() ) {
        $items_array = array();
        while ( false !== ( $item_pos = strpos ( $items, '<li', 10 ) ) ) {
            $items_array[] = substr($items, 0, $item_pos);
            $items = substr($items, $item_pos);
        }
        $items_array[] = $items;
        array_splice($items_array, 1, 0, '<li class="menu-item"><a class="menu-admin" href="'. get_site_url() .'/planty2.local/admin/">Admin</a></li>'); 
        $items = implode('', $items_array);   
    }
   return $items;    
}