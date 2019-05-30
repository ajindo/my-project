<link rel="stylesheet" type="text/css" href="format.css">
<h1>Baba Inc.</h1>
<div class="topnav">
<a <?php
    if(basename($_SERVER['PHP_SELF']) == "home.php"){
        echo "class=\"active\"";
    }
    ?> href = "home.php">Home</a>

<a <?php
    if(basenem($_SERVER['PHP_SELF']) == "info.php"){
        echo "class=\"active\"";
    }
    ?> href = "info.php">Information </a>

<a <?php
    if(basename($_SERVER['PHP_SELF'])== "login.php"){
        echo "class=\"active\"";
    }
    ?> href = "login.php">Login</a>
    <a href = "logout.php">Logout</a>