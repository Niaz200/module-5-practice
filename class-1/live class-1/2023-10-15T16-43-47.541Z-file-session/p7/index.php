<?php 
session_start();
if(!isset($_SESSION['username'])){
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="//cdn.tailwindcss.com"></script>
</head>

<body>
    <section class="mx-auto container">
        <?php 
            echo 'Welcome ' . $_SESSION['username'];
            echo "<br/>";
            echo "Logout <a href='logout.php'>here</a>"
        ?>
    </section>
</body>

</html>