<?php
// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=db5000868769.hosting-data.io;dbname=dbs764164;charset=utf8', 'dbu332594', 'PCactu1234@');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

    
// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO tutos (titre, texte, date_post) VALUES(?, ?, CURDATE())');
$req->execute(array($_POST['titre'], $_POST['texte']));

$req = $bdd->prepare('INSERT INTO articles (titre, texte, date_post) VALUES(?, ?, CURDATE())');
$req->execute(array($_POST['titre'], $_POST['texte']));

// Redirection du visiteur vers la page du minichat
header('Location: admin');
?>
