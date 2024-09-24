<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombre= "anaMArial";
    echo   $nombre . "\n";
    echo "<br>";
    echo strlen($nombre);
    echo "<br>";
    echo strtoupper($nombre);
    echo "<br>";
    echo strtolower($nombre);
    echo "<br>";
    echo substr_count($nombre,"a");
    echo "<br>";
    $ascii = ord($nombre);
    print($ascii);
    echo "<br>";
    echo strpos($nombre,"A");
    echo "<br>";
    echo strcspn($nombre,"a");
    echo "<br>";
    echo  str_ireplace('$nombre', '0', '$nombre');
    echo "<br>";
    if (str_ends_with($nombre,"al") ==true){
        echo " si ";

    }
    echo "<br>";
    echo rtrim($nombre);
    echo "<br>";

    echo ucfirst(strtolower($nombre));
    echo "<br>";


    ?>
    
</body>
</html>