
<?php
	// Victorien Renault et Maxime Ramanah 
	session_start();
	include_once("fonctions-panier.php");

	$erreur = false;

	$action = (isset($_POST['action'])? $_POST['action']:  (isset($_GET['action'])? $_GET['action']:null )) ;
	if($action !== null){
		if(!in_array($action,array('ajout', 'suppression', 'refresh')))
		$erreur=true;

		//récuperation des variables en POST ou GET
		$l = (isset($_POST['l'])? $_POST['l']:  (isset($_GET['l'])? $_GET['l']:null )) ;
		$m = (isset($_POST['m'])? $_POST['m']:  (isset($_GET['m'])? $_GET['m']:null )) ;
		$p = (isset($_POST['p'])? $_POST['p']:  (isset($_GET['p'])? $_GET['p']:null )) ;
		$q = (isset($_POST['q'])? $_POST['q']:  (isset($_GET['q'])? $_GET['q']:null )) ;

		//Suppression des espaces verticaux
		$l = preg_replace('#\v#', '',$l);
		$m = preg_replace('#\v#', '',$m);
   
		//On verifie que $p soit un float
		$p = floatval($p);

		//On traite $q qui peut etre un entier simple ou un tableau d'entier
    
		if (is_array($q)){
			$QteArticle = array();
			$i=0;
			foreach ($q as $contenu){
				$QteArticle[$i++] = intval($contenu);
			}
		}
		else{
			$q = intval($q);
		}
	}

	if (!$erreur){
		switch($action){
			Case "ajout":
				ajouterArticle($l,$m,$q,$p);
				break;

			Case "suppression":
				supprimerArticle($l);
				break;

			Case "refresh" :
				for ($i = 0 ; $i < count($QteArticle) ; $i++){
					modifierQTeArticle($_SESSION['magasinmontre']['ProduitID'][$i],round($QteArticle[$i]));
				}
				break;

			Default:
				break;
		}
	}

echo '<? encoding="utf-8"?>';?>

<html>
	

	<head>
		<?php include('head.php'); ?>
		<style>
				<?php include('css/main.css');?>
		</style>
		
		<?phpinclude('carrousel.php');
				include('section.php'); ?>
		
	</head>
	<body>
	
		<?php include('header.php'); ?>
		
		<section id = "page">
			<form  method="post" action="panierFinal.php">
			<table id="table_panier" >
				<tr>
					<td>Votre panier</td>
				</tr>
				
				<tr>
					<td>ProduitID</td>
					<td>Marque</td>
					<td>Quantité</td>
					<td>Prix</td>
					<td>Action</td>
				</tr>

				<?php
				if (creationPanier()){
						//ajout base de données magasinmontre
						$bdd = new PDO('mysql:host=localhost;dbname=magasinmontre;charset=utf8', 'root', '');
						$reponse = $bdd->query('SELECT * FROM magasinmontre.stock');
					  
						$nbArticles=count($_SESSION['magasinmontre']['ProduitID']);
						if ($nbArticles <= 0){
							echo "<tr><td>Votre panier est vide </ td></tr>";
						}
						else{
						       for ($i=0 ;$i < $nbArticles ; $i++){
								echo "<tr>";
									echo "<td>".htmlspecialchars($_SESSION['magasinmontre']['ProduitID'][$i])."</ td>";
									echo "<td>".htmlspecialchars($_SESSION['magasinmontre']['Marque'][$i])."</ td>";
									echo "<td><input type=\"text\" size=\"4\" name=\"q[]\" value=\"".htmlspecialchars($_SESSION['magasinmontre']['quantite'][$i])."\"/></td>";
									echo "<td>".htmlspecialchars($_SESSION['magasinmontre']['prix'][$i])."</td>";
									echo "<td><a href=\"".htmlspecialchars("panierFinal.php?action=suppression&l=".rawurlencode($_SESSION['magasinmontre']['ProduitID'][$i]))."\">Supprimer</a></td>";
								echo "</tr>";
						      }
							echo "<tr><td></td><td></td><td></td>";
								echo "<td colspan=\"4\">";
								echo "Total : ".MontantGlobal();
							echo "</td><td></td></tr>";

							echo "<tr><td colspan=\"5\">";
								echo "<input type=\"submit\" value=\"Rafraichir\"/>";
								echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";
							echo "</td></tr>";
					   }
				}
				?>

				
			</table>
		</form>
		</section>
		
		<?php include('footer.php'); ?>
	</body>
	

</html>