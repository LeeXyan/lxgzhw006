<?php

$a = $_POST["canshu1"];
$b = $_POST["canshu2"];

 // .  ,  
// 点，字符串拼接符号，作用是将两个字符串拼接

// , 是echo语句中，一次输出多个变量,使用逗号做间隔


// echo $a , $b ;
// 
// var_dump($a, $b);
// 
// 通过前端输入的内容，经过预定义变量存储之后，读取出来的内容，大部分都是字符串类型，如果PHP需要验证数据类型，此处无法使用is_* 此类的函数无法使用
// 
// 
// 解决方案，使用正则表达式，来规范输入内容