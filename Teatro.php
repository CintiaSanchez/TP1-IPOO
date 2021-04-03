<?php
class Teatro{
//------------propiedades--------------------------
    private $nombre;
    private $direccion;
    private $funcion=array( array("nombre"=>"default1","precio"=>0), array("nombre"=>"default2","precio"=>0), array("nombre"=>"default3","precio"=>0), array("nombre"=>"default4","precio"=>0));

//------------constructor--------------------------
    /**
    * @param string $nombre
    * @param string $direccion--
    */
    public function __construct($nombre,$direccion){
        $this->nombre=$nombre;
        $this->direccion=$direccion;
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
    public function getFuncion($indice){
        return "Nombre: ".$this->funcion[$indice]["nombre"]."\nPrecio: ".$this->funcion[$indice]["precio"];
    }

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
     * @param string $funcion
     * @param string $funcion
     */
    public function setFuncion($indice,$funcion,$precio){
        $this->funcion[$indice]["nombre"]=$funcion;
        $this->funcion[$indice]["precio"]=$precio;
    }

    public function __toString()
    {
        echo "Datos del objeto:\nNombre: ".$this->nombre."\nDireccion: ".$this->direccion."\nFuncion 1: ".$this->getFuncion(0).
        "\nFuncion 2: ".$this->getFuncion(1)."\nFuncion 3: ".$this->getFuncion(2)."\nFuncion 4: ".$this->getFuncion(3);
    }

//------------------------------------------------
}
?>