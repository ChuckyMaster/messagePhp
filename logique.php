<?php 


$messages = [

    ["author" => "patrick",
    "message" => "  Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate,
    harum laudantium esse placeat accusantium eum error quam,
     reprehenderit ex deleniti architecto neque omnis cum et est
      repudiandae dolorum! Neque vel expedita repellat deleniti optio ab."
],
    ["author" => "geraldine",
    "message" => " 
    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
     Nihil ducimus eius qui!"
],
    ["author" => "aqua",
    "message" => " Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Nulla consequuntur at, temporibus veritatis accusamus deserunt enim dolor 
    molestiae, laborum obcaecati sit reiciendis nam? Ad, id."
],







];


$hote = "localhost";
$username = "patate";
$password = "fritte";
$db = "messageboard";

// Open new connection with mySql server
$myConnection = mysqli_connect($hote, $username, $password, $db);

if(!$myConnection) {

    echo "PROBLEM CONNEXION";
}


echo(mysqli_error($myConnection));



$myRequest = "SELECT * FROM messages";
$messages = mysqli_query($myConnection, $myRequest);


?>