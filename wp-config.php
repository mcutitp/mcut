<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mcuttest' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'lU>TED|<%/hY=hzJIT}Q<CQ8ktod*h^otw#%6jiLh$I!PJ$uFjC]|j=hT$~%]NVm' );
define( 'SECURE_AUTH_KEY',  '8jK?(;?#p81Q[E4>s:Z2TH)T]WLoQJYIv?NO<PS/]NLt=1XGY-]k^21y7ojLCK}p' );
define( 'LOGGED_IN_KEY',    'e&,^yz=QzGG(qP1)ow4o0~L{d;.`Q~HRz>zJ^W$u*CJ0I4?``7y*x2Sn~F={x]T%' );
define( 'NONCE_KEY',        'F>@b2TfM,b)k8)!O@C0 rs)^</m5aVo4KUp>ab<=6>r)WCo{X}JCU.zy+E[4Hs7L' );
define( 'AUTH_SALT',        'V4AYC+Ga=h}xq/Fh_@CIM:<|2~EmWvZeGDOIBj6~$USKt*Ra:@K!atxppRna9[,h' );
define( 'SECURE_AUTH_SALT', 'ge)#]:3L^;M7=7^yyC1]7i`lGTx0*iIE+Y-@M:RkLcBiE! .0@T_oHT8kb*.164$' );
define( 'LOGGED_IN_SALT',   '!2R%Bs9vIYm.d{8$+rsG)?6e&cQ!5QvW/OE~<;X;|`q+7/$M9qt@+*GmFFK=$`cE' );
define( 'NONCE_SALT',       't]KvvEVvOfdl^Ng_d4TAx|#r!r]9]%s*B<Ef%d^e<W]hT-W?>nOV&I0F+m,?4~jw' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
