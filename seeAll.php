<?php
    
    include("header.php");
    include("join.php");

    
    $requet= $con->query("SELECT * FROM studentessa ORDER BY `studentessa`.`id` DESC");

?>


<body class="different">
    <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
        <div class="row border-bottom mb-4">
            <div class="col-sm-8 pt-2">
                <h6 class="mb-4 bc-header">Tous les abonnees</h6>
                <?php if (isset($_GET['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <h5>Modification reussi</h5>
                </div> <?php } ?>

                <?php if (isset($_GET['delete'])) { ?>
                <div class="alert alert-success" role="alert">
                    <h5>Suppression reussi</h5>
                </div> <?php } ?>

                <?php if (isset($_GET['erreur'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <h5>Erreur de suppression a la base</h5>
                </div> <?php } ?>
            </div>
            <div class="col-sm-4 text-right pb-3">
                <a href="inscription.php" class="btn btn-primary btn-theme text-white"  ><i class="fa fa-plus fa-bounce " style="color:bisque;"></i> Ajouter</a>
                <a href="accueil.php" class="btn btn-round btn-success"  ><i class="fa fa-home fa-flip"></i> Accueil</a>
            </div>
        </div>

        <div class="table-responsive">
            <table id="example1" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nom_user</th>
                        <th scope="col">mot_de_passe</th>
                        
                        <th scope="col">email</th>
                        <th scope="col">date_naissance</th>
                        <th scope="col">Sexe</th>
                        <th scope="col">Prof</th>
                        <th scope="col">Affiliation</th>
                        <th scope="col">ville</th>
                        <th scope="col">pays</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($doriva=$requet->fetch(PDO::FETCH_ASSOC)){ ?>
                        <tr>
                            <td><?php echo htmlspecialchars($doriva['id']) ; ?></td>
                            <td><?php echo htmlspecialchars($doriva['nom_user']) ; ?></td>
                            <td><?php echo htmlspecialchars($doriva['pass1']); ?></td>
                            
                            <td><?php echo htmlspecialchars($doriva['email']); ?></td>
                            <td><?php echo htmlspecialchars($doriva['nais']); ?></td>
                            <td><?php echo htmlspecialchars($doriva['sexe']); ?></td>
                            <td><?php echo htmlspecialchars($doriva['prof']); ?></td>
                            <td><?php echo htmlspecialchars($doriva['affiliation']); ?></td>
                            <td><?php echo htmlspecialchars($doriva['ville']); ?></td>
                            <td><?php echo htmlspecialchars($doriva['pays']); ?></td>
                            <td>
                                <a href="formUpdate.php?id=<?php echo $doriva['id']; ?>" class="btn text-primary"><i class="fa fa-edit"></i></a>
                                <a href="delete.php?id=<?php echo $doriva['id']; ?>"  onclick="if(!confirm('Voulez-vous Supprimer')) return false;" class="btn text-danger"><i class="fa fa-trash"></i></a>
                            </td>
                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div> 
    </div>
   <?php
     
   ?>
   <a href="yvan.php"> <button class= "btn btn-danger">generer le pdf</button></a>
</body>

