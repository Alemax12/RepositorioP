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

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ejemplos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Vivienda Para todos</h1>   
        </div>
    </div>

    <div class="container">
        <div class="panel-group"><div class="panel panel-primary">
            <div class="panel-heading">Datos del cliente</div>
            <div class="panel-body">
    

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
                            <a class="btn btn-primary" href="../html/punto1.html" role="button">Volver</a>
                            
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</body>
</html>