<!DOCTYPE html>
<?php session_start (); ?>
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
			<?php include('section.php'); ?>	
			<?php include('carrousel.php');?>
			<?php include('result.php');?>
			
		</section>
		
		<?php include('footer.php'); ?>
	</body>

</html>