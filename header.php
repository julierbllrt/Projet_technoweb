
<header id="header">
	<div class="element_header">
		<a href="produit.php" class="redirect1 bouton"> Produit</a>
		<?php ?>
	</div>
	<div class="element_header">
		<a href="main.php"><img class="logo" src="img/Logo.png"/></a>
	</div>
	<div class="element_header">
		<button   class ="bouton" onclick=showRecherche()><img  id="search" src="img/search.png"> </button>
		<?php
			
			if (isset($_SESSION['pseudo'])) {
				echo '<p>Bonjour '.$_SESSION['pseudo'].'<br />' ;
				echo '<a href="./php/logout.php">Déconnexion</a>';
			}
			else{
				echo '<button class ="bouton"   onclick=showConnexion() class="connexion">Connexion </button>';
				//echo '<button class ="bouton"   onclick=showConnexion() class="connexion">S\'inscrire </button>';
			}
		?>
		<div class="dropdown">
			<div id="cart" >
				<p class="bouton">Panier</p>
			</div>
			<ul id="cart-dropdown" hidden>
					<!--<li id="empty-cart-msg"><a>Panier vide</a></li>  -->
					<li class="go-to-cart hidden"><a href="panierFinal.php">Voir le panier</a></li>    <!-- lien vers le panier -->
			</ul>
			
		</div>
	</div>
</header>

