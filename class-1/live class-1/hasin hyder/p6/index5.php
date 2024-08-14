<?php


$data = file_get_contents("http://localhost:8080/hello5.php");
echo nl2br($data);