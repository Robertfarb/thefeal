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
define('DB_NAME', 'the_feal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Q)tEB?>xNt>+)!6]gZ0>EC?I,?7f~{8qQHTuE-^b9V_QQe^HRt=?+|!(!cO9fCVX');
define('SECURE_AUTH_KEY',  '+?vjl]|dW.{KC)FcCLT,;M8X]]fIde|VRtM1ew=:r~?Qm8L`%j+IFQOs10Fg,iey');
define('LOGGED_IN_KEY',    'E1:+t|m|XqE%J*d2y#RM7vjx@V`=LrJ/9cD3FHIONQ[N6hiFM9;rp>lkT;/+VfFU');
define('NONCE_KEY',        'TuC 2u=q$f~v-DoW>G))2hWsb)Y8]*_~8Y4mDDBY~PiGDt0<LR{[$dG*_eMha]{Q');
define('AUTH_SALT',        '(63!%3wy~j;!1^]={(epcG:C#DIwIEkOh;g|@uSg +L9E)xlYLT+M|P:<9u:tL5c');
define('SECURE_AUTH_SALT', 'EyDz/+lX-*2Qhdn8[_FjVVK{2,$9BDjXr&!Iy%-$-_40k*fm^Af^s6uICFaI>LIA');
define('LOGGED_IN_SALT',   'DH~/ +eA}dhbLxI9roRA> _MdM%QsYUb0d]JApwOr]`RUmJFOF%o/qn`W%34#lj+');
define('NONCE_SALT',       '/<g[xZ)HW2Q*c~(+/:*IZ5c35@UJ451e>6UQfcK~996+D>ivHM07Qof%-7_)xC*e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
