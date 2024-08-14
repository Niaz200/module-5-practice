<?php

$fp = fopen("./data7.txt", "r");
$data = fgets($fp,6);
echo $data;