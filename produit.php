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
		
		<section id ="page_produit">
		
			<?php include('section.php'); 
			
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
			
			<?php 
					if ($_GET['montreId']==$donnees['ProduitID']){?>

						<div class="element">
							<img id="photo" src= "img/<?php  echo $donnees['Image']; ?> " >
						</div>
					
						<div id="des" class="element">
							<p id="Nom_Produit">Nom du produit : <?php echo $donnees['ProduitNom'] ; ?> 
							</br>Marque: <?php echo $donnees['Marque'] ; ?> </br>
							Prix:<?php echo $donnees['Prix'] ; ?> </br>
							<?php echo $donnees['Description'] ; ?></p>	
							<a href="panierFinal.php?action=ajout&amp;l=<?php echo $donnees['Marque'];?>&amp;q=1&amp; p=<?php echo $donnees['Prix'];?>;"  onclick="window.open(this.href, '', 'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Ajouter au panier</a>
						</div>
			<?php
					}
				}
			$reponse->closeCursor();
			?>

		</section>

		<?php include('footer.php'); ?>
	</body>

</html>