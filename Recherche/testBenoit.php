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
$reponse = $bdd->prepare('SELECT * FROM produit WHERE marque= like :marque OR produit= like :produit OR nom like :nom ');
//crée l executable de la preparation fait avant car $_POST ne peut pas directement s'inserer
$reponse->execute(array('marque'=> '%' . $_POST['recherche'] . '%', 'produit'=> '%' . $_POST['recherche'] . '%', 'nom'=> '%' . $_POST['recherche'] . '%'));

while ($donnees = $reponse->fetch()){
?>

 <p>

	La recherche que vous avez fait correpond a <?php echo $donnees['marque']; ?> et s <?php echo $donnees['prix']; ?>

</p>
<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
	
?>

