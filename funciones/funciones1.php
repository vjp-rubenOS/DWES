<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="autor" content="Ruben Ortega Serradilla">
    <title>Funciones 1 (ejercicio 6)</title>
</head>

<body>



    <?php
    /**
     * Ejercicio 6 Simula el insert into de las base de datos
     */

    $alumnos = [
        ["dni" => 111, "nombre" => "Marta", "apellido" => "Garcia", "edad" => 21, "ciclo" => "daw"],
        ["dni" => 222, "nombre" => "Lucia", "apellido" => "Perez", "edad" => 18, "ciclo" => "daw"],
        ["dni" => 333, "nombre" => "Maya", "apellido" => "Rodriguez", "edad" => 22, "ciclo" => "daw"],
        ["dni" => 444, "nombre" => "Rita", "apellido" => "Gutierrez", "edad" => 25, "ciclo" => "daw"],
    ];
    /**
     * el array_keys sirve para sacar la clave de la array
     * el array_values sirve para sacar los valores de array
     * el implode convierte los valores en una cadena separada por comas
     * el array_map sirve para simular la sentencia SQL si el valor es numerico se queda como esta si no lo mete entre comillas
     * el printf sirve para imprimir la sentencia SQL 
     */
    function insert($alumno)
    {
        $keys = array_keys($alumno);
        $values = array_values($alumno);

        $columns = implode(", ", $keys);
        $placeholders = implode(", ", array_map(function ($value) {
            return is_numeric($value) ? $value : "'$value'";
        }, $values));

        printf("INSERT INTO Alumnos(%s) VALUES (%s)\n", $columns, $placeholders);
    }
    /**
     * recorre el array y haria la funcion de insert
     */
    foreach ($alumnos as $alumno) {
        insert($alumno);
        echo "<br>";
    }
    ?>
</body>