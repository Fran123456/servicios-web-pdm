<?php

include 'config.php';

$resultado = $mysqli->query("SELECT * FROM docente");
$data = $resultado->fetch_all(MYSQLI_ASSOC);
echo json_encode($data);
?>
