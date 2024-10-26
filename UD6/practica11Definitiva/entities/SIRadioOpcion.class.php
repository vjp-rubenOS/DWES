<?php

// Clase que genera un grupo de botones de radio en HTML
final class SIRadioOpcion extends SelectorIndividual {
    public function generaSelector(): string {
        // Comienza el HTML con una etiqueta de "label" (etiqueta) para el grupo de botones de radio
        $output = "<label>{$this->titulo}</label>";

        // Variable para seguir el índice de cada opción
        $index = 0;

        // Recorre cada opción y genera un botón de radio
        foreach ($this->valores as $valor => $texto) {
            // Marca el botón como "checked" si es el seleccionado por defecto
            $checked = ($index === $this->seleccionadoPorDefecto) ? 'checked' : '';
            
            // Agrega el HTML para cada botón de radio
            $output .= "<input type='radio' name='{$this->nombre}' value='{$valor}' {$checked}> {$texto}";
            
            $index++;
        }

        // Retorna todo el HTML generado
        return $output."<br>";
    }
}

?>
