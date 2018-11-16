var localLocation;
var startaddr,endaddr,Waypoint0,Waypoint1;
function GetMap() {


    var map = new Microsoft.Maps.Map('#myMap', {
        credentials: 'ArA1Ia_YMBny3C67AvN0bx4K3ZnJ7wB4Fr4LF1H8jPxqHbnx1RRFsfeUoHMN9Wcq'
    });

    //Request the user's location
    navigator.geolocation.getCurrentPosition(function (position) {
        var loc = new Microsoft.Maps.Location(
            position.coords.latitude,
            position.coords.longitude);
            localLocation=loc;
        //Add a pushpin at the user's location.
        var pin = new Microsoft.Maps.Pushpin(loc);
        map.entities.push(pin);

        //Center the map on the user's location.
        map.setView({ center: loc, zoom: 15 });
    });

}

function GetDirection(){
  map = new Microsoft.Maps.Map('#myMap', {
      credentials: 'ArA1Ia_YMBny3C67AvN0bx4K3ZnJ7wB4Fr4LF1H8jPxqHbnx1RRFsfeUoHMN9Wcq'
  });
            //Load the directions module.
            Microsoft.Maps.loadModule('Microsoft.Maps.Directions', function () {
                //Create an instance of the directions manager.
                directionsManager = new Microsoft.Maps.Directions.DirectionsManager(map);
                 startaddr = JSON.stringify(document.getElementById('from_place').value);
                 endaddr = JSON.stringify(document.getElementById('to_place').value);

                //Create waypoints to route between.
                var Waypoint0 = new Microsoft.Maps.Directions.Waypoint({ address: startaddr });
                directionsManager.addWaypoint(Waypoint0);

                var Waypoint1 = new Microsoft.Maps.Directions.Waypoint({ address: endaddr});
                directionsManager.addWaypoint(Waypoint1);

                //Specify the element in which the itinerary will be rendered.
                directionsManager.setRenderOptions({ itineraryContainer: '#directionsItinerary' });

                //Calculate directions.
                directionsManager.calculateDirections();
                map.setView({center: Waypoint0, zoom: 15});



            });


          }
          var socket=io.connect('http://localhost:4000');

          var data = {start:Waypoint0,
                        end: Waypoint1};
          socket.emit('addrReq', data);
