<?php 

if (isset($_POST)) {
    header('Location:http://localhost:3000/15%20-%20Formularios%202/index.php');
}

$product = $_POST['producto'];
$price = $_POST['precio'];
$amount = $_POST['cantidad'];
$waypay = $_POST['formaPago'];

$subtotal = $price * $amount;

//Esto es una funcion anonima
$discount = function(){
    global $subtotal;
    global $waypay;
    $discount_applied = Null;
    
    if ($waypay == 'Tarjeta') {

        $discount_applied = $subtotal * 0.2;

    } elseif ($waypay == 'Cupon') {
        $discount_applied = $subtotal * 0.15;
    } else {

        $discount_applied = $subtotal * 0.1;

    }

    

    return $discount_applied;

};

$total = $subtotal - $discount();





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

<label class="label-bill" for="">Forma de Pago: </label>
<p><?php echo $waypay
 ?></p>


<label class="label-bill" for="">SubTotal: </label>
<p><?php echo $subtotal ?></p>


<label class="label-bill" for="">Descuento: </label>
<p><?php echo $discount() ?></p>

<label class="label-bill" for="">Total: </label>
<p><?php echo $total ?></p>



</div>
    
</body>
</html>