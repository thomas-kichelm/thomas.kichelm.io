<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page admin</title>
    </head>
    <body>
    
        <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "PCactu1234@") 
    {
    ?>
        <h1>Ajouter un article:</h1>
          
        
        <form action="" method="post">
        <label for="titre">titre </label> : <input type="text" name="titre" id="titre" /><br />
        <label for="contenu">texte</label>
        <textarea name="contenu" id="contenu" rows="10" cols="50"></textarea>

        <input type="submit" value="Envoyer" />
  </p>
    </form>

    <?php
    }
    else 
    {
        header('Location: ./admin.php');
    }
    ?>
   
        
    </body>
</html>
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
$req = $bdd->prepare('INSERT INTO article (titre, contenu, date_post) VALUES(?, ?, CURDATE())');
$req->execute(array($_POST['titre'], $_POST['contenu']));

// Redirection du visiteur vers la page du minichat
header('Location: ./admin.php');

?>