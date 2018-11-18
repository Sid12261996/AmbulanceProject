var socket= io();
$('#btn').click(function(startaddr,endaddr) {
  data = {start:startaddr,
               end: endaddr};
  socket.emit('addrReq', data);
});
