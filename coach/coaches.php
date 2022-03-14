<?php
require("../config/commandes.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="stl.css">
    <title>gym</title>
</head>
<body>
	<h1>coaches information</h1>
<form method="post" action="addclinet.php">
 <div class="formulaire">	
    <p><label for="prenon">Nom et prenom </label>: <input name="name" placeholder="Entrez le nom..."></p>
	<p><label for="email">email</label>: <br><input name="email" placeholder="Entrez le email..."></p>
	<p><label for="datedenaissance">la date de naissance</label>: <input type="date" name="birthday" placeholder="D/M/Y"></p>
	<p><label for="tel">Numero de telephone</label>: <input name="telephone" placeholder="Entrez le num..."></p>
	<p><label for="adress">sepecialite</label>:<br> <input type="radio" name="monChoix" value="fitness" checked> fitness / <input type="radio" name="monChoix" value="dance"> dance /
    <input type="radio" name="monChoix" value="self defance" checked> self deffance </p>
	<p><label for="payment">salaire</label>: <input name="payment" placeholder="salaire..."></p>
    <a href="resultat.php"><button>enregistrer</button></a> 
 </div>	
</form>
</body>
</html>