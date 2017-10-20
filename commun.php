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
</html>