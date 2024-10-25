<?php
require_once 'SelectorIndividual.class.php';
// Clase para crear los botones de radio
final class SIRadioOpcion extends SelectorIndividual {
    // Array con las opciones para los radio buttons
    private $opcionesRadio = [
        "titulo" => "Título de canción",
        "album" => "Nombre del álbum",
        "ambos" => "Ambos"
    ];

    // Constructor 
    public function __construct($titulo, $nombre, $seleccionado = "titulo") {
        // Llamamiento al constructor de la clase padre con las opciones definidas en esta clase
        parent::__construct($titulo, $nombre, $this->opcionesRadio, $seleccionado);
    }

    // Funcion para crear los botones de radio
    public function generaSelector() {
        // Creamos un label con el titulo
        $radioHTML = "<label>{$this->titulo}</label>";
        
        // Creamos cada boton del radio en un bucle
        foreach ($this->opciones as $valor => $texto) {
            // Comprobamos si la opcion debe esta seleccionada
            $comprobar = ($valor == $this->seleccionado) ? "checked" : "";
            // Creamos el HTML de cada boton de radio
            $radioHTML .= "<input type='radio' name='{$this->nombre}' value='{$valor}' {$comprobar}> {$texto}";
        }

        // Devolvemos  el HTML generado
        return $radioHTML;
    }
}
?>

