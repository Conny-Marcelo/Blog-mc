<?php
require_once 'seguridad.php';
require_once 'conexion.php';
$con=conexion();
$nombre=$_REQUEST["id"];
$nombre=$_REQUEST["nombre"];
$cmd=$con->prepare("UPDATE temas SET nombre ='$nombre' WHERE idtema=$id");
$cmd->bindValue(':nom',$nombre);
$cmd->execute();
if($cmd->rowCount()>0){
    echo json_encode(["resp"=>"si")
}else{
    echo json_encode(["resp"=>"no"]);
}