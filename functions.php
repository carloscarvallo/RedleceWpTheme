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
	wp_enqueue_style('redlece-responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0.0', '');
	wp_enqueue_style('redlece-fancybox', get_template_directory_uri() . '/css/fancybox/jquery.fancybox.css', array(), '2.1.5', '');
	wp_enqueue_style('redlece-fancybox-buttons', get_template_directory_uri() . '/css/fancybox/helpers/jquery.fancybox-buttons.css', array(), '1.0.5', '');
	wp_enqueue_style('redlece-fancybox-thumbs', get_template_directory_uri() . '/css/fancybox/helpers/jquery.fancybox-thumbs.css', array(), '1.0.7', '');
  wp_enqueue_script('redlece-jquery', 'https://code.jquery.com/jquery-2.1.1.min.js', array(), '2.1.1', true);
  wp_enqueue_script('redlece-fancybox-js', get_template_directory_uri() . '/js/fancybox/jquery.fancybox.pack.js', array(), '2.1.5', true);
	wp_enqueue_script('redlece-mousewheel', get_template_directory_uri() . '/js/fancybox/jquery.mousewheel.pack.js', array(), '3.1.3', true);
	wp_enqueue_script('redlece-fancybox-buttons', get_template_directory_uri() . '/js/fancybox/helpers/jquery.fancybox-buttons.js', array(), '1.0.5', true);
	wp_enqueue_script('redlece-fancybox-media', get_template_directory_uri() . '/js/fancybox/helpers/jquery.fancybox-media.js', array(), '1.0.6', true);
	wp_enqueue_script('redlece-fancybox-thumbs', get_template_directory_uri() . '/js/fancybox/helpers/jquery.fancybox-thumbs.js', array(), '1.0.7', true);
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

	register_nav_menu('header', 'Header Navigation');
	register_nav_menu('footer', 'Footer Navigation');

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
    Filtro para remover atributos del thumbnail
    ======================================================
*/

function remove_img_attr ($html) {
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
}

add_filter( 'post_thumbnail_html', 'remove_img_attr' );

/*
    ======================================================
    Filtro para the_content
    ======================================================
*/

function filter_content($content) {
	if ( is_singular() ){
    $custom_heading = ' <h4 class="red-text text-accent-4 subtitulo"> ';
    $content = str_replace ("<h4>" , $custom_heading, $content);
	}
	if( is_singular() && is_main_query() && ! is_singular( 'pais' ) && ! is_singular( 'documento' ) ) {
		$p_content = ' <div class="container margin"><p class="left-align"> ';
		$p_close_content = ' </p><br><br></div> ';
		$heading_five = ' <h5 class="center red-text text-accent-4"> ';
		$content = str_replace ("<p>" , $p_content, $content);
		$content = str_replace ("</p>" , $p_close_content, $content);
		$content = str_replace ("<h5>", $heading_five, $content);
	} else if ( is_singular( 'pais' ) || is_singular( 'documento' ) ) {
		  $p_align = ' <p class="left-align"> ';
		  $heading_five = ' <h5 class="red-text text-accent-4"> ';
		  $content = str_replace ('<p style="text-align: left;">' , $p_align, $content);
		  $content = str_replace ("<p>" , $p_align, $content);
		  $content = str_replace ("<h5>", $heading_five, $content);
	}
	return $content;
}
add_filter('the_content', 'filter_content');
add_filter( 'use_default_gallery_style', '__return_false' );

define( 'DEFAULT_GALLERY_COLS', 3 );

function get_my_gallery_content( $attrs ) {
  $gallery_body = "";

  if( array_key_exists( 'size', $attrs ) ) {
    $image_size = $attrs[ 'size' ];
  } else {
    $image_size = 'medium';
  };

  $image_ids = explode(',', $attrs[ 'ids' ] );

  if( array_key_exists( 'columns', $attrs ) ) {
    $columns = $attrs[ 'columns' ];
  } else {
    $columns = DEFAULT_GALLERY_COLS;
  };

  $show_caption = false;

  switch( $columns ) {
    case 1:
      $show_caption = true;
      break;
    case 2:
      $image_class = 'col s12 m6 image';
      break;
    case 3:
      $image_class = 'col s12 m4 image';
      break;
		case 4:
		  $image_class = 'col s12 m3 image';
		  break;
  };

  $last_id = sizeof( $image_ids ) -1;

  foreach( $image_ids as $image_id ) {
    $attachment = wp_get_attachment_image_src( $image_id , $image_size );
    $attachment_full = wp_get_attachment_image_src( $image_id, 'full' );

    $image_url = $attachment[ 0 ];
    $image_url_full = $attachment_full[ 0 ];

    $caption = get_post_field( 'post_excerpt', $image_id );

    $gallery_element = "\t\t" . '<div class="' . $image_class . '"><a href="' . $image_url_full . '"class="fancybox" data-fancybox-group="gallery" rel="gallery" title="' . $caption . '"><img class="responsive-img" src="' . $image_url . '" /></a></div>';

    $gallery_body = $gallery_body . $gallery_element . "\n";
  };
  return  $gallery_body;
}

