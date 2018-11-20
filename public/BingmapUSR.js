
var localLocation;
var startaddr,endaddr,Waypoint0,Waypoint1, data;
var UserLoc=[];
dummyLoc={latitude:28.5246,longitude: 77.2066};//lat & lon of SAKET to set as default





function GetMap() {


    var map = new Microsoft.Maps.Map('#myMap', {
        credentials: 'ArA1Ia_YMBny3C67AvN0bx4K3ZnJ7wB4Fr4LF1H8jPxqHbnx1RRFsfeUoHMN9Wcq'
    });

    //Request the user's location
    navigator.geolocation.getCurrentPosition(function (position) {
        var loc = new Microsoft.Maps.Location(
            position.coords.latitude,
            position.coords.longitude);
            // localLocation = loc;
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
                searchManager = new Microsoft.Maps.Search.SearchManager(map);
                directionsManager = new Microsoft.Maps.Directions.DirectionsManager(map);

                //Create waypoints to route between.
                 Waypoint0 = new Microsoft.Maps.Directions.Waypoint({ address: startaddr });
                directionsManager.addWaypoint(Waypoint0);

                 Waypoint1 = new Microsoft.Maps.Directions.Waypoint({ address: endaddr});
                directionsManager.addWaypoint(Waypoint1);

                //Specify the element in which the itinerary will be rendered.
              directionsManager.setRenderOptions({ itineraryContainer: '#directionsItinerary' });


                //Calculate directions.
                directionsManager.calculateDirections();
                map.setView({center: Waypoint0, zoom: 20});


              });

  }

  // if(localLocation==null){
    localLocation = dummyLoc;

// }

$(document).ready(function() {
  $('#share').click(function() {
    $('#direct').show(1000);
  });

        $('#from_place').click(function() {
            $('#direct').hide();
        });
});

//socket part
  var socket= io();
  function shareLoc() {

    data = {start:JSON.stringify(document.getElementById('from_place').value),
                 end: 'hauzkhas'};
                 // UserLoc = geocodeQuery(startaddr);
                 // console.log(UserLoc);

    socket.emit('getUserLoc', data);


  };

  function direct() {
    var socket= io();
    socket.on('GiveAmbloctouser',function(Ambloc){
      console.log('The AMbulance location  is'+Ambloc);


    startaddr = JSON.stringify(document.getElementById('from_place').value);
        endaddr = Ambloc.start;
        GetDirection();
  });
}
