<?php

include('join.php');

if (isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
    $selSql = $con->prepare("SELECT * FROM studentessa WHERE id= :id ");
    $selSql->execute(array(
        'id' => $id
    ));
     $rs = $selSql->fetch(PDO::FETCH_ASSOC);  
    if (isset($_POST) && !empty($_POST)) {
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

        if ($nom_user == "" || $pass1 == "" || $passe=="" || $email ==""  || $nais == "" || $sexe == "" || $prof == "" || $affiliation == "" || $ville == "" || $pays == "") {

            echo '<div class="alert alert-danger" role="alert">
                        <h5>Tous les champs sont obligatoires</h5>
                    </div>';

        } else {
            $mdp=hash('sha256',$mdp);
            $updateSql = "UPDATE studentessa SET nom_user='$nom_user', pass1='$pass1', passe='$passe', email='$email', naiss='$nais', sexe='$sexe', profession='$prof', affiliation='$affiliation', ville='$ville', pays='$pays' WHERE id=$id ";
            $stmt = $con->prepare($updateSql);

            try {
                $stmt->execute();
                $update = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($update) {
                    header("location:seeAll.php?success");
                    exit();
                } else {
                    header("location:formUpdate.php?erreur");
                    exit();
                }
            } catch (PDOException $e) {

                echo '<div class="alert alert-warning" role="alert">
                        <h5>Tous les champs sont complets</h5>
                    </div>';
            }
        }
    }
} else {
    header("location:seeAll.php");
}
