<?php 

// $newName = "John Doe";
// file_put_contents("./data.txt", $newName."\n", FILE_APPEND);

$data = file_get_contents("./data.txt");
// $data = file_get_contents("http://localhost:8081/hello.php");
echo nl2br($data);