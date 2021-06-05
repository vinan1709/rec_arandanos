<?php
require_once '../config/databaseconnect.php';


if($_REQUEST['opcion'] == 'registro') { //Registro Usuarios

    $sql="
        insert into usuarios(nombres, apellidos, documento, cargo_id) 
        values('".$_REQUEST['obj_user']['nombres']."','".$_REQUEST['obj_user']['apellidos']."','".$_REQUEST['obj_user']['documento']."',".$_REQUEST['obj_user']['cargo'].")";

    $consulta=mysqli_query($conexion, $sql);

    if ($consulta)
        echo 'true';
    else
        echo 'false';

}

if($_REQUEST['opcion'] == 'modificar') { //Modificar Usuarios

    $sql="update usuarios set  ";

    $consulta=mysqli_query($conexion, $sql);

    $row = mysqli_fetch_array($consulta);

    var_dump($row);
}

if($_REQUEST['opcion'] == 'consulta') { //consultar Usuario

    $sql="select * from usuarios where ".$_REQUEST['id_user']."";

    $consulta=mysqli_query($conexion, $sql);

    $row = mysqli_fetch_array($consulta);

    return json_encode($row);
}

