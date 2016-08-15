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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         '_} RwENQ+c^JlesQ:aVBo@T9e78!:Si+iJ,.;Vm{~_%<Va:~GIVZSca[AMa;S/<r');
define('SECURE_AUTH_KEY',  'I2!4bg7+*kJ4wr X<POGZ t-.J|0pLVasoy HSq.0D#zLtW]|Du_%Rk9O90*dH_*');
define('LOGGED_IN_KEY',    '*ac ,?7M3mn,?9`U,~&TA]IC03K#c`p4|9-a$/DuH1{/nvzlnDDVb?`NhD?n*nw ');
define('NONCE_KEY',        'Rm.>*Z-|Wlwo|U0+mI{0z,Da=ATli^#k$X[tr@V{,8]{;wXB3wm5+j|-e2UY:e&]');
define('AUTH_SALT',        '[Qw[ZtNX}w.$DzDfSQz&0-Sp:{=-je:69s(m6hE+vO8wA@02%/[^~;1|^cZmd[7+');
define('SECURE_AUTH_SALT', 'kfZ[;mE!eJnM{h(-9J)D:+h&ugT40QVl9ctN5}>)ZW5D=T4gpNj^+zH5$f;{TCU`');
define('LOGGED_IN_SALT',   '<Ww/D/UmT[@NDe5i|BoHfR5H?#Q<nI[|l7TradecW>p[IG[X+ZEo;q-D;7u.PL| ');
define('NONCE_SALT',       'CJaE7+U1.@fDIxK_XZChZuo,+|QmR|8>{9Kv~7~#J1fd}W_R!~aK$<p_#HkkW+3x');

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
