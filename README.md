# _HTTP STATUS CODES API für PHP_
Mit dieser Api kann man die Bedeutung und eine Erkl&auml;rung von HTTP STATUS CODES abrufen.

## _INSTALLATION_
1. Einfach die ZIP-Datei herunterladen oder dieses Git klonen
2. Min. Installation: 'httpcode.php' und 'Curl.php' aus dem Ordner '/src'
3. Die Benutzungsanleitung befolgen

## _BENUTZUNG_
```php
include "./src/httpcode.php";

#Nachricht anzeigen
echo httpmsg("404");

#Bedeutung anzeigen
echo httpmean("404");
```
