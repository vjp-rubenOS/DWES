<?php
//Clase abstracta 
abstract class SelectorIndividual {
    // Variables protegidas
    protected $titulo;       // Titulo del campo (label)
    protected $nombre;       // Nombre del campo (atributo 'name' del formulario)
    protected $opciones;     // Opciones para seleccionar (array)
    protected $seleccionado; // Valor seleccionado por defecto

    // Constructor 
    public function __construct($titulo, $nombre, $opciones, $seleccionado = 0) {
        $this->titulo = $titulo;
        $this->nombre = $nombre;
        $this->opciones = $opciones;
        $this->seleccionado = $seleccionado;
    }

    // Metodo abstracto que la otras clases tendra obligatoriamente
    abstract public function generaSelector();
}
?>
