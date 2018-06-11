<!doctype html>
<html>
  <head>
    <title>Socket.IO chat</title>
    <script src="https://code.jquery.com/jquery-1.11.1.js"></script>
  </head>
  <body>
    <h1>Benedict is in the house.</h1>
    <button id="loket1">Loket 1</button>
    <script src="http://localhost:3000/socket.io/socket.io.js"></script>
    <script>
        var socket = io('http://localhost:3000');
        
        $('#loket1').click(function(){
            socket.emit('queue', '90');
            return false();
        });
    </script>

  </body>
</html>
