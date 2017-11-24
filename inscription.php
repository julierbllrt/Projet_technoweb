<style><?php include('css/inscription.css'); ?></style>
<form  id="forminscription" method="POST" action="main.php?action_inscription=inscription">
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
				if($_errorInscription){
					echo '<tr id="error">';
					echo '<td>Mot de passe incorrect</td>' ;
					$_errorInscription  = False;
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

	
