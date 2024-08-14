<?php 
$fp = fopen("./data.txt", "r");
$data = fgets($fp,6);
echo $data;