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
define('DB_NAME', 'wordpresssamsung');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', '1#>|I#M~-pap=uEwAm@Gz-cYhzf>yV?&IY~&.&+k@#3UIK_`n~(kcKut-bO-?64B');
define('SECURE_AUTH_KEY', '%KQimdLj4[p3Wse^w f[:}xw 46mj5}!6|J<5YI5H!b}L8E54r}ky6oZP4heL9Sl');
define('LOGGED_IN_KEY', 'n.ulL&O#e8F!`EASSm6dK*Q9_WjBbx_EL8iH+9)3*XW.j[CM,;yUv(2qk|R>(>[;');
define('NONCE_KEY', 't^_hzzf 0qcXb~vk:<h^%YR_t+ur+P_H Un_<^8<U8j55Z_Tn2K7BR[4zI3,Ub|x');
define('AUTH_SALT', '+Hi<Iz<smJW&u*xUD8Zx78]0TVJA~Gec.-l5~//dSU[}S_[wUhy`gTg:0HLsfewO');
define('SECURE_AUTH_SALT', 'Z_vCX451LfvLqs;fi|PsCmmf[>{cJT#So79Pm(|M[eUwP6iYFiADbrVb~~jK`Y`C');
define('LOGGED_IN_SALT', '#@h,o[G6h]cs T,7jQ:qjjN&}}]%*Q|z]@C[>$UqM;fyNNSZ6lDWm]{K@ [MlF/4');
define('NONCE_SALT', 'd4!]<{m]fisu,ov?:Y-tY&llD+Nq;AI$}@w mPT9C-?;P;nVk7q?YeP6#DI 6qSv');

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
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

