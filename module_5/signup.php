
<?php


$firstname = $_POST["firstname"] ?? "";
$lastname = $_POST["lastname"] ?? "";
$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";
$age = $_POST["age"] ?? "";

$role = "user";

$errorMessage = "";


if ($email != "" && $password != ""){
    $fp = fopen("./data/users.txt", "a");
    
    fwrite($fp, "\n{$role}, {$email}, {$password}, {$firstname}, {$lastname}, {$age}");
    fclose($fp);

    header("Location: login.php");
    
}else{
    $errorMessage = "Please enter you email and password!";
}



// echo $firstname;
// echo "<br>";
// echo $lastname;
// echo "<br>";
// echo $email;
// echo "<br>";
// echo $age;
// echo "<br>"; 
// echo $password;

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
        <h1 class="text-center">Create a new account</h1>

        <form action="signup.php" method="POST">


            <div class="mb-3">
                <label for="firstname" class="form-label">First name</label>
                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter Firstname">
                
            </div>

            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter Lastname">
                
            </div>


            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" name="age" id="age" placeholder="Enter Age">
                
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="*******">
            </div>
          
            <p class="text-warning">
                <?php echo $errorMessage;?>
            </p>

            <button type="submit" class="btn btn-warning">Sign up</button>
        </form>

    </div>
   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>