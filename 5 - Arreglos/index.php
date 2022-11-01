<?php 

//Asi se declara un arreglo
$animals = array("Ave","Perro","Gato","Araña"); 

echo $animals[2]; //Asi accedemos al indice de un arreglo

echo("</br>");

echo 'Hay '. count($animals) . ' Elementos en el arreglo'; //Con la palabra reservada count() podemos sabe el  numero de elementos de un arreglo


echo("</br>");

//De esta manera recorremos el arreglo con ciclo for 
for($i = 0; $i < count($animals); $i++){
    echo($animals[$i] . "<br />");
}




//arreglo clave-valor
$name_and_age = array("Fran" => 20, "Markus" => 19, "Tupac" => 22);


//Accedemos a la valor que es 20
echo $name_and_age['Fran'];

echo("<br />");

//De esta manera reccorremos los arreglos clave-valor
foreach($name_and_age as $key => $value){

    echo $key . " tiene " . $value . " años. " ."<br>";
}






?>