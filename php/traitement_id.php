<!DOCTYPE html>
<html>
    <body>
        <h2>Traitement</h2>
        
                
		<?php
		//var_dump($_POST);
			$pseudo = $_POST['pseudo'];
			$psw = $_POST['password'];
			$isFound = 0; //Show if a match is found in the database
			
			
			//Connect
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=identification;charset=utf8', 'root', '');
				$reponse = $bdd->query('SELECT * FROM identification.identification');
				echo "I'm in";
			}
			catch (Exception $e)
			{
					die('Erreur : ' . $e->getMessage());
			}
			
			//Treatment
			while ($donnees = $reponse->fetch()){
				if ($donnees['pseudo'] == $pseudo && $donnees['password']==$psw){
					$isFound=1;
					break;
				}
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
			
			if ($isFound==1){
				header('Location: ../commun.html');
				exit();
			}
			else{
				echo "NON";
				header('Location: ../error.html');
				exit();
			}
		?>
		
		
		<a href="./identification.html">back</a>
    </body>
</html>