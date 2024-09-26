<!DOCTYPE html>
<html lang="en">
<head>
<meta name="autor" content="Ruben Ortega Serradilla">
<title>Cadena 2</title>
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
    //este seria el nombre por defecto
}
echo "nombre recogido en el navegador o por defecto: ".trim($name);
echo "<br>";

/**
 * ejercicio2 muestra longitud del parametro
 */

echo "Longitud del nombre(parametros):" .strlen($name);
echo "<br>";
/**
 * ejercicio3 contenido del parametro en mayuscula 
 */

echo "nombre (parametro) en mayuscula: ". strtoupper($name);
echo "<br>";
/**
 * ejercicio4 contenido del parametro en minuscula
 */

echo "nombre (parametro) en mayuscula: ".strtolower($name);
echo "<br>";
/**
 * ejercicio 5 pasar un segundo parametro
 */
echo "¿El nombre comienza por el prefijo pasado?"."<br>";
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

echo "Numero de veces que aparece la e: ". substr_count(strtoupper($name),"E");
echo "<br>";
/**
 * ejercicio 7 mostrar posicion de la primera a 
 */
if(stripos($name,"a")==true){
    echo "posicion de la primera 'a': ". stripos($name,"a");
}else{
    echo "no hay ninguna 'a' ";
}
echo "<br>";
/**
 * ejercicio 8  sustituir la o por el 0
 */
echo "nombre(parametro) con la 'o' sustituida por '0'". str_replace("o",0,$name);
echo "<br>";


?>
</body>