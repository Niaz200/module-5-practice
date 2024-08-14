<?php 
$fp = fopen("./data.txt", "a+");
for($i=0; $i<10; $i++){
    fwrite($fp, "Hello  {$i}\n");
}
