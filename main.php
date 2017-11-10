<!DOCTYPE html>
<?php session_start (); 

$_currentAction = 'section' ;
var_dump( $_GET);
if(!empty($_GET['action_result'])){
	$_currentAction = $_GET['action_result'] ;
}
echo $_currentAction;
?>
<html >

	<head>
		<?php include('head.php'); ?>
	</head>
	<body>
		<style>
			<?php include('css/main.css'); ?>
		</style>
	
		<?php include('header.php'); ?>
		
		
		<section id = "page">
			<?php include($_currentAction .'.php'); ?>	
			<?php include('carrousel.php');?>
			<?php include('result.php');?>
			
		</section>
		
		<?php include('footer.php'); ?>
	</body>

</html>