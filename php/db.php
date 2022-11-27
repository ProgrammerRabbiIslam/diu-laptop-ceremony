<?php

$serverName = "localhost";
$userName = "root";
$userPass = "";
$dbName = "diu_laptop";

$conn = mysqli_connect($serverName,$userName,$userPass,$dbName);

if(!$conn){
    echo "Connection failed!";
    exit();
}









?>