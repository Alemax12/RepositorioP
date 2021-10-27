<?php

include_once('../Connection.php');

//servicios realizados(facturas)
$sql = "SELECT *"
    . " FROM factura AS f"
    . " INNER JOIN cliente AS c"
    . " ON (f.id_cliente = c.id_cliente)"
    . " INNER JOIN empleado AS e"
    . " ON (f.id_empleado = e.id_empleado)"
    . " INNER JOIN servicio AS s"
    . " ON (f.id_servicio = s.id_servicio)"
    . " ORDER BY id_factura";
$resultado = $conexion->query($sql)
    or die(mysqli_errno($conexion) . " : "
        . mysqli_error($conexion) . " | Query=" . $sql);
$listado = array();
while ($fila = $resultado->fetch_assoc()) {
    $listado[] = $fila;
}

//empleados
$sql = "SELECT * FROM empleado"
    . " ORDER BY id_empleado";
$result_empleados = $conexion->query($sql)
    or die(mysqli_errno($conexion) . " : "
        . mysqli_error($conexion) . " | Query=" . $sql);
$empleados = array();
while ($fila = $result_empleados->fetch_assoc()) {
    $empleados[] = $fila;
}

//tratamientos
$sql = "SELECT * FROM servicio"
    . " ORDER BY id_servicio";
$result_trat = $conexion->query($sql)
    or die(mysqli_errno($conexion) . " : "
        . mysqli_error($conexion) . " | Query=" . $sql);
$tratamientos = array();
while ($fila = $result_trat->fetch_assoc()) {
    $tratamientos[] = $fila;
}

//clientes
$sql = "SELECT * FROM cliente"
    . " ORDER BY id_cliente";
$result_clientes = $conexion->query($sql)
    or die(mysqli_errno($conexion) . " : "
        . mysqli_error($conexion) . " | Query=" . $sql);
$clientes = array();
while ($fila = $result_clientes->fetch_assoc()) {
    $clientes[] = $fila;
}


$conexion->close();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="../styles/style.css" rel="stylesheet" type="text/css">

    <title>SERVICIOS REALIZADOS</title>
</head>

<body>
    <div class="container">
        <div class="p-5 bg-secondary bg-opacity-25 rounded-3">
            <h1>SERVICIOS REALIZADOS</h1>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="">RF</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="..">Inicio</a>
                        <a class="nav-link" href="../cliente/cliente.php">Clientes</a>
                        <a class="nav-link" href="../empleado/empleado.php">Empleados</a>
                        <a class="nav-link" href="../tratamiento/tratamiento.php">Tratamientos</a>
                        <a class="nav-link active" aria-current="page" href="">Servicios Realizados</a>
                    </div>
                </div>
            </div>
        </nav>

        <br>
        <div class="card">
            <div class="card-header text-white bg-dark">
                Informacion de la factura
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-secondary" id="nuevo">Nuevo</button>
                <div id="formulario">
                    <form class="row g-3" role="form" id="form1">

                        <div class="form-group col-3">
                            <label>ID factura:</label>
                            <input autocomplete="off" type="number" class="form-control" name="id" id="inputID" placeholder="Ingrese numero" value="">
                        </div>

                        <div class="form-group col-3">
                            <label>Empleado:</label>
                            <select class="form-control" name="empleado" id="empleadoINP">
                                <option value="0">Seleccione:</option>
                                <?php foreach ($empleados as $fila) { ?>
                                    <option value="<?php echo $fila['id_empleado'] ?>"> <?php echo $fila['nom_empleado'] ?> </option>;
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group col-3">
                            <label>Cliente:</label>
                            <select class="form-control" name="cliente" id="clienteINP">
                                <option value="0">Seleccione:</option>
                                <?php foreach ($clientes as $fila) { ?>
                                    <option value="<?php echo $fila['id_cliente'] ?>"> <?php echo $fila['nom_cliente'] ?> </option>;
                                <?php } ?>
                            </select>
                        </div>
                        
                        <div class="form-group col-3">
                            <label>Tratamiento:</label>
                            <select class="form-control" name="tratamiento" id="tratamientoINP">
                                <option value="0">Seleccione:</option>
                                <?php foreach ($tratamientos as $fila) { ?>
                                    <option value="<?php echo $fila['id_servicio'] ?>"> <?php echo $fila['nom_servicio'] ?> </option>;
                                <?php } ?>
                            </select>
                        </div>

                    </form>
                    <div>
                        <br>
                        <button type="button" id="save" class="btn btn-secondary" data-tag="">Guardar</button>
                        <button type="button" id="cancel" class="btn btn-secondary">Cancelar</button>
                    </div>
                </div>
                <br><br>
                <table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Numero</th>
                            <th>Empleado</th>
                            <th>Cliente</th>
                            <th>Tratamiento</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php foreach ($listado as $fila) { ?>
                                <td><?php echo $fila['id_factura'] ?> </td>
                                <td><?php echo $fila['nom_empleado'] ?> </td>
                                <td><?php echo $fila['nom_cliente'] ?> </td>
                                <td><?php echo $fila['nom_servicio'] ?> </td>
                                <td>
                                    <button class="btn btn-success btn-sm edit" data-id="<?php echo $fila['id_factura'] ?>">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm delete" data-id="<?php echo $fila['id_factura'] ?>">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        $(document).ready(function() {
            $("#tabla").DataTable();
        });
    </script>
    <script type="text/javascript" src="../js/funcionesFactura.js"></script>
    <script type="text/javascript">
        $(document).ready(operaciones)
    </script>

</body>

</html>