<?php

//define('DB_NAME', 'db');
//define('DB_USER', 'user');
//define('DB_PASSWORD', 'pwd');
// User env variables to get MySQL values
define('DB_NAME', getenv('MYSQL_DATABASE'));
define('DB_USER', getenv('MYSQL_USER'));
define('DB_PASSWORD', getenv('MYSQL_PASSWORD'));

//define('DB_HOST', 'mysql');
define('DB_HOST', getenv('MYSQL_HOST'));
define('DB_CHARSET', 'utf8');
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
define('AUTH_KEY',         '+lPLaGW+|]<xDdSLCmKM(!be+HpLVr+-6BLW]ZT,pfeU+Vb$~IiEE;%NlsI)hetn');
define('SECURE_AUTH_KEY',  'msI`73G/&W_^HWRMy](~6|s1)kX-!mWosxdf,%y-e>||b1.++dKPVExc$p}KV?;i');
define('LOGGED_IN_KEY',    'veWMYGD^KIhiGbfxI?oEHF09eEz8&VNFJAW%M3Raj`^-lYsMm>g#t?7(2Ib|x}:h');
define('NONCE_KEY',        '/V(HE1v_kIYXS^q#,[B/m$ `}FwlvS/E/fY+KIkA$R)PvWsW9oY[$Xc<>+<]ecd$');
define('AUTH_SALT',        '((<fAL|Oj*$nX6`|ijTU@l|RW}9I&23+sv{s2?c=MM0<I<gKygL9`J$l$e>TgXvs');
define('SECURE_AUTH_SALT', 'Mq:pk!73)ldJ|_Ocx!YYXg>8x(G,w/q5Mk:_a]VTa{)v|I?(7$ k&#cJWO}|fGjI');
define('LOGGED_IN_SALT',   'BcNbhU4j*,|3;TU*S<EPk9H+C2I>pVrl-Ll5TctvuQR@jxU]~ %m~>*H|V:aHU+X');
define('NONCE_SALT',       'E6E_ %8` .7YlQ^it1d<!ykc|&jyI.$`[;2[Kh-3^J%TXn+}(gJTe(r~R12$PZ{p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xzy_';

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
