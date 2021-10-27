<?php
include_once('../Connection.php');
$id = $_POST["id"];
$name = $_POST["name"];

$sql = "UPDATE empleado SET nom_empleado='$name' WHERE id_empleado=$id";

$resultado = $conexion->query($sql)
    or die(mysqli_errno($conexion) . " : "
        . mysqli_error($conexion) . " | Query=" . $sql);
        
$conexion->close();
