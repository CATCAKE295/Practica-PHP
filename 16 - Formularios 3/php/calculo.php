<?php 

if (!$_POST) {
    header('Location: ../index.php');
}


$table = $_POST['tabla'];
$maxim = $_POST['maximo'];
$multiplier = 1;

function Multiplication_table($tbl,$max,$mul){

    while($mul <= $max){

        echo("<p> {$tbl} * {$mul} = ". $tbl * $mul ."</p>");
        $mul++;

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<h1>Tabla del <?php echo $table ?></h1>

<?php Multiplication_table($table,$maxim,$multiplier) ?>

 


    
</body>
</html>

