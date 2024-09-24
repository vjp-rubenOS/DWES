<?php
/**
 * Ejercicio de random y di si es igual menos o mayor de 50
 */
$num=rand(1,100);
echo $num."<br>";
if($num>50){
    echo " El numero es mayor de 50"."<br>";
}elseif($num==50){
    echo " El numero es 50 "."<br>";
}else{
    echo "El numero es menor de 50";
}


/**
 * Ejercicio definir una variable por linea 
 */
echo "<br>";
echo "<br>";
 $entero=3;
 echo $entero."<br>";
 $double=2.33;
 echo $double."<br>";
 $string="hola";
 echo $string."<br>";
 $boolean=true;
 echo $boolean."<br>";

 /**
  * Ejercicio de cadenas y concatenar

  */
  $edad=33;
  $altura=2;
  $coches=1;
  $frase= "Pepe con edad: $edad , altura de $altura y con $coches coches";
  echo $frase;




?>