<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="autor" content="Ruben Ortega Serradilla">
    <title>Funciones 3 (ejercicio 8)</title>
</head>

<body>



    <?php
    /**
     * Ejercicio 8 crear funcion que reciba 4 parametros de forma anonima
     * Primero creariamos las funciones de suma,resta,multiplicacion y division con entrada de dos parametros
     */

    $suma = function ($num1, $num2) {
        return $num1 + $num2;
    };
    $resta = function ($num1, $num2) {
        return $num1 + $num2;
    };
    $multiplicacion = function ($num1, $num2) {
        return $num1 * $num2;
    };
    $division = function ($num1, $num2) {
        return $num1 / $num2;
    };
    /**
     * creamos una funcion donde le pasariamos 4 parametros, una de las operaciones creadas anteriormente
     * el simbolo de la operacion 
     * y los dos numero con los que queremos hacer la operacion
     */
    $operaciones = function ($operacion, $simbolo, $num1, $num2) {
        echo "$num1 $simbolo $num2 = " . $operacion($num1, $num2) . "<br>";
    };
    /**
     * por ultimo llamamos a las funciones para ver como funcionan
     */
    $operaciones($suma, "+", 5, 3);
    $operaciones($resta, "-", 5, 3);
    $operaciones($multiplicacion, "*", 5, 3);
    $operaciones($division, "/", 5, 3);





    ?>
</body>