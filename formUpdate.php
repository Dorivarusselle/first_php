<?php
    include("header.php");

    include("update.php");

?>

<body class="different">
    <div class="container p-2" >
        <div class="row mt-5">
            <div class="col-sm-12">
                <!--Validation types using Form-validator.js-->
                <div class="mt-3 mb-4 p-3 button-container bg-white border shadow-sm">
                    <div class="row border-bottom mb-4">
                        <div class="col-sm-8 pt-2">
                            <h6 class="mb-4 bc-header">Entrez vos informations</h6>                          
                        </div>
                        <div class="col-sm-4 text-right pb-3">
                            <a href="accueil.php" class="btn btn-primary btn-theme text-white"  ><i class="fa fa-home fa-bouch" style="color:red;"></i> Accueil</a>
                            <a href="seeAll.php" class="btn btn-round btn-success"  ><i class="fa fa-list fa-flip"></i> Liste</a>
                        </div>
                    </div>
            
                    <form action="" method="POST" enctype="multipart/form-data" id="validation_style" class="mt-2">
                        <div class="form-group row">
                            <label for="Required1" class="col-sm-3">Nom d'utilisateur<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="Required1" value="<?php echo htmlspecialchars($rs['nom_user']) ; ?>" name="nom_user" class="form-control" placeholder="Entrez votre nom"  />
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Required2" class="col-sm-3">Mot de passe<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="password" id="Required2" name="pass1" value="<?php echo htmlspecialchars($rs['pass1']) ; ?>" class="form-control" placeholder="Entrez votre MDP" />
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Required2" class="col-sm-3">Confirmation du mdp:<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="password" id="Required2" name="passe" value="<?php echo htmlspecialchars($rs['passe']) ; ?>" class="form-control" placeholder="Entrez votre MDP" />
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Required9" class="col-sm-3"> Adresse email <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="email" id="Required9" name="email" value="<?php echo htmlspecialchars($rs['email']) ; ?>" class="form-control" placeholder="Entrez votre MDP" />
                                
                            </div>
                        </div>

                        <div class="form-group mb row">
                            <label for="Required4" class="col-sm-3">Date de naissance<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="date" id="Required4" name="nais" value="<?php echo htmlspecialchars($rs['nais']); ?>" class="form-control"  />
                            
                            </div>
                        </div>
                        

                        <div class="form-group mb  row">
                        <div class="list">
                            <label for="sexe"> Sexe :</label>
                             Masculin <input type="radio" value="Masculin" <?php echo htmlspecialchars($rs['sexe']); ?> name="sexe" id="sexe" required>
                            Feminin <input type="radio" value="Feminin" <?php echo htmlspecialchars($rs['sexe']); ?> name="sexe" id="sexe" required>
                        </div>
                           
            
                        <div class="form-group row">
                            <label for="Required5" class="col-sm-3">Profession<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="Required5" name="prof" value="<?php echo htmlspecialchars($rs['prof']); ?>" class="form-control" placeholder="Entrez votre profession" />

                            </div>
                        </di>
                        <div class="form-group row">
                            <label for="Required6" class="col-sm-3">Affiliation<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="Required6" name="affiliation" value="<?php echo htmlspecialchars($rs['affiliation']); ?>" class="form-control" placeholder="Entrez votre afficiation" />

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Required7" class="col-sm-3">Ville<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="Required7" name="ville" value="<?php echo htmlspecialchars($rs['ville']); ?>" class="form-control" placeholder="Entrez votre ville" />

                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="Required8" class="col-sm-3">Pays<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select name="pays" class="form-control"  id="Required8">
                                    <optgroup>
                                        <option value="">Choisir votre Pays</option>
                                        <option value="Argentine" <?php if($rs['pays'] == 'Argentine'){echo "selected";} ?>>Argentine</option>
                                        <option value="Canada" <?php if($rs['pays'] == 'Canada'){echo "selected";} ?>>Canada</option>
                                        <option value="USA" <?php if($rs['pays'] == 'USA'){echo "selected";} ?>>USA</option>
                                        <option value="Mexique" <?php if($rs['pays'] == 'MexiqueD'){echo "selected";} ?>>Mexique</option>
                                        <option value="Espagne" <?php if($rs['pays'] == 'espagne'){echo "selected";} ?>>Espagne</option>
                                        <option value="Italie" <?php if($rs['pays'] == 'espagne'){echo "selected";} ?>>Italie</option>
                                        <option value="Belgique" <?php if($rs['pays'] == 'espagne'){echo "selected";} ?>>Belgique</option>
                                        <option value="France" <?php if($rs['pays'] == 'espagne'){echo "selected";} ?>>France</option>
                                        <option value="Benin" <?php if($rs['pays'] == 'espagne'){echo "selected";} ?>>Benin</option>
                                        <option value="Congo" <?php if($rs['pays'] == 'espagne'){echo "selected";} ?>>Congo</option>
                                        <option value="Russie" <?php if($rs['pays'] == 'espagne'){echo "selected";} ?>>Russie</option>
                    
                                    </optgroup>
                                </select>

                            </div>
                        </div>

                        <div class="form-group ">
                            <input type="submit" class="btn btn-primary" value="Modifiez">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <?php
        // include("footer.php");
    ?> 
</body>

