<?php
// 累加求和
// @param int $x 设定累加求和的终止值
// @param int $y 设定累加求和的起始值，默认是值1
// @param int $z 设定累加求和的公差，默认值是1
// @return int $a 累加求和的结果

function add($x , $y = 1 , $z = 1)
{
	// 判断输入参数的类型为整型

	if(!is_int($x)){
		exit("请输入整数");
	}

	if(!is_int($y)){
		exit("请输入整数");
	}

	if(!is_int($z)){
		exit("请输入整数");
	}

	// 判断两个参数，必须都大于零，否则程序不执行
	if(!($x >= 0) || $y < 0){
		die("参数输入有误，请重新输入");
	}

	// 将两个参数，按照大小值的顺序排列
	$x1 = max($x,$y);
	$y1 = min($x,$y);

	$a = 0;
	for($i = $y1 ; $i <= $x1 ; $i += $z){
		$a += $i;
	}
	return $a; 
}

echo add(1,10,3);
