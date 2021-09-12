<?php
include_once("claseProceso.php");
$DPDProduccion = 125;
$CDContratar = $_POST["CDContratar"];
$CDDespedir = $_POST["CDDespedir"];
$CDTNormal = $_POST["CDTNormal"];
$CDTExtra = $_POST["CDTExtra"];
$CDMDInventarios = $_POST["CDMDInventarios"];
$CDFaltantes = $_POST["CDFaltantes"];
$CDSubcontratar = $_POST["CDSubcontratar"];
$TDProcesamiento = $_POST["TDProcesamiento"];
$TEstandar = $TDProcesamiento;
$HDTrabajo = $_POST["HDTrabajo"];
$HLDiarias = $HDTrabajo;
$NIDTrabajadores = $_POST["NIDTrabajadores"];
$req1 = $_POST["req1"];
$req2 = $_POST["req2"];
$req3 = $_POST["req3"];
$req4 = $_POST["req4"];
$req5 = $_POST["req5"];
$req6 = $_POST["req6"];
$DADPlan = $req1+$req2+$req3+$req4+$req5+$req6;
$count=1;
$total1=0;
$total2=0;
$total3=0;
$total4=0;

$unProceso1 = new Proceso(
    $DADPlan,
    $TEstandar,
    $DPDProduccion,
    $HLDiarias,
    $CDContratar,
    $CDDespedir,
    $CDTNormal,
    $CDTExtra,
    $CDMDInventarios,
    $CDFaltantes,
    $CDSubcontratar,
    $TDProcesamiento,
    $HDTrabajo,
    $NIDTrabajadores,
    $req1
);
$unProceso2 = new Proceso(
    $DADPlan,
    $TEstandar,
    $DPDProduccion,
    $HLDiarias,
    $CDContratar,
    $CDDespedir,
    $CDTNormal,
    $CDTExtra,
    $CDMDInventarios,
    $CDFaltantes,
    $CDSubcontratar,
    $TDProcesamiento,
    $HDTrabajo,
    $NIDTrabajadores,
    $req2
);
$unProceso3 = new Proceso(
    $DADPlan,
    $TEstandar,
    $DPDProduccion,
    $HLDiarias,
    $CDContratar,
    $CDDespedir,
    $CDTNormal,
    $CDTExtra,
    $CDMDInventarios,
    $CDFaltantes,
    $CDSubcontratar,
    $TDProcesamiento,
    $HDTrabajo,
    $NIDTrabajadores,
    $req3
);
$unProceso4 = new Proceso(
    $DADPlan,
    $TEstandar,
    $DPDProduccion,
    $HLDiarias,
    $CDContratar,
    $CDDespedir,
    $CDTNormal,
    $CDTExtra,
    $CDMDInventarios,
    $CDFaltantes,
    $CDSubcontratar,
    $TDProcesamiento,
    $HDTrabajo,
    $NIDTrabajadores,
    $req4
);
$unProceso5 = new Proceso(
    $DADPlan,
    $TEstandar,
    $DPDProduccion,
    $HLDiarias,
    $CDContratar,
    $CDDespedir,
    $CDTNormal,
    $CDTExtra,
    $CDMDInventarios,
    $CDFaltantes,
    $CDSubcontratar,
    $TDProcesamiento,
    $HDTrabajo,
    $NIDTrabajadores,
    $req5
);
$unProceso6 = new Proceso(
    $DADPlan,
    $TEstandar,
    $DPDProduccion,
    $HLDiarias,
    $CDContratar,
    $CDDespedir,
    $CDTNormal,
    $CDTExtra,
    $CDMDInventarios,
    $CDFaltantes,
    $CDSubcontratar,
    $TDProcesamiento,
    $HDTrabajo,
    $NIDTrabajadores,
    $req6
);

$unProceso1->calcularResultadosMes(22);

$unProceso2->setInventarioInicial($unProceso1->getInventarioFinal());
$unProceso2->calcularResultadosMes(19);

$unProceso3->setInventarioInicial($unProceso2->getInventarioFinal());
$unProceso3->calcularResultadosMes(21);

$unProceso4->setInventarioInicial($unProceso3->getInventarioFinal());
$unProceso4->calcularResultadosMes(21);

