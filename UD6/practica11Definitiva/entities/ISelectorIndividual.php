<?php
// Interfaz
interface ISelectorIndividual {
    public function __construct(string $titulo, string $nombre, array $valores, int $seleccionadoPorDefecto);
    public function generaSelector(): string;
}

?>