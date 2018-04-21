<?php 

function awsome_enqueue_style() {
	wp_enqueue_style('awsomecss', get_template_directory_uri().'/css/awsome.css',array(),"1.0.1","all");
	wp_enqueue_script('awsomejs', get_template_directory_uri().'/js/awsome.js',array(),1,true);
}

add_action('wp_enqueue_scripts', 'awsome_enqueue_style');

function awsome_menu_setup() {
	add_action('add_theme_support', 'menus');
	register_nav_menu('header-nav','Header Navigation');
	register_nav_menu('footer-nav', 'Footer Navigation');
	
}

add_action('init', 'awsome_menu_setup');
add_theme_support('post-thumbnails')
?>