<?php
include_once('../Connection.php');
$id = $_POST["id"];
$empleado = $_POST["empleado"];
$cliente = $_POST["cliente"];
$tratamiento = $_POST["tratamiento"];

$sql = "INSERT INTO factura values ($id,'$tratamiento','$cliente','$empleado')";

$resultado = $conexion->query($sql)
    or die(mysqli_errno($conexion) . " : "
        . mysqli_error($conexion) . " | Query=" . $sql);

$conexion->close();
