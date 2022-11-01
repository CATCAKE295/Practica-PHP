<?php 
$eleccion = 'hielo';

switch($eleccion){

    case 'Pizza':
        echo 'Has elegido la pizza';
    break;

    case 'Helado':
        echo 'Has elegido Helado';
    break;

    case 'Torta';
        echo 'Torta';
    break;

    default:
        echo 'No esta dentro de las opciones';
    break;


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch con PHP y HTML</title>
</head>
<body>

  <h1>Que prefieres?</h1>
  <ol>
    
        <h2><li>Pizza</li></h2>   
        <h2><li>Helado</li></h2>   
        <h2><li>Torta</li></h2>
    
  </ol>
    
</body>
</html>