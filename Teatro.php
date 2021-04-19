<?php
require "Funcion.php";

class Teatro{

//------------propiedades--------------------------
    private $nombre;
    private $direccion;
    private $funcion=array();
//------------constructor--------------------------
    /**
    * @param string $nombre
    * @param string $direccion
    * @param Funcion $funcion1
    * @param Funcion $funcion2
    * @param Funcion $funcion3
    * @param Funcion $funcion4
    */
    public function __construct($nombre,$direccion,$funcion1,$funcion2,$funcion3,$funcion4){
        $this->nombre=$nombre;
        $this->direccion=$direccion;
        $this->funcion[0]=$funcion1;
        $this->funcion[1]=$funcion2;
        $this->funcion[2]=$funcion3;
        $this->funcion[3]=$funcion4;

    }
//---------------metodos---------------------------
    public function getNombre(){
        return $this->nombre;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    /**
     * @param int $indice
     */
    public function getFuncionEspecifica($indice){
        return "Nombre:".$this->funcion[$indice]->getNombre().", Horario de inicio: ".$this->funcion[$indice]->getHorario().", Duracion de la obra: ".$this->funcion[$indice]->getDuracion().", Precio: ".$this->funcion[$indice]->getPrecio();
    }
    public function getFuncion(){
        return $this->funcion;
    }
//--------------------------------------------------
    /**
     * @param string $nombre
     */
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    /**
     * @param string $direccion
     */
    public function setDireccion($direccion){
        $this->direccion=$direccion;
    }
    /**
     * @param int $indice
     * @param string $nombre
     * @param int $horario
     * @param int $duracion
     * @param int $precio
     */
    public function setFuncion($indice,$nombre,$horario,$duracion,$precio){
        $this->funcion[$indice]->setNombre($nombre);
        $this->funcion[$indice]->setHorario($horario);
        $this->funcion[$indice]->setDuracion($duracion);
        $this->funcion[$indice]->setPrecio($precio);
    }
//----------------------------------------------
    public function __toString()
    {
        echo "Datos del objeto:\nNombre: ".$this->nombre."\nDireccion: ".$this->direccion."\nFuncion 1: ".$this->getFuncionEspecifica(0)."\nFuncion 2: ".$this->getFuncionEspecifica(1)."\nFuncion 3: ".$this->getFuncionEspecifica(2)."\nFuncion 4: ".$this->getFuncionEspecifica(3);
    }

    public function solapa($indice){
        $inicio = $this->funcion[$indice]->getHorario();
        $duracion = $this->funcion[$indice]->getDuracion();
        $fin = $inicio+$duracion;

        for($i=0; $i<count($this->funcion); $i++){
            
            if($i != $indice){
                
                $inicio2 = $this->funcion[$i]->getHorario();
                $duracion2 = $this->funcion[$i]->getDuracion();
                $fin2 = $inicio2+$duracion2;

                if($inicio < $inicio2){
                    if(($inicio2 < $fin) && ($inicio2 >= $inicio)){
                    $solapa = true;
                    $i=count($this->funcion);
                    }
                    else{
                    $solapa = false;
                    }
                }
                else{
                    if($inicio == $inicio2){
                        $solapa = true;
                        $i=count($this->funcion);
                    }
                    else{
                        if(($inicio < $fin2) && ($inicio >= $inicio2)){
                        $solapa = true;
                        $i=count($this->funcion);
                        }
                        else{
                        $solapa = false;
                        }
                    }
                }
                
            }
        }
        return $solapa;
    }
//------------------------------------------------
}


?>