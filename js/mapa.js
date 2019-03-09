function initMap(){	
	var mapalat = -30.85065299999999;
	var mapalng = -51.82454199999995;
	var map = new google.maps.Map(document.getElementById('map'),{
		zoom:18,
		center: new google.maps.LatLng(mapalat,mapalng)
		});
		
		
		var conteudo = '<p style = "text-align:center">Sede Dev O Project</p>';
		var infowindow = new google.maps.InfoWindow({
         	content: conteudo
		  });
		
		var marcador = new google.maps.Marker({
		position: new google.maps.LatLng(mapalat,mapalng),
		map: map,
        });
		
		google.maps.event.addListener(marcador,'click', (function(marcador,conteudo,infowindow) {
			return function(){
			infowindow.setContent(conteudo);	
			infowindow.open(map, marcador);
			};
		})(marcador,conteudo,infowindow));
	}