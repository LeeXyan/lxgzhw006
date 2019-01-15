<?php

// 实现步骤

// 1，接收数据

// 2，验证数据

// 3，数据加密

// 4，通过MySQLi函数，将其写入数据库

// 5，返回结果



// 1，接收数据
// 

$un = $_POST['userName'];
$up = $_POST['userPwd'];

// 2，数据验证
// 
// 项目上有专门的数据验证手段
// 

// 3，数据加密
// 

$userName = md5($un);
$userPwd = md5($up);


// echo $userName , $userPwd;
// 

// 4，通过MySQLi函数，执行SQL语句，将其写入数据库
// 

// 链接数据库
// 
$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "psd1803";
$port = 3306;

$link = mysqli_connect($host , $user , $password , $database , $port);


// 定义SQL语句，并执行
// 

$query = "insert zhuce value (null , '{$userName}' , '{$userPwd}')";

// $query如果是查询语句，返回数据类型为对象
// $query如果是增删改语句，返回数据类型为布尔值

$result = mysqli_query($link , $query);

echo $result ? "注册成功" : "注册失败";