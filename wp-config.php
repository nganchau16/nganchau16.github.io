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
define( 'DB_NAME', 'mywordpress' );

/** MySQL database username */
define( 'DB_USER', 'mywordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'QL|C+|*QQX=/h;Tq5p04cqCIA13-MKAB@e(yaVD3_H}^KZ9!%4djwI_ug1ANhEO2' );
define( 'SECURE_AUTH_KEY',  'y/m8q7ZN-PLzYrav|x|^3eUstHiKM>1^hR&x=]Bi%0Iljz^u[Gn,O`rEkC]$sO*=' );
define( 'LOGGED_IN_KEY',    'NVQKlU3YXs Z{akwll*tNR!WM`]L8)H?H@VCIgzk (*;q?<-C&5`uQ7|^$P[&5O.' );
define( 'NONCE_KEY',        'u7sZA+wYF%B{aZ#UG^_&;}YvYwU{2prDpYBUZm%Q,sUi-G?sl]QFpv0@`#U3`QNK' );
define( 'AUTH_SALT',        'w%2iE>yF+gTs=;)]+|cPIF{]O0[syu]&+TqWD,RJVo^B`!`wzC2/-GAzcwVr#),X' );
define( 'SECURE_AUTH_SALT', '#xwyMglAIZrDo=c@CMV2JU)kM`}:|f9*?Ff7e5AbyiW<i.$VmH?g>L1{7W!w/B@l' );
define( 'LOGGED_IN_SALT',   'Pm>e2.@c?Xc^Ym9S>E%F8Y.G5fQ}DG7tQJs4A{w/4R|_3f/K.L/-1`78ivl:mN9C' );
define( 'NONCE_SALT',       '0&u9lvn9HvC|=LU:3ia7g_}W8V%z>:c|1nF[%3qkgG[S690.2Dvjn@1=AL4P>Y>*' );

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
