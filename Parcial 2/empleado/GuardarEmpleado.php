<?php
include_once('../Connection.php');
$id = $_POST["id"];
$name = $_POST["name"];

$sql = "INSERT INTO empleado values ($id,'$name')";

$resultado = $conexion->query($sql)
    or die(mysqli_errno($conexion) . " : "
        . mysqli_error($conexion) . " | Query=" . $sql);

$conexion->close();
