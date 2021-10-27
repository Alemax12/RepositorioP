<?php
include_once('../Connection.php');
$id = $_POST["id"];
$name = $_POST["name"];

$sql = "UPDATE servicio SET nom_servicio='$name' WHERE id_servicio=$id";

$resultado = $conexion->query($sql)
    or die(mysqli_errno($conexion) . " : "
        . mysqli_error($conexion) . " | Query=" . $sql);
        
$conexion->close();
