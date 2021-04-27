// Initialize and add the map
          function initMap() {
            // The location of Uluru
            let uluru;
            uluru = { lat: -25.344, lng: 131.036 };

            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
              zoom: 4,
              center: uluru,
            });
            //ajax call
          $.ajax({
            type: 'GET', //THIS NEEDS TO BE GET
            url: '/ajaxmap',
            success: function (maps) {
                for (let i = 0; i < maps.length; ++i) {
                  let uluru = { 
                    lat: maps[i]['latitude'],
                     lng: maps[i]['longitude'] };
                  addMarker(uluru);
                }
            },
            error: function() { 
                 console.log(maps);
            }
        });

            function addMarker(coords){
                    var marker = new google.maps.Marker({
                        position:coords,
                        map:map,
                    });
                };
          }