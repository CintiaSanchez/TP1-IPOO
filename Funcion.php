<?php
class Funcion{
    private $nombre;
    private $horario;
    private $duracion;
    private $precio;

    public function __construct($nombre,$horario,$duracion,$precio)
    {
        $this->nombre=$nombre;
        $this->horario=$horario;
        $this->duracion=$duracion;
        $this->precio=$precio;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getHorario(){
        return $this->horario;
    }
    public function getDuracion(){
        return $this->duracion;
    }
    public function getPrecio(){
        return $this->precio;
    }


    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setHorario($horario){
        $this->horario=$horario;
    }
    public function setDuracion($duracion){
        $this->duracion=$duracion;
    }
    public function setPrecio($precio){
        $this->precio=$precio;
    }

    public function __toString()
    {
        echo "Nombre: ".$this->nombre.", Horario: ".$this->horario.", Duración: ".$this->duracion.", Precio: ".$this->precio;
    }
}
?>