function my_gallery_shortcode( $output = '', $atts, $instance ) {
        $return = $output;

        $my_result = get_my_gallery_content( $atts );

        if( !empty( $my_result ) ) {
                $return = $my_result;
        }
        return $return;
}

add_filter( 'post_gallery', 'my_gallery_shortcode', 10, 3 );

/*
    ======================================================
    Habilita extracto para pages
    ======================================================
*/

function wpcodex_add_excerpt_support_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_pages' );

/*
    ======================================================
    Estilos para el excerpt del wordpress
    ======================================================
*/

function  wpc_custom_excerpt ( $excerpt )  {
  $excerpt  =  str_replace ("<p",  "<p class = \"center-align red-text text-accent-4 excerpt \"",  $excerpt);
  return  $excerpt ;
}
add_filter( 'the_excerpt' , 'wpc_custom_excerpt' ) ;

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
			'class' => '',
			'description' => 'Standard Sidebar',
			'before_widget' => '<table id="%1$s" class="bordered highlight %2$s">',
	    'after_widget'  => '</table>',
	    'before_title'  => '<h4 class="widgettitle" style="display: none;">',
	    'after_title'   => '</h4>',
		)
	);
}

add_action('widgets_init','redlece_widget_setup');

/*
    ======================================================
    Post Types
    ======================================================
*/


add_action( 'init', 'pais_init' );
add_action( 'init', 'documento_init' );

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
                'menu_position'      => 5,
                'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'post-formats' ),
								'taxonomies' 				 => array( 'category' ),
								'exclude_from_search'=> false
        );

        register_post_type( 'pais', $args );
}

function documento_init() {
        $labels = array(
                'name'               => _x( 'Documentos', 'post type general name', 'your-plugin-textdomain' ),
                'singular_name'      => _x( 'Documento', 'post type singular name', 'your-plugin-textdomain' ),
                'menu_name'          => _x( 'Documento', 'admin menu', 'your-plugin-textdomain' ),
                'name_admin_bar'     => _x( 'Documento', 'add new on admin bar', 'your-plugin-textdomain' ),
                'add_new'            => _x( 'Agregar nuevo', 'Documento', 'your-plugin-textdomain' ),
                'add_new_item'       => __( 'Agregar nuevo Documento', 'your-plugin-textdomain' ),
                'new_item'           => __( 'Nuevo Documento', 'your-plugin-textdomain' ),
                'edit_item'          => __( 'Editar Documento', 'your-plugin-textdomain' ),
                'view_item'          => __( 'Ver Documento', 'your-plugin-textdomain' ),
                'all_items'          => __( 'Todos los documentos', 'your-plugin-textdomain' ),
                'search_items'       => __( 'Buscar documentos', 'your-plugin-textdomain' ),
                'parent_item_colon'  => __( 'Documentos padres:', 'your-plugin-textdomain' ),
                'not_found'          => __( 'Documentos no encontrados.', 'your-plugin-textdomain' ),
                'not_found_in_trash' => __( 'Documentos no encontrados en la papelera.', 'your-plugin-textdomain' )
        );

        $args = array(
                'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
                'public'             => true,
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'rewrite'            => array( 'slug' => 'documento' ),
                'capability_type'    => 'post',
                'has_archive'        => true,
                'hierarchical'       => false,
                'menu_position'      => 6,
                'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'post-formats' ),
								'taxonomies' => array( 'category' ),
								'exclude_from_search'=> false
        );

        register_post_type( 'documento', $args );
}

/*
    ======================================================
    Include Walker File
    ======================================================
*/

//require get_template_directory() . '/inc/walker.php';

?>
