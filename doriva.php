<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>votre PDF</h3>    

<table>
    <th>id</th>
    <th>nom_user</th>
    <th>pass1</th>
    <th>passe</th>
    <th>email</th>
    <th>nais</th>
    <th>sexe</th>
    <th>prof</th>
    <th>affiliation</th>
    <th>ville</th>
    <th>pays</th>

</table>
<?php
require_once("join.php");
$req=$con->query("select *from studentessa");

while($aff=$req->fetch()){ ?>

<tr>
     <td><?php echo $aff['id']; ?></td>
     <td><?php echo $aff['nom_user']; ?></td>
     <td><?php echo $aff['pass1']; ?></td>
     <td><?php echo $aff['passe']; ?></td>
     <td><?php echo $aff['email']; ?></td>
     <td><?php echo $aff['nais']; ?></td>
     <td><?php echo $aff['sexe']; ?></td>
     <td><?php echo $aff['prof']; ?></td>
     <td><?php echo $aff['affiliation']; ?></td>
     <td><?php echo $aff['ville']; ?></td>
     <td><?php echo $aff['pays']; ?></td>

</tr>
<?php } ?>

<h4> imprimé le <?php echo $date ?> </h4>
</body>
</html>