// Initialize and add the map
function initMap() {
    // The location of Uluru
    let uluru;
    let markers =[]
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
        success: function(maps) {
            for (let i = 0; i < maps.length; ++i) {
                let uluru = {
                    lat: Number(maps[i]['latitude']),
                    lng: Number(maps[i]['longitude'])
                };
                addMarker(uluru, maps, i);
                $(`#from,#to`).change(function() {
                  if( maps[i]['from'] >= $('#from').val() || maps[i]['to'] <= $('#to').val() ){
                    addMarker(uluru, maps, i);
                    }
                });
                
            }
        },
        error: function() {
            console.log(maps);
        }
    });

    function addMarker(coords, maps, i) {
        // markers.setMap(null);
        const marker = new google.maps.Marker({
            position: coords,
            map: map,
        });
        markers.push(marker);
        attachSecretMessage(marker, maps, i);
    };

    // Attaches an info window to a marker with the provided message. When the
    // marker is clicked, the info window will open with the secret message.
    function attachSecretMessage(marker, Maps, i) {
        contentmsg = `
              <div><b class="font-weight-bold">Type:</b> ${Maps[i]['type']} </div>
              <div><b class="font-weight-bold">Proponent:</b> ${Maps[i]['proponent']} </div>
              <div><b class="font-weight-bold">Location:</b> ${Maps[i]['latitude']},${Maps[i]['longitude']} </div>
              <div><b class="font-weight-bold">Time:</b> From :${Maps[i]['from']},To: ${Maps[i]['to']} </div>
              `
        const infowindow = new google.maps.InfoWindow({
            content: contentmsg,
        });
        marker.addListener("click", () => {
            infowindow.open(marker.get("map"), marker);
        });
    }
}
