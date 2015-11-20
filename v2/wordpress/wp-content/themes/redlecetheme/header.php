<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Red Latinoamericana de Educación en Contextos de Encierro</title>
		<?php wp_head(); ?>
	</head>

	<?php

		if( is_front_page() ):
			$awesome_classes = array( 'awesome-class', 'my-class' );
		else:
			$awesome_classes = array( 'no-awesome-class' );
		endif;

	?>

	<body <?php body_class( $awesome_classes ); ?>>
    <nav class="white" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="index.html" class="brand-logo"> <img src="<?php bloginfo('template_url')?>/images/logon.jpg" alt="Logo"> </a>
        <!-- <ul class="right hide-on-med-and-down"> -->

          <?php
            wp_nav_menu(array(
              'theme_location' => 'header-menu',
              'container' => false,
              'menu_class' => 'right hide-on-med-and-down',
              )
            );
          ?>

          <!-- <li><a href="acercade.html">ACERCA DE</a></li>
          <li><a href="#">/</a></li>
          <li><a href="red.html">RED</a></li>
          <li><a href="#">/</a></li>
          <li><a href="#" class="grey-text">NOTICIAS</a></li>
          <li><a href="#">/</a></li>
          <li><a href="#" class="grey-text">DOCUMENTOS</a></li>
          <li><a href="#">/</a></li>
          <li><a href="#contacto">CONTACTO</a></li>
        </ul> -->

        <ul id="nav-mobile" class="side-nav">
          <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>
