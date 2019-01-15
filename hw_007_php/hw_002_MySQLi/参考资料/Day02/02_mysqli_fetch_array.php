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

$return = mysqli_fetch_array($result , 2);

// 第二个参数：：MYSQLI_NUM = 1二维键位为索引键位

					// MYSQLI_ASSOC = 2 二维键位为关联键位，键位名称是数据库中字段的名称

					// MYSQLI_BOTH = 3 默认值二维键位，关联索引形式同时存在






echo "<pre>";
print_r($return);
echo "</pre>";

echo MYSQLI_NUM;


// 总结：

// mysqli_fetch_all 和 mysqli_fetch_array

// all，是转化所有结果，array，只转化一条结果


// all，默认二维是索引数组，array，默认二维是关联索引同时存在
// 
// 
