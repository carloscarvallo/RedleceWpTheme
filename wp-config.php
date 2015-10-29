<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wp-test');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'admincarlos');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'fzjYoV_iu1JS*Wk~nOU*f7xC]rtpSpz%LfE37JhAigHb#or}:E~w.&KF7(qbNCuG');
define('SECURE_AUTH_KEY', 'k=zo9tAp]t-XIMB E+,wYQcPY._{J(c1JER+Roi$^d!(LtI@ 3DwLyD|qEQR?*VA');
define('LOGGED_IN_KEY', 'nb7:nFtW|0X(77gFr4*+CBv96W@xhr.b]n(l(0N:&UE4.+/HogU`hQgM-cI:5W7r');
define('NONCE_KEY', '>@KCZK9kD0X+W~NlQg@X,cG+UtLu_5+iZ[FHMwMqeJ+,}#ILf3X~GYgU|^->y_=)');
define('AUTH_SALT', 'wBT{9:}a5pZQZ(^H/F8fD_R-KZ5[|m-Utu-u$0@bLv:6Sl|LcZHvrRyFfbb2*q{m');
define('SECURE_AUTH_SALT', 'i%6}Kclg 3!|BNHv;>=sR|SoI(rHstX^o97K74z:E<LE-T*4;>V|D5jY<#c^+o(,');
define('LOGGED_IN_SALT', '-]+K09-oThX@[Ax5hmO`-57a.5;3x#4v+qSiB+Li8OQDd[Y 1gce_C,i|;iS6pn1');
define('NONCE_SALT', 'U->o3]}Fml2qmj`j2T-ug891]`#C8<gc27e10|K,V%fxi7_RU=SvV@RM_+D-FY<K');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

