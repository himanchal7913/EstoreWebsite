<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'word94' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/%&2x?:A#jPf9&:c!SK vh>odw6]&Kg[cv2LUA~oO:GKha9`#m#eJt-GBl=Vg6xc' );
define( 'SECURE_AUTH_KEY',  '*iaJ-b!ITgRKKiz(}#p|rA#JZT_0q g(f(YJ;Q.P z5$r*ro;%HrZM,MwvG3USfP' );
define( 'LOGGED_IN_KEY',    'I*&#sif%YDDjDxOi$%:cshA`+:{JQ*eY3w23P=z[ryvChpG&d=ETgm~Kc.h<#gP>' );
define( 'NONCE_KEY',        '@wP%7(tSzr|,fSoP&Ml~ml%6y)inzf<X5432wMJ ~o3h|Gc$P.(qJ^Nv8R>n|[ya' );
define( 'AUTH_SALT',        'L/pbWjb:NT{:t*sD@+Iv|<eA_sE:q?M,zoYth[~S__Tm$]u]Oa9!{Ofjko;EB7s<' );
define( 'SECURE_AUTH_SALT', 'K$4xCZy9sm-u>5}ia-R=u[g5CLfK4XZfd;2Y{Zy%.X2=[8=H>E>:|(ML/p;?fYFM' );
define( 'LOGGED_IN_SALT',   '!VdkAvs)PJPm0?6rdc #dYjg2;U2/*e^z~i(hcJwdDQwX-Ci(H`#Wreh)qj9So@b' );
define( 'NONCE_SALT',       ';O^jX7dvxgdq}vctQ<2{:UM9FDtu33iuD+bo|;x5FKjR.-#Nw?Brc7&%6]hrVfo1' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
