<?php


$suma= function ($num1,$num2) {
    return $num1+$num2;
    
};
$resta = function ($num1,$num2) {
    return $num1+$num2;
    
};
$multiplicacion = function ($num1,$num2) {
    return $num1*$num2;
    
};
$division = function ($num1,$num2) {
    return $num1/$num2;
    
};
$operaciones = function($operacion, $simbolo, $num1, $num2) {
    echo "$num1 $simbolo $num2 = " . $operacion($num1, $num2) . "<br>";
};
$operaciones($suma,"+",5,3);
$operaciones($resta,"-",5,3);
$operaciones($multiplicacion,"*",5,3);
$operaciones($division,"/",5,3);





?>