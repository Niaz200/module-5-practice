<?php

$fp = fopen("./data9.txt","w");
for ($i = 0; $i < 10; $i++) {
    fwrite( $fp,"Hello World {$i}\n");
}
