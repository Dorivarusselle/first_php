<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
      session_start();
      include("header1.php");
    ?>
</head>
<body class="different">
    <?php
      include("header.php");
    ?>
    
    <form action="inserer.php" method="POST" class="form1">
                <?php
                     if(isset($_GET['login_Erro'])){
                          $erro = htmlspecialchars($_GET['login_Erro']);
                          
                           switch ($erro) {
                              case 'password':
                                ?>
                                  <div class="alert alert-danger">
                                    <strong>Erreur</strong> Mot de passe incorrect
                                  </div>
                                <?php
                             break;
                             case 'success':
                                ?>
                                  <div class="alert alert-success">
                                    <strong>succes</strong> Bienvenue <?php echo $_SESSION['user']; ?>. Connexion reussie.
                                  </div>
                                <?php
                              break;
                              case 'Email':
                                ?>
                                  <div class="alert alert-danger">
                                    <strong>Erreur</strong> email existe deja 
                                  </div>
                                <?php
                              break;
                              case 'Already':
                                ?>
                                  <div class="alert alert-danger">
                                    <strong>Erreur</strong> compte non existant
                                  </div>
                                <?php
                              break;
                       }
                     }
                  ?>
        <h3>Formulaire de connexion</h3>
        <div class="list">
            <label for="email"> Adresse email :</label>
            <input type="email" id="email" name="email" placeholder=" Votre email ">
        </div>
        <div class="list">
            <label for="pass"> Mot de passe :</label>
            <input type="password" name="pass1" id="pass" placeholder=" votre mot de passe ">
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-evenly mt-2">
            <button type="submit" class="btn btn-round btn-success" >Se connecter</button>
            <a href="inscription.php" class="btn btn-round btn-outline-success"  > S'inscrire</a>
        </div>
        <a href="email.php" class=" text-center"  > Mot de passe oublie?</a>
    </form>
    <br><br><br><br><br><br>
    <?php
      
    ?>
</body>
</html>