<!DOCTYPE html>
<?php session_start (); 

$_currentAction = 0 ;
$_currentPage = 'carrousel';

/////////////////////////////////////////////
if(!empty($_GET['action_result'])){
	$_currentAction = $_GET['action_result'] ;
	$_currentPage = 'result' ;
}
if(!empty($_GET['action_detail'])){
	$_currentAction = $_GET['action_detail'] ;
	$_currentPage = 'produit' ;
}
if(!empty($_GET['action_produit'])){
	$_currentAction = $_GET['action_produit'] ;
	$_currentPage = 'resultatproduit' ;
}
if(!empty($_GET['action_login'])){
	include('./php/traitement_id.php'); 
}
if(!empty($_GET['action_getinscription'])){
	$_errorInscription =false;
	$_currentPage = 'inscription'; 
}
if(!empty($_GET['action_inscription'])){
	include('./php/inscription.php'); 
}
if(!empty($_GET['action_contact'])){
	$_currentPage = 'contact'; 
}
if(!empty($_GET['action_search'])){
	$_currentPage = 'search'; 
}
if(!empty($_GET['action_getconnexion'])){
	$_currentPage = 'connexion'; 
}


//////////////////////////////////////////////

?>
<html >

	<head>
		<?php include('head.php'); ?>
		<style>
				<?php include('css/main.css');?>
		</style>		
	</head>
	<body>
	
		<?php include('header.php'); ?>
		
		<section id = "page">
			<?php include($_currentPage .'.php'); ?>
		</section>
		
		<?php include('footer.php'); ?>
	</body>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="js/index.js"/></script>
	<script src="js/panier.js"/></script>
	

</html>