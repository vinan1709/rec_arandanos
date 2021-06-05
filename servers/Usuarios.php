<?php
require_once '../config/databaseconnect.php';

switch ($_REQUEST['opcion']) {
    case "registro":
        $sql="
        insert into usuarios(nombres, apellidos, documento, cargo_id) 
        values('".$_REQUEST['obj_user']['nombres']."','".$_REQUEST['obj_user']['apellidos']."','".$_REQUEST['obj_user']['documento']."',".$_REQUEST['obj_user']['cargo'].")";

        $consulta=mysqli_query($conexion, $sql);

        if ($consulta)
            echo 'true';
        else
            echo 'false';
        break;
    case "modificar":
        echo "i es una barra";
        break;
    case "consulta":
        echo "i es un pastel";
        break;
    case "usuarios":
        $sql="select u.id_usuario, u.nombres, u.apellidos, u.documento, tc.nombre_cargo from usuarios u inner join tipo_cargo tc on tc.id = u.cargo_id";

        $consulta=mysqli_query($conexion, $sql);

        $datos = [];
        while ($fila = mysqli_fetch_assoc($consulta)) {
            $datos[] = $fila;
        }

        echo json_encode($datos);
        break;
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




