<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "bdrostrosfelices";
$conexion = new mysqli($db_host, $db_user, $db_pass, $db_name);

$sql = "SELECT id_cliente, nom_cliente FROM cliente"
    . " ORDER BY id_cliente";

$resultado = $conexion->query($sql)
    or die(mysqli_errno($conexion) . " : "
        . mysqli_error($conexion) . " | Query=" . $sql);

$listado = array();
while ($fila = $resultado->fetch_assoc()) {
    $listado[] = $fila;
}

$conexion->close();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

    </script>
    <link href="../styles/style.css" rel="stylesheet" type="text/css">

    <title>ROSTROS FELICES REGISTROS</title>
</head>

<body>
    <div class="container">
        <div class="p-5 bg-secondary bg-opacity-25 rounded-3">
            <h1>REGISTROS DE CLIENTES</h1>
        </div>

        <br>
        <div class="card">
            <div class="card-header text-white bg-dark">
                Informacion del cliente
            </div>
            <div class="card-body">
                <button type="button" id="nuevo" class="btn btn-secondary">Nuevo</button>
                <div id="formulario">
                    <form class="row g-3" role="form" id="form1">

                        <div class="form-group col-3">
                            <label>ID cliente:</label>
                            <input autocomplete="off" type="text" class="form-control" name="id" placeholder="Ingrese numero">
                        </div>
                        <div class="form-group col-3">
                            <label>Nombre cliente:</label>
                            <input autocomplete="off" type="text" class="form-control" name="name" placeholder="Ingrese el nombre">
                        </div>

                    </form>
                    <div>
                        <br>
                        <button type="button" id="save" class="btn btn-secondary">Guardar</button>
                        <button type="button" id="cancel" class="btn btn-secondary">Cancelar</button>
                    </div>
                </div>
                <br><br>
                <table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Numero</th>
                            <th>Nombre</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php foreach ($listado as $fila) { ?>
                                <td><?php echo $fila['id_cliente'] ?> </td>
                                <td><?php echo utf8_encode($fila['nom_cliente']) ?> </td>
                                <td>
                                    <button class="btn btn-success btn-sm edit" data-id="<?php echo $fila['id_cliente'] ?>">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm delete" id="delete<?php echo $fila['id_cliente'] ?>" data-id="<?php echo $fila['id_cliente'] ?>">
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
    <script>
        $(document).ready(function() {
            $("#tabla").DataTable();
        });
    </script>
    <script type="text/javascript" src="../js/FuncionesJquery.js"></script>
    <script type="text/javascript">
        $(document).ready(operaciones)
    </script>

    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>