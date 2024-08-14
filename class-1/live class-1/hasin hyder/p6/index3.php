<?php

$newName = "Jessy Doe";
file_put_contents("./data3.txt", $newName);

$data = file_get_contents("./data3.txt");

echo nl2br($data);