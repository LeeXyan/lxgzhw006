<?php


$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "psd1803";
$port = 3306;

$link = mysqli_connect($host , $user , $password , $database , $port);



$query = "select * from use2 where id > 5";

// 只返回查询结果的数据数量

$result = mysqli_query($link , $query);

$return = mysqli_num_rows($result);

echo "<pre>";
print_r($return);
echo "</pre>";