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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rustampura' );

/** MySQL database username */
define( 'DB_USER', 'rpura_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'nayab1234' );

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
define( 'AUTH_KEY',         ':v(gxinuC|+apYiM$~39@9BVQva)rUM6/K9(hT=KHou6re^!j_jz$l^s-BM*}$4=' );
define( 'SECURE_AUTH_KEY',  '=xxL&x;&9IX>xS5~Tc>-n|[~Yd|(*6~0Pwlm:%z_$gmr LKYuU$>^!905VGf;CL7' );
define( 'LOGGED_IN_KEY',    '/Dxs4b&i|-Hnr|K]fC.[j7Z+Xd~6>U:ug^^,3t2@9`9QvgXiy?cRLE&gFi(aNI#^' );
define( 'NONCE_KEY',        'Uo@^h{WnfNMQ[TtJGtr(*25MYuU@4r]LhzmU:B%n+8eh$z88nx[cVK>2/#tdFUZ$' );
define( 'AUTH_SALT',        '/xCrn_!u`=?V1nnr>vQOm$y.RZzw#z-oyFpn*r*gv45J&_BPXAtJ_?PhEyP.Lvxm' );
define( 'SECURE_AUTH_SALT', 'P)+Yd[Vp0sVlqPIIgcl|?G))%*;Z_suRYo0[HKP~}DXH:^5ds[fuWcL;k@{%)v1U' );
define( 'LOGGED_IN_SALT',   'p (5ffOE.cpU`5V1otiMfza4YCT1<Xgx?n@9B[QzUdTTfzr3QQP?*(Rar1|:4#%9' );
define( 'NONCE_SALT',       'jaG;}(>}`]FQ}[;QV^LXzEKIi;R<L-Eu`HzF]dN@-MSzl3hs#8H|y)-GFwb?pD^u' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
