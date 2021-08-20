<?php
$server="localhost";
$user="root";
$mdp="";
$dbnam="journal";

$connection=mysqli_connect($server,$user,$mdp,$dbnam);
if(!$connection){
    die("erreur de connexion" .mysqli_connect_error());
}
?>