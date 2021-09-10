<?php
include_once("claseProceso.php");
include_once("claseMetodo.php");
$tipo = $_POST["tipo"];
$date1 = $_POST["date1"];
$time1 = $_POST["time1"];
$date2 = $_POST["date2"];
$time2 = $_POST["time2"];
$date3 = $_POST["date3"];
$time3 = $_POST["time3"];
$date4 = $_POST["date4"];
$time4 = $_POST["time4"];

#este codigo a continuacion esta comentariado para probar los diferentes tipos de seleccion
#$tipo = "PEPS - (Primero en entrar, primero en servir (First Come, First Served).";
#$tipo = "TPC - Tiempo de procesamiento más corto (Shortest Processing Time).";
#$tipo = "TPL -Tiempo de procesamiento más largo (Longest Processing Time).";
#$tipo = "FEP - Fecha de entrega más próxima (Earliest Due Date).";

$unMetodo = new Metodo($tipo);
$unMetodo->calcularOrden();
switch ($unMetodo->getMetodo()) {
    case 1:
        $unProceso1 = new Proceso($time1, $date1);
        $unProceso2 = new Proceso($time2, $date2);
        $unProceso3 = new Proceso($time3, $date3);
        $unProceso4 = new Proceso($time4, $date4);
        break;
    case 2:
        $unProceso1 = new Proceso($time1, $date1);
        $unProceso2 = new Proceso($time3, $date3);
        $unProceso3 = new Proceso($time4, $date4);
        $unProceso4 = new Proceso($time2, $date2);
        break;
    case 3:
        $unProceso1 = new Proceso($time2, $date2);
        $unProceso2 = new Proceso($time4, $date4);
        $unProceso3 = new Proceso($time3, $date3);
        $unProceso4 = new Proceso($time1, $date1);
        break;
    case 4:
        $unProceso1 = new Proceso($time4, $date4);
        $unProceso2 = new Proceso($time3, $date3);
        $unProceso3 = new Proceso($time2, $date2);
        $unProceso4 = new Proceso($time1, $date1);
        break;
}

$unProceso1->calcularFlujo();
$unProceso1->calcularRetraso();

$unProceso2->setTiempoFlujo($unProceso1->getTiempoFlujo());
$unProceso2->setRetrasoTrabajo($unProceso1->getRetrasoTrabajo());
$unProceso2->calcularFlujo();
$unProceso2->calcularRetraso();

$unProceso3->setTiempoFlujo($unProceso2->getTiempoFlujo());
$unProceso3->setRetrasoTrabajo($unProceso2->getRetrasoTrabajo());
$unProceso3->calcularFlujo();
$unProceso3->calcularRetraso();

$unProceso4->setTiempoFlujo($unProceso3->getTiempoFlujo());
$unProceso4->setRetrasoTrabajo($unProceso3->getRetrasoTrabajo());
$unProceso4->calcularFlujo();
$unProceso4->calcularRetraso();

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
            <h1>PROGRAMACION A CORTO PLAZO</h1>
        </div>

        <br>
        <!--inicio de tarjeta-->
        <div class="card">
            <div class="card-header text-white bg-dark">
                Calculos: <?php echo $tipo ?>
            </div>


            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Secuencia</th>
                            <th>Tipo de Proceso</th>
                            <th>Tiempo de flujo</th>
                            <th>Fecha de entrega</th>
                            <th>Retraso del trabajo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $unMetodo->getLetra1(); ?></td>
                            <td><?php echo $unProceso1->getTiempoProceso(); ?></td>
                            <td><?php echo $unProceso1->getTiempoFlujo(); ?></td>
                            <td><?php echo $unProceso1->getFechaEntrega(); ?></td>
                            <td><?php echo $unProceso1->getRetrasoTrabajo(); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $unMetodo->getLetra2(); ?></td>
                            <td><?php echo $unProceso2->getTiempoProceso(); ?></td>
                            <td><?php echo $unProceso2->getTiempoFlujo(); ?></td>
                            <td><?php echo $unProceso2->getFechaEntrega(); ?></td>
                            <td><?php echo $unProceso2->getRetrasoTrabajo(); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $unMetodo->getLetra3(); ?></td>
                            <td><?php echo $unProceso3->getTiempoProceso(); ?></td>
                            <td><?php echo $unProceso3->getTiempoFlujo(); ?></td>
                            <td><?php echo $unProceso3->getFechaEntrega(); ?></td>
                            <td><?php echo $unProceso3->getRetrasoTrabajo(); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $unMetodo->getLetra4(); ?></td>
                            <td><?php echo $unProceso4->getTiempoProceso(); ?></td>
                            <td><?php echo $unProceso4->getTiempoFlujo(); ?></td>
                            <td><?php echo $unProceso4->getFechaEntrega(); ?></td>
                            <td><?php echo $unProceso4->getRetrasoTrabajo(); ?></td>
                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <td>TOTAL</td>
                            <td><?php echo $TP = $unProceso1->getTiempoProceso() + $unProceso2->getTiempoProceso() + $unProceso3->getTiempoProceso() + $unProceso4->getTiempoProceso(); ?></td>
                            <td><?php echo $TF = $unProceso1->getTiempoFlujo() + $unProceso2->getTiempoFlujo() + $unProceso3->getTiempoFlujo() + $unProceso4->getTiempoFlujo(); ?></td>
                            <td></td>
                            <td><?php echo $RT = $unProceso1->getRetrasoTrabajo() + $unProceso2->getRetrasoTrabajo() + $unProceso3->getRetrasoTrabajo() + $unProceso4->getRetrasoTrabajo(); ?></td>
                        </tr>
                    </tfoot>
                </table>
                <br>
                <h6>Resultados generales</h6>
                <form class="row g-3" role="form">
                    <div class="form-group col-3">
                        <label>Utilizacion:</label>
                        <input autocomplete="off" type="text" class="form-control" disabled="disabled" value=<?php echo $TP / $TF; ?>>
                    </div>
                    <div class="form-group col-3">
                        <label>Tiempo Promedio de terminacion:</label>
                        <input autocomplete="off" type="text" class="form-control" disabled="disabled" value=<?php echo $TF / 4; ?>>
                    </div>
                    <div class="form-group col-3">
                        <label>Trabajos en el sistema:</label>
                        <input autocomplete="off" type="text" class="form-control" disabled="disabled" value=<?php echo $TF / $TP; ?>>
                    </div>
                    <div class="form-group col-3">
                        <label>Retraso promedio:</label>
                        <input autocomplete="off" type="text" class="form-control" disabled="disabled" value=<?php echo $RT / 4; ?>>
                    </div>
                </form>
                <br>
                <a class="btn btn-primary bg-dark" href="../index.html" role="button">Regresar</a>
            </div>

        </div>
    </div>


</body>

</html>