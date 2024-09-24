<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $url = 'http://username:password@hostname:9090/path?arg=value#anchor';
    print_r(parse_url($url));

    echo parse_url($url,PHP_URL_USER);

    
    ?>

</body>

</html>