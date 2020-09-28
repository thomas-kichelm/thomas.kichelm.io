<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
</head>
<body>
<form action="" method="post">
	<p>
        <label id = ":pseudo"for=":pseudo">Pseudo </label> : <input type="text" name="pseudo" id="pseudo" /><br/>
        <label id = ":pass"for=":pass">mot de passe </label> : <input type="password" name="pass" id="pass" /><br/>
        <label id = ":pseudo"for=":pseudo">E-mail </label> : <input type="text" name="email" id="email" /><br/>
        <input type="submit" value="Valider" />
        </p>
    </form>
</body>
</html>


<?php 
// Vérification de la validité des informations
try
{
  $bdd = new PDO('mysql:host=db5000868769.hosting-data.io;dbname=dbs764164;charset=utf8', 'dbu332594', 'PCactu1234@');
}
catch(Exception $e)
{
        die('Erreur : '.$email->getMessage());
}
// Hachage du mot de passe
$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

// Insertion
$req = $bdd->prepare('INSERT INTO membres(pseudo, pass, email, date_inscription) VALUES(:pseudo, :pass, :email, CURDATE())');
$req->execute(array(
    'pseudo' => $pseudo,
    'pass' => $pass_hache,
    'email' => $email));