<?php 
require_once 'db.php';


if(isset($_POST['delete'])) {




    $idToDelete = $_POST['delete'];


    

    $myRequest = " DELETE FROM `messages` 
    WHERE `messages`.`id` = $idToDelete";
    $worked = mysqli_query($myConnection, $myRequest);
    header("location: http://localhost/PhpProceduraleCours/message/");

}




?>