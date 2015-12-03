<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Red Latinoamericana de Educación en Contextos de Encierro</title>
		<?php wp_head(); ?>
	</head>

	<?php

		if ( is_front_page() ):
			$redlece_class = array ( 'redlece-class', 'my-class' );
		else:
			$redlece_class = array ( 'no-redlece-class' );
		endif;

	?>

	<body <?php body_class( $redlece_class ); ?>>

		<nav class="white" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="<?php echo bloginfo('url'); ?>" class="brand-logo"> <img src="<?php bloginfo('template_url')?>/images/logon.jpg" alt="Logo"> </a>

          <?php
            wp_nav_menu(array(
              'theme_location' => 'header',
              'container' => false,
              'menu_class' => 'right hide-on-med-and-down',
							'walker' => new Walker_Nav_Header()
              )
            );
          ?>

        <ul id="nav-mobile" class="side-nav">
          <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>
