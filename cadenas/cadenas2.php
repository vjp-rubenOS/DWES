<!DOCTYPE html>
<html lang="en">
<head>
<meta name="autor" content="Ruben Ortega Serradilla">
<title>Cadena 1</title>
</head>
<body>
    

<?php
/*
ejercicio1 utilizar trim , mostrar valor de parametro
 */
if(isset($_GET['name'])){
    $name = $_GET['name'];
}
else{
    $name='Ruben';
}
echo trim($name);
echo "<br>";

/**
 * ejercicio2 muestra longitud del parametro
 */

echo strlen($name);
echo "<br>";
/**
 * ejercicio3 contenido del parametro en mayuscula 
 */

echo strtoupper($name);
echo "<br>";
/**
 * ejercicio4 contenido del parametro en minuscula
 */

echo strtolower($name);
echo "<br>";
/**
 * ejercicio 5 pasar un segundo parametro
 */
if(isset($_GET['prefix'])){
    $prefix = $_GET['prefix'];


if(str_starts_with($name,$prefix)==true){
    echo "si";
}else{
    echo "no";
}
}
echo "<br>";
/**
 * ejercicio 6  mostrar numero de veces que aparece letra e
 */

echo substr_count(strtoupper($name),"E");
echo "<br>";
/**
 * ejercicio 7 mostrar posicion de la primera a 
 */
if(stripos($name,"a")==true){
    echo stripos($name,"a");
}else{
    echo "no ";
}
echo "<br>";
/**
 * ejercicio 8  sustituir la o por el 0
 */
echo str_replace("o",0,$name);
echo "<br>";


?>
</body>