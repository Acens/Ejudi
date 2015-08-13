<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ejudi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ra/_3~@$+9%r$q-VQRNo4|]/bIgkb!FWpXpWOzPAM;(x4$S)#&|#24-WC3zEg5jm');
define('SECURE_AUTH_KEY',  'BWc(gM85@)Ug7@4+XzoK#$[^px58r?oaM,LAjlv,Zz/du,3F$){DSY6Q=Ai!|UJm');
define('LOGGED_IN_KEY',    'm@ zz~|&7eKW bnf%y24!kC9k5~X!9RTB-7`gLL?-H!)LV{$t|R[,C(u{XoiNT%>');
define('NONCE_KEY',        '2E;#`(1kd(I_}#8`|EN+AaOU600RP/TEz%=Q~Avp l2u#nnC|6F&K.AYSphFOiR>');
define('AUTH_SALT',        '!k/ Yw2mtd[B11G 92)X/^mxl.I~vr2x^->OMv-;sMl@WfDk2$|L}V,5yk6&h`i$');
define('SECURE_AUTH_SALT', 'YPtL[_tSf?2>5,)pCyq>H0QwLLJYh16;W|y$D?Dk~:o&7f>+zJv_W7*HlMGroR|M');
define('LOGGED_IN_SALT',   'J@`6!+Q`!sLwr!AD3AgPJ8C3>hVs8@U[f;Jy/5m(M~|riu`(wb!g 3Wa?]!6.a/b');
define('NONCE_SALT',       'N:ChX1|{Cr1k~Q3CG;[`[Wq -LT?`LQe6~{N3p}cdu^2%@k60 Tcd}/6OLHH+ZVH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
