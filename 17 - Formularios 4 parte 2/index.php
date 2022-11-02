<?php

 $alumnos = ['Luis','Gerald','Marvin','Emiliano','Farit'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar datos de una página a otra 4 Ciclo ForEach</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>Alumnos Matriculados</h1>

<div class="contenedor">
<?php

foreach ($alumnos as $alumno) {
    echo('<p>' . $alumno . '</p>');
    unset($alumno); //Permite que no se pueda imprmir elementos fuera del foreach referente al arreglo alumnos
}


?>
</div>


    
</body>
</html>