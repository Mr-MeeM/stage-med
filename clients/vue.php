<?php

require("../config/connexion.php");
require("../config/commandes.php");
?>
<?php
if(!empty($_POST))
{

    $nom = htmlspecialchars(strip_tags($_POST['nom']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $birthday = htmlspecialchars(strip_tags($_POST['birthday']));
    $telephone = htmlspecialchars(strip_tags($_POST['telephone']));
    $DateDepart = htmlspecialchars(strip_tags($_POST['DateDepart']));
    $DateExpiration = htmlspecialchars(strip_tags($_POST['DateExpiration']));
    $prix = htmlspecialchars(strip_tags($_POST['prix']));
    $coach = htmlspecialchars(strip_tags($_POST['coach']));
    $categorie = htmlspecialchars(strip_tags($_POST['categorie']));

    try
    {
        $req= $access->prepare("INSERT INTO clients  (`nom`, `email`, `birthday`, `telephone`, `dateDepart`, `dateExpiration`, `prix`, `coach`, `categorie`)
        VALUES (?,?,?, ?,?,?,?, ?,?)");

        $req->execute(array($nom, null, null, null, null, null, null, null, null));

        $req->closecursor();
    }
    catch (Exception $e)
    {
        $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
    <title>gym</title>
</head>
<body>
	<h1>client information</h1>
<form method="post" action="">
 <div class="formulaire">	
    <p><label for="nom">Nom et prenom </label>:<br> <input id="nom" name="nom" placeholder="Entrez le nom..."></p>
	<p><label for="email">email</label>: <br><input id="email" name="email" placeholder="Entrez le email..."></p>
	<p><label for="datedenaissance">la date de naissance</label>:<br> <input type="date" name="birthday" placeholder="D/M/Y"></p>
	<p><label for="tel">Numero de telephone</label>:<br> <input  name="telephone" placeholder="Entrez le num..."></p>
	<p><label for="depart">date de depart</label>:<br> <input type="date" name="DateDepart" placeholder="D/M/Y"></p>
	<p><label for="fini">date de fin</label>:<br> <input type="date" name="DateExpiration" placeholder="D/M/Y"></p>
	<p><label for="payment">payment</label>:<br> <input name="prix" placeholder="?dt"></p>
	<p><label for="trainer">trainer</label>: <br><input name="coach" placeholder="le nom du coach..."></p>
	<p><label for="catégorie">catégorie </label>:<br> <input name="categorie" placeholder="Entrez le type de sport..."></p>
     <input type="submit" value="Enregistrer">
 </div>	
</form>
</body>
</html>
