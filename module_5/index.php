<?php

session_start();

if (!isset($_SESSION["email"])){
    header("Location: login.php");
}


//for user or admin

if ($_SESSION["role"] == "user") {
    header("Location: home_user.php");
}elseif ($_SESSION["role"] == "admin")  {
    header("Location: home_admin.php");
}

?>

