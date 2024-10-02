<?php
   session_start();
   include ('join.php');
// recuperation des champs du formulaire
//   $numero=htmlspecialchars($_POST['numero']);
//   $pass=htmlspecialchars($_POST['pass']);
//   $connexion=htmlspecialchars($_POST['connexion']);

//   try{
//     // on recuperer les info du table form
//     $req=$con->prepare("SELECT numero, mot_de_passe FROM form WHERE numero=:numero");
//     // recuperer la valeur et affiche sur forme de tableau
//     $req->execute(array('numero' => $numero)); 

//     $donnees = $req -> fetch();
//     //  si la valeur entre dans la bd sa retourne 1
//     $verification = $req -> rowCount();

//     // on affiche les info dans le tableau

//     if($verification == 1){
//         if($donnees['mot_de_passe'] == $pass){
//                 echo "La connexion a ete reussit";
//         }else{echo "Le mot de passe est incorrecrt";}
//     }else{echo "vous n'existez pas dans la base de donnee";}
 

   
//   }
//   catch(PDOEXCEPTION $e){
//     echo" Impossible de traiter les donnees.Erreur".$e->getMessage();

// } isset : permet de verifier si un champs existe


   if(isset($_POST['email']) && isset($_POST['pass1'])){
      
    $email = htmlspecialchars($_POST['email']);
    $pass1 = htmlspecialchars($_POST['pass1']);
    $check =$con->prepare("SELECT nom_user, email, pass1 FROM studentessa WHERE email= :email");
    $check -> execute(array(
      'email' => $email   
    ));
    // on vas stockee les donnees avec $data et rechercher avec fetch
    $data = $check -> fetch();
    // ensuite avec rowCount pour si la donnee existe dans la table ou pas
    $row = $check -> rowCount();
    
    // si la valeur $row == 1 sa veut dire la personne existe
    if($row == 1){

      // verification de l'email
      if (filter_var( $email,FILTER_VALIDATE_EMAIL)) {

         $pass1 =hash('sha256', $pass1);
        if($data['pass1'] == $pass1){

           $_SESSION['user'] = $data['nom_user'];
           header("location:landing.php");

           header("location:connexion_form.php?login_Erro=success");

        }else{
          header("location:connexion_form.php?login_Erro=password");
        }
        
      }else{
        header("location:connexion_form.php?login_Erro=Email");
      }

    }else{
      header("location:connexion_form.php?login_Erro=Already");
    }

   }else{
      header("location:connexion_form.php");
   }
?>     