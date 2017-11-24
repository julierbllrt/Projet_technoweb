<!DOCTYPE html>

<html >

	<head>
		<?php include('head.php'); ?>
	</head>
	<body>
		<style>
			<?php include('css/main.css'); ?>
			<?php include('css/style_produit.css'); ?>
		</style>
	
		<?php include('header.php'); ?>
		
		<section id ="page">
		
			<?php include('section.php'); 
			
			try{
				// Sous WAMP (Windows)
			$bdd = new PDO('mysql:host=localhost;dbname=magasinmontre;charset=utf8', 'root', '');


			}
			catch(Exeption $e)
				{
					die('Erreur :' . $e->getMessage());
				}
			// regarde si le client recherche la marque,le produit ou le nom
			$reponse = $bdd->query('SELECT * FROM stock');
			//crée l executable de la preparation fait avant car $_POST ne peut pas directement s'inserer
			

			while($donnees = $reponse->fetch()){;
			?>
			

			<div class="element">
				<!-- UTILE NE PAS SUPPRIMER -->
			</div>
			
			
			
			
			
			
			<div class="element">
				
				<?php  if ($_GET['montreId']== $donnees['ProduitID']){?>
				<div class="element">
				</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>	</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
				<img id="photo" src= "img/<?php  echo $donnees['Image']; ?> " >
				<p id="Nom_Produit">Nom du produit : <?php echo $donnees['ProduitNom'] ; ?> 
				de la marque <?php echo $donnees['Marque'] ; ?> au prix de 
				<?php echo $donnees['Prix'] ; ?> 
				</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
			<?php echo $donnees['Description'] ; }}
			$reponse->closeCursor();
			?>		
			
					
			</div>
			
			
			<div class="element">
				<!-- UTILE NE PAS SUPPRIMER -->
			</div>
		

		</section>

		<?php include('footer.php'); ?>
	</body>

</html>