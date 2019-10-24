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
define('DB_NAME', 'i4229965_wp1');

/** MySQL database username */
define('DB_USER', 'i4229965_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'N(r3Xr9ur5*N4sK5Q*.21^@9');

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
define('AUTH_KEY',         'hq8DLJ77mFBcv20dqEEcsUXKZQmojnv1daYV9JhinW4218mQ9sTTEz7jjyH4nAHj');
define('SECURE_AUTH_KEY',  '5Dnb6GplcHHZUtwQPiOvQ48aG1Vw4eatDt89nN5H5ZJqksFs7ruJevudmc2X1uJa');
define('LOGGED_IN_KEY',    '3wuAE3sLAzz070ESvlx9Hz6ic5wmXqaRFrYbFEWQ0vF9JI9J9bwG2CX8aBUujbl5');
define('NONCE_KEY',        '9uE8Lam7sDpIE5fDK1tp7LtXpZc69mekicB0vHcfWWnGDKvYmOsGf7JbQGM4f1Un');
define('AUTH_SALT',        'DD2FU3OPfUbeRwUhmxCO5oK1DCLV3EYEKYC6T48v6qalEnOXJxU48hxrM98CiAxP');
define('SECURE_AUTH_SALT', 'DFvdhDv59KJdhUSmP5pkq2yo0OfFBBaXUNb6KCQmdK7d3gOIsjxkRjw66fLKkLgL');
define('LOGGED_IN_SALT',   'QiydgUx4ny44PWGkjwycPsM6gjbjAo1CzVC5Pis52ykDU7KzQcAwRS6Ad3GpZ3GG');
define('NONCE_SALT',       'gpRL9dZdeLGc85OhY98JGy90CZQQpjNkgZQRTBXTtEDKl5LNL7pzaMESBrKyLgWR');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
