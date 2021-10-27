<?php
include_once('../Connection.php');
$id = $_POST["id"];

$sql = "DELETE FROM servicio WHERE id_servicio=$id";

$resultado = $conexion->query($sql)
    or die(mysqli_errno($conexion) . " : "
        . mysqli_error($conexion) . " | Query=" . $sql);
$conexion->close();
