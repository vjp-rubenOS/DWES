<?php
require 'ISelectorIndividual.class.php';

abstract class  SelectorIndividual implements ISelectorIndividual{
    private $tituloCampo;
    private $nombreCampo;
    private $valores;
    private $elementoSeleccionado;

    public function __construct(string $tituloCampo,string $nombreCampo,array $valores,int $elementoSeleccionado)
    {
        $this->tituloCampo=$tituloCampo;
        $this->nombreCampo=$nombreCampo;
        $this->valores=$valores;
        $this->elementoSeleccionado=$elementoSeleccionado;
        
    }

    
}

?>