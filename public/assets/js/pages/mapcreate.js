let marker;
        	$(document).on('keyup',function(e){
        		let id = $(e.target).attr("id")
        		if(id == 'longitude' || id == 'latitude'){
		        	initMap();
        		}
        	});

		      // Initialize and add the map
		      function initMap() {
		        // The location of Uluru
		        let uluru;
		        uluru = { lat: -25.344, lng: 131.036 };
		        var latitude =  Number($('#latitude').val(),10);
		        var longitude = Number($('#longitude').val(),10);
		        if(longitude != 0 || !latitude != 0 ){
		        	uluru = { 
		        		lat: latitude,
		        		lng: longitude 
		        	};
		        }
		        // The map, centered at Uluru
		        const map = new google.maps.Map(document.getElementById("map"), {
		          zoom: 4,
		          center: uluru,
		        });
		        map.addListener("click", (e) => {
				    placeMarkerAndPanTo(e.latLng, map);
				  });
		        
		        function placeMarkerAndPanTo(latLng, map) {
			         marker.setMap(null);
					 marker = new google.maps.Marker({
					    position: latLng,
					    zoom: 6,
					    map: map,
						icon:{
			                path: 'M 0,0 C -2,-20 -10,-22 -10,-30 A 10,10 0 1,1 10,-30 C 10,-22 2,-20 0,0 z M -2,-30 a 2,2 0 1,1 4,0 2,2 0 1,1 -4,0',
			                fillColor: $(`#example-color-input`).val(),
			                fillOpacity: 1.0,
			                strokeColor: '#000000',
			                strokeWeight: 1,
			                scale: 1,
			                anchor: new google.maps.Point(12, 24),
			            },
					  });
					  // map.panTo(latLng); 
					  $('#latitude').val(latLng['lat'])
					  $('#longitude').val( latLng['lng'])
					}
		        // The marker, positioned at Uluru
		        marker = new google.maps.Marker({
		          position: uluru,
		          map: map,
		          icon:{
		                path: 'M 0,0 C -2,-20 -10,-22 -10,-30 A 10,10 0 1,1 10,-30 C 10,-22 2,-20 0,0 z M -2,-30 a 2,2 0 1,1 4,0 2,2 0 1,1 -4,0',
		                fillColor: $(`#example-color-input`).val(),
		                fillOpacity: 1.0,
		                strokeColor: '#000000',
		                strokeWeight: 1,
		                scale: 1,
		                anchor: new google.maps.Point(12, 24),
		            },
		        });
		      }