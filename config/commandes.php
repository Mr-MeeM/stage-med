<?php
function ajouter($nom, $email, $birthday, $telephone, $DateDepart, $DateExpiration, $prix, $coach, $categorie)
{
    if(require("connexion.php"))
    {
        $req = $access->prepare("INSERT INTO clients (nom, email, birthday, telephone, DateDepart, DateExpiration, prix, coach, categorie)
        VALUES (?, ?,?, ?,?, ?,?, ?,?)");
        $req->execute(array($nom, $email, $birthday, $telephone, $DateDepart, $DateExpiration, $prix, $coach, $categorie));
        $req->closecursor();

    }
}
function afficher()
{
    if(require("connexion.php"))
    {
        $req=$access->prepare("SELECT * FROM clients");
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
        $req->closeCursor();
 
    }
}