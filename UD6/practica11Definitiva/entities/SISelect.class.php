<?php

// Clase que genera un menú desplegable (selector) en HTML
final class SISelect extends SelectorIndividual {
    public function generaSelector(): string {
        // Comienza el HTML con una etiqueta de "label" (etiqueta) para el selector
        $output = "<label for='{$this->nombre}'>{$this->titulo}</label>";
        
        // Abre el elemento "select" con el nombre dado
        $output .= "<select name='{$this->nombre}'>";
        
        // Recorre cada valor y genera una opción en el selector
        foreach ($this->valores as $valor => $texto) {
            // Marca la opción como "selected" si es la seleccionada por defecto
            $selected = ($valor === array_keys($this->valores)[$this->seleccionadoPorDefecto]) ? 'selected' : '';
            $output .= "<option value='{$valor}' {$selected}>{$texto}</option>";
        }

        // Cierra el elemento "select" y retorna todo el HTML generado
        $output .= "</select><br>";
        return $output;
    }
}

?>

