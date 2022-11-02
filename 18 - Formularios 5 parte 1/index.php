<?php

 $alumnos = ['Luis','Gerald','Marvin','Emiliano','Farit'];

 /*
 
 Funciones 

 sort() -> Ordena un arreglo

 rsort() -> Ordena un arreglo en orden inverso

 asort() -> Ordena un arreglo y mantiene una asosiacion de indices

 arsort() -> Ordena un  arreglo en orden inverso y mantiene la asociacion de indidces 

 count() -> Cuenta los elementos de un arreglo
 
 */

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar datos de una página a otra 5 Ciclo Funciones de arreglos</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>Alumnos Matriculados</h1>

<div class="contenedor">
<?php

sort($alumnos);
foreach ($alumnos as $alumno) {
    echo('<p>' . $alumno . '</p>');
    unset($alumno); //Permite que no se pueda imprmir elementos fuera del foreach referente al arreglo alumnos
}

?>

<p>Total de alumnos matriculados: <?php echo count($alumnos) ?></p>
</div>


    
</body>
</html>