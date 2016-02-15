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

define('DB_USER', 'wordpress');


/** MySQL database password */

define('DB_PASSWORD', 'wordpress');


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

define('AUTH_KEY',         ')9:6$$I`-`pz$91(rL[)9co=]~F]Ze-.+D_Ld!d-9pA-P#PR^|j]Rl|H.wWr5Lf+');

define('SECURE_AUTH_KEY',  ')zubbb7P7>dK4:5!`[+qp@U2W%H]>! ZG^qkb@`TQ4}h+U6tnbyY--<dUim]dd(y');

define('LOGGED_IN_KEY',    'H@PXjN~fPL(LtL#X5t7x+9k8-v*W7ab*}R*9LANrC%C~@h#0nI$8nV6uxaP*la>|');

define('NONCE_KEY',        '(i#])y7jzyIq<-B:0;?!i`u|p*n>2SU~|xLkk{#h@eVGg|Bw)%.E4.t}WP)Ys/: ');

define('AUTH_SALT',        'pX|<Zu-ZTBpi 5.]f $V!0U+V`|bm#br>[JI>(!N!,2OneY{-GJCO%zD&nWXi5ul');

define('SECURE_AUTH_SALT', 'wG=`Jz.;bDnu;|L()mmL%M;UJF$LI6K+N1uiI w69/#s!;m*|epC5=1sF`hcsu#L');

define('LOGGED_IN_SALT',   ' U2A-_+]Bz4b+YQ+yNSGUOoXay/R&p@t-K)(f$`G.)z+_}2bH*C1Tg>R~S:^4`3*');

define('NONCE_SALT',       'rB[]S{+_R<5kL|wI@yA>$Lh~ScBbA2fp- [v?WZWy$G+fQ>U{qjg9ci%]N3PW8JF');


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

