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
    $url = 'http://username:password@hostname:9090/path?arg=value#anchor';
    print_r(parse_url($url));

    echo parse_url($url,PHP_URL_USER);

    
    ?>

</body>

</html>