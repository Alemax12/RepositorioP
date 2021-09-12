<?php
$CDContratar = $_POST["CDContratar"];
$CDDespedir = $_POST["CDDespedir"];
$CDTNormal = $_POST["CDTNormal"];
$CDTExtra = $_POST["CDTExtra"];
$CDMInventarios = $_POST["CDMInventarios"];
$CDFaltantes = $_POST["CDFaltantes"];
$CDSubcontratar = $_POST["CDSubcontratar"];
$TDProcesamiento = $_POST["TDProcesamiento"];
$HDTrabajo = $_POST["HDTrabajo"];
$NIDTrabajadores = $_POST["TEstandar"];
$DLaborales = $_POST["DLaborales"];
$HLDiarias = $_POST["HLDiarias"];
$NIDTrabajadores = $_POST["NIDTrabajadores"];

?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous">

    </script>
    <link href="styles/style.css" rel="stylesheet" type="text/css">

    <title>Programacion a corto plazo</title>
</head>

<body>

    <div class="container">
        <div class="p-5 bg-secondary bg-opacity-25 rounded-3">
            <h1>PLANEACION AGREGADA</h1>
        </div>

        <br>
        <!--inicio de tarjeta-->
        <div class="card">
            <div class="card-header text-white bg-dark">
                PLAN AGREGADO: FUERZA LABORAL CONSTANTE
            </div>


            <div class="card-body">
                <h6>Resultados por mes</h6>
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Periodo</th>
                                <th>Inventario inicial</th>
                                <th>Días de trabajo</th>
                                <th>Tiempo disponible</th>
                                <th>Producción real</th>
                                <th>Requerimientos</th>
                                <th>Inventario final</th>
                                <th>Nº de unidades faltantes</th>
                                <th>Costo de unidades faltantes</th>
                                <th>Nº de unidades sobrantes</th>
                                <th>Producción real</th>
                                <th>Costo de almacenar</th>
                                <th>Costo de tiempo normal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <td>TOTALES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tfoot>
                    </table>
                </div>
                <br>
                <h6>Resultados generales</h6>
                <form class="row g-3" role="form">
                    <div class="form-group col-4">
                        <label>Costo del plan:</label>
                        <input autocomplete="off" type="text" class="form-control" disabled="disabled" value=<?php echo ""; ?>>
                    </div>
                    <div class="form-group col-4">
                        <label>Costo de contratación inicial:</label>
                        <input autocomplete="off" type="text" class="form-control" disabled="disabled" value=<?php echo ""; ?>>
                    </div>
                    <div class="form-group col-4">
                        <label>Costo total del plan equivale a:</label>
                        <input autocomplete="off" type="text" class="form-control" disabled="disabled" value=<?php echo ""; ?>>
                    </div>
                </form>
                <br>
                <a class="btn btn-primary bg-dark" href="../index.html" role="button">Regresar</a>
            </div>
        </div>
    </div>


</body>

</html>