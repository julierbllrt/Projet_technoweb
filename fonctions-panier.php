<?php
	// Victorien Renault et Maxime Ramanah 

/**
 * Verifie si le panier existe, le créé sinon
 */
	function creationPanier(){
		if (!isset($_SESSION['magasinmontre'])){
			$_SESSION['magasinmontre']=array();
			$_SESSION['magasinmontre']['ProduitID'] = array();
			$_SESSION['magasinmontre']['Marque'] = array();
		      $_SESSION['magasinmontre']['quantite'] = array();
		      $_SESSION['magasinmontre']['prix'] = array();
		      $_SESSION['magasinmontre']['id commande'] = false;
		}
		return true;
	}


/**
 * Ajoute un article dans le panier
 * @param string $ProduitID
 * @param string $Marque
 * @param int $quantite
 * @param float $prix
 * @return void
 */
	function ajouterArticle($ProduitID,$Marque,$quantite,$prix){

	//Si le panier existe
	if (creationPanier() && !isVerrouille()){
		
		//Si le produit existe déjà on ajoute seulement la quantité
		$positionProduit = array_search($ProduitID,  $_SESSION['magasinmontre']['ProduitID']);

		if ($positionProduit !== false){
			$_SESSION['magasinmontre']['quantite'][$positionProduit] += $quantite ;
		}
		else{
			//Sinon on ajoute le produit
			array_push( $_SESSION['magasinmontre']['ProduitID'],$ProduitID);
			array_push( $_SESSION['magasinmontre']['Marque'],$Marque);
			array_push( $_SESSION['magasinmontre']['quantite'],$quantite);
			array_push( $_SESSION['magasinmontre']['prix'],$prix);
		}
	}
	else{
		echo "Un problème est survenu veuillez contacter l'administrateur du site.";
	}
  
}

/**
 * Modifie la quantité d'un article
 * @param $ProduitID
 * @param $quantite
 * @return void
 */
	function modifierQTeArticle($ProduitID,$quantite){
		//Si le panier éxiste
		if (creationPanier() && !isVerrouille()){
			//Si la quantité est positive on modifie sinon on supprime l'article
			if ($quantite > 0){
				//Recharche du produit dans le panier
				$positionProduit = array_search($ProduitID,  $_SESSION['magasinmontre']['ProduitID']);

				if ($positionProduit !== false){
				$_SESSION['magasinmontre']['quantite'][$positionProduit] = $quantite ;
				}
			}
			else{
				supprimerArticle($ProduitID);
			}
      
		}
		else{
			 echo "Un problème est survenu veuillez nous contacter.";
		}

	}

/**
 * Supprime un article du panier
 * @param $ProduitID
 * @return unknown_type
 */
	function supprimerArticle($ProduitID){
		//Si le panier existe
		if (creationPanier() && !isVerrouille()){
			//Nous allons passer par un panier temporaire
			$tmp=array();
		      $tmp['ProduitID'] = array();
		      $tmp['Marque'] = array();
		      $tmp['quantite'] = array();
		      $tmp['prix'] = array();
		      $tmp['id commande'] = $_SESSION['magasinmontre']['id commande'];

			for($i = 0; $i < count($_SESSION['magasinmontre']['ProduitID']); $i++){
				if ($_SESSION['magasinmontre']['ProduitID'][$i] !== $ProduitID){
					array_push( $tmp['ProduitID'],$_SESSION['magasinmontre']['ProduitID'][$i]);
					array_push( $tmp['Marque'],$_SESSION['magasinmontre']['Marque'][$i]);
					array_push( $tmp['quantite'],$_SESSION['magasinmontre']['quantite'][$i]);
					array_push( $tmp['prix'],$_SESSION['magasinmontre']['prix'][$i]);
				}

			}
			//On remplace le panier en session par notre panier temporaire à jour
			$_SESSION['magasinmontre'] =  $tmp;
			//On efface notre panier temporaire
			unset($tmp);
		}
		else{
			echo "Un problème est survenu veuillez contacter l'administrateur du site.";
		}
   
	}	


/**
 * Montant total du panier
 * @return int
 */
	function MontantGlobal(){
		$total=0;
		for($i = 0; $i < count($_SESSION['magasinmontre']['ProduitID']); $i++){
			$total += $_SESSION['magasinmontre']['quantite'][$i] * $_SESSION['magasinmontre']['prix'][$i];
		}
		return $total;
	}


/**
 * Fonction de suppression du panier
 * @return void
 */
	function supprimePanier(){
		unset($_SESSION['magasinmontre']);
	}

/**
 * Permet de savoir si le panier est verrouillé
 * @return booleen
 */
	function isVerrouille(){
		if (isset($_SESSION['magasinmontre']) && $_SESSION['magasinmontre']['id commande']){
			return true;
		}
		else{
			return false;
		}
	}

/**
 * Compte le nombre d'articles différents dans le panier
 * @return int
 */
	function compterArticles(){
		if (isset($_SESSION['magasinmontre'])){
			return count($_SESSION['magasinmontre']['ProduitID']);
		}	
		else{
			return 0;
		}
	}

?>