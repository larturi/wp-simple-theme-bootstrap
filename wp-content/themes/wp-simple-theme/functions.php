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

// Sidebar Widget
function my_sidebar() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'wp-simple-site' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s" my-3>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action('widgets_init', 'my_sidebar');