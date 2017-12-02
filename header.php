
<header id="header">

	<div class="element_header">
		<form   id="boutonproduit" method="post"  action="index.php?action_produit=detail&montreId" > 
			<input class="bouton"  id="bouton_produit" type="submit" value="Produit" />
		</form>
		<?php ?>
	</div>
	
	<div class="element_header">
		<a href="index.php"><img class="logo" src="img/Logo.png"/></a>
	</div>
	
	<div class="element_header">
		<button   id="loupe" onclick=showRecherche()><img  id="search" src="img/search.png"> </button>
		<?php
			
			if (isset($_SESSION['pseudo'])) {
				echo '<p>Bonjour '.$_SESSION['pseudo'].'<br />' ;
				echo '<a href="./php/logout.php">Déconnexion</a>';
			}
			else{
				echo '<button class ="connexion"   onclick=showConnexion() class="connexion">Connexion </button>';
				echo '<form  id="form_inscription" method="POST" action="index.php?action_getinscription=getinscription">
				<input class="connexion" type="submit" value="S\'inscrire"/></form>';
			}
		?>
		<div class="dropdown">
			<div id="cart" >
				<p class="connexion">Panier</p>
			</div>
			<ul id="cart-dropdown" hidden>
					<!--<li id="empty-cart-msg"><a>Panier vide</a></li>  -->
					<li class="go-to-cart hidden"><a href="panierFinal.php">Voir le panier</a></li>    <!-- lien vers le panier -->
			</ul>
			
		</div>
	</div>
	
</header>

