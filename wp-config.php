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
define('DB_NAME', 'wordpress_dizdarsimsekhukukburosu');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '@djRM]`vL>Swgfw[@3kM~ogXdk?X._VI@|iyN3/>LIq98:J%-_mU`0~vd)80mmm]');
define('SECURE_AUTH_KEY',  'GUcP6Q2C4q@!K!0/72%/zCArRu+dB>Vb [9JeDLc:JBNzbG`Eih3RSND5q~[;mC%');
define('LOGGED_IN_KEY',    '$rUS0v]7fuD-Ds]Z3U&DK>cAV@M5oBV%ksNyfuHR%x3D}G2ASxD1R7wGK_UuR.*>');
define('NONCE_KEY',        '`]}+So8 s$Psuzq73AKV^LU|e:=[E5Lx}xy0/.!M;P+9yd}v{$ ySHpR@>g FSV%');
define('AUTH_SALT',        'nJXzl3/B-5!MWU<>I=Oqm[tRr)$X7H1fLy:|bX/^BYzRM=Z[b_c.3Njic%@_iVO%');
define('SECURE_AUTH_SALT', 'EV#advm)oFn;I4_]S^`0f-FJbIG]4SP8w|z=pNmiuvEqLed.*hloAD<ID|vn,v1s');
define('LOGGED_IN_SALT',   '3#9G_r5,[W@*.uzlO<3e~KccwrKEV%ByLa^2Usb_OwMEe>cRd?|;A*[-`W*j/R9>');
define('NONCE_SALT',       '$j4J>I~Br11IM({=Od)P^ 5F]*D/3T9qnWkNqV/gy_o}%igb~;#tAxoc0|i>n^}J');

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */

define('WP_MEMORY_LIMIT', '256M');
define('WP_MAX_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
