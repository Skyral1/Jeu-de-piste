// Initialisation de la carte Google Maps
function initMap() {
	var map = new google.maps.Map(document.getElementById("map"), {
		zoom: 13,
	});

	// Demander la permission à l'utilisateur
	navigator.geolocation.getCurrentPosition(function (position) {
		// Centrer la carte sur la position actuelle de l'utilisateur
		var pos = {
			lat: position.coords.latitude,
			lng: position.coords.longitude,
		};
		map.setCenter(pos);

		// Ajouter un marqueur pour la position actuelle de l'utilisateur
		var marker = new google.maps.Marker({
			position: pos,
			map: map,
		});

		// Se connecter au serveur WebSocket
		var socket = new WebSocket("ws://exemple.com/position");

		socket.onopen = function () {
			// Envoyer la position de l'utilisateur au serveur
			socket.send(
				JSON.stringify({
					latitude: pos.lat,
					longitude: pos.lng,
				})
			);
		};

		socket.onmessage = function (event) {
			// Mettre à jour la position du marqueur sur la carte
			var data = JSON.parse(event.data);
			var latLng = new google.maps.LatLng(data.latitude, data.longitude);
			marker.setPosition(latLng);
			map.setCenter(latLng);
		};

		socket.onclose = function () {
			// La connexion WebSocket a été fermée
			alert("La connexion WebSocket a été fermée.");
		};
	});
}
