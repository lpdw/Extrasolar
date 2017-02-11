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
define('DB_NAME', 'extrablog');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'E{vp/}C`k@s&[V:lDeI//FnuPA 336Q>fT!K4$T(+qH0mH>D{?IXjpraiHU#_wv(');
define('SECURE_AUTH_KEY',  '|Ce|p;DfE-s*->C|datw/ Ij& OgVqXt+uKpz||2H!o:[ExeR72S:SQH{!EX9yd`');
define('LOGGED_IN_KEY',    ';bSK!zLOBy srK-Ml#+#oz]3M:=n#1JyS:|A%IGCW4df%6r]WYKA0>Tp%Lm>U:h|');
define('NONCE_KEY',        'D8J*n;n}L5<CI]LB5sxl2S0W8zDNh+fmJwGB`{CjNLC<!;q{YYp54}&(jA2qX5&{');
define('AUTH_SALT',        'y3Cxp+[_0mRv7bW~V^H4^unS-[n3Y]}Iq|Tc!BRlpU]Tx-xu1TB[nvBXzZYmQZi{');
define('SECURE_AUTH_SALT', '89!t3Cr2e@uE:(Rv}`&or,$o,6WT^c@=QLlnv.6Uz@f9 oDBas4a-nC3Iyd_h&)V');
define('LOGGED_IN_SALT',   'lmRjYBjnC=TQ@iSF:%P4/TR_=mgp-//{C>k@4t)La[{yTx5,zcQptz~ykuEjt5!v');
define('NONCE_SALT',       '7tm?So_;CBbU96Sh8BmsJ-Nch]pVBB$P{L{,]3(wAaz<<.VL3_j)/bGLa!tRgPpE');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
