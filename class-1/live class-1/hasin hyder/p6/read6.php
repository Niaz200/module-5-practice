<?php

$fp = fopen("./data6.txt", "r");
while($line = fgets($fp)) {
    echo $line;
    echo"<br>";
}