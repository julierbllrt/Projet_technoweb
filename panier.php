<!DOCTYPE html>
<!--RAMANAH Maxime et RENAULT Victorien-->
<html>
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
		</section>
	
		<table class="table">
			<thead>
				<tr><th>Article</th><th>Prix</th><th>Quantité</th></tr>
			</thead>
			<tbody id="cart-tablebody">
			</tbody>
		</table>
		<p>Sous total : <span class="subtotal"></span>€</p>
		<button id="confirm-command">Passer la commande</button>

		
		<?php include('footer.php'); ?>
	</body>
	
</html>