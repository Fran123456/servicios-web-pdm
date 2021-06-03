<?php
$nombre=$_REQUEST['nombre'];
$apellido=$_REQUEST['apellido'];
$respuesta=array('resultado'=>0);
json_encode($respuesta);

include 'config.php';

 $sentencia = $mysqli->prepare("INSERT INTO docente (nombre, apellido) VALUES (?, ?)");
 $sentencia->bind_param("ss", $nombre, $apellido);
 $sentencia->execute();

if( $sentencia->affected_rows == 1)
 $respuesta=array('resultado'=>1);
echo json_encode($respuesta);
mysqli_close($mysqli);
?>
