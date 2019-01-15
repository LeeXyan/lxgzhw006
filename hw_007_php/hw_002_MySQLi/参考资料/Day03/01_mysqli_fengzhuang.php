<?php

// mysqli函数封装

// 1，链接数据库
// 2，定义SQL语句
// 3，执行SQL语句
// 4，返回结果
// 5，关闭数据库

//1 先实现效果，编写PHP程序
//2 将程序放在function中，添加返回值 
//3 参数的设定
//		(1)讲数据库链接参数,作为函数的可选参数，设定时添加默认值
//
//
// 
// 链接数据库的参数设定为默认参数，执行语句的参数，为必选参数
// 

// 每次执行都需要输入一个SQL语句

// 执行查询语句
// @param str $query 需要执行的SQL语句
// @param str $host 链接数据的地址，默认参数为本地地址"127.0.0.1"
// @param str $user 登录MySQL数据的用户名，默认参数为"root"
// @param str $password 登录MySQL数据的密码，默认参数为""
// @param str $database 使用数据库的库名，默认参数为"psd1803"

// @param int $port MySQL数据库监听端口，默认参数为3306
// @return array $return 查询SQL语句执行结果



// function mysqli_select($query , $host = "127.0.0.1",$user = "root",$password = "",$database = "psd1803",$port = 3306){

 
// $link = mysqli_connect($host,$user,$password,$database,$port);



// $result = mysqli_query($link , $query);

// return $return = mysqli_fetch_all($result);

// mysqli_close($link);


// }

// $a = "select id,name,age from use2";

// echo "<pre>";
// print_r(mysqli_select($a));
// echo "</pre>";

// 定义在函数参数中的变量，我们称之为形参
// 形参通常是没有数据的，在函数的执行过程中，再去给形参赋值
// 
// 形参的命名可以是任意内容，只要保证形参定义和使用时是相同的命名就可以
// 
// 通常情况下，形参的命名需要根据赋值内容来定义
// 
// 
// 通常将不经常修改的变量，定义为可选参数，也就是在定义形参时，给形参添加默认数值

function select($query , $host="127.0.0.1"){

$user = "root";
$password = "";
$database = "psd1803";
$port = 3306;

$link = mysqli_connect($host,$user,$password,$database,$port);


$result = mysqli_query($link , $query);

$array = mysqli_fetch_all($result);

mysqli_close($link);

return $array;

}


$b = select("select * from use2");


echo "<pre>";
print_r($b);
echo "</pre>";


// 1，封装增删改语句的函数
// 2，能不能统一成一个封装函数