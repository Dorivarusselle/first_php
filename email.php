    <?php
     include("header1.php");
    ?>
 <body class="different">
      <?php
        include("header.php");
      ?>
       <form action="mail.php" method="POST"  class="form1">
           <?php
                if (isset($_GET['erreur'])) {
                      $erro=htmlspecialchars($_GET['erreur']);

                      switch ($erro) {
                          case 'success':
                              ?>
                                <div class="alert alert-success">
                                  <strong>Verifier</strong> veuillez recuperer votre mot de passe
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
          <h3>Verification d'email</h3>
           <div class="list">
            <label for="email"> Adresse email :</label>
            <input type="email" name="email" id="email" placeholder=" Example@gmail.com "required>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-evenly mt-2">
            <button  type="submit" class="btn btn-round btn-outline-success"  > Valider </button>
       </div>
       </form>
       <?php
        
       ?>
   </body>

