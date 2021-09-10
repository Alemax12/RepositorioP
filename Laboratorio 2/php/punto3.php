<?php
include_once("claseProceso.php");
$date1 = $_POST["date1"];
$time1 = $_POST["time1"];
$date2 = $_POST["date2"];
$time2 = $_POST["time2"];
$date3 = $_POST["date3"];
$time3 = $_POST["time3"];
$date4 = $_POST["date4"];
$time4 = $_POST["time4"];
$unProceso = new Proceso($time1, $date1, $time2, $date2, $time3, $date3, $time4, $date4);
$unProceso->calcularFlujo();
$unProceso->calcularRetraso();
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
                Calculos
            </div>


            <div class="card-body">

                

            </div>
        </div>
    </div>


</body>

</html>