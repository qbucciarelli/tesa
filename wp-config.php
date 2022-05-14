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

 * * Database settings

 * * Secret keys

 * * Database table prefix

 * * ABSPATH

 *

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */



// ** Database settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define('DB_NAME', 'dev-tesacorkwp');

/** MySQL database username */

define('DB_USER', 'mytesacor');

/** MySQL database password */

define('DB_PASSWORD', 'xmX880pH');

/** MySQL hostname */

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

define('AUTH_KEY', 'C_ahj@PlB]ROKQ#|x6j,rhAm$0lGd9y%[+TE<TmcOtp7@BUtv-Y}kX?>(BA08U9&');

define('SECURE_AUTH_KEY',  'V2}1UZ6>?G#qF r|s[`Sm_Fg4a$V&^BiH[w->^d+teEWse9Q#sbNNfh|>VXJ>1LE');

define('LOGGED_IN_KEY', 'JCI.|[nH[;#0*,7Q1Kz*1& sR0;Q!y|qN5Bsb})l-P<7uP#SY@!SKbu<OM-tfY8,');

define('NONCE_KEY', '16H^XbT=Z@cmf|E_wP%+9[{E<n5I8 4<CA&l1kkowB8zUzfQQNoa !(1U%cU]9x_');

define('AUTH_SALT', 'd_[:3RDe~Gm()*z+=?|GhX-91yXLy&)}1|}b)SM-*cD~4$#/2r!-W>6~3EjZ;CpU');

define('SECURE_AUTH_SALT', 'u0/W0s+J8,k*R#vZL$oB c&&|Ic.md}U8O^cgGb4THeMf!|Kv|7@;|mTXJ&_ROZm');

define('LOGGED_IN_SALT', 'mv2}&8:d(+[VHqgk]*I.0G:9UEhuu+N.]+d}^SsyC3cx}+l+f+i!-XLUWKNuHuht');

define('NONCE_SALT', 'MUEL<Zl.HQ*zv,GH$`|+X+Kh 5h$bQSAq_-)kPNdMVRCK+W9:2&YMn4|-T;cX9tg');



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

define('WP_DEBUG', false);



/* Add any custom values between this line and the "stop editing" line. */







/* That's all, stop editing! Happy publishing. */



/** Absolute path to the WordPress directory. */

if (!defined('ABSPATH')) {

	define('ABSPATH', __DIR__ . '/');
}



/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';
