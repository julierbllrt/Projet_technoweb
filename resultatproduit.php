<div class='result'>

	<h1>
		Toutes nos montres :
	</h1>


			<?php  
			
				try{
					// Sous WAMP (Windows)
					$bdd = new PDO('mysql:host=localhost;dbname=magasinmontre;charset=utf8', 'root', '');
				}
				catch(Exeption $e){
					die('Erreur :' . $e->getMessage());
				}
				// regarde si le client recherche la marque,le produit ou le nom
				$reponse = $bdd->query('SELECT * FROM stock');
				//crée l executable de la preparation fait avant car $_POST ne peut pas directement s'inserer
			
				while($donnees = $reponse->fetch()){;
			?>
		<a  class="lien_produit" href="main.php?action_detail=detail&montreId=<?php echo $donnees['ProduitID'];?>">
			<button>
				<div id='test'> 
					<p>Nom du produit : <?php echo $donnees['ProduitNom'];?></p>
					<p>La marque du produit :  <?php echo $donnees['Marque']; ?>  prix:  <?php echo $donnees['Prix'] ; ?> € </p>
					<img id='photo' src= "img/<?php  echo $donnees['Image']; ?> " />
					
				</div>
			</button>
		</a>
		<?php
		}
		$reponse->closeCursor(); // Termine le traitement de la requête
			
	?>
</div>