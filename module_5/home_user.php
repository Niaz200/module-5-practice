<?php

session_start();

if (!isset($_SESSION["role"]) || $_SESSION["role"] != "user"){
    header("Location: login.php");

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>

    <h1>User panel</h1>
    <h1>Welcome! <?php echo $_SESSION["firstname"] . " " .$_SESSION["lastname"]; ?></h1>
    <h2>Role: <?php echo $_SESSION["role"]; ?></h2>

    <a href="logout.php">Logout</a>
    
</body>
</html>