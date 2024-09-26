<!DOCTYPE html>
<html lang="en">
<head>
<meta name="autor" content="Ruben Ortega Serradilla">
<title>Fechas (ejercicio 9)</title>
</head>

<?php
/**
 * Ejercico 1 fecha y hora actual
 */

 $hoy= new DateTime('now');
 echo "la fecha y hora de hoy es:  ".$hoy->format("d-m-y H:i;s"),"<br>";

 /**
  * Ejercicio 2 Mosrar zona horaria 
  */

  echo "nombre de la zona horaria por defecto:  ".date_default_timezone_get(),"<br>";

  /**
   * Ejercicio 3 fecha dentro de 45 dias
   */

   $fecha = $hoy;
   $fecha->modify('+45 day');
   echo "la fecha dentro de 45 dias es:  ".$fecha->format('Y-m-d'),"<br>";

   /**
    * Ejercicio 4 numeros pasados desde el 1 de enero
    */
    $pasado= new DateTime('2024-01-01');
    $presente=$hoy;
    $diferencia =$pasado->diff($presente);
    echo "dias pasados desde el dia 1 de enero:  ".$diferencia->format('%R%a dias de diferencia'),"<br>";

    /**
     * Ejercicio 5 fecha y hora actuales de New York
     */
    $zona= new DateTimeZone('America/New_York');
    $horaNew_York= new DateTime('now',$zona);
    
    echo "fecha y hora actual de Nueva York:  ".$horaNew_York->format("d-m-y H:i;s"),"<br>";

    /**
     * Ejercicio 6 Dia de la semana del dia 1 de enero 
     */
    $diaEnero = $pasado;
    echo "dia de la semana que era el dia 1 de enero:  ". $diaEnero->format("D");

   
?>
