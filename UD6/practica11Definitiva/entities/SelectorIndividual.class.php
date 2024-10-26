<?php
//Clase abstracta del Selector que implementa la interfaz
abstract class SelectorIndividual implements ISelectorIndividual {
    protected string $titulo;
    protected string $nombre;
    protected array $valores;
    protected int $seleccionadoPorDefecto;
    //Constructor
    public function __construct(string $titulo, string $nombre, array $valores, int $seleccionadoPorDefecto = 0) {
        $this->titulo = $titulo;
        $this->nombre = $nombre;
        $this->valores = $valores;
        $this->seleccionadoPorDefecto = $seleccionadoPorDefecto;
    }
    //Metodo para generarSelector
    abstract public function generaSelector(): string;
}

?>
