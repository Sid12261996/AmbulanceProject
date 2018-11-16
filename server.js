var express = require('express');
var app = express();
var http = require('http');
var server = http.createServer(app);
var io = require('socket.io')(http);
app.use(express.static((__dirname + '/public/Ambulance')));



app.listen(4000,function() {
  console.log('Listening..');
});
app.get('/home',function(req,res) {
  res.sendFile(__dirname + '/public/Ambulance/InsideBing.html');
});

app.get('/Bingmap.js',function(req,res) {
  res.sendFile(__dirname + '/public/Ambulance/Bingmap.js');
});



io.on('connection',function(socket) {
  console.log('Connection made with the browser...' + socket.id);
  socket.on('addrReq', function(data) {
    console.log(data.start);
     var realData = data.start;
});



});
