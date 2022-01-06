<?php



if(isset($_POST['author']) && isset($_POST['description'])) {

$authorInput = $_POST['author'];
$messageInput = $_POST['description'];

$authorInput = htmlspecialchars($authorInput);
$messageInput = htmlspecialchars($messageInput);

echo $authorInput;
echo $messageInput;

$hote = "localhost";
$username = "patate";
$password = "fritte";
$db = "messageboard";

// Open new connection with mySql server
$myConnection = mysqli_connect($hote, $username, $password, $db);

if(!$myConnection) {

    echo "PROBLEM CONNEXION";
}


$myRequest ="INSERT INTO messages (author, message)
VALUES ( '$authorInput', '$messageInput');";
$worked1 = mysqli_query($myConnection, $myRequest);
header("location: http://localhost/PhpProceduraleCours/message/");




}



?>