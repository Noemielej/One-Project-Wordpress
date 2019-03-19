<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'one' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'one' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'one' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'HUC3XNL$tL[J}vSb@QEiLg-hkM6P53>8r50fxlhNCykh>RmhR0zViVCGiz<[JvM6' );
define( 'SECURE_AUTH_KEY',  'K{fq,&@/cPIUx6,8JubeU1PsSA,f%zmSO6Q6!t2+32ZK;)hsMYKyl)ch9aqqp,IW' );
define( 'LOGGED_IN_KEY',    '77UEMfisdkwcsv.7y}D3zMQ nUk2 `a;tlo} KkiK0P0^><rb]G3m}Bl`uM1~-5*' );
define( 'NONCE_KEY',        'A, (?OgnXSAUkTXT;?g=T6n_e5%{V3nn*FC8Cw)LhbaqTaFQk;PHEW[m;qb,Fx;}' );
define( 'AUTH_SALT',        '2-Z70j9z|ceng^t3lZ0e#~B,]?S)7 (-p-xCDkY)#JN~tVLN7Y%4s{,/>_dk;Pk3' );
define( 'SECURE_AUTH_SALT', 's$Y2{ )Qj7,Fn7}[&evor~%Zg%m/83nsMLsgpLGQHk/|;`?S{Ub}:os9Ftli6L r' );
define( 'LOGGED_IN_SALT',   'rG4[wUEYn*j;Ha,Qj~OYgwIh$E[iIXDwB^85I9=Q36I+PMm42J2 z#KaX=8kYPa6' );
define( 'NONCE_SALT',       'IjN=sx}+0HZOpTHF2i8-?HfO5nUHB=r-IvAow{1V8[-FOZg:$.vw~m0anr|DJ6|D' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
