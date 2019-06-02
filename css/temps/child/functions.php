<?php

function my_theme_enqueue_styles () {
$parent_style = 'twentynineteen-style';

wp_enqueue_style ( $parent_style, get_template_directory_uri() . '/style.css' );

wp_enqueue_style ( 'bootstrap', get_stylesheet_directory_uri() . '/bootstrap-4.0.0.css', '', null, 'all' );
wp_enqueue_style ( 'responsive', get_stylesheet_directory_uri() . '/responsive.css', '', null, 'all' );
wp_enqueue_style ( 'bluecells', get_stylesheet_directory_uri() . '/bluecells.css', '', null, 'all' );
wp_enqueue_style ( 'child-style', get_stylesheet_directory_uri() . '/style.css', array ( $parent_style ), wp_get_theme()->get('Version') );
}

add_action ( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
