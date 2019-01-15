<?php


$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "psd1803";
$port = 3306;

$link = mysqli_connect($host , $user , $password , $database , $port);



$query = "select * from use2";


$result = mysqli_query($link , $query);

$return = mysqli_fetch_assoc($result);

echo "<pre>";
print_r($return);
echo "</pre>";

