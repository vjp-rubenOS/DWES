<?php
// otra forma de hacerlo seria inicializando las variables con xxx y quitariamos la parte de else 

if(isset($_GET['id'])){
    $nombre = $_GET['id'];
} else {
    $nombre = 'XXX';
}

if(isset($_GET['ci'])){
    $ciudad = $_GET['ci'];
} else {
    $ciudad = 'XXX';
}

if(isset($_GET['ed'])){
    $edad = $_GET['ed'];
} else {
    $edad = 'XXX';
}

echo "Hola, soy " . $nombre . ", tengo " . $edad . " años y vivo en la ciudad de " . $ciudad;

// otra forma de hacerlo 
//$nombre = $_GET['nombre'] ?? 'XXX';
//echo "el nombre es $nombre";


?>