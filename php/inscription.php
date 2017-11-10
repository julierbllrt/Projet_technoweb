<!DOCTYPE html>
<html>
    <body>
        <h2>Inscription</h2>
        
		<?php
		//var_dump($_POST);
			$pseudo = $_POST['pseudo'];
			$psw = $_POST['password'];
			$confirmation = $_POST['confirmation'];
			
			session_start();
			//Connect
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=magasinmontre;charset=utf8', 'root', '');
				$reponse = $bdd->query('SELECT * FROM magasinmontre.identification');
			}
			catch (Exception $e)
			{
					die('Erreur : ' . $e->getMessage());
			}
			
			//Treatment
			if ($psw == $confirmation && strlen($psw)>5){
				$req = $bdd->prepare('INSERT INTO identification(pseudo,password) VALUES(:pseudo,:psw)');
				$req->execute(array(
				'pseudo' => $pseudo,
				'psw' => $psw));
				$_SESSION['errorInscription']=False;
				header('Location: ../merci.php');
				exit();
			}
			else{
				$_SESSION['errorInscription']=True;
				header('Location: ../inscription.php');
				exit();
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
			
		?>
		
		
		<a href="./commun.html">back</a>
    </body>
</html>