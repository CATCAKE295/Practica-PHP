<?php 

$product = $_POST['producto'];
$price = $_POST['precio'];
$amount = $_POST['cantidad'];

function total(){

    global $price;
    global $amount;
    return $price * $amount ;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular / Boleta</title>


    <link rel="stylesheet" href="../css/style.css">

</head>
<body>

<h1>Total a pagar</h1>

<div>

<label class="label-bill" for="">Producto: </label>
<p><?php echo $product ?></p>


<label class="label-bill" for="">Precio: </label>
<p><?php echo $price ?></p>


<label class="label-bill" for="">Cantidad: </label>
<p><?php echo $amount ?></p>

<hr>


<label class="label-bill
" for="">Total: </label>
<p><?php echo total() ?></p>



</div>
    
</body>
</html>