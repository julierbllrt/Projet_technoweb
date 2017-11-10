function showRecherche() {
	var x = document.getElementById("searchfield");
	var y = document.getElementById("form");
	var z = document.getElementById("carrousel");
	if (x.style.display === "none") {
		x.style.display = "flex";
		y.style.display = "none";
		z.style.display = "none";
	} else {
		x.style.display = "none";
		z.style.display = "flex";
	}
}

function showConnexion() {
	var x = document.getElementById("searchfield");
	var y = document.getElementById("form");
	var z = document.getElementById("carrousel");
       if (y.style.display === "none") {
		y.style.display = "block";
		x.style.display = "none";
		z.style.display = "none";
	} else {
		y.style.display = "none";
		z.style.display = "flex";
	}
}

$(document).ready(function(){

	document.getElementById("bouton_recherche").onclick = function() { showResult()};

	function  showResult(){
	       document.getElementById("testbenoit").style.display = "block";
	}
	
	
	var $carrousel = $('#carrousel'), // on cible le bloc du carrousel
	$img = $('#carrousel img'), // on cible les images contenues dans le carrousel
	indexImg = $img.length - 1, // on définit l'index du dernier élément
	
	i = 0, // on initialise un compteur
	$currentImg = $img.eq(i); // enfin, on cible l'image courante, qui possède l'index i (0 pour l'instant)
	
	$img.css('display', 'none'); // on cache les images
	$currentImg.css('display', 'flex'); // on affiche seulement l'image courante
	

	$('.next').click(function(){ // image suivante

		i++; // on incrémente le compteur

		if( i <= indexImg ){
			$img.css('display', 'none'); // on cache les images
			$currentImg = $img.eq(i); // on définit la nouvelle image
			$currentImg.css('display', 'flex'); // puis on l'affiche
		}
		else{
			i = indexImg;
		}

	});


	$('.prev').click(function(){ // image précédente

		i--; // on décrémente le compteur, puis on réalise la même chose que pour la fonction "suivante"

		if( i >= 0 ){
			$img.css('display', 'none');
			$currentImg = $img.eq(i);
			$currentImg.css('display', 'block');
		}
		else{
			i = 0;
		}

	});
	
	function slideImg(){
	      setTimeout(function(){ // on utilise une fonction anonyme
							
			if(i < indexImg){ // si le compteur est inférieur au dernier index
				i++; // on l'incrémente
			}
			else{ // sinon, on le remet à 0 (première image)
				i = 0;
			}

			$img.css('display', 'none');

			$currentImg = $img.eq(i);
			$currentImg.css('display', 'block');

			slideImg(); // on oublie pas de relancer la fonction à la fin

		}, 7000); // on définit l'intervalle à 7000 millisecondes (7s)
	}

	slideImg(); // enfin, on lance la fonction une première fois


});





	



