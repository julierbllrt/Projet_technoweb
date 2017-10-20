<!DOCTYPE html>

<?php

echo "Celle-ci a été écrite entièrement en PHP.";

try{
	// Sous WAMP (Windows)

$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');

}
catch(Exeption $e)
	{
		die('Erreur :' . $e->getMessage());
	}
// regarde si le client recherche la marque,le produit ou le nom
$reponse = $bdd->prepare('SELECT * FROM stock WHERE Marque=:Marque OR Produit=  :Produit OR ProduitNom= :ProduitNom ');
//crée l executable de la preparation fait avant car $_POST ne peut pas directement s'inserer
$reponse->execute(array('Marque'=>$_POST['recherche'] , 'Produit'=>  $_POST['recherche'] ,'ProduitNom'=> $_POST['recherche'] ));

while ($donnees = $reponse->fetch()){
?>

 <p>

	La recherche que vous avez fait correpond a <?php echo $donnees['Marque']; ?> et s <?php echo $donnees['Prix']; ?>

</p>
<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
	
?>