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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',          'F{AC~1tYZY-=l>7vZ&:; rijoaD9qT9IF2ap`)LiEg+9rZUv+<.Fp),j(S}IPQW_' );
define( 'SECURE_AUTH_KEY',   '=Y=)Mx8XKyyA,WP)3hVfiMi0CY4}u@0YRw4dTwI}CTq<=I]wHmR2njbOHzu8]ZK0' );
define( 'LOGGED_IN_KEY',     'iFU)n3n~}KG^|EaF8tstzlAT{8f=*D7Vk<_!3w]7c#O@C<LdRQ.?,5$},yCs+j_3' );
define( 'NONCE_KEY',         '.=HS}r,K3g$hiU+RQSn~>LK/YA!!1_/4gG*AZ|</6RZ3=Q~loD8eNo_$rV Z!Bj%' );
define( 'AUTH_SALT',         '92$R 7_h9>kCjsCca`maD.o.pOJy7Gt1R+5]qCi-CW_~P$p%^|;A6O2jR06B` n,' );
define( 'SECURE_AUTH_SALT',  '-CEj!%u-Uv8*ewiid#Aog`YxBV&g;%(Cout9YGbAiV4 w3_w$C><BRX3lU$PhQc#' );
define( 'LOGGED_IN_SALT',    'Me[371$}H].Nq,?g6[FA79}y*/7p+p.Ezk*T250L1nk_RL3Q;|GrJ?YWl5He7 1b' );
define( 'NONCE_SALT',        '3><N|%Du]RYJ,D]DUk$83ldp]L::4do400cZHX^yF<zwg000bFs<R2/w_J%_{1QB' );
define( 'WP_CACHE_KEY_SALT', 'dVo&P2qhUQGLM slo.<&WrI{f#cq;%X*]u2F&R^_vr1oMK#Hb)*y3#bm]F~PYKY[' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
