<?php
   session_start();
   include("join.php");

   if (isset($_POST['pass1']) && isset($_POST['passe'])) {

      $motDePasse= htmlspecialchars($_POST['pass1']);
      $confirm= htmlspecialchars($_POST['passe']);
      
      if ($motDePasse == $confirm) {
           
         $motDePasse= hash('sha256',$motDePasse);
          $req=$con -> prepare("UPDATE studentessa SET pass1='$motDePasse' WHERE email = :email ");
          $req -> execute(array(':email' => $_GET['email2']));
          header("location:connexion_form.php");
      }else{
        header("location:recover.php?erro=incorrect");
      }
    }
   
?> 