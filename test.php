<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
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
    <a href="Mailto:contact@pc-actu.fr">Mail</a>
  </div>
</div>
	<div class="main">
		<div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <p href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</p>

  <!-- Overlay content -->
  <div class="overlay-content">
  	<h1>Tous nos articles:</h1>
  	<input type="text" id="myInput" onkeyup="search()" placeholder="Rechercher des articles...">
<ul id="myUL">
  <li  onClick="location.href='configs.html#700'" ><a class="article" href="#">Config: 700€</a> <p><img src="700.jpg"></p></li>
  <li  onClick="location.href='configs.html#800'" ><a class="article" href="#">Config: 800€</a> <p><img src="800.jpg"></p></li>
  <li  onClick="location.href='configs.html#900'" ><a class="article" href="#">Config: 900€</a> <p><img src="900.jpg"></p></li>
  <li  onClick="location.href='configs.html#1000'" ><a class="article" href="#">Config: 1000€</a> <p><img src="1000.jpg"></p></li>
  <li  onClick="location.href='configs.html#1250'" ><a class="article" href="#">Config: 1250€</a> <p><img src="1250.jpg"></p></li>
  <li  onClick="location.href='configs.html#1500'" ><a class="article" href="#">Config: 1500€</a> <p><img src="1500.jpg"></p></li>
  <li  onClick="location.href='configs.html#1750'" ><a class="article" href="#">Config: 1750€</a> <p><img src="1750.jpg"></p></li>
  <li  onClick="location.href='configs.html#2000'" ><a class="article" href="#">Config: 2000€</a> <p><img src="2000.jpg"></p></li>
  <li  onClick="location.href='configs.html#2500'" ><a class="article" href="#">Config: 2500€</a> <p><img src="2500.jpg"></p></li>
  <li  onClick="location.href='configs.html#3000'" ><a class="article" href="#">Config: 3000€</a> <p><img src="3000.jpg"></p></li>
 </ul>

<div id ="article">
	<img id="pastrouver" src="pastrouver.jpg">
	<p >aucun article disponible</p>
</div>

  </div></div>
<h1>Bienvenue sur notre page tutos</h1>
</div>	
</body>
</html>