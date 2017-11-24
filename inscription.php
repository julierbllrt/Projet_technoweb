<!DOCTYPE html>



<html>
	<?php session_start();
	if (isset$_SESSION['errorInscription']){
	}
	else{
		$_SESSION['errorInscription'] = false;
	}	?>
	<head>
		<title>Inscription</title>
		<?php include('head.php'); ?>
	</head>
	
	
	<body>
		<style>
			<?php include('css/main.css'); ?>
			<?php include('css/inscription.css'); ?>
		</style>
	
		<?php include('header.php'); ?>
		
		<section id="page">
			<?php include('section.php'); ?>
			
			<form  id="forminscription" method="POST" action="./php/inscription.php">
				<p class="id">Inscription</p>
				<table>
					<tbody>
						<tr>
							<td>Choisissez votre Pseudo : </td>
						</tr>
						<tr>
							<td><input type="text" name="pseudo" size="40"/></td>
						</tr>
						<?php
								if($_SESSION['errorInscription']){
									echo '<tr id="error">';
									echo '<td>Mot de passe incorrect</td>' ;
									$_SESSION['errorInscription'] = False;
									echo '</tr>';
					       		}
							?>
						<tr>
							<td>Choisissez votre Password :</td>
						</tr>
						<tr>
							<td>(6 characteres minimum)</td>
						</tr>
						<tr>
							<td><input type="password" name="password" size="40"/></td>
						</tr>
						<tr>
							<td>Confirmez votre Password :</td>
						</tr>
						<tr>
							<td><input type="password" name="confirmation" size="40"/></td>
						</tr>
					</tbody>
				</table>
				<p></p>
				<input class="button" type="submit"/> 				
			</form>
		</section>


		
		<?php include('footer.php'); ?>
		
	</body>
</html>
	
