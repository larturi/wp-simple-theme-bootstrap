<?php

if (function_exists('register_nav_menus')) {
    register_nav_menus(array(
        'principal' => 'Menú Principal'
    ));
}

// Clase para los <a> del menu
add_filter('nav_menu_link_attributes', 'class_menu_principal', 10, 3);

function class_menu_principal($atts, $item, $args)
{
    $class = 'nav-link';
    $atts['class'] = $class;
    return $atts;
}

// Imagenes destacadas
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}
