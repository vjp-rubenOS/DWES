<?php
// SIRadioOpcion.php

require_once 'SelectorIndividual.class.php';

// Definimos la clase que crea botones de radio
final class SIRadioOpcion extends SelectorIndividual {
    // Opciones para los radio buttons
    private $opcionesRadio = [
        "titulo" => "Título de canción",
        "album" => "Nombre del álbum",
        "ambos" => "Ambos"
    ];

    // Constructor que inicializa el selector de radio
    public function __construct($titulo, $nombre, $seleccionado = "titulo") {
        // Llamamos al constructor de la clase padre con las opciones definidas en esta clase
        parent::__construct($titulo, $nombre, $this->opcionesRadio, $seleccionado);
    }

    // Función para crear los botones de radio
    public function generaSelector() {
        // Creamos un label con el título
        $output = "<label>{$this->titulo}</label>";
        
        // Creamos cada botón de radio en un bucle
        foreach ($this->opciones as $valor => $texto) {
            // Verificamos si la opción debe estar seleccionada
            $checked = ($valor == $this->seleccionado) ? "checked" : "";
            // Generamos el HTML de cada botón de radio
            $output .= "<input type='radio' name='{$this->nombre}' value='{$valor}' {$checked}> {$texto}";
        }

        // Devolvemos todo el HTML generado
        return $output;
    }
}
?>

