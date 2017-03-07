<?php

session_start();

function login($username, $password)
{
   
    if($username == "jenny" AND $password == "jenny")
    {
        return true;
    }
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