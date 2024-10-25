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

    // Funcion para crear el menu desplegable
    public function generaSelector() {
        // Creamocion  label y el inicio del menu desplegable
        $selectHTML = "<label>{$this->titulo}</label><br>";
        $selectHTML .= "<select name='{$this->nombre}'>";

        // Agregamos cada opción del menu desplegable
        foreach ($this->opciones as $valor => $texto) {
            // Verificamos si la opcion debe estar seleccionada
            $seleccion = ($valor == $this->seleccionado) ? "selected" : "";
            // Generamos el HTML de cada opción
            $selectHTML.= "<option value='{$valor}' {$seleccion}>{$texto}</option>";
        }

        // Cerramos el menu desplegable
        $selectHTML .= "</select><br>";
        return $selectHTML;
    }
}
?>
