<!DOCTYPE html>
<?php session_start (); 

$_currentAction = 0 ;
$_currentPage = 'carrousel';

/////////////////////////////////////////////
if(!empty($_GET['action_result'])){
	$_currentAction = $_GET['action_result'] ;
	$_currentPage = 'result' ;
	
	/////La page sera result
}
if(!empty($_GET['action_detail'])){
	$_currentAction = $_GET['action_detail'] ;
	$_currentPage = 'produit' ;
}
if(!empty($_GET['action_login'])){
	include('./php/traitement_id.php'); 
}
/////////////////////////////////////////////:

?>
<html >

	<head>
		<?php include('head.php'); ?>
		<style>
				<?php include('css/main.css');
				include('carrousel.php');
				include('section.php');
				?>
		</style>
	</head>
	<body>
		
	
		<?php include('header.php'); ?>
		
		
		<section id = "page">
			<?php include($_currentPage .'.php'); 
			include('section.php'); ?>
		</section>
		
		<?php include('footer.php'); ?>
	</body>

</html>