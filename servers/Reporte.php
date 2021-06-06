<?php
require_once '../config/databaseconnect.php';

/** Todo::Logica para mostrar el reporte*/

$sql="SELECT r.fecha, r.cantidad_fruta, CONCAT(u1.nombres,' ',u1.apellidos) AS recolector, CONCAT(u2.nombres,' ',u2.apellidos) AS encargado FROM recoleccion r
INNER JOIN (SELECT * FROM usuarios WHERE cargo_id = 1) u1 ON u1.id_usuario = r.usuario_id 
INNER JOIN (SELECT * FROM usuarios WHERE cargo_id = 2) u2 ON u2.id_usuario = r.encargado_id
WHERE r.fecha = DATE_FORMAT(NOW(), '%Y-%m-%d')
ORDER BY r.cantidad_fruta DESC;";

$sqlcantidad = "SELECT SUM(cantidad_fruta) AS cantidad_fruta FROM recoleccion
WHERE fecha = DATE_FORMAT(NOW(), '%Y-%m-%d')";

$consulta=mysqli_query($conexion, $sql);
$consulta2=mysqli_query($conexion,$sqlcantidad);


$datos = mysqli_fetch_row($consulta);

$datos['cantidad_fruta'] = mysqli_fetch_row($consulta2);

echo json_encode($datos);


?>
