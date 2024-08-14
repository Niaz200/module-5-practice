<?php

session_start();
echo "Hello";

if (isset($_SESSION['data'])){
    echo $_SESSION['data'];
}