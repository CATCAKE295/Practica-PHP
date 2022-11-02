<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['nombre'];
    $age = $_POST['edad'];
    $email = $_POST['correo'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar Formulario</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<form action=" <?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?> " method="post">
      <h1>Registro</h1>
      <label for="">Nombre:</label>
      <input type="text" name="nombre" value=" <?php if (isset($name)) echo $name ?>">
      <label for="">Edad:</label>
      <input type="text" name="edad" value=" <?php if (isset($age)) echo $age ?> ">
      <label for="">Correo:</label>
      <input type="text" name="correo" value=" <?php if (isset($email)) echo $email ?> ">
      <input type="submit" name="submit">

      <?php include("validar.php");?>
</form>

<!-- isset($name)) echo $name si la variable esta definida entonces imprmela   -->



</body>
</html>