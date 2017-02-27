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
define('DB_NAME', 'exparts');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '$N/2!Ah3jAsT@j)mZ*O!3ZiXw1yiLu!de3i72G7tG>LoXO15,k}&b[<0zb#,BdGs');
define('SECURE_AUTH_KEY',  '.ct]o53~Z-kr;}ZtVAfml0^E%U4s#wPJE_f;PtWpa/wu[6R%<%JUibT5<Lv(Dvzw');
define('LOGGED_IN_KEY',    'Dv3#,B,0*M|2_b!05L^5a[/VAV^utr?-!%DvysS6qaqcx>[{dPAxX~%e%`B<`a|s');
define('NONCE_KEY',        'X?e$Y0tHxsXVc1_W-q~[K{cpVY)J]KaS#tQ2XIKs* kKED]`lB|lp-34:y=VGIE/');
define('AUTH_SALT',        ':9[Q{P[/#$sPClyElg8/F-wwi9FC;_UF;B`zz(9V-6lsQ9xr;;{UHB.zD%V-#|r^');
define('SECURE_AUTH_SALT', ':@NS`E|>#^+uA8xe*ejv9[uQ0#D8m: sg1G0nKkQ3nAuI7=O%jXkkGwN4H@7/4r-');
define('LOGGED_IN_SALT',   'wTF*xOadNMrRP(Wn5h+Uv}[?E2*+AsH,P5YXkg1V-*~!TX&I3(/MHg7O-+*,3O>7');
define('NONCE_SALT',       'w7_w9^ L<3,M(Pn=K&2:;kD:mZ+sfVvQM&A7-X6lEcAG>5%#UhgUk7Yq&)a9(}!&');

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
