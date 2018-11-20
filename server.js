var express = require('express');
var app = express();
var path = require('path');
var server = require('http').createServer(app);
var io = require('socket.io')(server);
var port = process.env.PORT || 8080;
    dummyLoc={latitude:28.5246,longitude: 77.2066};//lat & lon of SAKET to set as default

app.use(express.static(path.join(__dirname + '/public/')));
app.use(express.static(path.join(__dirname + '/public/')));
app.use(express.static(path.join(__dirname + '/public/')));
server.listen(port, () => {
  console.log('Server listening at port %d', port);
});

console.log(__dirname);
var users = {};
var amb = {};

app.get('/user', function(req, res) {
  res.sendFile(__dirname + '/public/InsideBingUSR.html');
});

app.get('/Ambulance', function(req, res) {
  res.sendFile(__dirname + '/public/InsideBingAMB.html');
});

var userLoc=dummyLoc,ambLoc=dummyLoc;

io.on('connection', function(socket) {
          console.log('Connection made with the browser...' + socket.id);

        //connecting & sharing location of user
          socket.on('getUserLoc', function(data) {
            console.log('Hey Received User location');
            console.log('The lat&lon are ' + data.start + ' and ' + data.end);
          socket.broadcast.emit('GiveUserloctoAmb',data);
            console.log('The user location got sent!!');


          });


        //connecting & sharing location of Ambulance
        socket.on('getAmbLoc', function(data) {
          console.log('Hey Received Ambulance location');
          console.log('The places are ' + data.start + ' and ' + data.end);
        socket.broadcast.emit('GiveAmbloctouser',data);
console.log('The Ambulance location got sent!!');          });
});
    // var distance=getDistance(userLoc,ambLoc);

//calculating distance

// function getDistance() {
//     var R = 6371; // Radius of the earth in km
//     var lat1=this.latitude,
//         lat2=this.latitude,
//         lon1=this.longitude,
//         lon2=this.longitude;
//     var dLat = deg2rad(lat2-lat1);  // deg2rad below
//     var dLon = deg2rad(lon2-lon1);
//     var a =
//       Math.sin(dLat/2) * Math.sin(dLat/2) +
//       Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) *
//       Math.sin(dLon/2) * Math.sin(dLon/2)
//       ;
//     var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
//     var d = R * c; // Distance in km
//     return d;
//   }
//
//   function deg2rad(deg) {
//     return deg * (Math.PI/180)
//   }
