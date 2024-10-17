<?php


interface ISelectorIndividual{
    public function __construct(string $tituloCampo,string $nombreCampo,array $valores,int $elementoSeleccionado);

    public function generarSelector();
   
}

?>