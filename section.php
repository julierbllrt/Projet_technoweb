
	<form id="searchfield" method="post" action="main.php">

		<input id="barrederecherche" name="recherche"  role="textbox"   type="text" ></input>
		<input  id="bouton_recherche" type="submit" value="Recherche" />

	</form>

	<form  id="form" method="POST" action="./php/traitement_id.php">
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
					<td><input type="text" name="password" size="15"/></td>
				</tr>
			</tbody>
		</table>
		<p></p>
		<input class="button" type="submit"/> 				
	</form>

