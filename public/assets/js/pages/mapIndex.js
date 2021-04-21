        let cord = []
        $(`.cord`).each(( i , el) => {
            cord[i] = {
               'latitude': Number($(el).data('latitude')),
               'longitude': Number($(el).data('longitude')),
            }
        });
		      // Initialize and add the map
            function initMap() {
                let uluru;
                uluru = { lat: -24.90387784417046, lng: 133.9211859007968 };
                 // The map, centered at Sydney,Australian
                var map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 4,
                    center: uluru,
                });
                addMarker(uluru);
                var i = 0;
                while(Object.values(cord).length>=i){                    
                    if( cord[i] != undefined)
                        uluru = { lat: cord[i]['latitude'], lng: cord[i]['longitude'] };

                        addMarker(uluru);
                        i++;

                    
                } //loop
                //add marker function
                function addMarker(coords){
                    var marker = new google.maps.Marker({
                        position:coords,
                        map:map,
                    });
                };

            }  //map