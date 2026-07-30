# Schiedsrichter-Verteiler Changelog

## Version 1.1.1 (2026-07-29)

* Fix: Warning: Undefined array key "deleteConfirm", "lizenz_optionen", "lizenzstatus_optionen" bei contao:migrate -> Lesezugriffe auf $GLOBALS['TL_LANG'] in den DCA-Dateien mit `?? null` bzw. `?? array()` abgesichert, da der DcaLoader die Sprachdateien noch nicht geladen hat
* Change: Beschreibung, Keywords und Homepage in der composer.json ergänzt, damit Packagist das Paket verständlich darstellt und über die Suche auffindbar macht

## Version 1.1.0 (2024-04-18)

* Add: codefog/contao-haste
* Change: Haste-Toggler statt des normalen Togglers
* Add: Kompatibilität PHP 8

## Version 1.0.1 (2021-04-14)

* Fix: Import der Newsletter-Empfänger führte zu Duplicate entry (Problem Groß- und Kleinschreibung)

## Version 1.0.0 (2021-04-14)

* Add: Aktiven Verteiler im Schiedsrichter-Newsletter anzeigen, inkl. Bearbeitungslink (bei Abonennten-Ansicht nicht möglich)
* Fix: Sortierungen, Filter in Datensatz-Auflistung

## Version 0.0.4 (2021-04-14)

* Fix: Der Wert 0 wurde in der Datensatzauflistung nicht als 0 angezeigt -> vorerst aber Patch von Spooky in DC_Table eingefügt
* Add: Abhängigkeit contao/newsletter-bundle
* Add: Plugin.php ->setLoadAfter([\Contao\NewsletterBundle\ContaoNewsletterBundle::class]),

## Version 0.0.3 (2021-04-13)

* Add: Funktionalität für Festlegung Standardverteiler
* Add: Abhängigkeit schachbulle/contao-schiedsrichter-bundle ab Version 1.1
* Add: Synchronisierung des Standardverteilers mit der Schiedsrichter-Datenbank

## Version 0.0.2 (2021-04-09)

* Bundle ausgebaut mit den Grundfunktionen

## Version 0.0.1 (2021-04-09)

* Initiale Version für Contao 4
