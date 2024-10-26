<?php
//Clase abstracta 
abstract class SelectorIndividual implements ISelectorIndividual {
    protected string $titulo;
    protected string $nombre;
    protected array $valores;
    protected int $seleccionadoPorDefecto;

    public function __construct(string $titulo, string $nombre, array $valores, int $seleccionadoPorDefecto = 0) {
        $this->titulo = $titulo;
        $this->nombre = $nombre;
        $this->valores = $valores;
        $this->seleccionadoPorDefecto = $seleccionadoPorDefecto;
    }

    abstract public function generaSelector(): string;
}

?>
