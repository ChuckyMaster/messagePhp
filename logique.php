<?php 

require_once 'db.php';
// $messages = [

//     ["author" => "patrick",
//     "message" => "  Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate,
//     harum laudantium esse placeat accusantium eum error quam,
//      reprehenderit ex deleniti architecto neque omnis cum et est
//       repudiandae dolorum! Neque vel expedita repellat deleniti optio ab."
// ],
//     ["author" => "geraldine",
//     "message" => " 
//     Lorem ipsum, dolor sit amet consectetur adipisicing elit.
//      Nihil ducimus eius qui!"
// ],
//     ["author" => "aqua",
//     "message" => " Lorem ipsum dolor sit amet consectetur adipisicing elit.
//     Nulla consequuntur at, temporibus veritatis accusamus deserunt enim dolor 
//     molestiae, laborum obcaecati sit reiciendis nam? Ad, id."
// ],







// ];




echo(mysqli_error($myConnection));
var_dump($_GET);

//Si on a 'set' singlemessage, qui est sur le lien "SEE" afin de voir un message
//et s'il ya quelque chose dedans


if(isset($_GET['id']) 
&& !empty($_GET['id'])
){
    $editMode = false;
    if( isset($_GET['edit'])){

        $editMode = true;
        
    }

    var_dump($editMode);

    //on filtre et on on stock dans une variable le contenue de get
    $id = htmlspecialchars($_GET['id']);


    //stock dans une variable une requête SQL pour recuperer UN seul element
    $requestSingle = "SELECT messages.id, messages.author, messages.message FROM messages WHERE id ='$id'";

    //avec la methode mysqli qui execute une requête sur la base de donnée
    //elle prend en paramètre, la connexion sur la base de donnée ET la requête
    $result = mysqli_query($myConnection, $requestSingle);
    $message = $result->fetch_assoc();
} else {
    $myRequest = "SELECT * FROM messages";
    $messages = mysqli_query($myConnection, $myRequest);

}








?>