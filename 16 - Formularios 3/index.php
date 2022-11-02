<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar datos de una página a otra 3</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<form action="php/calculo.php" method="post">

<h1>Tabla de Multiplicar</h1>
  <label for="">Tabla a mostrar: </label>
  <input type="text" name="tabla">
  <label for="">Máximo multiplicador: </label>
  <input type="text" name="maximo">
  <input type="submit" value="Calcular">


</form>



    
</body>
</html>