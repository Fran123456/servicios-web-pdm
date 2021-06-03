<?php

include 'config.php';
if (!isset($_REQUEST["id"])) {
    exit("No hay id");
}
$id = $_GET["id"];
$sentencia = $mysqli->prepare("DELETE FROM docente WHERE id = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
$data=array('sucess'=> 'eliminado corectamente');
echo json_encode($data);
