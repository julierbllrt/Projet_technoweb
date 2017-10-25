
	
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

