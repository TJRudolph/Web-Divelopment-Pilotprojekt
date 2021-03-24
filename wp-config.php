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
define( 'AUTH_KEY',         '[`F,$TQ/0BaA ccli,OK1tY8+?O0DrZoN2A^Vpwk&7ucQ|@GFXXr?z<]/do6Q`OZ' );
define( 'SECURE_AUTH_KEY',  '.}i;?apehm/vvt%tbvi_9ycRVDG>vgVIzRs{*T*Fg,*hmo)Kl~OeolGv6S:D27&^' );
define( 'LOGGED_IN_KEY',    'dS!b>6VUn:*::S<}U uBiY~2P!`An;SGB}YU4QYQB10rf/-Y5AR~Y^9Q`51S,?9X' );
define( 'NONCE_KEY',        'Z-J|Pjf%Ss;><vTok]#|0Yj<&2F?,^VKel|}a7[Yo2xs7X+;/PC`)N6@%Zn!m1)O' );
define( 'AUTH_SALT',        'G+4bhp8Ia_Mva]`23+F<M^y@BkAg3P$w@HLu|+^nU1 _HCOM(@D9]`x,YV@Du-.Z' );
define( 'SECURE_AUTH_SALT', '_bkwZNYiY>sFnHiVU@Eb3A&YVtbWc-PS(pJ~{]S;i|K?pc_&}v%MQl+W?cHFQqa9' );
define( 'LOGGED_IN_SALT',   'oPXzllXwVF8_9fl3C)+i$keJ]QlYg<dohUR:mH.Iqy~j:6Pd3y#j#b o3:yNdbS7' );
define( 'NONCE_SALT',       '~7*U*N4K.(a=IP-7$Q.L;86coH`,c{viB!xoq|h},b47QoXA+.o.Qz2f]Yq72?S+' );

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix = 'tobias2_';

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
