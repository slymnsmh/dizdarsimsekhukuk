<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_dizdarsimsekhukukburosu' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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
define( 'AUTH_KEY',         'IL7bD6^6qM.f<jj]V3mVd?3O<6GJZfC1Lb@{%w*8PPd5iXhplyNR9tsIbQ[:.x8g' );
define( 'SECURE_AUTH_KEY',  'R(Dn&I:gYq;6H2$]/(I0qY@/Ks8MIU+CUSM:Ob!)C0cN2l;ArUrkE9b?{s(|8i6R' );
define( 'LOGGED_IN_KEY',    'FfVw{qAjo.G1SSMjk@OW6@c2g<=?tAAzfc!z7E`Z2KZ3F%/kTrt9%q)E5iK|+gl-' );
define( 'NONCE_KEY',        '=6W8A,=qa#^*BHK4?dX G/BY~&@)AZGxo<1W/_>^2OR$tuaQezZog_F);Ojy|U@c' );
define( 'AUTH_SALT',        'HRWt$hIIF_|yLx 3qq-KzyeV1-LZ4l@o$#Ei^c7~ysw;!7DS1)o2FT]O|q+&Ggo1' );
define( 'SECURE_AUTH_SALT', 'jI+4mT|t-rKm%?zd{,MMBz:1kA_C#Q4v/Mw.EbGv3sf0?FKZ:?^P7g 9;RuSA {x' );
define( 'LOGGED_IN_SALT',   '0zUi>[%F)9tNF@+E9H,y?xE,WJj_!E]<l@m=Kt<(zGg6695HU(9-UiuPf+JzPJXm' );
define( 'NONCE_SALT',       't%k?4V/YJbrWv>wU0tVQoK5+Z!bNM|* Frk30|5z=EFcy<!1z&Bo/LkG]9/7+g(3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_dizdarsimsekhukukburosu';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
