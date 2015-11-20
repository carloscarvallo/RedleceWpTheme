<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Awesome Theme</title>
		<?php wp_head(); ?>
	</head>

	<body>
		<nav class="white" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="index.html" class="brand-logo"> <img src="<?php bloginfo('template_url')?>/images/logon.jpg" alt="Logo"> </a>

          <?php
            wp_nav_menu(array(
              'theme_location' => 'header-menu',
              'container' => false,
              'menu_class' => 'right hide-on-med-and-down',
              )
            );
          ?>

        <ul id="nav-mobile" class="side-nav">
          <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>
