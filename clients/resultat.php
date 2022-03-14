<?php
require("../config/commandes.php");
$Clients=afficher();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nos clients</title>
</head>
<body>
    <div class="resultat">
  
        <p><h3>nom et prenom: <h3><br><?= $Clients->nom ?></p>
        <p><h3>email: <h3><br><?= $Clients->email ?></p>
        <p><h3>birthday: <h3><br><?= $Clients->birthday ?></p>
        <p><h3>telephone: <h3><br><?= $Clients->telephone ?></p>
        <p><h3>DateDepart: <h3><br><?= $Clients->DateDepart ?></p>
        <p><h3>:DateExpiration <h3><br><?= $Clients->DateExpiration ?></p>
        <p><h3>prix: <h3><br><?= $Clients->prix ?></p>
        <p><h3>coach: <h3><br><?= $Clients->coach ?></p>
        <p><h3>categorie: <h3><br><?= $Clients->categorie ?></p>
       
    </div>    
    
</body>
</html>