$unProceso5->setInventarioInicial($unProceso4->getInventarioFinal());
$unProceso5->calcularResultadosMes(22);

$unProceso6->setInventarioInicial($unProceso5->getInventarioFinal());
$unProceso6->calcularResultadosMes(20);

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
                                <th>Costo de almacenar</th>
                                <th>Costo de tiempo normal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $count;
                                    $count++; ?></td>
                                <td><?php echo $unProceso1->getInventarioInicial(); ?></td>
                                <td>22</td>
                                <td><?php echo $unProceso1->getTiempoDisponible(); ?></td>
                                <td><?php echo round($unProceso1->getProduccionReal(), 2); ?></td>
                                <td><?php echo $unProceso1->getRequerimiento(); ?></td>
                                <td><?php echo round($unProceso1->getInventarioFinal(),0, PHP_ROUND_HALF_UP); ?></td>
                                <td><?php echo $unProceso1->getUnidadesFaltantes(); ?></td>
                                <td><?php echo round($unProceso1->getCostoUnidadesFaltantes(), 2); ?></td>
                                <td><?php echo round($unProceso1->getInventarioFinal(),0, PHP_ROUND_HALF_UP);; ?></td>
                                <td><?php echo round($unProceso1->getCostoAlmacenar(), 2); ?></td>
                                <td><?php echo round($unProceso1->getSubtotal(), 2); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $count;
                                    $count++; ?></td>
                                <td><?php echo $unProceso2->getInventarioInicial(); ?></td>
                                <td>19</td>
                                <td><?php echo $unProceso2->getTiempoDisponible(); ?></td>
                                <td><?php echo round($unProceso2->getProduccionReal(), 2); ?></td>
                                <td><?php echo $unProceso2->getRequerimiento(); ?></td>
                                <td><?php echo round($unProceso2->getInventarioFinal(),0, PHP_ROUND_HALF_UP); ?></td>
                                <td><?php echo $unProceso2->getUnidadesFaltantes(); ?></td>
                                <td><?php echo round($unProceso2->getCostoUnidadesFaltantes(), 2); ?></td>
                                <td><?php echo round($unProceso2->getInventarioFinal(),0, PHP_ROUND_HALF_UP);; ?></td>
                                <td><?php echo round($unProceso2->getCostoAlmacenar(), 2); ?></td>
                                <td><?php echo round($unProceso2->getSubtotal(), 2); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $count;
                                    $count++; ?></td>
                                <td><?php echo $unProceso3->getInventarioInicial(); ?></td>
                                <td>21</td>
                                <td><?php echo $unProceso3->getTiempoDisponible(); ?></td>
                                <td><?php echo round($unProceso3->getProduccionReal(), 2); ?></td>
                                <td><?php echo $unProceso3->getRequerimiento(); ?></td>
                                <td><?php echo round($unProceso3->getInventarioFinal(),0, PHP_ROUND_HALF_UP); ?></td>
                                <td><?php echo $unProceso3->getUnidadesFaltantes(); ?></td>
                                <td><?php echo round($unProceso3->getCostoUnidadesFaltantes(), 2); ?></td>
                                <td><?php echo round($unProceso3->getInventarioFinal(),0, PHP_ROUND_HALF_UP);; ?></td>
                                <td><?php echo round($unProceso3->getCostoAlmacenar(), 2); ?></td>
                                <td><?php echo round($unProceso3->getSubtotal(), 2); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $count;
                                    $count++; ?></td>
                                <td><?php echo $unProceso4->getInventarioInicial(); ?></td>
                                <td>21</td>
                                <td><?php echo $unProceso4->getTiempoDisponible(); ?></td>
                                <td><?php echo round($unProceso4->getProduccionReal(), 2); ?></td>
                                <td><?php echo $unProceso4->getRequerimiento(); ?></td>
                                <td><?php echo round($unProceso4->getInventarioFinal(),0, PHP_ROUND_HALF_UP); ?></td>
                                <td><?php echo $unProceso4->getUnidadesFaltantes(); ?></td>
                                <td><?php echo round($unProceso4->getCostoUnidadesFaltantes(), 2); ?></td>
                                <td><?php echo round($unProceso4->getInventarioFinal(),0, PHP_ROUND_HALF_UP);; ?></td>
                                <td><?php echo round($unProceso4->getCostoAlmacenar(), 2); ?></td>
                                <td><?php echo round($unProceso4->getSubtotal(), 2); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $count;
                                    $count++; ?></td>
                                <td><?php echo $unProceso5->getInventarioInicial(); ?></td>
                                <td>22</td>
                                <td><?php echo $unProceso5->getTiempoDisponible(); ?></td>
                                <td><?php echo round($unProceso5->getProduccionReal(), 2); ?></td>
                                <td><?php echo $unProceso5->getRequerimiento(); ?></td>
                                <td><?php echo round($unProceso5->getInventarioFinal(),0, PHP_ROUND_HALF_UP); ?></td>
                                <td><?php echo $unProceso5->getUnidadesFaltantes(); ?></td>
                                <td><?php echo round($unProceso5->getCostoUnidadesFaltantes(), 2); ?></td>
                                <td><?php echo round($unProceso5->getInventarioFinal(),0, PHP_ROUND_HALF_UP);; ?></td>
                                <td><?php echo round($unProceso5->getCostoAlmacenar(), 2); ?></td>
                                <td><?php echo round($unProceso5->getSubtotal(), 2); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $count;
                                    $count++; ?></td>
                                <td><?php echo $unProceso6->getInventarioInicial(); ?></td>
                                <td>20</td>
                                <td><?php echo $unProceso6->getTiempoDisponible(); ?></td>
                                <td><?php echo round($unProceso6->getProduccionReal(), 2); ?></td>
                                <td><?php echo $unProceso6->getRequerimiento(); ?></td>
                                <td><?php echo round($unProceso6->getInventarioFinal(),0, PHP_ROUND_HALF_UP); ?></td>
                                <td><?php echo $unProceso6->getUnidadesFaltantes(); ?></td>
                                <td><?php echo round($unProceso6->getCostoUnidadesFaltantes(), 2); ?></td>
                                <td><?php echo round($unProceso6->getInventarioFinal(),0, PHP_ROUND_HALF_UP);; ?></td>
                                <td><?php echo round($unProceso6->getCostoAlmacenar(), 2); ?></td>
                                <td><?php echo round($unProceso6->getSubtotal(), 2); ?></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>TOTALES</td>
                            <td><?php echo $total1=($unProceso1->getCostoUnidadesFaltantes()+$unProceso2->getCostoUnidadesFaltantes()+$unProceso3->getCostoUnidadesFaltantes()+$unProceso4->getCostoUnidadesFaltantes()+$unProceso5->getCostoUnidadesFaltantes()+$unProceso6->getCostoUnidadesFaltantes());?> </td>
                            <td></td>
                            <td><?php echo $total2=($unProceso1->getCostoAlmacenar()+$unProceso2->getCostoAlmacenar()+$unProceso3->getCostoAlmacenar()+$unProceso4->getCostoAlmacenar()+$unProceso5->getCostoAlmacenar()+$unProceso6->getCostoAlmacenar());?> </td>
                            <td><?php echo $total3=($unProceso1->getSubtotal()+$unProceso2->getSubtotal()+$unProceso3->getSubtotal()+$unProceso4->getSubtotal()+$unProceso5->getSubtotal()+$unProceso6->getSubtotal());?> </td>
                        </tfoot>
                    </table>
                </div>
                <br>
                <h6>Resultados generales</h6>
                <form class="row g-3" role="form">
                    <div class="form-group col-4">
                        <label>Costo del plan:</label>
                        <input autocomplete="off" type="text" class="form-control" disabled="disabled" value=<?php echo $total1+$total2+$total3; ?>>
                    </div>
                    <div class="form-group col-4">
                        <label>Costo de contratación inicial:</label>
                        <input autocomplete="off" type="text" class="form-control" disabled="disabled" value=<?php echo $total4=($unProceso1->getNumeroTrabajadores()-$NIDTrabajadores)*$CDContratar; ?>>
                    </div>
                    <div class="form-group col-4">
                        <label>Costo total del plan equivale a:</label>
                        <input autocomplete="off" type="text" class="form-control" disabled="disabled" value=<?php echo $total1+$total2+$total3+$total4; ?>>
                    </div>
                </form>
                <br>
                <a class="btn btn-primary bg-dark" href="../index.html" role="button">Regresar</a>
            </div>
        </div>
    </div>


</body>

</html>