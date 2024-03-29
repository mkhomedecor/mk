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
define( 'DB_NAME', 'mkwp_db' );

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
define( 'AUTH_KEY',         '3:Ch%e*4$@M,0>k`aiVq Yz+hNP3_nID_Z$:`a~m>mXuJJ<XHdYC=M+w2DA#f@p+' );
define( 'SECURE_AUTH_KEY',  '[a:})f9|BVQ,9 2Aky]$6N?Or8-4?@Nm )1XZ)!+h?:0p8oG1>rWSrD|xqG:n6E1' );
define( 'LOGGED_IN_KEY',    'LU?ynlOFw7% js5U;Q@1XnHDDE>o&h8y2ln^4L6<gcF8d:_cIN=@<UQD]O*|.pPk' );
define( 'NONCE_KEY',        'Qb3OO-m~%z,e[{r[=dw4z^G<5#hQgNhm W2!qEWx(IxTfv-W9D3>(otfFyV@5#*}' );
define( 'AUTH_SALT',        'O1[}5i$U1F]pS^`Si_&&M%-4t{>Wb0Na`Mk5^/l]W)NN]H9_)Qb+5FbhI%lC<(b,' );
define( 'SECURE_AUTH_SALT', 'mE#z92OhER{6i[hTOM<kNhi3t%,J*SiT5>?fF-BS&}zq@(&) ~E-_YM`y6f#4b[N' );
define( 'LOGGED_IN_SALT',   'h^)7lM>1Tm%j6Bok[Z:8u<vE3Pd7<4ny]Yg1Ni}.V*sL)e;Ws6Q+L0vcLCFe^sj!' );
define( 'NONCE_SALT',       'h7$WNtJ7xsbW]Fr3%N1Z1m.(sHz56OOH50,`Zr9eP9 ]`l9C3M} u0%G|FFk=;I>' );

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
