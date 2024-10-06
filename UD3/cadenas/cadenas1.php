<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="autor" content="Ruben Ortega Serradilla">
    <title>Cadena 1 (ejercicio 1)</title>
</head>

<body>
    <?php
    /**
     * Ejercicio 1 Crea una variable 
     */
    $nombre = "anaMArial";
    /**
     * Ejercicio 2 Muestralo por pantalla
     */
    echo   "El nombre es: " . $nombre . "\n";
    echo "<br>";
    /**
     * Ejercicio 3 Muestra la longitud
     */
    echo "La longitud del nombre es: " . strlen($nombre);
    echo "<br>";
    /**
     * Ejercicio 4 Pasarlo a mayuscula
     */
    echo "El nombre en mayusculas es: " . strtoupper($nombre);
    echo "<br>";
    /**
     * Ejercicio 5 Pasarlo a minuscula
     */
    echo "El nombre en minuscula es: " . strtolower($nombre);
    echo "<br>";
    /**
     * Ejercicio 6 Mostrar numero veces aparece letra
     */
    echo "Numero de veces que aparece la 'a': " . substr_count($nombre, "a");
    echo "<br>";
    /**
     * Ejercicio 7 Mostrar codigo ASCII primera letra
     */
    $ascii = ord($nombre);
    print "El codigo ASCII de la primera letra es: " . ($ascii);
    echo "<br>";
    /**
     * Ejercicio 8 Muestra primera aparicion de a
     */
    echo "Aparicion de la primera 'a' : " . strpos($nombre, "A");
    echo "<br>";
    /**
     * Ejercicio 9 Lo mismo que la anterior pero con la ultima 
     */
    echo "Aparicion de la ultima 'a' :" . strcspn($nombre, "a");
    echo "<br>";
    /**
     * Ejercicio 10 Sustituir letras por cero
     */
    echo  "El nombre sustituido por '0' : " . str_ireplace('$nombre', '0', '$nombre');
    echo "<br>";
    /**
     * Ejercicio 11 indica si el nombre empieza por al
     */
    echo "¿El nombre empieza por al? " . "<br>";
    if (str_ends_with($nombre, "al") == true) {

        echo " si ";
    }else{
        echo " no ";
    }
    echo "<br>";
    /**
     * Ejercicio 12 elimina espacios al principio y final 
     */
    echo "Nombre con el espacio eliminado al principio y al final : " . rtrim($nombre);
    echo "<br>";
    /**
     * Ejercicio 13 Muestra variable primera letra mayuscula demas no 
     */

    echo "nombre con la primera letra en mayuscula: " . ucfirst(strtolower($nombre));
    echo "<br>";


    ?>

</body>

</html>