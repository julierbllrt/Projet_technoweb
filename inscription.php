
<form  id="forminscription" method="POST" action="index.php?action_inscription=inscription">
	<table>
		<tbody>
			<tr>
				<td class="centre">Inscription</td>
			</tr>
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
			<tr>
				<td><input class="centre" class="bouton" type="submit"/> </td>	
			</tr>
			
		</tbody>
	</table>	
</form>

	
