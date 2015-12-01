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

add_action( 'init', 'pais_init' );

function pais_init() {
        $labels = array(
                'name'               => _x( 'Paises', 'post type general name', 'your-plugin-textdomain' ),
                'singular_name'      => _x( 'Pais', 'post type singular name', 'your-plugin-textdomain' ),
                'menu_name'          => _x( 'Pais', 'admin menu', 'your-plugin-textdomain' ),
                'name_admin_bar'     => _x( 'Pais', 'add new on admin bar', 'your-plugin-textdomain' ),
                'add_new'            => _x( 'Agregar nuevo', 'Pais', 'your-plugin-textdomain' ),
                'add_new_item'       => __( 'Agregar nuevo Pais', 'your-plugin-textdomain' ),
                'new_item'           => __( 'Nuevo Pais', 'your-plugin-textdomain' ),
                'edit_item'          => __( 'Editar Pais', 'your-plugin-textdomain' ),
                'view_item'          => __( 'Ver Pais', 'your-plugin-textdomain' ),
                'all_items'          => __( 'Todos los paises', 'your-plugin-textdomain' ),
                'search_items'       => __( 'Buscar paises', 'your-plugin-textdomain' ),
                'parent_item_colon'  => __( 'Paises padres:', 'your-plugin-textdomain' ),
                'not_found'          => __( 'Paises no encontrados.', 'your-plugin-textdomain' ),
                'not_found_in_trash' => __( 'Paises no encontrados en la papelera.', 'your-plugin-textdomain' )
        );

        $args = array(
                'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
                'public'             => true,
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'rewrite'            => array( 'slug' => 'pais' ),
                'capability_type'    => 'post',
                'has_archive'        => true,
                'hierarchical'       => false,
                'menu_position'      => null,
                'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'taxonomies' => array( 'category' )
        );

        register_post_type( 'pais', $args );
};

?>
