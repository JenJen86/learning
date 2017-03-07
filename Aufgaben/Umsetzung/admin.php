<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/main.css" type="text/css"> 
    <title>Admin</title>
</head>
<body>
    <form>
      <?php

        session_start();

        if (isset($_SESSION['username']))
            echo "Hallo ". $_SESSION['username'];
        else
            echo "Bitte einloggen!"; 
      ?>
      <br>
      <li><a href="http://localhost/learning/Aufgaben/Umsetzung/">Zurück</a></li>
    </form>
</body>
</html>
