<?php 

define('MONEY', 1000);
$is_true = true;

//condicional comparando
if(MONEY > 900){

    echo 'Puedo comprar esos zapatos';

} else {

    echo ' No puedo comprar esos zapatos ';

}

echo("<br />");


//condicional con booleano

if ($is_true) {
    echo 'Dice la verdad';
} else {
    echo 'Dice mentiras';
}


?>