<?php

// $file = file_get_contents("./data.txt");

// echo $file;




$file = fopen("./file_path.txt", "r");
while($line = fgets($file)) {
    echo $line;
    echo "<br>";
}

fclose($file);


// $data = 'data';

// $file = fopen("./file_path.txt", "a+");
// for($i=0; $i<10; $i++){
//     fwrite($file, "$data {$i}\n");
// }

// fclose($file);





