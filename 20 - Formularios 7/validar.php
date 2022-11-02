<?php 

if (isset($_POST['submit'])) {
    
    if (empty($name)) {
        echo("<p class='error'>* Agrega un nombre</p>");
    } else if (strlen($name) > 15) {

        echo("<p class='error'>* El nombre es muy largo</p>");

    }
    if(empty($age)){

        echo("<p class='error'>* Agrega Tu edad</p>");

    } else if (!is_numeric($age)) {

        echo("<p class='error'>* La edad debe ser escrita en numero </p>");

    }
    
    if (empty($email)) {
        echo("<p class='error'>* Agrega Tu correo</p>");
    } else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) { 
        echo("<p class='error'>* El correo electronico es incorrecto </p>");
    }
}

/* filter_var() sirve para validad un variable en especifico como integer , string , boolean incluso la sintasisd de un email busca la documentacion de php  */

