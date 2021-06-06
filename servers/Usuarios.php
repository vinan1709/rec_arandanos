<?php
require_once '../config/databaseconnect.php';

/** Todo::switch para seleccionar que opcion se debe usar (Registro, Usuarios)*/
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






