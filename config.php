<?php
$servidor="localhost";
$usuario="root";
$password="";
$baseDatos="pdm";

$mysqli = mysqli_connect($servidor,$usuario,$password,$baseDatos);

if (mysqli_connect_error()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
 ?>
