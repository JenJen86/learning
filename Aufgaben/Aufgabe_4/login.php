<?php

session_start();

function login($username, $password)
{
   
    // Hier prüfst du, ob Benutzername und Passwort korrekt sind.
    if($username == "jenny" AND $password == "jenny")
    // Ist der Benutzername und das Passwort nicht korrekt, dann return false
    {
        return true;
    }
    // Ist der Benutzername und das Passwort korrekt, dann return true
    else
    {
        return false;
    }
    
    return false;
}

if (login($_POST['username'], $_POST['password']))
{
    $_SESSION['username'] = $_POST['username'];
    header("Location: admin.php");
}
else
{
    header("Location: index.php");
}
