<?php// Register Custom Navigation Walker
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

$parent_style = 'parent-style';
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

function additional_css () {
  wp_enqueue_style('child-theme', get_stylesheet_directory_uri() .'/style.css', array('parent-theme'));
  wp_enqueue_style('bootstrap-4.0.0', get_stylesheet_directory_uri() . '/bootstrap-4.0.0.css', array (), '1.0.0', 'all');
	wp_enqueue_style('bluecells', get_stylesheet_directory_uri() . '/bluecells.css', array (), '1.0.0', 'all');
	wp_enqueue_style('responsive', get_stylesheet_directory_uri() . '/responsive.css', array (), '1.0.0', 'all');
}

add_action ('wp_enqueue_scripts', 'additional_css');
