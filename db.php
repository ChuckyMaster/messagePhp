<?php 



$hote = "localhost";
$username = "patate";
$password = "fritte";
$db = "messageboard";

// Open new connection with mySql server
$myConnection = mysqli_connect($hote, $username, $password, $db);

if(!$myConnection) {

    echo "PROBLEM CONNEXION";
}






?>