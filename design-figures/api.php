<?php 
require "conexion.php";
$usuer=new ApptivaDB();
//accion = mostrar, insertar, editar y eliminar
$accion="mostrar";
$res=array();
if(isset($_GET['accion']))
    $accion=$_GET['accion'];

switch($accion){
    case 'mostrar':
        $res['mensaje']="mensaje";
        echo "mostrar";
        break;
    case 'insertar'
        echo "insertar";
        break;
    case 'editar':
        echo "editar";
        break;
    case 'eliminar'
        echo "eliminar";
        break;
    default:
        break;
}
echo json_encode($res);
die();
?>