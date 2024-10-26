<?php

final class SIRadioOpcion extends SelectorIndividual {
    public function generaSelector(): string {
        $output = "<label>{$this->titulo}</label><br>";
        $index = 0;
        foreach ($this->valores as $valor => $texto) {
            $checked = ($index === $this->seleccionadoPorDefecto) ? 'checked' : '';
            $output .= <<<HTML
            <input type="radio" name="{$this->nombre}" value="{$valor}" {$checked}> {$texto}<br>
            HTML;
            $index++;
        }
        return $output;
    }
}

?>
