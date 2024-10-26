<?php

// Clase que genera un grupo de botones de radio en HTML y que herece de la clase SelectorIndividual
final class SIRadioOpcion extends SelectorIndividual {
    public function generaSelector(): string {
        //El HTML empieza con un label y su etiqueta para el grupo de botones de tipo radio 
        $radioHTML= "<label>{$this->titulo}</label>";

        // Variable para indicar el indice de cada opcion
        $index = 0;

        //Recorrer las opciones y generar un boton por cada una de ellas
        foreach ($this->valores as $valor => $texto) {
            // Pone el boton como marcado si es el seleccionado
            $comprobar = ($index === $this->seleccionadoPorDefecto) ? 'checked' : '';
            
             // Crea el HTML de cada boton
            $radioHTML .= "<input type='radio' name='{$this->nombre}' value='{$valor}' {$comprobar}> {$texto}";
            
            $index++;
        }

        // Retorna todo el HTML creado
        return $radioHTML."<br>";
    }
}

?>
