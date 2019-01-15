<?php


$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "psd1803";
$port = 3306;

$link = mysqli_connect($host , $user , $password , $database , $port);

$query = "insert use2 value( null , '张三' , 28 , '男' , '上海', 'WEB', 6000)  ";

// 只返回查询结果的数据数量

$result = mysqli_query($link , $query);

$return = mysqli_insert_id($link);

echo "<pre>";
print_r($return);
echo "</pre>";