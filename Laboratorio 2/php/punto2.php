<?php

#Recibe datos

$c = $_POST["c"];
$e = $_POST["e"];
$p = $_POST["p"];
$tt = $_POST["tt"];
$te = $_POST["te"];

$gp = $c*$e*$p;
$pe =($te/$tt)*100;

if ($pe >= 21) {
$fp = 1;
}elseif ($pe < 21 && $pe >= 41) {
$fp = 2;
}elseif ($pe < 41 && $pe >= 61) {
$fp = 3;
}elseif ($pe < 61 && $pe >= 81) {
$fp = 4;
}elseif ($pe < 81){ 
$fp = 5;
}

$gr = $gp *$fp;

if($gp <= 350){
$rgp = "Bajo";
}elseif($gp > 350 && $gp <=650){
$rgp = "Medio";
}elseif($gp > 650 ){
    $rgp = "Alto";
}

if($gr <= 1000){
    $rgr = "Bajo";
    }elseif($gr > 1000 && $gr <=3000){
    $rgr = "Medio";
    }elseif($gr > 3000 ){
        $rgr = "Alto";
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

    <title>Prevencion del riesgo</title>
</head>
<body>


<div class="container">
        <div class="p-5 bg-secondary bg-opacity-25 rounded-3">
            <h1>Software para prevencion del riesgo</h1>
        </div>
    
<br>
<!--inicio de tarjeta-->
    <div class="card">
        <div class="card-header text-white bg-dark">
            Formulario para calculos
        </div>


        <div class="card-body">
            <h5 class="card-title">Ingreso de datos</h5>
            <p class="card-text">A continuacion los resultados.</p>
            
            <!-- Salida-->
                <form class="form-horizontal" role="form" >
                    <div class="form-group">
                        <label class="control-label col-sm-5" for="rgp">el grado de peligrosidad es:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="rgp" name="rgp" 
                            disabled="disabled" value='<?php echo $rgp; ?>'>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-5" for="pe">el porcentaje de expuestos son:</label>
                        <div class="col-sm-10">          
                        	<input type="text" class="form-control" id="pe" name="pe" 
                        	disabled="disabled" value='<?php echo $pe; ?>'>
                    	</div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-5" for="fp">Factor de ponderacion:</label>
                        <div class="col-sm-10">          
                        	<input type="text" class="form-control" id="fp" name="fp" 
                        	disabled="disabled" value='<?php echo $fp; ?>'>
                    	</div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-5" for="gr">el grado de repercucion es:</label>
                        <div class="col-sm-10">          
                        	<input type="text" class="form-control" id="gr" name="gr" 
                        	disabled="disabled" value='<?php echo $rgr; ?>'>
                    	</div>
                    </div>
                    
                <br>      

            <!--Boton-->
                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                        <a class="btn btn-primary bg-dark" href="../html/punto2.html" role="button">Volver</a>
                            
                        </div>
                    </div>


                </form>
        </div> 
            
    </div>
</div>
</body>
</html>