<?php

$newName = "Jessy Doe";
file_put_contents("./data4.txt", $newName."\n", FILE_APPEND);

$data = file_get_contents("./data4.txt");

echo nl2br($data);