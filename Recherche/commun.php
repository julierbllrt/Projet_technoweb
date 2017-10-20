<<<<<<< HEAD:commun.html

<html>
	<head>
		<meta charset="UTF-8">
		<link href="css/commun.css" rel="stylesheet" type="text/css"/>
		<script src="js/index.js"/></script>
		<script src="panier.js"/></script>
	</head>
	
	<body>
	
		<header id="header">
			<div class="element_header">
				<a href="produit.html" class="redirect1 bouton"> Produit</a>
				<a href="#" class="redirect2 bouton"> Lien 2</a>			<!-- lien des pages à compléter-->
				<a href="#" class="redirect3 bouton"> Lien 3</a>		
			</div>
			<div class="element_header">
				<img class="logo" src="img/Logo.png"/>
			</div>
			<div class="element_header">
				<button   onclick=showRecherche()><img  id="search" src="img/search.png"> </button>
				<button   onclick=showConnexion() class="connexion">Connexion </button>
				<div class="dropdown">
					<div id="cart">
					<p><span id="in-cart-items-num">0</span> Article(s)</p>
					</div>
						<ul id="cart-dropdown" hidden>
						<li id="empty-cart-msg"><a>Panier vide</a></li>
						<li class="go-to-cart hidden"><a href="panier.html">Voir le panier</a></li>    <!-- lien vers le panier -->
						</ul>
				</div>
			</div>
			
		</header>
		
		<section id="page">
			<div id="searchfield">
				<input id="barrederecherche"     type="search"></input>
				
				<a id = "bouton_recherche"   name="recherche" href="produit.html">Recherche</a>
			</div>
			
			<!--CONTENU DE LA PAGE ICI-->
			
			<form  id="form" method="POST" action="./php/traitement_id.php">
				<img class="picture" src='https://image.ibb.co/hSPLZQ/Login_picture.png' />
				<p class="id">Veuillez vous identifier</p>
				<table>
					<tbody>
						<tr>
							<td>Pseudo :</td>
							<td><input type="text" name="pseudo" size="15"/></td>
						</tr>
						<tr>
							<td>Password :</td>
							<td><input type="password" name="password" size="15"/></td>
						</tr>
					</tbody>
				</table>
				<p></p>
				<input class="button" type="submit"/> 				
			</form>
			
		</section>
		
		<footer>
			<a href="#"  class="basPage" >Contact</a>
		</footer>
		
	</body>
=======
<<<<<<< HEAD:commun.php
<!DOCTYPE html>
<!--RAMANAH Maxime et RENAULT Victorien-->
<html>
	<head>
		<link href="css/commun.css" rel="stylesheet" type="text/css"/>
		<script src="js/index.js"/></script>
	</head>
	
	<body>
	
		<header id="header">
			<div class="element_header">
				<a href="produit.html" class="redirect1 bouton"> Produit</a>
				<a href="#" class="redirect2 bouton"> Lien 2</a>			<!-- lien des pages à compléter-->
				<a href="#" class="redirect3 bouton"> Lien 3</a>		
			</div>
			<div class="element_header">
				<img class="logo" src="img/Logo.png"/>
			</div>
			<div class="element_header">
				<button   onclick=showRecherche()><img  id="search" src="img/search.png"> </button>
				<button   onclick=showConnexion() class="connexion">Connexion </button>
			</div>
		</header>
		
		<section id="page">
			<div id="searchfield">
				<form method="post" action="resultat.php">
				<p>
					<input id="barrederecherche" name="recherche"  role="textbox"   type="text" ></input>
					<input type="submit" value="Valider" />
				
				</p>
				</form>
			</div>
			
			<!--CONTENU DE LA PAGE ICI-->
			
			<form  id="form" method="POST" action="./php/traitement_id.php">
				<img class="picture" src='https://image.ibb.co/hSPLZQ/Login_picture.png' />
				<p class="id">Veuillez vous identifier</p>
				<table>
					<tbody>
						<tr>
							<td>Pseudo :</td>
							<td><input type="text" name="pseudo" size="15"/></td>
						</tr>
						<tr>
							<td>Password :</td>
							<td><input type="password" name="password" size="15"/></td>
						</tr>
					</tbody>
				</table>
				<p></p>
				<input class="button" type="submit"/> 				
			</form>
			
		</section>
		
		<footer>
			<a href="#"  class="basPage" >Contact</a>
		</footer>
		
	</body>
=======
<!DOCTYPE html>
<!--RAMANAH Maxime et RENAULT Victorien-->
<html>
	<head>
		<meta charset="UTF-8">
		<link href="css/commun.css" rel="stylesheet" type="text/css"/>
		<script src="js/index.js"/></script>
		<script src="panier.js"/></script>
	</head>
	
	<body>
	
		<header id="header">
			<div class="element_header">
				<a href="produit.html" class="redirect1 bouton"> Produit</a>
				<a href="#" class="redirect2 bouton"> Lien 2</a>			<!-- lien des pages à compléter-->
				<a href="#" class="redirect3 bouton"> Lien 3</a>		
			</div>
			<div class="element_header">
				<img class="logo" src="img/Logo.png"/>
			</div>
			<div class="element_header">
				<button   onclick=showRecherche()><img  id="search" src="img/search.png"> </button>
				<button   onclick=showConnexion() class="connexion">Connexion </button>
				<div class="dropdown">
					<div id="cart">
					<p><span id="in-cart-items-num">0</span> Article(s)</p>
					</div>
						<ul id="cart-dropdown" hidden>
						<li id="empty-cart-msg"><a>Panier vide</a></li>
						<li class="go-to-cart hidden"><a href="panier.html">Voir le panier</a></li>    <!-- lien vers le panier -->
						</ul>
				</div>
			</div>
			
		</header>
		
		<section id="page">
			<div id="searchfield">
				<input id="barrederecherche"     type="search"></input>
				
				<a id = "bouton_recherche"   name="recherche" href="produit.html">Recherche</a>
			</div>
			
			<!--CONTENU DE LA PAGE ICI-->
			
			<form  id="form" method="POST" action="./php/traitement_id.php">
				<img class="picture" src='https://image.ibb.co/hSPLZQ/Login_picture.png' />
				<p class="id">Veuillez vous identifier</p>
				<table>
					<tbody>
						<tr>
							<td>Pseudo :</td>
							<td><input type="text" name="pseudo" size="15"/></td>
						</tr>
						<tr>
							<td>Password :</td>
							<td><input type="password" name="password" size="15"/></td>
						</tr>
					</tbody>
				</table>
				<p></p>
				<input class="button" type="submit"/> 				
			</form>
			
		</section>
		
		<footer>
			<a href="#"  class="basPage" >Contact</a>
		</footer>
		
	</body>
>>>>>>> 5272b05b6e86a256da0f599518e7c26a065f8442:commun.html
>>>>>>> 97d34134657ed84f5c945dedb8e3f463108e83a5:Recherche/commun.php
</html>