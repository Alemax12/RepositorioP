<?php
include_once('../Connection.php');
$id = $_POST["id"];
$name = $_POST["name"];

$sql = "UPDATE cliente SET nom_cliente='$name' WHERE id_cliente=$id";

$resultado = $conexion->query($sql)
    or die(mysqli_errno($conexion) . " : "
        . mysqli_error($conexion) . " | Query=" . $sql);
        
$conexion->close();
