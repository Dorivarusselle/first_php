<?php
  session_start();
  include("header1.php");
?>
<body class="different">
<?php
      include("header.php");
    ?>
<form action="insInsere.php" method="POST" autocomplete="off" class="form1">
        
                <?php
                   if (isset($_GET['Reg_err'])) {
                      $erro=htmlspecialchars($_GET['Reg_err']);

                      switch ($erro) {
                        case 'success':
                          ?>
                            <div class="alert alert-success">
                                <strong>Succes</strong> <?php echo $_SESSION['user']; ?> inscription reussie !
                            </div> 
                          <?php 
                          break;
                          case 'password':
                            ?>
                              <div class="alert alert-danger">
                                  <strong>Erreur</strong> mot de passe  different
                              </div> 
                            <?php 
          
                          break;
                          case 'email':
                            ?>
                              <div class="alert alert-danger">
                                  <strong>Erreur</strong> email non valide
                              </div> 
                            <?php 
                          break;
                          case 'email_length':
                            ?>
                              <div class="alert alert-danger">
                                  <strong>Erreur</strong> email trop long
                              </div> 
                            <?php 
                          break;
                          case 'nom_length':
                            ?>
                              <div class="alert alert-danger">
                                  <strong>Erreur</strong> nom trop long
                              </div> 
                            <?php 
                          break;
                          case 'already':
                            ?>
                              <div class="alert alert-danger">
                                  <strong>Erreur</strong> compte deja existant
                              </div> 
                            <?php 
                          break;
                      }
                   }
                ?>
        <h3>Formulaire d'inscription</h3>
        <div class="list">
            <label for="nom_user"> Nom d'identifiant :</label>
            <input type="text" id="nom_user" name="nom_user" placeholder=" nom d'utilisateur "require>
        </div>
        <div class="list">
            <label for="pass1"> Mot de passe :</label>
            <input type="password" name="pass1" id="pass1" placeholder=" votre mot de passe "required>
        </div>
        <div class="list">
            <label for="passe">Confirmation du mdp:</label>
            <input type="password" name="passe" id="passe" placeholder=" confirmer votre mot de passe "required>
        </div>
        <div class="list">
            <label for="mail"> Adresse email :</label>
            <input type="email" name="email" id="email" placeholder=" Example@gmail.com "required>
        </div>
        <div class="list">
            <label for="nais"> Date de naissance:</label>
            <input type="date" name="nais" id="nais" required>
        </div>
        <div class="list">
            <label for="sexe"> Sexe :</label>
            Masculin <input type="radio" value="Masculin" name="sexe" id="sexe" required>
           Feminin <input type="radio" value="Feminin"  name="sexe" id="sexe" required>
        </div>
        <div class="list">
            <label for="prof"> Votre profession :</label>
            <input type="text" name="prof" id="prof" placeholder=" votre profession " required>
        </div>
        <div class="list">
            <label for="affiliation"> Affiliation :</label>
            <input type="text" name="affiliation" id="affiliation" placeholder=" votre affiliation " required>
        </div>
        <div class="list">
            <label for="ville"> Votre ville :</label>
            <input type="text" name="ville" id="ville" placeholder=" votre ville " required>
        </div>
        <div class="list">
            <label for="pays"> Votre pays :</label>
            <input type="text" name="pays" id="pays" placeholder=" votre pays "required>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-evenly mt-2">
            <button type="submit" class="btn btn-round btn-outline-success" >S'inscrire</button>
            <a href="connexion_form.php" class="btn btn-round btn-success"  > Se connecter</a>
       </div>
       
    </form>
    <?php
      
    ?>
  
</body>