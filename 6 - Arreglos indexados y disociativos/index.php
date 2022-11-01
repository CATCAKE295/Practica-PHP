<?php
//arreglos asociativos
$asc_array = array(1 => "Francisco", 2 => "Luis", 3 => "Gerald");


foreach($asc_array as $key => $value){

    echo("Elemento: " .$key. " Nombre: ".$value. "<br />");
 

}

echo("<br />");

//arreglos indexados
$ind_array = array("Self","Guide","doppelganger");


for($i = 0 ; $i < count($ind_array) ; $i++){
    echo "Posicion: " . $i . " Tipo: " . $ind_array[$i] . " <br />";
}


?>