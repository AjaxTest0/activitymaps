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
                uluru = { lat: Number(-24.90387784417046), lng: Number(133.9211859007968) };
                var map = new google.maps.Map(document.getElementById("map"), {
                    center: {lat: parseFloat(-24.90387784417046), lng: parseFloat(133.9211859007968) },
                    zoom: 4,
                });
                var i = 0;
                while(Object.values(cord).length>=i){                    
                    if( cord[i] != undefined)
                        uluru = { lat: Number(cord[i]['latitude']), lng: Number(cord[i]['longitude']) };
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