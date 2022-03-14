<?php
require("../config/commandes.php");
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
<form method="post" action="resultat.php">
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
	<a href="resultat.php"><button>enregistrer</button></a> 
 </div>	
</form>
</body>
</html>
<?php
if(isset($_POST['enregistrer']))
{
	if(isset($_POST['nom']) AND isset($_POST['email']) AND isset($_POST['birthday']) AND isset($_POST['telephone']) AND isset($_POST['DateDepart']) AND isset($_POST['DateExpiration']))
	{
		if(!empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['birthday']) AND !empty($_POST['telephone']) AND !empty($_POST['DateDepart']) AND !empty($_POST['DateExpiration']) AND !empty($_POST['prix']) AND !empty($_POST['coach']) AND !empty($_POST['categorie']))
		{
			$nom = htmlspecialchars(strip_tags($_POST['nom']));
			$nom = htmlspecialchars(strip_tags($_POST['email']));
			$nom = htmlspecialchars(strip_tags($_POST['birthday']));
			$nom = htmlspecialchars(strip_tags($_POST['telephone']));
			$nom = htmlspecialchars(strip_tags($_POST['DateDepart']));
			$nom = htmlspecialchars(strip_tags($_POST['DateExpiration']));
			$nom = htmlspecialchars(strip_tags($_POST['prix']));
			$nom = htmlspecialchars(strip_tags($_POST['coach']));
			$nom = htmlspecialchars(strip_tags($_POST['categorie']));
            try
			{
			    ajouter($nom, $email, $birthday, $telephone, $DateDepart, $DateExpiration, $prix, $coach, $categorie);
			}
			catch (Exception $e)
			{
				$e->getMessage();
			}

		}
	}
}
?>