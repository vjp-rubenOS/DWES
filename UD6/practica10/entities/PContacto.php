<?php
require 'contacto.class.php';
class PCcontacto extends Contacto
{
    private $direccion;
    private $ciudad;
    private $provincia;

    public function __construct($id, $nombre, $telefono, $fechaAlta, $foto, $direccion, $ciudad, $provincia)
    {

        $this->setId($id);
        $this->setNombre($nombre);
        $this->setTelefono($telefono);
        $this->setFechaAlta($fechaAlta);
        $this->setFoto($foto);
        $this->direccion = $direccion;
        $this->ciudad = $ciudad;
        $this->provincia = $provincia;
    }
    public function __toString()
    {
        parent::__toString() . 'direccion: ' . $this->direccion . ' ciudad: ' . $this->ciudad . 'provincia' . $this->provincia;
    }
}
