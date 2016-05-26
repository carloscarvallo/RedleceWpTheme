<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title><?php wp_title(); ?></title>
		<meta name="description" content="Red Latinoamericana de Educaci&oacute;n en Contextos de Encierro" />
		<link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() );?>/images/favicon.png">
		<link rel="author" type="text/plain" href="<?php echo esc_url( get_template_directory_uri() );?>/humans.txt "/>
		<link rel="sitemap" type="application/xml" title="Sitemap" href="<?php echo esc_url( get_template_directory_uri() );?>/sitemap.xml" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
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
        <a id="logo-container" href="<?php echo esc_url( home_url() ); ?>" class="brand-logo"> <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/logon.jpg" alt="Logo"> </a>
          <?php
            wp_nav_menu(array(
              'theme_location' => 'header',
              'container' => false,
              'menu_class' => 'right hide-on-med-and-down'
							//'walker' => new Walker_Nav_Header()
              )
            );
          ?>
				  <?php
					  wp_nav_menu(array(
						  'theme_location' => 'header',
						  'container' => false,
						  'menu_class' => 'side-nav',
						  'menu_id' => 'nav-mobile'
					    )
					  );
				  ?>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>
