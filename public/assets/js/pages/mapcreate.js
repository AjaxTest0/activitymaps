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
		        var longitude = Number($('#longitude').val(),10);
		        var latitude =  Number($('#latitude').val(),10);
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
		        // The marker, positioned at Uluru
		        const marker = new google.maps.Marker({
		          position: uluru,
		          map: map,
		        });
		      }
