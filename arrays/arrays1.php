<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="autor" content="Ruben Ortega Serradilla">
    <title>arrays 1 (ejercicio 4)</title>
</head>

<body>


    <?php


    /**
     * ejercicio 1 Crear un array
     */
    $nombres = array('Ruben', 'Pepe', 'Juan', 'Maria');
    echo "Componentes del array : ";
    print_r($nombres) . "hola";
    echo "<br>";

    /**
     * ejercicio 2 Mostrar numero de elementos
     */
    echo "El numero de elementos es: " . count($nombres);
    echo "<br>";

    /**
     * ejercicio 3 Crear una cadena con los alumnos y el array separado por espacio
     */

    $cadena = implode(' y ', $nombres);
    echo "Los integrantes de clase son: $cadena ";
    echo "<br>";

    /**
     * ejercicio 4 Mostrar ordenado 
     */

    sort($nombres);
    echo "Array con los nombres ordenados: ";
    print_r($nombres);
    echo "<br>";

    /**
     * ejercicio 5 Mostrar array orden inverso
     */
    // primero los descoloco con shuffle

    shuffle($nombres);

    // despues lo ponemos en orden inverso
    rsort($nombres);
    echo "Array en orden inverso: ";
    print_r($nombres);
    echo "<br>";

    /**
     * ejercicio 6 Mostrar posicion de mi nombre
     */
    $buscar_posicion = array_search('Ruben', $nombres);
    echo "Mi nombre esta en la posicion: $buscar_posicion";
    echo "<br>";

    /**
     * ejercicio 7 Mostrar array en orden aleatorio
     */
    shuffle($nombres);
    echo "Array con el orden aleatorio: ";
    print_r($nombres);
    echo "<br>";
    /**
     * ejercicio 8 Mostrar alumnos que contangan la a 
     */
    $patron_buscar = '[a]';
    $array_resultado = preg_grep($patron_buscar, $nombres);
    echo "Nombre de alumnos que tengan la a";
    print_r($array_resultado) . "<br>";

    /**
     * ejercicio 9 crear un array compuesto de arrays 
     * 
     */
    $alumnos = [
        ['id' => 1, 'Nombre' => 'Pepe', 'Edad' => 25],
        ['id' => 2, 'Nombre' => 'Juan', 'Edad' => 32],
        ['id' => 3, 'Nombre' => 'Maria', 'Edad' => 20]
    ];

    /**
     * ejercicio 10 crear una tabla con los datos
     */
    echo '<br>';
    echo '<br>';
    echo "Tabla con los datos del array";

    echo '<table border="1">';
    echo '<tr>';
    echo '<th>Id</th>';
    echo '<th>Nombre</th>';
    echo '<th>Edad</th>';
    echo '</tr>';
    foreach ($alumnos as $alumno) {
        echo '<tr>';
        echo '<td>' . $alumno['id'] . '</td>';
        echo '<td>' . $alumno['Nombre'] . '</td>';
        echo '<td>' . $alumno['Edad'] . '</td>';
        echo '</tr>';
    }
    echo '</table>' . '<br>';



    /**
     * Ejercicio 11 conseguir array indexsado
     */



    $soloNombres = array_column($alumnos, 'Nombre');
    echo "Array con solo los nombres: ";
    print_r($soloNombres);
    echo "<br>";

    /**
     * Ejercicio 12 Crar array con numeros y usando funcion suma
     */

    $numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);


    $suma = array_sum($numeros);


    echo "La suma de los 10 numeros es: " . $suma . "<br>";

    ?>
</body>