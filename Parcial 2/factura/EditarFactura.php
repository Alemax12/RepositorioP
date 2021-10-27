<?php
include_once('../Connection.php');
$id = $_POST["id"];
$empleado = $_POST["empleado"];
$cliente = $_POST["cliente"];
$tratamiento = $_POST["tratamiento"];

$sql = "UPDATE factura SET empleado='$empleado', id_cliente='$cliente', id_tratamiento='$tratamiento' WHERE id_factura=$id";

$resultado = $conexion->query($sql)
    or die(mysqli_errno($conexion) . " : "
        . mysqli_error($conexion) . " | Query=" . $sql);
        
$conexion->close();
