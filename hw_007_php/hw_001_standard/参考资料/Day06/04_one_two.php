<?php

// 数组形式转化之，一维数组转化为二维数组
// 
// 思路：其实就是二维数组的第二种写法
// 
// 新建空数组，将之前的数组以赋值的形式添加给新的数组，添加时，不设定键位



$a = ["id" => 1, "name" => "李金星", "age" => "18", "sex" => "男", "addr" => "西安"];

$b = [];
$b[] = $a;



echo "<pre>";
print_r($b);
echo "</pre>";

