<?php
header('content-type:text/html;charset=utf-8');
$str = '1235879';
$n = $str + 5;
var_dump($n);
$str = '12.34.56';
$n = $str + 1;
var_dump($n);
$str = '12a34';
$n = $str + 1;
var_dump($n);
$str = 'a12';
$n = $str + 1;
var_dump($n);

//第一次,先将字符'5'转换成整数5,然后进行数学运算,结果为整数9
//第二次,将整数9转换成字符串'9'进行输出
//void echo ( string $arg1 [, string $... ] )
echo '5'+4;
echo '<a href="#">百度</a>';