<?php 

require_once 'db.php';


if(isset($_POST['editMessage']) && isset($_POST['idToModifie'])){


    $messageUpdate = htmlspecialchars($_POST['editMessage']);
    $idUpdate = htmlspecialchars($_POST['idToModifie']);
   

   


    $myRequest ="UPDATE messages SET message = '$messageUpdate' WHERE id = '$idUpdate'";
    $checkUpdate = mysqli_query($myConnection, $myRequest);
    header("Location: message.php?id=$idUpdate");

}







?>