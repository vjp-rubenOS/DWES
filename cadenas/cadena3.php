<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="autor" content="Ruben Ortega Serradilla">
    <title>Cadena 3</title>
</head>

<body>
    <?php
    /**
     * El protocolo utilizado 
     */
    echo "Utilizacion del protocolo"."<br>";
    $url = 'http://username:password@hostname:9090/path?arg=value#anchor';

    echo parse_url($url,PHP_URL_PASS)."<br>";
    echo parse_url($url,PHP_URL_USER)."<br>";
    echo parse_url($url,PHP_URL_QUERY)."<br>";
    echo parse_url($url,PHP_URL_SCHEME)."<br>";

    
    ?>

</body>

</html>