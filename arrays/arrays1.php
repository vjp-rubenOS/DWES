<?php


/**
 * ejercicio 1 Crear un array
 */
$nombres = array('Ruben','Pepe', 'Juan', 'Maria');

print_r ($nombres)."hola";
echo "<br>";

/**
 * ejercicio 2 Mostrar numero de elementos
 */
echo "el numero de elementos es: ".count($nombres);
echo "<br>";

/**
 * ejercicio 3 Crear una cadena con los alumnos y el array separado por espacio
 */

$cadena = implode(' y ', $nombres);
echo "los integrantes de clase son: $cadena ";
echo "<br>";

/**
 * ejercicio 4 Mostrar ordenado 
 */

sort($nombres);
print_r($nombres);
echo "<br>";

/**
 * ejercicio 5 Mostrar array orden inverso
 */
// primero los descoloco con shuffle

shuffle($nombres);

// despues lo ponemos en orden inverso
 rsort($nombres);
 print_r($nombres);
 echo "<br>";

 /**
  * ejercicio 6 Mostrar posicion de mi nombre
  */
  $buscar_posicion = array_search('Ruben',$nombres);
  echo "Mi nombre esta en la posicion: $buscar_posicion";
  echo "<br>";

  /**
   * ejercicio 7 Mostrar array en orden aleatorio
   */
  shuffle($nombres);
  print_r($nombres) ;
  echo "<br>";
  /**
   * ejercicio 8 Mostrar alumnos que contangan la a 
   */
  $patron_buscar='[a]';
  $array_resultado = preg_grep($patron_buscar,$nombres);
  print_r($array_resultado)."<br>";

  /**
   * ejercicio 9 crear un array compuesto de arrays 
   * 
   */
  $alumnos=[
    ['id'=>1,'Nombre'=>'Pepe','Edad'=>25],
    ['id'=>2,'Nombre'=>'Juan','Edad'=>32],
    ['id'=>3,'Nombre'=>'Maria','Edad'=>20]
  ];

  /**
   * ejercicio 10 crear una tabla con los datos
   */
  
  ?>
  <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Alumnos</title>
  
</head>
<body>
    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Edad</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alumnos as $alumno): ?>
                <tr>
                    <td><?php echo $alumno['id']; ?></td>
                    <td><?php echo $alumno['Nombre']; ?></td>
                    <td><?php echo $alumno['Edad']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

<?php

/**
 * Ejercicio 11 conseguir array indexsado
 */



$soloNombres= array_column($alumnos,'Nombre');
print_r($soloNombres);
echo "<br>";

/**
 * Ejercicio 12 Crar array con numeros y usando funcion suma
 */

 $numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);


$suma = array_sum($numeros);


echo "La suma de los 10 numeros es: " . $suma."<br>";

?>  








 