<?php

require_once('wp_bootstrap_navwalker.php');

// Theme Support register menu ???
function test_theme_setup(){

  // Nav Menus
  register_nav_menus(array(
    'primary' => __('Primary Menu')
  ));

}

add_action('after_setup_theme','test_theme_setup');

//Just import everything !!
function josh_test(){

    wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri(). '/js/jquery-3.3.1.min.js', array(), null, true);
    wp_enqueue_script('bootstrap_script', get_template_directory_uri(). '/js/bootstrap.min.js', array( 'jquery' ), null, true);
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style('bootstrap_style', get_template_directory_uri(). '/css/bootstrap.min.css');
    wp_enqueue_style('showcase', get_template_directory_uri(). '/css/showcase.css');
    wp_enqueue_style('navbar', get_template_directory_uri(). '/css/navbar.css');
    wp_enqueue_style('middle-content', get_template_directory_uri(). '/css/middle-content.css');
    wp_enqueue_style('blokk', get_template_directory_uri(). '/css/blokk/blokkfont.css');

}

add_action( 'wp_enqueue_scripts', 'josh_test' );

require get_template_directory(). '/inc/customizer.php';

?>