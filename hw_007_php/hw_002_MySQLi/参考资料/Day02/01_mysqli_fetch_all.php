<?php


$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "psd1803";
$port = 3306;

$link = mysqli_connect($host , $user , $password , $database , $port);



$query = "select * from use2";

// 执行SQL语句
// 

$result = mysqli_query($link , $query);

$return = mysqli_fetch_all($result );

// 第二个参数：默认值 ：MYSQLI_NUM 二维键位为索引键位

					// MYSQLI_ASSOC 二维键位为关联键位，键位名称是数据库中字段的名称

					// MYSQLI_BOTH 二维键位，关联索引形式同时存在






echo "<pre>";
print_r($return);
echo "</pre>";
