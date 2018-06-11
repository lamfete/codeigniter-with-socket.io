var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);

app.get('/', function(req, res){
    // res.send('<h1>Hello, world!</h1>');
    res.sendFile(__dirname + '../application/controllers/')
});

io.on('connection', function(socket){
    console.log('a user connected');

    socket.on('disconnect', function(){
        console.log('user diconnected');
    });

    socket.on('queue', function(msg){
        console.log('nomor antrian ' + msg + ' ke loket 1');
        io.emit('queue', msg);
    });
});

http.listen(3000, function(){
    console.log('listening on *:3000');
});