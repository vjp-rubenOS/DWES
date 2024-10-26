<?php

// Clase que genera el selector en HTML y que herece de la clase SelectorIndividual
final class SISelect extends SelectorIndividual {
    public function generaSelector(): string {
        // El HTML empieza con un label y su etiqueca en la selector
        $output = "<label for='{$this->nombre}'>{$this->titulo}</label>";
        
        //Abre el selector con el nombre dado
        $output .= "<select name='{$this->nombre}'>";
        
        // Recorre cada valor y genera una opcion en el selector
        foreach ($this->valores as $valor => $texto) {
            // Marca la opción como "selected" si es la seleccionada por defecto
            $selected = ($valor === array_keys($this->valores)[$this->seleccionadoPorDefecto]) ? 'selected' : '';
            $output .= "<option value='{$valor}' {$selected}>{$texto}</option>";
        }

        // Cierra el "select" y retorna  el HTML creado
        $output .= "</select><br>";
        return $output;
    }
}

?>

