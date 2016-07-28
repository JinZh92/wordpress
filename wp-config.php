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
define('DB_NAME', 'wp_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1992911ZIQIhao');

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


define('AUTH_KEY',         'JKu`;zloH6Jp!/NU3fp|!!`;qQCCzYN[+S% b(gewQy[$-S#cAJ[>CVEYq:@Lnf;');
define('SECURE_AUTH_KEY',  'vkJD;hPs68lc2f+ntG%E2YZ-D0RG.}m1I-$C(rupLhR$L[CkEXr6L0<E#_t-qShQ');
define('LOGGED_IN_KEY',    '1d+ve:V!NV$E:<Vt|*F?P:c6LH2Rt!9N>3kuk,7;`X[|PAP%/gyviNd6u%):$k]%');
define('NONCE_KEY',        '5Lc,]=(R#5,(F~bD%tqOZ9]Hnk]<RFh}gH_,mNGsmk0(|qvXz~:4ov;[O[^qaPK~');
define('AUTH_SALT',        '7iIZ:0`mkl=b1@#<sgT_B7hrY&B L:3S~xUV@HR*x`U6H*~7!oi/?RMDPD,?5*Tu');
define('SECURE_AUTH_SALT', 'Se04Aq&L%ZG06VT$=aWAcz1@Pn0>m#E@Wk^$2Qa~X.FQ$eXtRU-2=(Q.]%oN`W98');
define('LOGGED_IN_SALT',   '<s:1*u4c_)m{{M1lzZg{_BQ6A;a$BA,<k&f ,]V]P}07J&nFPL9[9+XL7:P/g-ut');
define('NONCE_SALT',       'lJ1fA:b<dG&-e8HEqArzMM/zg~Wq3>44o*%Go.gtW.}l&O) bJrQ^pG1(G-3v*8~');

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
define('FS_METHOD', 'direct');
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
