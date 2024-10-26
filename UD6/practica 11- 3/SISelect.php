<?php

final class SISelect extends SelectorIndividual {
    public function generaSelector(): string {
        $output = "<label for='{$this->nombre}'>{$this->titulo}</label>";
        $output .= "<select name='{$this->nombre}'>";
        $index = 0;
        foreach ($this->valores as $valor => $texto) {
            $selected = ($index === $this->seleccionadoPorDefecto) ? 'selected' : '';
            $output .= <<<HTML
            <option value="{$valor}" {$selected}>{$texto}</option>
            HTML;
            $index++;
        }
        $output .= "</select><br>";
        return $output;
    }
}

?>
