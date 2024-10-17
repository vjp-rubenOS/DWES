<?php
class Contacto{
    private $id;
    private $nombre;
    private $telefono;
    private $fechaAlta;
    private $foto;

    public function __construct($id, $nombre, $telefono, $fechaAlta, $foto)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->fechaAlta = $fechaAlta;
        $this->foto = $foto;
    }

    public function getId(): int{
        return $this->id;
    }
public function getNombre(): string{
        return $this->nombre;
    }
    
    public function getTelefono(): int{
        return $this->telefono;
    }
    
    public function getFechaAlta(): DateTime{
        return $this->fechaAlta;
    }
    
    public function getFoto(): string{
        return $this->foto;
    }

    public function setId($id): void{
        $this->id = $id;
    }
public function setNombre($nombre): void{
        $this->nombre = $nombre;
    }
    
    public function setFechaAlta($fechaAlta): void{
        $this->fechaAlta = $fechaAlta;
    }
    
    public function setTelefono($telefono): void{
        $this->telefono = $telefono;
    }
    
    public function setFoto($foto): void{
        $this->foto = $foto;
    }
    public function __toString()
    {
        return 'Id: ' . $this->id . ' Nombre: ' . $this->nombre . ' telefono: ' . $this->telefono . ' fechaAlta: ' . $this->fechaAlta->format('Y-m-d') . ' foto: ' . $this->foto;
    }

    public function __clone(){
        $this->nombre = $this->nombre.' clon';
    }
}

?>