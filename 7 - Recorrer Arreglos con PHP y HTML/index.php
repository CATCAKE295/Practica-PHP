<?php

$months = array("Enero","Febrero","Marzo","Abril",
                "Mayo","Junio","Julio","Agosto",
                "Septiembre","Octubre","Noviembre","Diciembre")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recorrer Arreglos con PHP y HTML</title>
</head>
<body>
    <h2>Meses del Año</h2>
    <ol>
        <?php 
        
        foreach($months as $month){
            echo('<li>'.$month.'</li>');
        }  

         /* Nota que se recorrio un arreglo indexado con un ciclo foreach */

        ?>
    </ol>
</body>
</html>