<?php

/*
    ======================================================
    Activacion de estilos y scripts
    ======================================================
*/

function redlece_script_enqueue() {
	wp_enqueue_style('redlece-material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '', '' );
	wp_enqueue_style('redlece-materialize', get_template_directory_uri() . '/bower_components/Materialize/dist/css/materialize.css', array(), '1.0.0', '');
	wp_enqueue_style('redlece-style', get_template_directory_uri() . '/css/redlece.css', array(), '1.0.0', '');
  wp_enqueue_script('redlece-jquery', 'https://code.jquery.com/jquery-2.1.1.min.js', array(), '2.1.1', true);
	wp_enqueue_script('redlece-materializejs', get_template_directory_uri() . '/bower_components/Materialize/dist/js/materialize.js', array(), '1.0.0', true);
	wp_enqueue_script('redlece-customjs', get_template_directory_uri() . '/js/redlece.js', array(), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'redlece_script_enqueue');

/*
    ======================================================
    Activacion de menus
    ======================================================
*/

function redlece_theme_setup() {

	add_theme_support('menus');

	register_nav_menu('header-menu', 'Header Navigation');
	register_nav_menu('footer-menu', 'Footer Navigation');

}

add_action('init', 'redlece_theme_setup');

/*
    ======================================================
    Theme support function
    ======================================================
*/

add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image','video'));

/*
    ======================================================
    Sidebar function
    ======================================================
*/

function redlece_widget_setup() {
	register_sidebar(
	  array(
      'name' => 'Sidebar',
			'id' => 'sidebar-1',
			'class' => 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
	    'after_widget'  => '</li>',
	    'before_title'  => '<h4 class="widgettitle">',
	    'after_title'   => '</h4>',
		)
	);
}

add_action('widgets_init','redlece_widget_setup');

?>
