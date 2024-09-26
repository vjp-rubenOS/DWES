<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="autor" content="Ruben Ortega Serradilla">
    <title>Cadena 3</title>
</head>

<body>
    <?php
    /**
     * El protocolo utilizado y el nombre de usuario por ejemplo
     */
    echo "Utilizacion del protocolo"."<br>";
    $url = 'http://username:password@hostname:9090/path?arg=value#anchor';
    print_r(parse_url($url))."<br>";

    echo parse_url($url,PHP_URL_USER)."<br>";

    
    ?>

</body>

</html>