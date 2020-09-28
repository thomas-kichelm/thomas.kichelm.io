<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page admin</title>
    </head>
    <body>
    
        <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "PCactu1234@") // Si le mot de passe est bon
    {
    // On affiche les codes
    ?>
        <h1>Ajouter un article:</h1>
          
        
        <form action="post_tuto.php" method="post">
        <label id = "titre "for="titre">titre </label> : <input type="text" name="titre" id="titre" /><br />
        <label for="texte">texte</label>
        <textarea name="texte" id="texte" rows="10" cols="50"></textarea>

        <input type="submit" value="Envoyer" />
  </p>
    </form>

    <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>
    
        
    </body>
</html>