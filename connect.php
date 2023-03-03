<?php // Toute la connexion a la base de données 
$con=new mysqli('localhost','root','','crudoperation');

if(!$con){
    echo 'connexion good';
}

?>
