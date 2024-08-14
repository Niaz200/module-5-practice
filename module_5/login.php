<?php

session_start();

// if (isset($_SESSION["email"])){
//     header("Location: index.php");
// }


$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";


$errorMessage = "";

/*
$fb = fopen("./data/users.txt", "r");

while ($line = fgets($fb)){
    // echo $line;
    // echo "<br>";

    $values = explode(",", $line);

    // echo var_dump($values);
    // echo "<br>";
}

*/


$fp = fopen("./data/users.txt", "r");


$roles = array();
$emails = array();
$firstnames = array();
$lastnames = array();
$ages = array();
$passwords = array();

while ($line = fgets($fp)){


    $values = explode(",", $line);

    array_push($roles, trim($values[0]));
    array_push($emails, trim($values[1]));
    array_push($passwords, trim($values[2]));
    array_push($firstnames, trim($values[3]));
    array_push($lastnames, trim($values[4]));
    array_push($ages, trim($values[5]));

}

fclose($fp);

for ($i = 0; $i < count($roles); $i++){
    if ($email == $emails[$i] && $password == $passwords[$i]){
        $_SESSION["role"] = $roles[$i];
        $_SESSION["email"] = $emails[$i];
        $_SESSION["firstname"] = $firstnames[$i];
        $_SESSION["lastname"] = $lastnames[$i];
        $_SESSION["age"] = $ages[$i];
        header("Location: index.php");

    }else{
        $errorMessage = "wrong email or password";
    }
}

// echo var_dump($roles);
// echo "<br>";
// echo var_dump($emails);
// echo "<br>";
// echo var_dump($passwords);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>


    <div class="container mt-5">
        <h1 class="text-center">Login to you account</h1>

        <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="*******">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>

            <p class="text-warning">
                <?php echo $errorMessage;?>
            </p>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>

        <p>Don't have an account? <a href="signup.php">Sign up</a></p>

    </div>
   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>