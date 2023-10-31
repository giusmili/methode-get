# Activities php : les superglobales 👍
*PHP: Hypertext Preprocessor*<br>
![cover](./asset/HkfXSEWWa.png)
> &copy;  [Giuseppe Militello](https://www.linkedin.com/in/giuseppe-militello-22406ab0/) - All rights reserved for educational purposes only

## Que'est ce que une superglobale dans PHP?
>Plusieurs variables prédéfinies en PHP sont "superglobales", ce qui signifie qu'elles sont disponibles quel que soit le contexte du script. Il est inutile de faire global $variable; avant d'y accéder dans les fonctions ou les méthodes. 

## Comment peut-on les retrouver dans l'environnement Apache?
> Soit vous avez une liste indicative comme celle ci-dessous:
* $GLOBALS
* $_SERVER
* $_GET
* $_POST
* $_FILES
* $_COOKIE
* $_SESSION
* $_REQUEST
* $_ENV
 ou sinon vous codez dans un fichier php la ligne suivante:
```php
print_r($_SERVER)

/* resultat de  l'instruction */
        Array
(
    [MIBDIRS] => D:/xampp/php/extras/mibs
    [MYSQL_HOME] => \xampp\mysql\bin
    [OPENSSL_CONF] => D:/xampp/apache/bin/openssl.cnf
    [PHP_PEAR_SYSCONF_DIR] => \xampp\php
    [PHPRC] => \xampp\php
    [TMP] => \xampp\tmp
    [HTTP_HOST] => localhost
    [HTTP_USER_AGENT] => Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/118.0
    [HTTP_ACCEPT] => text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8

)

```
>⚡️Dans notre cas nous allons utiliser ces **surperglobale** lorsque on manipules les données d'un formulaire ou sur une requête dans une url:
```html
<a href="index.php?genre=homme">vous êtes un homme</a>

```