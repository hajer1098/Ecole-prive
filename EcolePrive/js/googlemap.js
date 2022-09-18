function loadMap() {
	var sousse= {lat:35.825603, lng:10.608395};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 4,
      center:sousse
    });
}