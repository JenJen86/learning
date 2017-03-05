<?php

session_start();

if (isset($_SESSION['username']))
    echo "Hallo ". $_SESSION['username'];
else
    echo "Bitte einloggen!";
