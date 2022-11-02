<?php 

/* if (isset($_POST['submit'])) evita que nos de un error en los post que no tienen valor aun */
if (isset($_POST['submit'])) {
    $name = $_POST['nombre'];
    $note1 = $_POST['Nota1'];
    $note2 = $_POST['Nota2'];
    $note3 = $_POST['Nota3'];

    function average($n1,$n2,$n3){
        global $name;
        $mean = ($n1 + $n2 + $n3) / 3;

        return array($name,$mean);

    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar datos a la misma pagina</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<form action="<?php echo( htmlspecialchars( $_SERVER['PHP_SELF']) ); ?>" method="post"> <!-- echo($_SERVER['PHP_SELF']);  se refiere al archivo actual en el que estamos  --> <!-- htmlspecialchars() convierte caracteres especiales en entidedades de HTML (se usa para seguridad esto ) -->
    <h1>Calcular Promedio</h1>
    <label for="">Nombre:</label>
    <input type="text" name="nombre">
    <label for="">Nota 1: </label>
    <input type="text" name="Nota1">
    <label for="">Nota 2: </label>
    <input type="text" name="Nota2">
    <label for="">Nota 3: </label>
    <input type="text" name="Nota3">
    <input type="submit" value="Calcular" name="submit">

    
    <?php 

       $resultado = average($note1,$note2,$note3);

       echo('<h1>'. $resultado[0] . ', tu promedio es '. round($resultado[1],2) . '</h1>');
    

    ?>
    
    

</form>
    
</body>
</html>