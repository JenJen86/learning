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
    <div class="col-lg-4 col-lg-offset-4">
      <div class="panel panel-default">
          <div class="panel-body">
              <form action="?p=register" method="post">
                 <label>Benutzername</label>
                 <input type="text" class="form-control" name="username" />
                 <label>Passwort</label>
                 <input type="password" class="form-control" name="password" />
                 <hr>
                 <input type="submit" class="btn btn-primary" name= value="Registrieren" />
              </form>
          </div>
      </div>
    </div>
  </body>
</html>
