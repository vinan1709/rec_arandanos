<?php
require_once '../config/databaseconnect.php';

$sql="SELECT r.fecha, r.cantidad_fruta, CONCAT(u1.nombres,' ',u1.apellidos) AS recolector, CONCAT(u2.nombres,' ',u2.apellidos) AS encargado FROM recoleccion r
INNER JOIN (SELECT * FROM usuarios WHERE cargo_id = 1) u1 ON u1.id_usuario = r.usuario_id 
INNER JOIN (SELECT * FROM usuarios WHERE cargo_id = 2) u2 ON u2.id_usuario = r.encargado_id
WHERE r.fecha = DATE_FORMAT(NOW(), '%Y-%m-%d')
ORDER BY r.cantidad_fruta DESC;";

$consulta=mysqli_query($conexion, $sql);

$datos = mysqli_fetch_row($consulta);

echo json_encode($datos);


?>
