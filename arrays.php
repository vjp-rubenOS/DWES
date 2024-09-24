<?php

/**
 * ejercicio 1
 */
$nombres = array('Ruben','Pepe', 'Juan', 'Maria');
print_r($nombres);
echo "<br>";

/**
 * ejercicio 2
 */
echo count($nombres);
echo "<br>";

/**
 * ejercicio 3
 */

$cadena = implode(' y ', $nombres);
echo "los integrantes de clase son: $cadena ";
echo "<br>";

/**
 * ejercicio 4
 */

sort($nombres);
print_r($nombres);
echo "<br>";

/**
 * ejercicio 5
 */
// primero los descoloco con shuffle

shuffle($nombres);

// despues lo ponemos en orden inverso
 rsort($nombres);
 print_r($nombres);
 echo "<br>";

 /**
  * ejercicio 6
  */
  $buscar_posicion = array_search('Ruben',$nombres);
  echo "Mi nombre esta en la posicion: $buscar_posicion";
  echo "<br>";

  /**
   * ejercicio 7
   */
  shuffle($nombres);
  print_r($nombres) ;
  echo "<br>";
  /**
   * ejercicio 8
   */
  $patron_buscar='[a]';
  $array_resultado = preg_grep($patron_buscar,$nombres);
  print_r($array_resultado);

  /**
   * ejercicio 9
   * pagina 1111
   */
  $alumnos[['Nombre'=>'Pepe','Edad'=>25,]
  ];







 