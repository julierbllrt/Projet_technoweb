                
		<?php
		//var_dump($_POST);
			$pseudo = $_POST['pseudo'];
			$psw = $_POST['password'];
			$isFound = 0; //Show if a match is found in the database
			
			
			//Connect
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=magasinmontre;charset=utf8', 'root', '');
				$reponse = $bdd->query('SELECT * FROM magasinmontre.identification');
				//echo "I'm in";
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
				//session_start ();
				// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
				$_SESSION['pseudo'] = $_POST['pseudo'];
				$_SESSION['password'] = $_POST['password'];
				$_currentPage = 'carrousel' ;
				//header('Location: ../main.php');
				//exit();
			}
			else{
				//echo "NON";
				$errorInscription=true;
				$_currentPage = 'error' ;
				?>
				<?php
				//<form method="post" action="main.php?action_error=error">
				//</form>
				//#header('Location: ../error.php');
				//exit();
			}
		?>
		
