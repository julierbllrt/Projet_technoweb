
		
<section id ="page">
	<div id="searchfield">
		<input id="barrederecherche"     type="search"></input>
		
		<a id = "bouton_recherche"   name="recherche" href="produit.html">Recherche</a>
	</div>


	<div id="carrousel">
		<div class="controls">
			<ul>
				<li><img src="img/dior.jpg" /></li>
				<li><img src="img/omega.jpg" /></li>
			</ul>
			<span class="prev">Precedent</span> 
			<span class="next">Suivant</span> 
		</div>	
	</div>


		
	<!--CONTENU DE LA PAGE ICI-->

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

</section>