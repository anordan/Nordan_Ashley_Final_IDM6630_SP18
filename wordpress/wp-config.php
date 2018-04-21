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
define('DB_NAME', 'final_project');

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
define('AUTH_KEY',         '+FJHS+3%7$A7?4$$ Bqz[Zi/KP}VB]W{zL`BsQcT~#e*;V6RR#/6q4y*c?V^;{v`');
define('SECURE_AUTH_KEY',  'z6-UTUpG[hhWfN??X1A!&:-NS{CijmFn~OIcSV^x-oFd4!24oEDEEBP^rNlTzuzF');
define('LOGGED_IN_KEY',    'xW*V4oq+@<A}QuA]]]VARL_PAqU%sk- JS43NI#V? Vr=:8S*}^rtcRhXs6-2Q/&');
define('NONCE_KEY',        'GT4h_64i>V`@*>]81rK<&t_GA%tz%}87`cgr,3QvVd*8A9B++JEfq#M]>~Q|5rq9');
define('AUTH_SALT',        'kpw? MO?%X S3FWsOrg8M)?x(4kGe|kn?(D@5}RU5W3U <vUF!A];MWAQDWw$m,S');
define('SECURE_AUTH_SALT', 'EtqIgm+fT-(`+CZuSr1Fz.<TlG+dRAl*2Z@;Vmw$`wISH~EA:i-n!_d^PS&|_F^Y');
define('LOGGED_IN_SALT',   'f(R/|B(<YV&LIxK*Nc|QoZZWGYCrW@Ut5c#nW$odgN7$WF~0U?!LdomJ`L_JARo ');
define('NONCE_SALT',       'nTh.8u/k~I`Eblnap5}(AD``6AwU)q/5X[j.F]4,#asZOax${hVO;=QVr>E##m6b');

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
