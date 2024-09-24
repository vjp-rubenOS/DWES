<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**
     * Ejercicio 1 Crea una variable 
     */
    $nombre= "anaMArial";
    /**
     * Ejercicio 2 Muestralo por pantalla
     */
    echo   $nombre . "\n";
    echo "<br>";
    /**
     * Ejercicio 3 Muestra la longitud
     */
    echo strlen($nombre);
    echo "<br>";
    /**
     * Ejercicio 4 Pasarlo a mayuscula
     */
    echo strtoupper($nombre);
    echo "<br>";
    /**
     * Ejercicio 5 Pasarlo a minuscula
     */
    echo strtolower($nombre);
    echo "<br>";
    /**
     * Ejercicio 6 Mostrar numero veces aparece letra
     */
    echo substr_count($nombre,"a");
    echo "<br>";
    /**
     * Ejercicio 7 Mostrar codigo ASCII primera letra
     */
    $ascii = ord($nombre);
    print($ascii);
    echo "<br>";
    /**
     * Ejercicio 8 Muestra primera aparicion de a
     */
    echo strpos($nombre,"A");
    echo "<br>";
    /**
     * Ejercicio 9 Lo mismo que la anterior pero con la ultima 
     */
    echo strcspn($nombre,"a");
    echo "<br>";
    /**
     * Ejercicio 10 Sustituir letras por cero
     */
    echo  str_ireplace('$nombre', '0', '$nombre');
    echo "<br>";
    /**
     * Ejercicio 11 indica si el nombre empieza por al
     */
    if (str_ends_with($nombre,"al") ==true){
        echo " si ";

    }
    echo "<br>";
    /**
     * Ejercicio 12 elimina espacios al principio y final 
     */
    echo rtrim($nombre);
    echo "<br>";
    /**
     * Ejercicio 13 Muestra variable primera letra mayuscula demas no 
     */

    echo ucfirst(strtolower($nombre));
    echo "<br>";


    ?>
    
</body>
</html>