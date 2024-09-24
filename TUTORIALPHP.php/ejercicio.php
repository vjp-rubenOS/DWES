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
  echo $frase."<br>";

  /**
   * utilizacion de if else
   */
  $numero=rand(1,3);
  echo $numero."<br>";

   if($numero==3){
    echo "El numero es el tres ";

   }elseif($numero>3){
    echo "El numero es mayor de tres";
   }else{
    echo "El numero es menor de tres";
   }
   echo "<br>";
   /**
    * Tablas de multiplicar con for , while y do while
    */
    echo " tabla de multiplicar for"."<br>";
    //for
    for($i=1;$i<=10;$i++){
        $multiplicacion=2*$i;
        echo "2 x $i = $multiplicacion"."<br>";
    }
    echo " tabla de multiplicar while"."<br>";
    //while
    $i=1;
    while($i<=10){
        $multiplicacion=2*$i;
        echo "2 x $i = $multiplicacion"."<br>";
        $i++;

    }
    echo " tabla de multiplicar con do while"."<br>";
    // do while

    $i=1;
    do{
        $multiplicacion=2*$i;
        echo "2 x $i = $multiplicacion"."<br>";
        $i++;

    }while($i<=10);



?>