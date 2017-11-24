
	<form id="searchfield" method="post" action="main.php?action_result=result">

		<input id="barrederecherche" name="recherche"  role="textbox"   type="text" ></input>
		<input  id="bouton_recherche" type="submit" value="Recherche" />

	</form>

	<form  id="form" method="POST" action="main.php?action_login=login">
		<input type="hidden" name="action" value="/php/traitement_id" ?>
		<img class="picture" src='https://image.ibb.co/hSPLZQ/Login_picture.png' />
		<p class="id">Veuillez vous identifier</p>
		<table>
			<tbody>
				<tr>
					<td>Pseudo :</td>
					<td><input type="text" name="pseudo" size="15"/></td>
				</tr>
				<tr>
					<td>Password :</td>
					<td><input type="password" name="password" size="15"/></td>
				</tr>
			</tbody>
		</table>
		<p></p>
		<input class="button" type="submit"/> 				
	</form>

	


