function contains(words, answer) {
	if (words.every((item) => answer.includes(item))) {
		return true;
	} else {
		return false;
	}
}

function rep_1() {
	var rep1 = document.getElementById("rep-1").value;
	var valeurInputSansAccents = rep1
		.normalize("NFD")
		.replace(/[\u0300-\u036f]/g, "");
	var rep_1 = valeurInputSansAccents.toLowerCase();
	let words = ["tour", "saint", "martin"];

	if (contains(words, rep_1)) {
		window.location.href = "./resultat/win.php";
	} else {
		window.location.href = "./resultat/loose.html";
	}
}

function rep_2() {
	var rep2 = document.getElementById("rep-2").value;
	var valeurInputSansAccents = rep2
		.normalize("NFD")
		.replace(/[\u0300-\u036f]/g, "");
	var rep_2 = valeurInputSansAccents.toLowerCase();
	let words = ["hotel", "ville"];

	if (contains(words, rep_2)) {
		window.location.href = "./resultat/win.php";
	} else {
		window.location.href = "./resultat/loose.html";
	}
}

function rep_3() {
	var rep3 = document.getElementById("rep-3").value;
	var valeurInputSansAccents = rep3
		.normalize("NFD")
		.replace(/[\u0300-\u036f]/g, "");
	var rep_3 = valeurInputSansAccents.toLowerCase();
	let words = ["rue", "rivoli"];

	if (contains(words, rep_3)) {
		window.location.href = "./resultat/win.php";
	} else {
		window.location.href = "./resultat/loose.html";
	}
}

function rep_4() {
	var rep4 = document.getElementById("rep-4").value;
	var valeurInputSansAccents = rep4
		.normalize("NFD")
		.replace(/[\u0300-\u036f]/g, "");
	var rep_4 = valeurInputSansAccents.toLowerCase();
	let words = ["eglise", "saint", "gervais"];

	if (contains(words, rep_4)) {
		window.location.href = "./resultat/win.php";
	} else {
		window.location.href = "./resultat/loose.html";
	}
}

function rep_5() {
	var rep5 = document.getElementById("rep-5").value;
	var valeurInputSansAccents = rep5
		.normalize("NFD")
		.replace(/[\u0300-\u036f]/g, "");
	var rep_5 = valeurInputSansAccents.toLowerCase();
	let words = ["musee", "carnavalet"];

	if (contains(words, rep_5)) {
		window.location.href = "./resultat/win.php";
	} else {
		window.location.href = "./resultat/loose.html";
	}
}

function rep_6() {
	var rep6 = document.getElementById("rep-6").value;
	var valeurInputSansAccents = rep6
		.normalize("NFD")
		.replace(/[\u0300-\u036f]/g, "");
	var rep_6 = valeurInputSansAccents.toLowerCase();
	let words = ["place", "vosges"];

	if (contains(words, rep_6)) {
		window.location.href = "./resultat/win.php";
	} else {
		window.location.href = "./resultat/loose.html";
	}
}
