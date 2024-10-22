<?php 
class Coche{
    private $marca;
    private $modelo;
    private $caracteristicas;

    public function __construct($marca, $modelo, $caracteristicas = []) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->caracteristicas = $caracteristicas;
    }

    public function getCaracteristicas() {
        return $this->caracteristicas;
    }

    public function setCaracteristicas($caracteristicas) {
        $this->caracteristicas = $caracteristicas;
        return $this;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
        return $this;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
        return $this;
    }

    public function __set(string $name, $value): void {
        $this->caracteristicas[$name] = $value;
    }

    public function __get(string $name) {
        if (array_key_exists($name, $this->caracteristicas)) {
            return $this->caracteristicas[$name];
        } else {
            return null;
        }
    }

    public function __isset(string $name): bool {
        return isset($this->caracteristicas[$name]);
    }

    public function __unset(string $name): void {
        unset($this->caracteristicas[$name]);
    }
}
?>
