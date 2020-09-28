<!DOCTYPE html>
<html>
<head>
	<script loading="lazy" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<meta charset="UTF-8">
	<meta name="description"  content="Toutes les dernières actualités PC sur PC-actu retrouvez des configs pour tous les prix. Des comparaisons, des tests et des tutos en tout genre" >
	<link rel="canonical" href="https://pc-actu.fr/" />
	<meta property='og:image' content='https://www.pc-actu.fr/logo-desc.png' />
	<title>Pc-actu</title>
		<link rel="shortcut icon" href="favicon.ico" />
	<script type="text/javascript" src="test.js"></script>
	<link rel="stylesheet" href="index.css">
    
</head>

<body onkeydown="esc(event)">
<div class="main">
<div class="loader"></div>
<div class="topnav">
	<div class="center">
  <a class="active"  href="/"><img class ="home" src="logo.png"></a>
  <a href="actu">Actu</a>
  <a href="configs">Configs</a>
  <a href="tests">Tests</a>
  <a href="comparaisons">comparaisons</a>
  <a href="tutos">Tutos</a>
  <a href="#" id ="loupe" onclick="openNav()"><img class="loupe"  src="loupe.png"></a>
  </div>

</div><div id="contact" class="dropdown">
  <button class="dropbtn">Nous contacter ▼</button>
  <div class="dropdown-content">
    <a target="_blank" href="https://www.instagram.com/pc_actu/">Instagram <img class="reseaux" src="insta.png"></a>
    <a target="_blank" href="https://twitter.com/pc_actu">Twitter <img class="reseaux" src="twitter.png"></a>
    <a  href="Mailto:contact@pc-actu.fr">Mail</a> <img class="reseaux" src="contact.png"></a>
  </div>
</div>

<div class="main"><!-- The overlay -->
<div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <p href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</p>

  <!-- Overlay content -->
  <div class="overlay-content">
  	<h1>Tous nos articles:</h1>
  	<input type="text" id="myInput" onkeyup="search()" placeholder="Rechercher des articles...">
<ul id="myUL">
  <li  onClick="location.href='configs#700'" ><a class="article" href="#">Config: 700€</a> <p><img src="700.jpg"></p></li>
  <li  onClick="location.href='configs#800'" ><a class="article" href="#">Config: 800€</a> <p><img src="800.jpg"></p></li>
  <li  onClick="location.href='configs#900'" ><a class="article" href="#">Config: 900€</a> <p><img src="900.jpg"></p></li>
  <li  onClick="location.href='configs#1000'" ><a class="article" href="#">Config: 1000€</a> <p><img src="1000.jpg"></p></li>
  <li  onClick="location.href='configs#1250'" ><a class="article" href="#">Config: 1250€</a> <p><img src="1250.jpg"></p></li>
  <li  onClick="location.href='configs#1500'" ><a class="article" href="#">Config: 1500€</a> <p><img src="1500.jpg"></p></li>
  <li  onClick="location.href='configs#1750'" ><a class="article" href="#">Config: 1750€</a> <p><img src="1750.jpg"></p></li>
  <li  onClick="location.href='configs#2000'" ><a class="article" href="#">Config: 2000€</a> <p><img src="2000.jpg"></p></li>
  <li  onClick="location.href='configs#2500'" ><a class="article" href="#">Config: 2500€</a> <p><img src="2500.jpg"></p></li>
  <li  onClick="location.href='configs#3000'" ><a class="article" href="#">Config: 3000€</a> <p><img src="3000.jpg"></p></li>
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

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT titre, mini_texte, date_post FROM articles ORDER BY id DESC LIMIT 0, 10');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
  echo '<li ><a class="article" href="tutos#'.$donnees['titre'] . '">' . htmlspecialchars($donnees['titre'])  . '</a><p id="mini_texte">' . $donnees['mini_texte'] . '</p></li>';
}

$reponse->closeCursor();

?>
 </ul>

<div id ="article">
	<img id="pastrouver" src="pastrouver.jpg">
	<p >aucun article disponible</p>
</div>

  </div></div>
  <h1>nos derniers articles:</h1>


	</div>
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

// Récupération des 10 derniers messages
$reponse1 = $bdd->query('SELECT titre, texte, date_post FROM articles ORDER BY id DESC LIMIT 0, 10');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees1 = $reponse1->fetch())
{
  echo '<p><strong>' . htmlspecialchars($donnees1['titre']) . ' (publié le ' . $donnees1['date_post'] . ')' . ':</br></strong>' . $donnees1['texte'] . '</p>';
}

$reponse1->closeCursor();

?><div>
    <div id="footer">
      <p>copyright Thomas KICHELM Enzo GUERRERO</p>
    </div>
</body>
</html>