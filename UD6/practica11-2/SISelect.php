<?php
// SISelect.php

require_once 'SelectorIndividual.class.php';

// Definimos la clase para crear una lista desplegable
final class SISelect extends SelectorIndividual {
    // Opciones para el menú desplegable
    private $opcionesSelect = [
        "todos" => "Todos",
        "blues" => "Blues",
        "jazz" => "Jazz",
        "pop" => "Pop",
        "rock" => "Rock"
    ];

    // Constructor que inicializa el selector
    public function __construct($titulo, $nombre, $seleccionado = "todos") {
        // Llamamos al constructor de la clase padre con las opciones definidas en esta clase
        parent::__construct($titulo, $nombre, $this->opcionesSelect, $seleccionado);
    }

    // Función para crear el menú desplegable
    public function generaSelector() {
        // Creamos un label y el inicio del menú desplegable
        $output = "<label>{$this->titulo}</label><br>";
        $output .= "<select name='{$this->nombre}'>";

        // Agregamos cada opción del menú desplegable
        foreach ($this->opciones as $valor => $texto) {
            // Verificamos si la opción debe estar seleccionada
            $selected = ($valor == $this->seleccionado) ? "selected" : "";
            // Generamos el HTML de cada opción
            $output .= "<option value='{$valor}' {$selected}>{$texto}</option>";
        }

        // Cerramos el menú desplegable
        $output .= "</select><br>";
        return $output;
    }
}
?>
