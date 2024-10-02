<?php
session_start();
   include("header.php");
   include("join.php");



// $moi = $con->prepare("SELECT mail  FROM `inscription` WHERE mail=:mail ");
// $moi->execute(array('mail'=>$mail));
// $result = $moi -> rowCount();
// // $maile = $moi -> fetch();
//    $_SESSION['mail']=$mail;
// if($result == 1){
//  header("location:recover.php?mail=$mail");
//   exit();
// }else{
//    echo"Vous n'existez pas dans la base de donnee";
// }
    if (isset($_POST['email'])) {

      $email = htmlspecialchars($_POST['email']);
      $check =$con->prepare("SELECT nom_user, email, pass1 FROM studentessa WHERE email= :email");
      $check -> execute(array(
        'email' => $email   
      ));
      // on vas stockee les donnees avec $data et rechercher avec fetch
      $data = $check -> fetch();
      // ensuite avec rowCount pour si la donnee existe dans la table ou pas
      $row = $check -> rowCount();
      if ($row == 1) {
            if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
               header("location:recover.php?email=$email"); 
            }else{
               header("location:email.php?erreur=success");
            }
         }else{
         header("location:email.php?erreur=Already");
      }
   }
?>