<?php
    
    
    # Recibe los datos
	$s = $_POST["s"];
	$vcasa = $_POST["vcasa"];


    #Calculos
	
    if($s < 1150000) {
$avivienda = $vcasa *0.30;
$cinicial = ($vcasa - $avivienda)*0.10;
$t = 20 * 12;
$cmensual = (($vcasa - $avivienda)-$cinicial)/ $t;

    }elseif($s > 1150000 && $s < 1850000) {
$avivienda = $vcasa *0.20;
$cinicial = ($vcasa - $avivienda)*0.20;
$t = 15 * 12;
$cmensual = (($vcasa - $avivienda)-$cinicial)/ $t;


    }elseif($s >1850000 && $s < 3500000) {
$avivienda = $vcasa *0.15;
$cinicial = ($vcasa - $avivienda)*0.30;
$t = 10 * 12;
$cmensual = (($vcasa - $avivienda)-$cinicial)/ $t;



    }elseif($s > 3500000) {
$avivienda = $vcasa *0.10;
$cinicial = ($vcasa - $avivienda)*0.40;
$t = 7 * 12;
$cmensual = (($vcasa - $avivienda)-$cinicial)/ $t;
    }




?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous">
    
    </script>
    <link href="styles/style.css"
    rel="stylesheet" type="text/css">

    <title>Vivienda para todos</title>
</head>
<body>


<div class="container">
        <div class="p-5 bg-secondary bg-opacity-25 rounded-3">
            <h1>Vivienda para todos</h1>
        </div>
    
<br>
<!--inicio de tarjeta-->
    <div class="card">
        <div class="card-header text-white bg-dark">
            Formulario para datos del Cliente
        </div>


        <div class="card-body">
            <h5 class="card-title">Ingreso de datos</h5>
            <p class="card-text">ingrese acontinuacion los datos del cliente.</p>
            <!-- Salida-->
                <form class="form-horizontal" role="form" >
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="cmensual">la cuota mensual es:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="cmensual" name="cmensual" 
                            disabled="disabled" value='<?php echo $cmensual; ?>'>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-2" for="edad">la couta inicial es:</label>
                        <div class="col-sm-10">          
                        	<input type="text" class="form-control" id="cinicial" name="cinicial" 
                        	disabled="disabled" value='<?php echo $cinicial; ?>'>
                    	</div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="avivienda">el auxilio de vivienda es:</label>
                        <div class="col-sm-10">          
                        	<input type="text" class="form-control" id="avivienda" name="avivienda" 
                        	disabled="disabled" value='<?php echo $avivienda; ?>'>
                    	</div>
                    </div>
                    
            <!--Botones-->
                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="../html/punto1.html" class="btn btn-primary bg-dark"data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Volver</a>
                            
                        </div>
                    </div>


                </form>
        </div> 
            
    </div>
</div>
</body>
</html>