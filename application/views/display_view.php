<!doctype html>
<html>
  <head>
    <title>Socket.IO chat</title>
    <script src="https://code.jquery.com/jquery-1.11.1.js"></script>
  </head>
  <body>
    <h1>Sistem Antrian</h1>
    <div id="nomorBerikutnya"></div>
    <script src="http://localhost:3000/socket.io/socket.io.js"></script>
    <script>
        var socket = io('http://localhost:3000');
        
        socket.on('queue', function(msg){
            $('#nomorBerikutnya').html(msg);
        });
    </script>

  </body>
</html>
