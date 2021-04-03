<?php
include "Teatro.php";
$unTeatro = new Teatro("Barcelona","Av.San Luis 745");
echo "Un arreglo de la clase \"Teatro\" fue creado\n";
do{

echo "¿Qué acción desea realizar?
1)Modificar datos
2)Visualizar datos\n";


if(trim(fgets(STDIN)) == 1)
{
    $accion = "modificar";
}
else
{
    $accion = "visualizar";
}


echo "¿Que propiedad desea $accion?
1)El nombre
2)La direccion
3)Los datos de la funcion 1
4)Los datos de la funcion 2
5)Los datos de la funcion 3
6)Los datos de la funcion 4\n";

switch(trim(fgets(STDIN))){
    case 1:
        if($accion == "visualizar")
        {
            echo $unTeatro->getNombre()."\n";
        }
        else
        {
            echo "Indique nuevo nombre del teatro: ";
            $unTeatro->setNombre(trim(fgets(STDIN)));
        }
        break;

    case 2:
        if($accion == "visualizar")
        {
            echo $unTeatro->getDireccion()."\n";
        }
        else
        {
            echo "Indique la nueva direccion: ";
            $unTeatro->setDireccion(trim(fgets(STDIN)));
        }
        break;

    case 3:
        if($accion == "visualizar")
        {
            echo $unTeatro->getFuncion(0)."\n";
        }
        else
        {
            echo "Indique el nombre de la funcion: ";
            $funcion = trim(fgets(STDIN));
            echo "Indique el precio: ";
            $precio = trim(fgets(STDIN));

            $unTeatro->setFuncion(0,$funcion,$precio);
        }
        break;

    case 4:
        if($accion == "visualizar")
        {
            echo $unTeatro->getFuncion(1)."\n";
        }
        else
        {
            echo "Indique el nombre de la funcion: ";
            $funcion = trim(fgets(STDIN));
            echo "Indique el precio: ";
            $precio = trim(fgets(STDIN));

            $unTeatro->setFuncion(1,$funcion,$precio);
        }
        break;
        
    case 5:
        if($accion == "visualizar")
        {
            echo $unTeatro->getFuncion(2)."\n";
        }
        else
        {
            echo "Indique el nombre de la funcion: ";
            $funcion = trim(fgets(STDIN));
            echo "Indique el precio: ";
            $precio = trim(fgets(STDIN));

            $unTeatro->setFuncion(2,$funcion,$precio);
        }
        break;
    case 6:
        if($accion == "visualizar")
        {
            echo $unTeatro->getFuncion(3)."\n";
        }
        else
        {
            echo "Indique el nombre de la funcion: ";
            $funcion = trim(fgets(STDIN));
            echo "Indique el precio: ";
            $precio = trim(fgets(STDIN));

            $unTeatro->setFuncion(3,$funcion,$precio);
        }
        break;
}
//-------------------------------------------

echo "¿Desea realizar otra accion? si-no\n";
$r=trim(fgets(STDIN));

}while($r=="si");

//$unTeatro->__toString(); QUITAR COMENTARIO PARA VISUALIZAR TODOS LOS ELEMENTOS DEL OBJETO

?>