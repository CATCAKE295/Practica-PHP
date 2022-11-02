<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar datos de una página a otra 5 Ciclo Funciones definidas</title>

    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<form action="./php/conversor.php" method="post">

<h1>Conversor de Monedas</h1>
    <label for="">Cantidad en Cordobas: </label>
    <input type="text" name="cordoba">
    <label for="">Moneda: </label>
    <select name="moneda">
        <option value="usd">Dolar</option>
        <option value="euro">Euro</option>
    </select>
    <input type="submit" value="Calcular">

</form>
    
</body>
</html>