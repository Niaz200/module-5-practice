<?php
session_start();
$_SESSION['username']='johndoe';
header('Location:index.php');