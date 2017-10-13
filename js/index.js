function showRecherche() {
	var x = document.getElementById("searchfield");
	var y = document.getElementById("form");
	if (x.style.display === "none") {
		x.style.display = "flex";
		y.style.display = "none";
	} else {
		x.style.display = "none";
	}
}

function showConnexion() {
	var x = document.getElementById("searchfield");
	var y = document.getElementById("form");
       if (y.style.display === "none") {
		y.style.display = "block";
		x.style.display = "none";
	} else {
		y.style.display = "none";
	}
}