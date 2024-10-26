<?php 
// Importar las clases
require_once 'entities/ISelectorIndividual.php';
require_once 'entities/SelectorIndividual.class.php';
require_once 'entities/SIRadioOpcion.class.php';
require_once 'entities/SISelect.class.php';

// Crear opciones para los radio buttons
//Opciones para los botones de radio
$opcionesRadio = [
    "titulo" => "Título de canción",
    "album" => "Nombre del álbum",
    "ambos" => "Ambos"
];
$radioCampoBuscar = new SIRadioOpcion("Buscar en:", "campoBuscar", $opcionesRadio, 0);

// Opciones para el selector por generos
$opcionesGenero = [
    "todos" => "Todos",
    "blues" => "Blues",
    "jazz" => "Jazz",
    "pop" => "Pop",
    "rock" => "Rock"
];
$selectGenero = new SISelect("Género musical:", "genero", $opcionesGenero, 0);


require_once 'view/index.view.php';
?>
