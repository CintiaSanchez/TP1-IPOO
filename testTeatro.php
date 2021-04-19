<?php
include "Teatro.php";
//include "Funcion.php"; 
$arreglo=new Funcion("Default",1400,30,500);
$arreglo2=new Funcion("Default2",1500,20,555);
$arreglo3=new Funcion("Default3",2010,29,570);
$arreglo4=new Funcion("Default4",1230,40,655);
$unTeatro = new Teatro("Barcelona","Av.San Luis 745",$arreglo,$arreglo2,$arreglo3,$arreglo4);
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
            echo $unTeatro->getFuncionEspecifica(0)."\n";
        }
        else
        {
            echo "Indique el nombre de la función: ";
            $funcion = trim(fgets(STDIN));
            echo "Indique el horario de la función: (ej: 1600, para las 16:00hs) ";
            $horario = trim(fgets(STDIN));
            echo "Indique la duración de la función: ";
            $duracion = trim(fgets(STDIN));
            echo "Indique el precio: ";
            $precio = trim(fgets(STDIN));
            $unTeatro->setFuncion(0,$funcion,$horario,$duracion,$precio);

            while($unTeatro->solapa(0)){
                echo "El horario se solapa con el de otra funcion, indicar otro:";
                $horario = trim(fgets(STDIN));
                $unTeatro->setFuncion(0,$funcion,$horario,$duracion,$precio);
            }

            
        }
        break;

    case 4:
        if($accion == "visualizar")
        {
            echo $unTeatro->getFuncionEspecifica(1)."\n";
        }
        else
        {
            echo "Indique el nombre de la función: ";
            $funcion = trim(fgets(STDIN));
            echo "Indique el horario de la función: (ej: 1600, para las 16:00hs) ";
            $horario = trim(fgets(STDIN));
            echo "Indique la duración de la función: ";
            $duracion = trim(fgets(STDIN));
            echo "Indique el precio: ";
            $precio = trim(fgets(STDIN));
            $unTeatro->setFuncion(1,$funcion,$horario,$duracion,$precio);

            while($unTeatro->solapa(1)){
                echo "El horario se solapa con el de otra funcion, indicar otro:";
                $horario = trim(fgets(STDIN));
                $unTeatro->setFuncion(1,$funcion,$horario,$duracion,$precio);
            }
        }
        break;
        
    case 5:
        if($accion == "visualizar")
        {
            echo $unTeatro->getFuncionEspecifica(2)."\n";
        }
        else
        {
            echo "Indique el nombre de la función: ";
            $funcion = trim(fgets(STDIN));
            echo "Indique el horario de la función: (ej: 1600, para las 16:00hs) ";
            $horario = trim(fgets(STDIN));
            echo "Indique la duración de la función: ";
            $duracion = trim(fgets(STDIN));
            echo "Indique el precio: ";
            $precio = trim(fgets(STDIN));
            $unTeatro->setFuncion(2,$funcion,$horario,$duracion,$precio);

            while($unTeatro->solapa(2)){
                echo "El horario se solapa con el de otra funcion, indicar otro:";
                $horario = trim(fgets(STDIN));
                $unTeatro->setFuncion(2,$funcion,$horario,$duracion,$precio);
            }
        }
        break;
    case 6:
        if($accion == "visualizar")
        {
            echo $unTeatro->getFuncionEspecifica(3)."\n";
        }
        else
        {
            echo "Indique el nombre de la función: ";
            $funcion = trim(fgets(STDIN));
            echo "Indique el horario de la función: (ej: 1600, para las 16:00hs) ";
            $horario = trim(fgets(STDIN));
            echo "Indique la duración de la función: ";
            $duracion = trim(fgets(STDIN));
            echo "Indique el precio: ";
            $precio = trim(fgets(STDIN));
            $unTeatro->setFuncion(3,$funcion,$horario,$duracion,$precio);

            while($unTeatro->solapa(3)){
                echo "El horario se solapa con el de otra funcion, indicar otro:";
                $horario = trim(fgets(STDIN));
                $unTeatro->setFuncion(3,$funcion,$horario,$duracion,$precio);
            }
        }
        break;
}
//-------------------------------------------

echo "¿Desea realizar otra accion? si-no\n";
$r=trim(fgets(STDIN));

}while($r == "si");

//$unTeatro->__toString(); //QUITAR COMENTARIO PARA VISUALIZAR TODOS LOS ELEMENTOS DEL OBJETO

?>