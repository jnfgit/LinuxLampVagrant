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
define('DB_NAME', 'my_wp');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', '1234');

/** MySQL hostname */
define('DB_HOST', '10.0.0.211');

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
define('AUTH_KEY',         'si;N3YHv0QeH([-#`4I0kvJh/9%rXk}#bi=XNX}{*D>WzX1FgH@Ak#,XG($H|Kta');
define('SECURE_AUTH_KEY',  '`Y9D2aUV(Fuy bdf-Au#:V(^KeLd3Q=.AP(|&S&>IYjTF(OrWQz!t0r0h#~`@0|(');
define('LOGGED_IN_KEY',    'i9Lk&UH/gU{o>uN;t<.wNL`LN{g2WCu6zP]JR1kkk%{luHyBb]qV~;=11czm]%`V');
define('NONCE_KEY',        'X&<khH(xY$Ng8>7w&_q-sd90[F{.<L@E;@~n-iJC=.EOY,9I$%W~^}?Y,1^z&L>t');
define('AUTH_SALT',        '3CyfOp-Fl4QT8;-k6X[;KvAu*OlzfGpJ4)M*;y-HO;muJjs#1;3d^#8Q_w!,qh1.');
define('SECURE_AUTH_SALT', '_R2~WVQ$ySC`esR1zGB;ilIEh+8,O$ZQUCvD^EDA9njrCWz|&3DSfUy,JoZ)|qrP');
define('LOGGED_IN_SALT',   '9|#.~|W:t!;x?rUk+x{rfdqN&M,q^S%[GNESoLstc`o@~u.jop%>!lG4MLA{4*I%');
define('NONCE_SALT',       '!3A;=T5;n+4S)<?}xxLKFinUfwS@R%,SY0<x-l^8r?qU^( kpsYjpaI6ru4MX0oa');

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
