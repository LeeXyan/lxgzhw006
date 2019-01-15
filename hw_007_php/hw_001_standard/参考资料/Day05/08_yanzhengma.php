<?php

// 随机生成验证码
// 
// 验证码要求6位，可以包含数字，字母(大小写)，不能重复

$a = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

// echo $a[mt_rand(0 , strlen($a)-1)];
// echo $a[mt_rand(0 , strlen($a)-1)];
// echo $a[mt_rand(0 , strlen($a)-1)];
// echo $a[mt_rand(0 , strlen($a)-1)];
// echo $a[mt_rand(0 , strlen($a)-1)];
// echo $a[mt_rand(0 , strlen($a)-1)];

// 使用for循环拼接生成字符串
// 

$str = "";

for ($i = 0; strlen($str) < 6 ; $i++) { 
	$b = $a[mt_rand(0 , strlen($a)-1)];

	// 判断新生成的字符，没有存在于字符串中

	if ( strpos($str , $b) === false){
		$str .= $b;
	}

	
}

echo $str;


// 1, 使用拼接出一个6位字符串
// 2，循环的终止条件，是新的字符串必须够6位
// 3，需要在循环中添加if判断，判断新生成的字符，不在字符串中
// 4，判断的依据是：strpos()函数的返回值 === false

// 5，显示时需要区分大小写，做if判断时，使用区别大小写的函数strpos()，而不使用stripos()