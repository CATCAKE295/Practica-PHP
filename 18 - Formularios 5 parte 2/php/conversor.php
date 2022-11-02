<?php 

if (!$_POST) {
    header('Location: ../index.php');
}

$amount_money = $_POST['cordoba'];
$coin = $_POST['moneda'];

function convert($amount_m,$coins){
    if ($coins == 'usd') {
        $price = 36.16;
    } else {
        $price = 35.74;
    }
    $total = $amount_m / $price;

    return array($amount_m,$coins,$total); //Puedes retornar los valores de la funcion como una arreglo
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Moneda</title>

    <link rel="stylesheet" href="../css/style.css">

</head>
<body>

<?php

$resultado =  convert($amount_money,$coin);//Almacenas la funcion en una variable

echo 'El total de ' . $resultado[0] .' Cordobas en ' . $resultado[1] . ' es ' . round($resultado[2],2); ;?>
<!--Puedes imprmirlo en de la siguiente manera accediendo a los indices del arreglo-->


    
</body>
</html>