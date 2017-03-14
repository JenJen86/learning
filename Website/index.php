<?php

session_start();

function __autoload($name)
{
    include "lib/$name.php";
}

$name = "home";
if (isset($_GET['p']))
    $name = $_GET['p'];

$page = new Page($name);
$loader = new PageLoader($page);
$loader->render();
