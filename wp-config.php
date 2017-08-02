<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'veale');

/** MySQL database username */
define('DB_USER', 'veale');

/** MySQL database password */
define('DB_PASSWORD', 'ideabase2014');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '+C1;&f{Y=Z.MzBvwN;A-07uudxekjWz~CP&zJvK]ofA 2p2Vj+IV-5gQ|{smQ]dr');
define('SECURE_AUTH_KEY',  'WbV ++XTw%S|4:Jr/{-O^G#(DwqQ3e>Gu=ACup!J scL;5=Q- cnuvoJqIE9h%x?');
define('LOGGED_IN_KEY',    '`a0fKqBK)P}&?eWB/xmz>FI@~`wQwJx@KS3q}I5XvUx xY%4U+er<WEwMP}Xq_j@');
define('NONCE_KEY',        'lS`3}F*gIQ?+Fl RH^+&++(x3J7d}P 39MivBx|`JPV;I5f$-IfWAX`R>czo,GJ3');
define('AUTH_SALT',        ']ZShB?hl95wO)&p@;<v-^ozF7WESy%c{mtJH$RW+zL+RX5VVq/q22gT%(kG/Z@=G');
define('SECURE_AUTH_SALT', 'k=,!n}e-#Y,3X[Vc-;%Pi0&I4c/-qJ%%8/|R*9Kx?|i5jA;x4aI,XPWk(W|`I<P|');
define('LOGGED_IN_SALT',   '0s9[w$rN]ca(|_pm+HN*n*N^|:z[WgBq-EQ+#DSN^O&y@~=2g]65nfd3LEc204XB');
define('NONCE_SALT',       ')xCGUD!3n[2.s{O$Wo`)XGn`fE+4Chp@7G$8-xw5<aEun+v**cg/(1(h??A&s98~');

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
