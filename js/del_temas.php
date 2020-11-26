<?php
require_once 'seguridad.php';
require_once 'conexion.php';
$con=conexion();
$nombre=$_REQUEST["id"];
$cmd=$con->prepare("DELETE FROM temas WHERE idtema=$id");
$cmd->execute();

if($cmd->rowCount()>0){
    echo json_encode(["resp"=>"si","id"=]);
}else{
    echo json_encode(["resp"=>"no");
}