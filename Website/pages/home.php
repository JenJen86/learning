<?php
$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
      <a class="navbar-brand" href="?p=home">Home</a>
      <a class="navbar-brand" href="?p=login">Login</a>
      <a class="navbar-brand" href="?p=register">Register</a>
    </nav>
    <div class="container">
      
    </div>
    <div class="container">
      <p> Hier sollten nachher die News aus der Datenbank ausgelesen werden.<br> 
          Ich hoffe, das es klappt, sonst bin ich am Arsch.
      </p>
    </div>

  </body>
</html>
