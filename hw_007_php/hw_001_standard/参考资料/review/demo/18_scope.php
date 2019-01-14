<?php
header('content-type:text/html;charset=utf-8');
//局部变量
$n = 5;
function fun1() {
	//局部变量
	$n = 9;
	echo '俺是自定义函数内的变量', $n, '<hr>';
}
fun1();
echo '俺是页面内的变量', $n, '<hr>';

$p = 7;
function fun2() {
	//全局变量
	global $p;
	$p += 5;
	echo '变量$n的值是:', $p, '<hr>';
}
fun2();
echo '变量$n的值是:', $p, '<hr>';