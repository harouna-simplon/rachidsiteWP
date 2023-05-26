<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'onepage' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'uG$~ZSti,Y7.0O<id~em|H]%WqtbVoc{x1[bwJNIdfJ(u=NZpgvCbDxtJ$b)Bf{A' );
define( 'SECURE_AUTH_KEY',  'dLK=h&%/1-d[qPQY(8<Hk!.2AD*.H+d^i]*LNr&(z?+7kD@h :SJ_87.>Le_f@:0' );
define( 'LOGGED_IN_KEY',    'i #[@yPRwJLHDIXrc3 lFP,Pg?N92bAAG(ssBTyDp=R=c>H~MMA1!8Zt[?]CL~9]' );
define( 'NONCE_KEY',        'e=uP/4XN~b.1Drwk8il%Q/>Kqf jRv$b=DO>J(Vl77}g|GCzgS]`9oncL)O78;b?' );
define( 'AUTH_SALT',        '^.M3TW}]u%$Z9hXHM_~6Z$p);NUl!85lVm-Q#%v$R_]^{w-ombO,,UVz$|--yD8B' );
define( 'SECURE_AUTH_SALT', '!NO02G7#XpXpe<(PawJ<$t O{n>8:c8DJ9FLFC$kbE3mWt]A=.6DVe^G0b3<;yX7' );
define( 'LOGGED_IN_SALT',   'Styg/(^Y,k EOyHQ7d-Yu!MC&Ni{-@h59{4NY`>~m.z#Lx%l-7&g/MYX$ctf;7JW' );
define( 'NONCE_SALT',       'c)!TWe21/,b^BM:Zud*g~]Rq]s4]W:BEs3$X8PlZ]OVjx!}2jggslg6@)Tr.[M%.' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
