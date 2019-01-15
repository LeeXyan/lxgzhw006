<?php


$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "psd1803";
$port = 3306;

$link = mysqli_connect($host , $user , $password , $database , $port);

// 将所有PHP部门人员工资上涨2000元

$query = "update use2 set pay = pay+2000 where der = 'web' ";

// 只返回查询结果的数据数量

$result = mysqli_query($link , $query);

// 函数的参数，不是之前习惯使用的$result，而是$link
// 
// 返回的数字，表示有几条数据，收到之前SQL语句的影响

// 每次执行不同的SQL语句，返回值的数据是不同的

$return = mysqli_affected_rows($link);

echo "<pre>";
print_r($return);
echo "</pre>";