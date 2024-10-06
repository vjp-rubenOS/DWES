<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="autor" content="Ruben Ortega Serradilla">
    <title>array 2 (ejercicio 5)</title>
    <style>
        /* Estilo para la tabla */
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
            background-color: #DCDCDC;

        }

        /* Este se encarga de las celdas */
        td,
        th {
            border: 3px solid white;
            padding: 8px;

        }

        /* Color de fondo para las filas impares */
        tr:nth-child(2n+1) {
            background-color: #f2f2f3;

        }


        /* Color de la primera fila  */
        tr:nth-child(1) {
            background-color: blue;
            color: white;
            font-size: large;
        }
    </style>
</head>

<body>
    <?php
    /**
     * array multidimensional
     */
    $paises = [
        ['Pais' => 'Alemania', 'Capital' => 'Berlin', 'Extension' => 557046, 'Habitantes' => 78420000],
        ['Pais' => 'Austria', 'Capital' => 'Viena', 'Extension' => 83849, 'Habitantes' => 7614000],
        ['Pais' => 'Belgica', 'Capital' => 'Bruselas', 'Extension' => 30518, 'Habitantes' => 9932000]


    ];



    ?>

    <table>
        <tr>
            <?php
            /*
            creamos una tabla y dentro un foreach para sacar el valor de las claves para la cabecera 
            */
            foreach (array_keys($paises[0]) as $clave) {
                echo "<td>" . $clave . "</td>";
            }
            ?>
        </tr>
        <?php
        /*
        creamos dos foreach uno para sacar las filas y el otro para los datos que van dentro de la fila 
        */
        foreach ($paises as $pais) {
            echo "<tr >";
            foreach ($pais as $valor) {
                echo "<td>" . $valor . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>