<?php
class Agenda{
    private $nombreAgenda;
    private $agenda;

    public function __construct($nombreAgenda, $agenda=[]){
        $this->nombreAgenda = $nombreAgenda;
        $this->agenda = $agenda;
    }
    public function addContact(Contacto $contacto){
        $this->agenda[] = $contacto;
    }
    public function removeContact(Contacto $contacto){
        $indexContacto = array_search($contacto, $this->agenda);
        if($indexContacto !== false){
            unset($this->agenda[$indexContacto]);
        }
    }
    public function __toString(){
        $devolver = '';
        foreach($this->agenda as $contacto){
            $devolver .= $contacto . '<br>';
        }
        return $devolver;
    }
    public function getAgenda(){
        return $this->agenda;
    }
    

    public function __clone(){
        foreach($this->agenda as $contacto){
            $indexContacto = array_search($contacto, $this->agenda);
            $this->agenda[$indexContacto] = clone $this->agenda[$indexContacto];
        }
        /**
         * $clon = clon new Agenda($this->nombreAgenda, []);
         * foreach($this->agenda as $contacto){
         *     $clon->addContact(clone $contacto);
         *          * }
         * return $clon;
         */
    }

}

?>