<?php
/* Collection of Walker Class */

  /*

  wp_nav_menu()
  <div class="menu-container">
    <ul> //start_lvl()
      <li><a><span> // start_el()

          </a></span></li> // end_el()

      <li><a>Link</a></li>
      <li><a>Link</a></li>
      <li><a>Link</a></li> // start_all
    <ul> // end_lvl()
  </div>

  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.html" class="brand-logo"> <img src="v1/images/logon.jpg" alt="Logo"> </a>
      <ul class="right hide-on-med-and-down">
        <li><a href="acercade.html">ACERCA DE</a></li>
        <li><a href="#">/</a></li>
        <li><a href="red.html" class="anaranjadito-text">RED</a></li>
        <li><a href="#">/</a></li>
        <li><a href="#" class="grey-text">NOTICIAS</a></li>
        <li><a href="#">/</a></li>
        <li><a href="#" class="grey-text">DOCUMENTOS</a></li>
        <li><a href="#">/</a></li>
        <li><a href="#contacto">CONTACTO</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  */

class Walker_Nav_Header extends Walker_Nav_menu {

  function start_lvl( &$output, $depth = 0, $args = array() ){ //ul
    $indent = str_repeat("\t",$depth);
    $submenu = ($depth > 0) ? ' sub-menu' : '';
    $output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
  }


  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){ //li a span

		$indent = ( $depth ) ? str_repeat("\t",$depth) : '';

		$li_attributes = '';
		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$classes[] = ($args->walker->has_children) ? 'dropdown' : '';
		$classes[] = ($item->current || $item->current_item_anchestor) ? 'active' : '';
		$classes[] = 'menu-item-' . $item->ID;
		if( $depth && $args->walker->has_children ){
			$classes[] = 'dropdown-submenu';
		}

		$class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr($class_names) . '"';

		$id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

		$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';

    $attributes .= ($item->current || $item->current_item_anchestor) ? 'class="anaranjadito-text"' : '';
		$attributes .= ( $args->walker->has_children ) ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';

		$item_output = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= ( $depth == 0 && $args->walker->has_children ) ? ' <b class="caret"></b></a>' : '</a>';
		$item_output .= $args->after;

		$output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

	}
/*
  function end_el(){

  }

  function end_lvl(){

  }
*/
}
