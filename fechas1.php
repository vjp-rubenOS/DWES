<?php
/**
 * Ejercico 1
 */

 $hoy= new DateTime('now');
 echo $hoy->format("d-m-y H:i;s"),"<br>";

 /**
  * Ejercicio 2
  */

  echo date_default_timezone_get(),"<br>";

  /**
   * Ejercicio 3
   */

   $fecha = $hoy;
   $fecha->modify('+45 day');
   echo $fecha->format('Y-m-d'),"<br>";

   /**
    * Ejercicio 4
    */
    $pasado= new DateTime('2024-01-01');
    $presente=$hoy;
    $diferencia =$pasado->diff($presente);
    echo $diferencia->format('%R%a dias de diferencia'),"<br>";

    /**
     * Ejercicio 5
     */
    $zona= new DateTimeZone('America/New_York');
    $horaNew_York= new DateTime('now',$zona);
    
    echo $horaNew_York->format("d-m-y H:i;s"),"<br>";

    /**
     * Ejercicio 6
     */
    $diaEnero = $pasado;
    echo $diaEnero->format("D");

   
?>