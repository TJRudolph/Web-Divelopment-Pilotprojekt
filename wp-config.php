<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Zu diesen Einstellungen gehören:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten für die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * @package WordPress
 */

// ** MySQL-Einstellungen ** //
/**   Diese Zugangsdaten bekommst du von deinem Webhoster. **/

/**
 * Ersetze datenbankname_hier_einfuegen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define( 'DB_NAME', 'usr_p570885_2' );

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem MySQL-Datenbank-Benutzernamen.
 */
define( 'DB_USER', 'p570885d1' );

/**
 * Ersetze passwort_hier_einfuegen mit deinem MySQL-Passwort.
 */
define( 'DB_PASSWORD', 'C40#.wjooamzpt' );

/**
 * Ersetze localhost mit der MySQL-Serveradresse.
 */
define( 'DB_HOST', 'db1380.mydbserver.com' );

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_%`@X>)DK=x%}.8MYY3eeLYG6r|9nK/qWZ@IWXf]:r,z%Lp4ERu;IB&&+2If[xW_' );
define( 'SECURE_AUTH_KEY',  'T@$g<LM<X$C-h`dHxGa5AgS%qZ lCL<(TG~x9|403j@Hvu`r5}Wp68I!yIB6*|#2' );
define( 'LOGGED_IN_KEY',    'K QT*$!htYaF&2:23Q9Sp}(/_4,H)R,`FU?F2;4.]oy)?8,N]mgq0S|Ew&z4PUL{' );
define( 'NONCE_KEY',        '`40QaXc9ehY02. RYSKLkDD$=OluumRR6X}&C?YocP>]jNTZztuF=L>5CFQ*p)r}' );
define( 'AUTH_SALT',        'HP>;<J{1>ZS6[GG(jDao[PSsCx6U&Up=L+M AO;G}u3%PwL:p#e&%4r]][x(Do)z' );
define( 'SECURE_AUTH_SALT', 'aaQ=ep4gtQ|,CB<?*k7dn/p~^ 0Pz`Sbn$!eNDT4(=&=2j?wVV#(@^cul(]n}T~8' );
define( 'LOGGED_IN_SALT',   '?{3q!pbSK;M^V$FV~&vL$b,_30qnry$3o`Rd=*x!1y^;W#`EEkzJw0~_*<u; MK1' );
define( 'NONCE_SALT',       '>P5U-^F;G-f8%6ldZmS]+LyeLn0NU?3(p%4O+8C9`JYY1Ii6^Ep<Q8BF#8^9rW&9' );

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix = 'tobias_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß. */
/* That's all, stop editing! Happy publishing. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once( ABSPATH . 'wp-settings.php' );
