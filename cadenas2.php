<?php
/*
ejercicio1 
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
 * ejercicio2 
 */

echo strlen($name);
echo "<br>";
/**
 * ejercicio3
 */

echo strtoupper($name);
echo "<br>";
/**
 * ejercicio4
 */

echo strtolower($name);
echo "<br>";
/**
 * ejercicio5
 */
if(isset($_GET['prefix'])){
    $prefix = $_GET['prefix'];
/**
 * ejercicio6
 */

if(str_starts_with($name,$prefix)==true){
    echo "si";
}else{
    echo "no";
}
}
echo "<br>";
/**
 * ejercicio7
 */

echo substr_count(strtoupper($name),"E");
echo "<br>";
if(stripos($name,"a")==true){
    echo stripos($name,"a");
}else{
    echo "no ";
}
echo "<br>";
/**
 * ejercicio8
 */
echo str_replace("o",0,$name);
echo "<br>";


?>