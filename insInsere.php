<?php
session_start();
include("header.php");
include("join.php");
// Recuperation des information du formulaire partie inscription
$nom_user = htmlspecialchars($_POST['nom_user']);
$pass1 = htmlspecialchars($_POST['pass1']);
$passe = htmlspecialchars($_POST['passe']);
$email = htmlspecialchars($_POST['email']);
$nais = htmlspecialchars($_POST['nais']);
$sexe = htmlspecialchars($_POST['sexe']);
$prof = htmlspecialchars($_POST['prof']);
$affiliation = htmlspecialchars($_POST['affiliation']);
$ville = htmlspecialchars($_POST['ville']);
$pays = htmlspecialchars($_POST['pays']);

if (isset($_POST['nom_user']) && isset($_POST['pass1']) && isset($_POST['passe']) && isset($_POST['email']) && isset($_POST['nais']) && isset($_POST['sexe']) && isset($_POST['prof']) && isset($_POST['affiliation']) && isset($_POST['ville']) && isset($_POST['pays'])) {
    $check = $con->prepare("SELECT nom_user, email, pass1 FROM studentessa WHERE email=:email ");
    $check ->execute(array('email' => $email));
    // on va stocker les donnees avec $data et rechercher avec fetch
    $data = $check -> fetch();
    // ensuite avec rowCount pour si la donnee existe dans la table ou pas
    $row = $check -> rowCount();
    // verification  des champs
    if ($row == 0) {
      if (strlen($nom_user) <= 100) {
        if (strlen($email) <= 100) {
          if(filter_var( $email ,FILTER_VALIDATE_EMAIL)){
            if($pass1 == $passe){ 
              $pass1 = hash('sha256',$pass1);

            //  insertion dans la BD en utilisant les tableaux associatifs
             $insert = $con->prepare("INSERT INTO studentessa (nom_user,pass1, passe, email, nais, sexe, prof, affiliation, ville,pays)
               VALUES (:nom_user, :pass1, :passe, :email, :nais, :sexe, :prof, :affiliation, :ville, :pays)");
            //  utilisation de tableau associatifs
            $insert -> execute(array(
              'nom_user' => $nom_user,
              'pass1' => $pass1,
              'passe' => $passe,
              'email' => $email,
              'nais' => $nais,
              'sexe' => $sexe,
              'prof' => $prof,
              'affiliation' => $affiliation,
              'ville' => $ville,
              'pays' => $pays
            ));
            $_SESSION['user'] = $data['nom_user'];
            header("location:inscription.php?Reg_err=success");
            }else{
              header("location:inscription.php?Reg_err=password");
            }
          }else{
            header("location:inscription.php?Reg_err=email");
          }
        }else{
          header("location:inscription.php?Reg_err=email_length");
        }
      }else {header("location:inscription.php?Reg_err=nom_length");}
    }else {
      header("location:inscription.php?Reg_err=already");
    }
}
