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

?>