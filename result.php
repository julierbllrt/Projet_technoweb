	<section id='result'>
	
	<style>
		<?php include('css/resultat.css');
		include (section.php);
		?>
		
	</style>
		<h1>
			Le resultat de vos recherches :
		</h1>
		
		
			<?php
			try{
				// Sous WAMP (Windows)
			$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');


			}
			catch(Exeption $e)
				{
					die('Erreur :' . $e->getMessage());
				}
			// regarde si le client recherche la marque,le produit ou le nom
			$reponse = $bdd->prepare('SELECT * FROM stock WHERE Marque= :marque OR Produit= :produit OR ProduitNom= :nom');
			//crée l executable de la preparation fait avant car $_POST ne peut pas directement s'inserer
			$reponse->execute(array('marque'=> $_POST['recherche'] , 'produit'=> $_POST['recherche'] , 'nom'=> $_POST['recherche'] ));

			while ($donnees = $reponse->fetch()){
			?>
			<div id='test'> 
			<p>Nom du produit : <?php echo $donnees['ProduitNom'];?></p>
			<p>La marque du produit :  <?php echo $donnees['Marque']; ?> au prix de  <?php echo $donnees['Prix'] ; ?> € </p>
			<p></p>
			</div>
			<?php
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
				
			?>
	</section>
	
	
