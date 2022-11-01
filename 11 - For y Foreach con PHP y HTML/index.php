<?php
//Otra manera de declarar arreglos 
$games = ["Metal Gear Solid 5", "Rivals of Aether", "Under Night in birth exe late clr", "Persona", "Biomass","Dark Souls II"];

$b_friend = ["Luis", "Tupac", "Kevin", "Daniel", "Markus"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For y Foreach con PHP y HTML</title>
</head>
<body>

<h1>Mis juegos Favoritos</h1>
<h2>Ciclo For</h2>

<br>
<ul>

<?php

for ($i=0; $i < count($games); $i++) { 
    echo '<h3> <li>'. $games[$i] . '</li> </h3>';
}
?>

</ul>

<br>

<h1>Mis Mejores Amigos</h1>
<h2>Ciclo ForEach</h2>

<br>

<ul>
    <?php 

    foreach($b_friend as $friend){
        echo '<h4><li>' . $friend .'</li></h4>';
    }



    

    
    ?>
</ul>



    
</body>
</html>