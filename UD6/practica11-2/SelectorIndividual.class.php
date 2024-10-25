<?php
// SelectorIndividual.php

// Definimos una clase base llamada SelectorIndividual que otras clases pueden usar como plantilla.
abstract class SelectorIndividual {
    // Variables que definen las propiedades del selector
    protected $titulo;       // Título del campo (label)
    protected $nombre;       // Nombre del campo (atributo 'name' del formulario)
    protected $opciones;     // Opciones para seleccionar (array)
    protected $seleccionado; // Valor seleccionado por defecto

    // Constructor que inicializa las propiedades del selector
    public function __construct($titulo, $nombre, $opciones, $seleccionado = 0) {
        $this->titulo = $titulo;
        $this->nombre = $nombre;
        $this->opciones = $opciones;
        $this->seleccionado = $seleccionado;
    }

    // Método que otras clases tendrán que definir para generar el selector
    abstract public function generaSelector();
}
?>
