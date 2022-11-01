<?php   
//Sin Argumentos
function lorem(){
   return '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit dolorem nulla molestias, ad quia repellat qui consequuntur soluta, quod recusandae rerum iusto similique? Impedit magni maiores at eius quisquam suscipit!Dolore exercitationem tempora quam, eaque laborum quod, porro recusandae necessitatibus distinctio velit sed ipsa obcaecati, natus nihil dolor illo deleniti iusto quos. Qui consequuntur reprehenderit dolore rerum velit veniam asperiores?</p>';
}

//Con Argumentos
function Sum_arg($n1,$n2)
{
    return $n1 + $n2;
}

echo 'Resultado de la funcion Sum_arg es ' . Sum_arg(99,99);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>

<section>
    <?php echo lorem() ?>

    <br>

    <?php echo lorem() ?>

    <br>

    <?php echo lorem() ?>

</section>




<footer>
     <h1>Derechos Reservados <?php echo date('Y') ?></h1>
</footer>
    
</body>
</html>