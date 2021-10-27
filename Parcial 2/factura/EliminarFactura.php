<?php
include_once('../Connection.php');
$id = $_POST["id"];

$sql = "DELETE FROM factura WHERE id_factura=$id";

$resultado = $conexion->query($sql)
    or die(mysqli_errno($conexion) . " : "
        . mysqli_error($conexion) . " | Query=" . $sql);
$conexion->close();
