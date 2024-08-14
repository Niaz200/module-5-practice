<?php

$fp = fopen("./data11.txt","a+");
for ($i = 0; $i < 10; $i++) {
    fwrite( $fp,"Hello hello {$i}\n");
}
