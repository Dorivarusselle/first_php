<?php
   session_start();
   include("header1.php");
   include("join.php");
?>
   <body class="different">
    <?php
      
        include("header.php");
      ?>
       <form action="mis_a_jour.php?email2=<?php if(isset($_GET['email'])){echo $_GET['email'];}else{echo 'system error';} ?>" method="POST" class="form1">
            <?php
              if (isset($_GET['erro'])) {
                 $erro= htmlspecialchars($_GET['erro']);

                 switch ($erro) {
                    case 'incorrect':
                      ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> <?php echo "<b style=color:yellow;text-transform:uppercase;background:#000;>". $_SESSION['user']. "</b>";?>  Mot de passe different
                        </div>
                      <?php
                    break;
                  
                 }
              }
            ?>
          <h3>Recuperation du mot de passe</h3>
          <div class="list">
            <label for="pass1">Nouveau mdp:</label>
            <input type="password" name="pass1" id="pass1" placeholder=" votre mot de passe "required>
        </div>
        <div class="list">
            <label for="passe">Confirmation du mdp:</label>
            <input type="password" name="passe" id="passe" placeholder=" confirmer votre mot de passe "required>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-evenly mt-2">
            <button  class="btn btn-round btn-outline-success"  >Confirmer</button>
       </div>
       </form>
        <?php
          //include("footer.php");
        ?>
   </body>
