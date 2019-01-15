<?php

// 验证登录步骤

// 1，接收数据

// 2，验证数据

// 3，加密数据

// 4，执行SQL语句

// 5，返回执行结果
// 

// 1,接收前端传参

$un = $_POST['userName'];
$up = $_POST['userPwd'];


// 2，验证数据是否符合规范
// 项目有专门的操作方式
// 

// 3，加密数据
// 
$userName = md5($un);
$userPwd = md5($up);

// echo $userName , $userPwd;

// 4,执行SQL语句，实现登录验证
// 

// 链接数据库
// 
$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "psd1803";
$port = 3306;

$link = mysqli_connect($host , $user , $password , $database , $port);


// 定义SQL语句
// 
$query = "select * from zhuce where `userName` = '{$userName}' and `userPwd` = '{$userPwd}'";

// 执行SQL语句
// 
$result = mysqli_query($link , $query);

// 执行的是查询语句，结果为对象，需要转化为数组
// 

$return = mysqli_fetch_all($result);


// empty()函数，判断变量是否为空，如果变量是空，返回ture，意味登录失败

echo empty($return) ? "登录失败" : "登录成功";