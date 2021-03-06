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
define( 'DB_NAME', 'nantes_ecommerce' );

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
define( 'AUTH_KEY',         ')yJ4PF/SrAs`NP$Z@[|BtQ6W8xnA4kSXeu:DJf]}%;U!ldHiu^K3z,$5T2,W,(fo' );
define( 'SECURE_AUTH_KEY',  '+U*N9CPjO]Y>cJ#>fLdTT/6X%16Z3?@;a5TwOCen@8IH*/AC1`3TV])}H/vIb1y>' );
define( 'LOGGED_IN_KEY',    '$vE~5T%/w(=!u~+J]v8Ib]lMk;yye%(B0/HDCx4R5nP=#7R^A$Ve/F(J$uB=g^H^' );
define( 'NONCE_KEY',        'ks@^&nv@jjOGt.R%VNVkD{(;qmH_[L%ldnIeW%AHyam1w6%SO+-k&{a;l0(/_|!u' );
define( 'AUTH_SALT',        'qT@.o>2.,uXb0k+sHTG#yD ?k=0W%G0mlz-[T7IQA|@{D!gW~$U:{n#dr=-t<c=4' );
define( 'SECURE_AUTH_SALT', '5=^!@o,FSI6WRvs~.^hVA4Bmx+uJaM h%sVX/*K.`{x !aUhEBU|/%o0/pj[7YUW' );
define( 'LOGGED_IN_SALT',   'N<{)a^{-6`45ZAByFoCzb{2bj0|;#P<&P4x8V.gQG~2F+%(5&RY$I|Dn:AJ@ZPPI' );
define( 'NONCE_SALT',       'hdI:w56pdXFx*%QG7K9b}T8i2(cag0g&GY%gR^or8/jskk)0az|:MdK$bX1FJ`Jv' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nantes_';

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
