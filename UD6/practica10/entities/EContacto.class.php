<?php
require 'contacto.class.php';
class EContacto extends Contacto{
    private $email;
    private $url;

    public function __construct($id, $nombre, $telefono, $fechaAlta, $foto,$email,$url){
        $this->setId($id);
        $this->setNombre($nombre);
        $this->setTelefono($telefono);
        $this->setFechaAlta($fechaAlta);
        $this->setFoto($foto);
        $this->email=$email;
        $this->url=$url;
        
        
    }
    public function __toString()
    {
        parent::__toString().'email: '.$this->email.' url: '.$this->url;
        
    }
    
}






?>