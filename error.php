<!DOCTYPE html>

			  
<html>
	<head>
		<title>Error</title>
		<?php include('head.php'); ?>	
	<head>
	
	<body>
	
		<style>
			<?php include('css/main.css'); ?>
			<?php include('css/error.css'); ?>
		</style>
	
		<?php include('header.php'); ?>
		
		<section id = "page">
			<?php include('section.php'); ?>

			<form>
				<table>
					<tbody>
						<thead>
							<td colspan="2"><p> Votre nom d'utilisateur ou mot de passe est incorrect.</p></td>
						</thead>
						<tr>
							<td><a href="./main.php" class="button">Retour</a></td>
							<td><a href="./inscription.php" class="button">S'inscrire</a></td>
						</tr>
					</tbody>
				</table>
			</form>
			
		</section>
		
		<?php include('footer.php'); ?>
		
	</body>
</html>