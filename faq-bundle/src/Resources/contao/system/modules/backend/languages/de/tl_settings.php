<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005-2009 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  Leo Feyer 2005-2009
 * @author     Leo Feyer <leo@typolight.org>
 * @package    Language
 * @license    LGPL
 * @filesource
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_settings']['websiteTitle']        = array('Titel der Webseite', 'Bitte geben Sie den Title der Webseite ein.');
$GLOBALS['TL_LANG']['tl_settings']['adminEmail']          = array('E-Mail-Adresse des Systemadministrators', 'Automatisch erstelle Mitteilungen wie z.B. Kommentar-Benachrichtigungen werden an diese Adresse versendet.');
$GLOBALS['TL_LANG']['tl_settings']['dateFormat']          = array('Datumsformat', 'Der Datumsformat-String wird mit der PHP-Funktion date() geparst.');
$GLOBALS['TL_LANG']['tl_settings']['timeFormat']          = array('Zeitformat', 'Der Zeitformat-String wird mit der PHP-Funktion date() geparst.');
$GLOBALS['TL_LANG']['tl_settings']['datimFormat']         = array('Datums- und Zeitformat', 'Der Datums- und Zeitformat-String wird mit der PHP-Funktion date() geparst.');
$GLOBALS['TL_LANG']['tl_settings']['timeZone']            = array('Zeitzone', 'Bitte wählen Sie die Zeitzone des Servers aus.');
$GLOBALS['TL_LANG']['tl_settings']['websitePath']         = array('Relativer Pfad zum TYPOlight-Verzeichnis', 'Der relative Pfad zum TYPOlight-Verzeichnis wird normalerweise automatisch im Install-Tool gesetzt.');
$GLOBALS['TL_LANG']['tl_settings']['characterSet']        = array('Zeichensatz', 'Damit Sonderzeichen richtig dargestellt werden, wird die Verwendung von UTF-8 empfohlen.');
$GLOBALS['TL_LANG']['tl_settings']['customSections']      = array('Eigene Layoutbereiche', 'Hier können Sie eine kommagetrennte Liste eigener Layoutbereiche eingeben.');
$GLOBALS['TL_LANG']['tl_settings']['liveUpdateBase']      = array('Live Update-URL', 'Hier können Sie die Live Update-URL eingeben.');
$GLOBALS['TL_LANG']['tl_settings']['enableGZip']          = array('GZip-Kompression aktivieren', 'Die Seiten komprimiert an den Browser schicken.');
$GLOBALS['TL_LANG']['tl_settings']['backendTheme']        = array('Backendmotiv', 'Hier können Sie das Backendmotiv wechseln.');
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage']      = array('Datensätze pro Seite', 'Hier können Sie die Anzahl der Datensätze pro Seite im Backend festlegen.');
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse']       = array('Elemente nicht verkürzen', 'Elemente in der Backend-Vorschau nicht verkürzen.');
$GLOBALS['TL_LANG']['tl_settings']['pNewLine']            = array('Neue Zeilen mittels Absätzen erstellen', 'Neue Zeilen im Rich Text Editor mittels Absätzen anstatt mittels Zeilenumbrüchen erstellen.');
$GLOBALS['TL_LANG']['tl_settings']['urlSuffix']           = array('URL-Suffix', 'Das URL-Suffix wird der URL angehängt, um statische Dokumente zu simulieren.');
$GLOBALS['TL_LANG']['tl_settings']['rewriteURL']          = array('URLs umschreiben', 'Statische URLs ohne das index.php-Fragment erzeugen (benötigt "mod_rewrite").');
$GLOBALS['TL_LANG']['tl_settings']['disableAlias']        = array('Keine Seitenaliase verwenden', 'Die numerische ID einer Seite oder eines Artikels anstelle des Alias verwenden.');
$GLOBALS['TL_LANG']['tl_settings']['allowedTags']         = array('Erlaubte HTML-Tags', 'Hier können Sie eine Liste erlaubter HTML-Tags eingeben, die nicht entfernt werden sollen.');
$GLOBALS['TL_LANG']['tl_settings']['lockPeriod']          = array('Wartezeit bei gesperrtem Konto', 'Ein Konto wird gesperrt, wenn drei Mal hintereinander ein falsches Passwort eingegeben wird.');
$GLOBALS['TL_LANG']['tl_settings']['encryptionKey']       = array('Hashwert für Verschlüsselung', 'Verschlüsselte Daten können nur mit demselben Hashwert wieder entschlüsselt werden!');
$GLOBALS['TL_LANG']['tl_settings']['displayErrors']       = array('Fehlermeldungen anzeigen', 'Fehlermeldungen auf dem Bildschirm ausgegeben (nicht empfohlen für produktive Seiten).');
$GLOBALS['TL_LANG']['tl_settings']['debugMode']           = array('Debugmodus aktivieren', 'Bestimmte Laufzeitinformationen wie z.B. Datenbankabfragen auf dem Bildschirm ausgegeben.');
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'] = array('Referer-Prüfung deaktivieren', 'Die Referer-Adresse beim Absenden eines Formulares nicht prüfen. Warnung: potentielles Sicherheitsrisiko!');
$GLOBALS['TL_LANG']['tl_settings']['disableIpCheck']      = array('IP-Prüfung deaktivieren', 'Benutzersitzungen nicht an IP-Adressen binden. Warnung: potentielles Sicherheitsrisiko!');
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes']         = array('Erlaubte Upload-Dateitypen', 'Hier können Sie eine kommagetrennte Liste von Dateitypen eingeben, die über TYPOlight hochgeladen werden dürfen.');
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload']     = array('Erlaubte Download-Dateitypen', 'Hier können Sie eine kommagetrennte Liste von Dateitypen eingeben, die über TYPOlight heruntergeladen werden dürfen.');
$GLOBALS['TL_LANG']['tl_settings']['editableFiles']       = array('Editierbare Dateien', 'Hier können Sie eine kommagetrennte Liste von Dateitypen eingeben, die mit dem Quelltexteditor bearbeitet werden dürfen.');
$GLOBALS['TL_LANG']['tl_settings']['validImageTypes']     = array('Unterstützte Bildformate', 'Hier können Sie eine kommagetrennte Liste von Dateitypen eingeben, die von der Bild-Klasse verarbeitet werden können.');
$GLOBALS['TL_LANG']['tl_settings']['maxImageWidth']       = array('Maximale Frontend-Breite', 'Wenn die Breite eines Bildes oder Films im Backend diesen Wert übersteigt, wird sie automatisch angepasst.');
$GLOBALS['TL_LANG']['tl_settings']['jpgQuality']          = array('JPG-Qualität', 'Hier können Sie die Qualität der JPG-Vorschaubilder in Prozent eingeben.');
$GLOBALS['TL_LANG']['tl_settings']['uploadPath']          = array('Files-Verzeichnis', 'Hier können Sie den relativen Pfad zum TYPOlight Files-Verzeichnis eingeben.');
$GLOBALS['TL_LANG']['tl_settings']['uploadFields']        = array('Simultane Datei-Uploads', 'Hier können Sie die maximale Anzahl simultaner Datei-Uploads festlegen.');
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize']         = array('Maximale Upload-Dateigröße', 'Hier können Sie die maximale Upload-Dateigröße in Bytes eingeben (1 MB = 1024 kB = 1024000 Bytes).');
$GLOBALS['TL_LANG']['tl_settings']['imageWidth']          = array('Maximale Bildbreite', 'Hier können Sie die maximale Breite für Bild-Uploads in Pixeln festlegen.');
$GLOBALS['TL_LANG']['tl_settings']['imageHeight']         = array('Maximale Bildhöhe', 'Hier können Sie die maximale Höhe für Bild-Uploads in Pixeln festlegen.');
$GLOBALS['TL_LANG']['tl_settings']['enableSearch']        = array('Suche aktivieren', 'Seiten indizieren, damit sie durchsucht werden können.');
$GLOBALS['TL_LANG']['tl_settings']['indexProtected']      = array('Geschützte Seiten indizieren', 'Nutzen Sie diese Option sorgfältig und schließen Sie personalisierte Seiten grundsätzlich von der Indizierung aus!');
$GLOBALS['TL_LANG']['tl_settings']['useSMTP']             = array('E-Mails via SMTP versenden', 'Einen SMTP-Server statt der PHP-Funktion mail() für den E-Mail-Versand verwenden.');
$GLOBALS['TL_LANG']['tl_settings']['smtpHost']            = array('SMTP-Hostname', 'Bitte geben Sie den Hostnamen des SMTP-Servers ein.');
$GLOBALS['TL_LANG']['tl_settings']['smtpPort']            = array('SMTP-Portnummer', 'Bitte geben Sie die Portnummer des SMTP-Servers ein.');
$GLOBALS['TL_LANG']['tl_settings']['smtpUser']            = array('SMTP-Benutzername', 'Hier können Sie den SMTP-Benutzernamen eingeben.');
$GLOBALS['TL_LANG']['tl_settings']['smtpPass']            = array('SMTP-Passwort', 'Hier können Sie das SMTP-Passwort eingeben.');
$GLOBALS['TL_LANG']['tl_settings']['useFTP']              = array('Dateien via FTP bearbeiten', 'Eine FTP-Verbindung für den Dateizugriff aufbauen (Safe Mode Hack).');
$GLOBALS['TL_LANG']['tl_settings']['ftpHost']             = array('FTP-Host', 'Bitte geben Sie den Hostnamen des FTP-Servers ein.');
$GLOBALS['TL_LANG']['tl_settings']['ftpPath']             = array('FTP-Pfad', 'Bitte geben Sie den Pfad zu Ihrer TYPOlight-Installation relativ vom FTP-Wurzelverzeichnis ein.');
$GLOBALS['TL_LANG']['tl_settings']['ftpUser']             = array('FTP-Benutzer', 'Hier können Sie den FTP-Benutzernamen eingeben.');
$GLOBALS['TL_LANG']['tl_settings']['ftpPass']             = array('FTP-Passwort', 'Hier können Sie das FTP-Passwort eingeben.');
$GLOBALS['TL_LANG']['tl_settings']['inactiveModules']     = array('Inaktive Erweiterungen', 'Hier können Sie nicht benötigte Erweiterungen deaktivieren.');
$GLOBALS['TL_LANG']['tl_settings']['undoPeriod']          = array('Speicherzeit für Undo-Schritte', 'Hier können Sie die Speicherzeit für Undo-Schritte in Sekunden eingeben (24 Stunden = 86400 Sekunden).');
$GLOBALS['TL_LANG']['tl_settings']['versionPeriod']       = array('Speicherzeit für Versionen', 'Hier können Sie die Speicherzeit für verschiedene Versionen eines Datensatzes in Sekunden eingeben (90 Tage = 7776000 Sekunden).');
$GLOBALS['TL_LANG']['tl_settings']['logPeriod']           = array('Speicherzeit für Log-Einträge', 'Hier können Sie die Speicherzeit für Log-Einträge in Sekunden eingeben (14 Tage = 1209600 Sekunden).');
$GLOBALS['TL_LANG']['tl_settings']['sessionTimeout']      = array('Verfallszeit einer Session', 'Hier können Sie die Verfallszeit einer Session in Sekunden eingeben (60 Minuten = 3600 Sekunden).');
$GLOBALS['TL_LANG']['tl_settings']['defaultUser']         = array('Standardbesitzer', 'Bitte wählen Sie einen Benutzer als Standardbesitzer einer Seite aus.');
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup']        = array('Standardgruppe', 'Bitte wählen Sie eine Gruppe als Standardbesitzer einer Seite aus.');
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod']        = array('Standardzugriffsrechte', 'Bitte legen Sie die Standardzugriffsrechte für Seiten und Artikel fest.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_settings']['title_legend']    = 'Titel der Webseite';
$GLOBALS['TL_LANG']['tl_settings']['date_legend']     = 'Datum und Zeit';
$GLOBALS['TL_LANG']['tl_settings']['global_legend']   = 'Globale Einstellungen';
$GLOBALS['TL_LANG']['tl_settings']['backend_legend']  = 'Backend-Einstellungen';
$GLOBALS['TL_LANG']['tl_settings']['frontend_legend'] = 'Frontend-Einstellungen';
$GLOBALS['TL_LANG']['tl_settings']['security_legend'] = 'Sicherheitseinstellungen';
$GLOBALS['TL_LANG']['tl_settings']['files_legend']    = 'Dateien und Bilder';
$GLOBALS['TL_LANG']['tl_settings']['uploads_legend']  = 'Datei-Uploads';
$GLOBALS['TL_LANG']['tl_settings']['search_legend']   = 'Website-Suche';
$GLOBALS['TL_LANG']['tl_settings']['smtp_legend']     = 'SMTP-Einstellungen';
$GLOBALS['TL_LANG']['tl_settings']['ftp_legend']      = 'Safe Mode Hack';
$GLOBALS['TL_LANG']['tl_settings']['modules_legend']  = 'Inaktive Erweiterungen';
$GLOBALS['TL_LANG']['tl_settings']['timeout_legend']  = 'Speicherzeiten';
$GLOBALS['TL_LANG']['tl_settings']['chmod_legend']    = 'Standard-Zugriffsrechte';


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_settings']['edit'] = 'Die lokale Konfiguration bearbeiten';

?>