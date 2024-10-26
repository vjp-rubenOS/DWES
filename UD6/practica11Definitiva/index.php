<?php 
// Importar clases necesarias
require_once 'entities/ISelectorIndividual.php';
require_once 'entities/SelectorIndividual.class.php';
require_once 'entities/SIRadioOpcion.class.php';
require_once 'entities/SISelect.class.php';

// Crear opciones para los radio buttons
$opcionesRadio = [
    "titulo" => "Título de canción",
    "album" => "Nombre del álbum",
    "ambos" => "Ambos"
];
$radioCampoBuscar = new SIRadioOpcion("Buscar en:", "campoBuscar", $opcionesRadio, 0);

// Crear opciones para el select de géneros
$opcionesGenero = [
    "todos" => "Todos",
    "blues" => "Blues",
    "jazz" => "Jazz",
    "pop" => "Pop",
    "rock" => "Rock"
];
$selectGenero = new SISelect("Género musical:", "genero", $opcionesGenero, 0);

// Incluir la vista y pasarle las variables
require_once 'view/index.view.php';
?>