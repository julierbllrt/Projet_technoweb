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
//////////////////////////////////////////////

?>
<html >

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
			<?php include($_currentPage .'.php'); 
			include('section.php'); ?>
		</section>
		
		<?php include('footer.php'); ?>
	</body>

</html>