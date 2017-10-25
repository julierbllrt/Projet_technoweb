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
