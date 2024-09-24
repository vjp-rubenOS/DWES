<?php

$alumnos = [
    ["dni" => 111, "nombre" => "Marta", "apellido" => "Garcia", "edad" => 21, "ciclo" => "daw"],
    ["dni" => 222, "nombre" => "Lucia", "apellido" => "Perez", "edad" => 18, "ciclo" => "daw"],
    ["dni" => 333, "nombre" => "Maya", "apellido" => "Rodriguez", "edad" => 22, "ciclo" => "daw"],
    ["dni" => 444, "nombre" => "Rita", "apellido" => "Gutierrez", "edad" => 25, "ciclo" => "daw"],
];

function insert($alumno) {
    $keys = array_keys($alumno);
    $values = array_values($alumno);

    $columns = implode(", ", $keys);
    $placeholders = implode(", ", array_map(function($value) {
        return is_numeric($value) ? $value : "'$value'";
    }, $values));

    printf("INSERT INTO Alumnos(%s) VALUES (%s)\n", $columns, $placeholders);
}

foreach ($alumnos as $alumno) {
    insert($alumno);
    echo "<br>";
}
?>