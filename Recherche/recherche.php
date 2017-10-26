<!DOCTYPE html>

<html>
	<head>
	
		<?php include('../head.php'); ?> 
		
	</head>
	<body>
	
		<style>
			<?php include('../css/main.css'); ?> 
		</style>
	
		<?php include('../header.php'); ?> 
		
		
		<section id ="page">

				<?php include('../section.php'); ?> 
		
			<div class="searchfield">
							
				<form method="post" action="testBenoit.php">

					<input id="barrederecherche" name="recherche"  role="textbox"   type="text" ></input>
					<input  id="bouton_recherche" type="submit" value="Valider" />
				
				
				</form>
				
			</div>
			
			
		</section>
		
		<?php include('../footer.php'); ?> 
		

	</body>

	

</html>



